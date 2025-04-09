<?php

// use App\Http\Controllers\AdminController;
use App\Http\Controllers\Web\Admin\SettingsController;
use App\Http\Controllers\Web\CountryController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\Media\ImageController;
use App\Http\Controllers\Web\PrizeController;
use App\Http\Controllers\Web\ReceiptController;
use App\Http\Controllers\Web\Users\UsersDataTableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Users\UserController;
use App\Models\Web\Image;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome_adminlte');
//})->middleware(['auth', 'verified']);

//Route::get('/', DashboardController::class)->middleware(['auth', 'verified']);
//
//Route::get('dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::middleware('auth')->group(function () {
//    Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
//    Route::patch('/user', [UserController::class, 'update'])->name('user.update');
//    Route::delete('/user', [UserController::class, 'destroy'])->name('user.destroy');
//});

// User

Route::resource('users', UserController::class)
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('settings', [SettingsController::class, 'index'])->name('settings');
Route::get('data', [App\Http\Controllers\Web\DataController::class, 'index'])->name('data');
// Route::get('data/installCategories', [App\Http\Controllers\Web\DataController::class, 'installCategories'])->name('installCategories');

Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);
//Route::get('products', [ProductController::class, 'index'])->name('products.index')->middleware(['auth', 'verified']);
//Route::get('products', [ProductController::class, 'show'])->name('product.show')->middleware(['auth', 'verified']);
//Route::get('products', [ProductController::class, 'edit'])->name('product.edit')->middleware(['auth', 'verified']);
//Route::delete('products', [ProductController::class, 'destroy'])->name('product.destroy')->middleware(['auth', 'verified']);

Route::resource('prizes', PrizeController::class)->middleware(['auth', 'verified']);
Route::resource('receipts', ReceiptController::class)->middleware(['auth', 'verified']);
Route::resource('countries', CountryController::class);
Route::resource('editComplains', ReceiptController::class)->middleware(['auth', 'verified']);

Route::get('process', [ReceiptController::class, 'process'])->middleware(['auth', 'verified']);
Route::get('edit_complains', [ReceiptController::class, 'editComplains'])->middleware(['auth', 'verified']);

Route::resource('image', ImageController::class);

// Media


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


// Helper
//Route::get('call-helper', function(){
//
//    $str1 = "MILKA Chocko & Buiscuit 300G ";
//    $str2 = "MILKA CH&Bis 300gr";
//
//    $compare = compareTwoStrings($str1,$str2);
//    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);
//
//    $str1 = "Milka Choco Cow 120G  ";
//    $str2 = "MILKA CCow 120gr";
//
//    $compare = compareTwoStrings($str1,$str2);
//    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);
//
//    $str1 = "Milka Sensation Dark 156G";
//    $str2 = "MILKA sens 300gr";
//
//    $compare = compareTwoStrings($str1,$str2);
//    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);
//
//    $str1 = "Milka Oreo 300G ";
//    $str2 = "MLKA Or 300gr";
//
//    $compare = compareTwoStrings($str1,$str2);
//    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);
//
//    $str1 = "Milka Almond Crispy Creme 90G";
//    $str2 = "MILKA CCrem 90";
//
//    $compare = compareTwoStrings($str1,$str2);
//    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);
//});
