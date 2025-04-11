<?php

namespace App\Http\Controllers\API;

use App\Jobs\ProcessOcrJob;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Web\Receipt;
use Validator;
use App\Http\Resources\ReceiptResource;
use Illuminate\Http\JsonResponse;
use App\Jobs\ProcessReceiptJob;

class ReceiptController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receipts = Receipt::all();

        return $this->sendResponse(ReceiptResource::collection($receipts), 'Receipts retrieved successfully.');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function processReceipt(Request $request)
    {
        $input = $request->all();

        $receipt_id = $this->initStore($request);

        $receipt = Receipt::find($receipt_id);

        $filePath = $receipt->getFirstMediaUrl('default');

        ProcessReceiptJob::dispatch($input['userId'], $receipt_id, $filePath);

        return $this->sendResponse(true, 'Receipts retrieved successfully.');
    }

    private function getUpdatedReceipt($receipt_id){
        $receipt = Receipt::find($receipt_id);

        return $receipt;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function initStore(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'userId' => 'required',
            'image' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

//dd($input);
        $input['userId'] = (int)$input['userId'];
        $input = array_merge($input, ['rawOcrData' => '']);
        $input = array_merge($input, ['submissionDate' => new DateTime()]);
        $input = array_merge($input, ['processingDate' => new DateTime()]);
        $input = array_merge($input, ['pointsAwarded' => (int)'0']);
//dd($input);
//var_dump($input);
        $receipt = Receipt::create($input);

        $receipt
            ->addMediaFromRequest('image')
            ->toMediaCollection();


        return $receipt->id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'userId' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $receipt = Receipt::create($input);

        return $this->sendResponse(new ReceiptResource($receipt), 'Receipt created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receipt = Receipt::find($id);

        if (is_null($receipt)) {
            return $this->sendError('Receipt not found.');
        }

        return $this->sendResponse(new ReceiptResource($receipt), 'Receipt retrieved successfully.');
    }

    public function update_ocr(Request $request) //int $receiptId, string $ocrJson)
    {
        $input = $request->all();

        $receipt = Receipt::find($input['receiptId']);

        $receipt->rawOcrData = $input['ocrResult'];
        try {
            $receipt->save();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
//dd($input['ocrResult']);
      //  return $this->sendResponse(new ReceiptResource($receipt), 'Receipt retrieved successfully.');
        return true;
    }

    public function update_points(Request $request) //int $receiptId, int $points)
    {
        $input = $request->all();

        $receipt = Receipt::find($input['receiptId']);

        $receipt->pointsAwarded = $input['sumPoints'];
        $receipt->status = 'processed';

        try {
            $receipt->save();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

    //    return $this->sendResponse('', 'Receipt retrieved successfully.');
        return true;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipt $receipt)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'userId' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $receipt->name = $input['name'];
        $receipt->detail = $input['detail'];
        $receipt->save();

        return $this->sendResponse(new ReceiptResource($receipt), 'Receipt updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipt $receipt)
    {
        $receipt->delete();

        return $this->sendResponse([], 'Receipt deleted successfully.');
    }



    /**
     * Get all receipts from country
     */
    public function filterReceiptsByCategory(int $category)
    {
        $receipt->delete();

        return redirect()->route('receipts.index')
            ->with('success','Receipt deleted successfully');
    }



    /**
     * Get all receipts from country
     */
    public function getAllByUser(Request $request)
    {
        $input = $request->all();

        $receipt = Receipt::where('userId', $input['user_id'])->get();

     //   return $this->sendResponse(new ReceiptResource($receipt), 'All receipt by user.');
        return $this->sendResponse($receipt, 'All receipt by user.');
    }


}
