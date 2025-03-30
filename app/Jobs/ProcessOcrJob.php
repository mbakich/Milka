<?php

namespace App\Jobs;

use App\Http\Controllers\API\ReceiptController;
use App\Http\Controllers\API\UserController;
use App\Models\Web\Product;
use App\Models\Web\Receipt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

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
        $products = Product::all();

     //   var_dump($this->raw_ocr);
        $tempArray = json_decode($this->raw_ocr);
        $items = $tempArray->receipt->items;
        foreach($items as $item){
            foreach($products as $product){
                $compare = compareTwoStrings($product->skuName,$item->name);
             //   var_dump('Compare:' .$product->skuName.' - '.$item->name .' -> result:'. $compare);
                if($compare > 0.56){
                    $sumPoints += $product->pointsValue;
                 //   var_dump($product->skuName.' - '.$item->name);
                    break;
                }
            }
        }

        $receiptC = new ReceiptController();
        $receipt = new Receipt();

        try {
            // email customer
            $receiptC->update_points($this->receiptId, $sumPoints);
            $uc = new UserController();
            $uc->update_user_points($this->userId, $sumPoints);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

//        $receipt1 = new Receipt();
//        $receipt =$receipt1->find($this->receiptId);


    }
}
