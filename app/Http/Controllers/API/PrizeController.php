<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\PrizeResource;
use App\Jobs\RedeemPrizeJob;
use App\Models\User;
use App\Models\UserPrizes;
use App\Models\Web\Prize;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrizeController extends BaseController
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

        $prizes = Prize::where('country',$input['country'])->get();

        return $this->sendResponse(PrizeResource::collection($prizes), 'Prizes retrieved successfully.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getQualified(Request $request)
    {
        $input = $request->all();

        $user = User::find($input['user_id']);
        $userPrizes = UserPrizes::select(DB::raw('count(prizeId) as num_prizes, prizeId'))
                ->where('userId',$input['user_id'])
                ->groupBy('prizeId')->get();

        $prizes = Prize::where('country',$user->country)
            ->where('pointsCost','<=',$user->currentPoints)->get();

        $locPrizes = array();
        foreach($prizes as $prize){
            $obj = null;
            foreach($userPrizes as $uprize) {
                if ($uprize->prizeId == $prize->id) {
                    $obj = $uprize;
                    break;
                }
            }

            if($obj == null) {
                array_push($locPrizes, $prize);
            }else {
                if($prize->maxPerUser < $obj->num_prizes) {
                    array_push($locPrizes, $prize);
                }
            }
        }

        return $this->sendResponse(PrizeResource::collection($locPrizes), 'Prizes retrieved successfully.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redeemPrize(Request $request)
    {
        $input = $request->all();

        RedeemPrizeJob::dispatch($input['userId'], $input['prize_id']);

        return $this->sendResponse(true, 'Prizes retrieved successfully.');
    }

    /**
     * Get all redeemed prizes by user
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     *
     * @param  int  $user_id
     *
     * @return \Illuminate\Http\Response
     */
    public function getMyPrizes(Request $request)
    {
        $input = $request->all();

        $user = User::find($input['user_id']);

        $report = UserPrizes::join('prizes', 'user_prizes.prizeId', '=', 'prizes.id')
            ->select('prizes.name', 'prizes.pointsCost', 'user_prizes.redemptionDate')
            ->where('userId',$input['user_id'])
            ->get();

        return $this->sendResponse($report, 'List of redeemed prizes.');
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
