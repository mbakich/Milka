<?php

namespace App\Jobs;

use App\Jobs\ProcessOcrJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\API\ReceiptController;

class ProcessReceiptJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $receiptId;
    private $userId;

    /**
     * Create a new job instance.
     * @param $receiptDetails
     */
    public function __construct($userId, $receiptId)
    {
        $this->receiptId = $receiptId;
        $this->userId = $userId;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // COnnect OCR SErvice and send image

        // received result
        $ocrResult = '{"receipt": 
            {"num": "647747664",
                "items": [
                    {"name": "MILKA Choco DesOrg 147gr", "kol":"1"},
                    {"name": "MILKA Choco desert muss 128gr", "kol":"1"},
                    {"name": "MILKA Choco Minis 150g", "kol":"1"}
                ]
            }
            }';

        self::updateResult($ocrResult);

        ProcessOcrJob::dispatch($this->userId, $this->receiptId, $ocrResult);

    }

    private function updateResult(string $ocrResult){
            $receipt = new ReceiptController();

        try {
            $receipt->update_ocr($this->receiptId, $ocrResult);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
