<?php

namespace App\Jobs;

use App\Http\Controllers\API\ReceiptController;
use App\Http\Controllers\API\UserController;
use App\Models\Web\Gramaza;
use App\Models\Web\Categories;
use App\Models\Web\Product;
use App\Models\Web\Receipt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ProcessOcrJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $raw_ocr;
    private $receiptId;
    private $userId;

    /**
     * Create a new job instance.
     */
    public function __construct($userId, $recId, $rawOcr)
    {
        $this->raw_ocr = $rawOcr;
        $this->receiptId = $recId;
        $this->userId = $userId;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $sumPoints = 0;
    //    $gramaza = Gramaza::all();
        $gramaza = DB::select('SELECT * FROM gramaza');

     //   var_dump($this->raw_ocr);
        $tempArray = json_decode($this->raw_ocr);
        $items = $tempArray->document->entities;
        foreach($items as $item){
            if(strpos(strtoupper($item->mentionText),'MILKA') !== false){
                $ii = 0;
                $kol = 0;
                $fp = fopen("php://memory", 'r+');
                fputs($fp, $item->mentionText);
                rewind($fp);
                while($line = fgets($fp)){
                    // deal with $line
                    if(ctype_digit(trim($line))){
                        $kol = (int)trim($line);
                        break;
                    }
                }
                fclose($fp);

                $locArray = explode('\\n', $item->mentionText);
                foreach($gramaza as $gram){
                    if(strpos($locArray[0], $gram->grams) !== false){
                        $kategorija = DB::select("SELECT * FROM categories WHERE naziv ='{$gram->category}'");
                        $points = (int)$kategorija[0]->points; //Categories::find($gram->category)->points;
                        $sumPoints += $points * $kol;
                        break;
                    }
                }
            }
        }

        try {
            // email customer
            $request = new Request([
                'receiptId'   => $this->receiptId,
                'sumPoints' => $sumPoints,
            ]);
            (new ReceiptController())->update_points($request);

            $request = new Request([
                'userId'   => $this->userId,
                'sumPoints' => $sumPoints,
            ]);
            (new UserController())->update_user_points($request);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

//        $receipt1 = new Receipt();
//        $receipt =$receipt1->find($this->receiptId);


    }
}
