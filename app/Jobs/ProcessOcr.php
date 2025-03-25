<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessOcr implements ShouldQueue
{
    use Queueable;

    protected $raw_ocr;
    private $response;

    /**
     * Create a new job instance.
     */
    public function __construct($rawOcr)
    {
        $this->raw_ocr = $rawOcr;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $tempArray = json_decode($this->raw_ocr);
        dd($tempArray);
    }

    public function getResponse()
    {
        return $this->response;
    }
}
