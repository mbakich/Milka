<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\API\ReceiptController;

class ProcessReceipt implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $receiptId;
    private $response;

    /**
     * Create a new job instance.
     * @param $receiptDetails
     */
    public function __construct($receiptId)
    {
        $this->receiptId = $receiptId;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
    //    dd($this->receiptId);
        //$processor->process($this->receiptDetails);
        // get image from media

        // send image to ocr service
        $ocrResult = '{"receipt": {
                "num": "647747664",
            "items": [
                {"name": "MILKA CH&Bis 300gr", "kol":1},
                {"name": "MILKA CCow 120gr", "kol":1},
                {"name": "MILKA CCrem 90", "kol":1},
            ]
        }}';

      //  $receipt = new Receipt();
        ReceiptController::update_result($this->receiptId, $ocrResult);

    }
}
