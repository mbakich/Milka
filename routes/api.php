<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Notifications\FcmController;
use App\Http\Controllers\API\ReceiptController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\PrizeController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\Media\ImageController;
use App\Http\Controllers\API\DataAPIController;

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
    Route::post('filterProductsPerCategory', [ProductController::class,'filterProductsPerCategory']);

    Route::post('processReceipt', [ReceiptController::class,'processReceipt']);

    Route::get('receipts/getAllByUser', [ReceiptController::class, 'getAllByUser']);


    Route::resource('prizes', PrizeController::class);
    Route::post('prizes/perCountry', [PrizeController::class, 'perCountry']);
    Route::post('prizes/getQualified', [PrizeController::class, 'getQualified']);
    Route::post('prizes/redeemPrize', [PrizeController::class, 'redeemPrize']);
    Route::post('prizes/getMyPrizes', [PrizeController::class, 'getMyPrizes']);


//    Route::get('prizes/perCountry', function (Request $request) {
//        return (new PrizeController())->perCountry($request);
//    });

});

// Install data
Route::get('installCategories', [DataAPIController::class, 'installCategories']);
Route::get('installCountries', [DataAPIController::class, 'installCountries']);
Route::get('installGramaza', [DataAPIController::class, 'installGramaza']);

// Notifikacije

Route::put('update-device-token', [FcmController::class, 'updateDeviceToken']);
Route::post('send-fcm-notification', [FcmController::class, 'sendFcmNotification']);


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
