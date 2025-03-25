<?php

use App\Http\Controllers\Web\Media\ImageController;
use App\Models\Web\Image;
use Illuminate\Support\Facades\Route;

Route::get('add-media-to-library', function () {
    Image::create()
        ->addMedia(storage_path('demo/library-dublin.jpg'))
        ->toMediaCollection();
});

Route::get('add-multiple-files-media-to-library', function () {
    $article = Image::create();

    $article
        ->addMedia(storage_path('demo/library-dublin.jpg'))
        ->toMediaCollection();

    $article
        ->addMedia(storage_path('demo/library-stuttgart.jpg'))
        ->toMediaCollection();
});


Route::get('add-media-from-request', [ImageController::class, 'create']);
Route::post('add-media-from-request', [ImageController::class, 'store']);












