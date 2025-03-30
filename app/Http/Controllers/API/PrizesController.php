<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\PrizeResource;
use App\Models\Web\Prize;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PrizesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prizes = Prize::all();

        return $this->sendResponse(PrizeResource::collection($prizes), 'Prizes retrieved successfully.');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perCountry(Request $request)
    {
        $input = $request->all();
dd($input);
        $prizes = Prize::where('country',$input->country)->get();

        return $this->sendResponse(PrizeResource::collection($prizes), 'Prizes retrieved successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $prize = Prize::find($id);

        if (is_null($prize)) {
            return $this->sendError('Prize not found.');
        }

        return $this->sendResponse(new PrizeResource($prize), 'Prize retrieved successfully.');
    }
}
