<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ReceiptController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\Media\ImageController;

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

//Route::middleware('auth:sanctum')->group( function () {
//    Route::resource('gifts', ProductController::class);
//});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('users', UserController::class);
    Route::get('user', function (Request $request) {
        return $request->user();
    });

    Route::resource('products', ProductController::class);
    Route::resource('filterProductsByCategory', ProductController::class);

    Route::post('processReceipt', [ReceiptController::class,'processReceipt']);

});

Route::post('token', function(Request $request){

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $user = Auth::getUser();
    //    return $request->bearerToken();
        $apiUserController = new UserController();
        return $apiUserController->getToken($user);
    }
});

Route::resource('images', ImageController::class)
    ->middleware('auth:sanctum');
