<?php

namespace App\Jobs;

use App\Jobs\ProcessOcrJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\API\ReceiptController;
use Illuminate\Http\Request;
use App\Models\Web\Receipt as OriginalReceipt;

class ProcessReceiptJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $receiptId;
    protected $userId;

    protected $tokenManagerUrl;
    protected $tokenManagerAuth;
    protected $documentAiEndpoint;
    protected $filePath; // Update this with your file path

    protected $accessToken;
    /**
     * Create a new job instance.
     * @param $receiptDetails
     */
    public function __construct($userId, $receiptId, $filePath)
    {
        $this->receiptId = $receiptId;
        $this->userId = $userId;
        $this->filePath = $filePath; // Update this with your file path

        $this->tokenManagerUrl = 'https://gcp-tok-mgr.agentist.app/actfw96/v1/token';
        $this->tokenManagerAuth = '84i3ChT32SrsA8JvV50tdv0QgGx9T5ZA';
        $this->documentAiEndpoint = 'https://eu-documentai.googleapis.com/v1/projects/44753691094/locations/eu/processors/c67c730f30c6e52e:process?fields=document.mimeType,document.text,document.entities.type,document.entities.mentionText,document.entities.confidence,document.entities.id,document.entities.normalizedValue.text';

    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // COnnect OCR SErvice and send image
        $this->accessToken = $this->getAccessToken($this->tokenManagerUrl, $this->tokenManagerAuth);

        $ocrResult = $this->processDocument($this->documentAiEndpoint, $this->accessToken, $this->filePath);

     //   print_a($this->filePath);die();

        // received result
//        $ocrResult = '{
//          "document": {
//            "mimeType": "image/png",
//            "text": "Delhaize Serbia d.o.o.\nMaxi 6965\nPaunova 24\nTERMINAL ID\nBEOGRAD\n1N015779\nVISA\nAID A0000000031010\nAPN VISA DEBIT\n******9999998218\nProdaja\nBR. POTVRDE 029335\nDATUN 060425\nVREME 101010\nRRN 509610030424\nBR. ODOBRENJA 834483\nRESP 00\nIZNOS\nODOBRENO\n1436.95 RSD\nHVALA\n(80) 286F25035BF 1A3BD\n216965-4-49 (446077236571)\nФИСКАЛНИ РАЧУН\n103482850\nDELHAIZE SERBIA DOO BEOGRAD\n1006711-6965 As\n\"ПАУНОВА 24\nБеоград-Вождовац\nКасир:\nFLEX2\nЕСИР број:\n253/49.0\n-ПРОМЕТ ПРОДАЈА-\nАртикли\nНазив Цена\nКол.\n1.Grand Gold 200g/KON (b)\nУкупно\nKafa\n449.99\n449.99\n1\nKesa tregerica visekratna MTSG/KON (b)\n17.99\n1\n17.99\nKukuruz przeni cili Mogyi 55g/KON (b)\n99.99\n199.98\n2\nCokolada Milka noisette 80g/KOM (b)\n199.99\n199.99\n1\nT.papir Naxi 10 1 3sl/KON (b)\n199.00\n199.00\n1\nCig.Terea Sil.s50 pri 20 sli/KON (b)\n370.00\n1\n370.00\n1,436.95\nУкупан износ:\n1,436.95\nПлатна картица:\nОзнака\nИме\nСтопа\nПорез\nb\nО-ПАВ\n20.00%\n239.49\nУкупан износ пореза:\n239.49\nПОР време:\n06.04.2025 10:10:17\nПФР број рачуна: D6W2DGGY-D6W2D66Y-11468\nБројач рачуна:\n11448/11468N\nКРАЈ ФИСКАЛНОГ РАЧУНА\nMaxi 6965\nPaunova 24\nBEOGRAD\nVeza: kasa 4, rn. broj 49\nFrench Bull\nOstvario si pravo na\nFrench Bull\nPopuni kupan i sakupi\nsvoju kolekciju!\nkon 2\n06.04.2025 10:10:19\n",
//            "entities": [
//              {
//                "type": "pfr_broj_racuna_linija",
//                "mentionText": "ПФР број рачуна: D6W2DGGY-D6W2D66Y-11468",
//                "confidence": 1,
//                "id": "0"
//              },
//              {
//                "type": "pfr_broj_racuna_solo",
//                "mentionText": "D6W2DGGY-D6W2D66Y-11468",
//                "confidence": 1,
//                "id": "1"
//              },
//              {
//                "type": "artikal",
//                "mentionText": "1.Grand Gold 200g/KON (b) Kafa\n449.99\n449.99\n1",
//                "confidence": 1,
//                "id": "2"
//              },
//              {
//                "type": "artikal",
//                "mentionText": "Kesa tregerica visekratna MTSG/KON (b)\n17.99\n1\n17.99",
//                "confidence": 1,
//                "id": "3"
//              },
//              {
//                "type": "artikal",
//                "mentionText": "Kukuruz przeni cili Mogyi 55g/KON (b)\n99.99\n199.98\n2",
//                "confidence": 1,
//                "id": "4"
//              },
//              {
//                "type": "artikal",
//                "mentionText": "Cokolada Milka noisette 80g/KOM (b)\n199.99\n199.99\n1",
//                "confidence": 1,
//                "id": "5"
//              },
//              {
//                "type": "artikal",
//                "mentionText": "T.papir Naxi 10 1 3sl/KON (b)\n199.00\n199.00\n1",
//                "confidence": 1,
//                "id": "6"
//              },
//              {
//                "type": "artikal",
//                "mentionText": "Cig.Terea Sil.s50 pri 20 sli/KON (b)\n370.00\n1\n370.00",
//                "confidence": 1,
//                "id": "7"
//              },
//              {
//                "type": "porez_stope",
//                "mentionText": "Ознака\nИме\nСтопа\nПорез\nb\nО-ПАВ\n20.00%\n239.49",
//                "confidence": 1,
//                "id": "8"
//              },
//              {
//                "type": "brojac_racuna_solo",
//                "mentionText": "11448/11468N",
//                "confidence": 1,
//                "id": "9"
//              },
//              {
//                "type": "iznos_total-sredstvo_placanja",
//                "mentionText": "1,436.95\nУкупан износ:\n1,436.95\nПлатна картица:",
//                "confidence": 1,
//                "id": "10"
//              },
//              {
//                "type": "pib",
//                "mentionText": "103482850",
//                "confidence": 1,
//                "id": "11",
//                "normalizedValue": {
//                  "text": "103482850"
//                }
//              },
//              {
//                "type": "pfr_vreme_linija",
//                "mentionText": "ПОР време:\n06.04.2025 10:10:17",
//                "confidence": 1,
//                "id": "12"
//              },
//              {
//                "type": "pfr_vreme_datetime-only",
//                "mentionText": "06.04.2025 10:10:17",
//                "confidence": 1,
//                "id": "13",
//                "normalizedValue": {
//                  "text": "2025-04-06T10:10:17"
//                }
//              },
//              {
//                "type": "brojac_racuna_linija",
//                "mentionText": "Бројач рачуна:\n11448/11468N",
//                "confidence": 1,
//                "id": "14"
//              },
//              {
//                "type": "top_bar_naslov_fiskalni",
//                "mentionText": "ФИСКАЛНИ РАЧУН",
//                "confidence": 1,
//                "id": "15"
//              },
//              {
//                "type": "artikli_kolona-naslov",
//                "mentionText": "Артикли",
//                "confidence": 1,
//                "id": "16"
//              },
//              {
//                "type": "iznos_porez_ukupno_blok",
//                "mentionText": "Укупан износ пореза:\n239.49",
//                "confidence": 1,
//                "id": "17"
//              },
//              {
//                "type": "generic_tip-racuna",
//                "mentionText": "-ПРОМЕТ ПРОДАЈА-",
//                "confidence": 1,
//                "id": "18"
//              },
//              {
//                "type": "merchant",
//                "mentionText": "Delhaize Serbia d.o.o.\nMaxi 6965\nPaunova 24 BEOGRAD",
//                "confidence": 1,
//                "id": "19"
//              },
//              {
//                "type": "kasir_esir_blok",
//                "mentionText": "Касир:\nFLEX2\nЕСИР број:\n253/49.0",
//                "confidence": 1,
//                "id": "20"
//              },
//              {
//                "type": "generic_bottom_kraj-racuna",
//                "mentionText": "КРАЈ ФИСКАЛНОГ РАЧУНА",
//                "confidence": 1,
//                "id": "21"
//              }
//            ]
//          }
//        }';

        self::updateResult(json_encode($ocrResult));

        ProcessOcrJob::dispatch($this->userId, $this->receiptId, json_encode($ocrResult));

    }

    private function updateResult(string $ocrResult){
        $request = new Request([
            'receiptId'   => $this->receiptId,
            'ocrResult' => $ocrResult,
        ]);
        try {
            (new ReceiptController())->update_ocr($request);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Step 1: Get Access Token from Token Manager
     */
    private function getAccessToken($url, $authHeader) {
     //   dd('getAccessToken');
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $authHeader,
                'Accept: application/json'
            ]
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($httpCode != 200) {
            curl_close($ch);
            die("Error getting access token. HTTP Code: $httpCode - Response: $response");
        }

        curl_close($ch);
        $data = json_decode($response, true);

        if (!isset($data['access_token'])) {
            die("Invalid token response: " . $response);
        }

        return $data['access_token'];
    }

    /**
     * Step 2: Process Document with Document AI
     */
    private function processDocument($endpoint, $accessToken, $filePath) {
    //    dd('processDocument');
        // Prepare document content
        $fileContent = file_get_contents($filePath);
        if ($fileContent === false) {
            die("Failed to read file: $filePath");
        }

        $base64Content = base64_encode($fileContent);
    //    $mimeType = mime_content_type($filePath);
        $headers = get_headers($filePath);
        $mimeType = trim(explode(':', $headers[8])[1]);

        $requestData = [
            'raw_document' => [
                'content' => $base64Content,
                'mime_type' => $mimeType
            ]
        ];

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($requestData),
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $accessToken,
                'Content-Type: application/json'
            ]
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode != 200) {
            die("Document AI API error. HTTP Code: $httpCode - Response: $response");
        }

        return json_decode($response, true);
    }

}
