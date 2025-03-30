<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;

class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return $this->sendError('Registration Error.', ['error'=>'Exists']);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['fullName'] = $input['name'];
        if(array_key_exists('country', $input)){
            $input['country'] = ($input['country'] != null)?$input['country']:'Srbija';
        }else{
            $input = array_merge($input, ['country' => 'Srbija']);
        }

        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;

    //    $apiUserController = new UserController();
    //    $apiUserController->updateToken($user->id, $success['token']);
    //    $success['name'] =  $user->name;
        $success['fullName'] =  $user->fullName;
        $success['country'] =  $user->country;

//        $useer->pushToken =
//
//        $user->updateToken($success['token']);

        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        //    $success['token'] =  $user->pushToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
}
