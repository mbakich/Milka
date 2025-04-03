<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\User\UserUpdateRequest;
use App\Models\UserPrizes;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Validator;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;

class UserController extends BaseController
{
    protected $request;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return $this->sendResponse(UserResource::collection($users), 'Users retrieved successfully.');
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
            'fullName' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::create($input);

        return $this->sendResponse(new UserResource($user), 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            return $this->sendError('User not found.');
        }

        return $this->sendResponse(new UserResource($user), 'User retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();

        $user = User::find($input['user_id']);

        $user->city = $input['city'];
        $user->address = $input['address'];
        $user->phoneNumber = $input['phoneNumber'];
        $user->idNumber  = $input['idNumber'];
        $user->country = $input['country'];
        $user->currentPoints = $user->currentPoints; //$input['currentPoints'];
        $user->redeemedPoints = $user->redeemedPoints; //$input['redeemedPoints'];

        $user->save();

        return $this->sendResponse(new UserResource($user), 'User updated successfully.');
    }

//    public function updateToken(int $id, string $inData)
//    {
//        $user = User::find($id);
//        $user->pushToken = $inData;
//        $user->save();
//
//        return $this->sendResponse(new UserResource($user), 'Push token updated successfully.');
//    }

//    public function getToken(User $user)
//    {
////        $user = User::find($id);
////        $user->pushToken = $inData;
////        $user->save();
////
//        return $this->sendResponse($user->pushToken, 'Push token.');
//
////        return $user->pushToken;
//    }

    public function update_user_points(Request $request) //int $userId, int $points)
    {
        $input = $request->all();

        $user = User::find($input['userId']);
        $sumPoints = $user->currentPoints + $user->redeemedPoints;

        if(($sumPoints + $input['sumPoints']) >= 120){
            $user->currentPoints = 120; //$sumPoints + $input['sumPoints'] - 120;
        }else{
            $user->currentPoints += $input['sumPoints'];
        }

//dd($user->currentPoints);

        try {
            $user->save();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $this->sendResponse('', 'Receipt retrieved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return $this->sendResponse([], 'User deleted successfully.');
    }
}
