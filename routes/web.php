<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\Media\ImageController;
use App\Http\Controllers\Web\PrizeController;
use App\Http\Controllers\Web\ReceiptController;
use App\Http\Controllers\Web\Users\UsersDataTableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Users\UserController;
use App\Models\Web\Image;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome_adminlte');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User

Route::resource('users', UserController::class)
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);
//Route::get('products', [ProductController::class, 'index'])->name('products.index')->middleware(['auth', 'verified']);
//Route::get('products', [ProductController::class, 'show'])->name('product.show')->middleware(['auth', 'verified']);
//Route::get('products', [ProductController::class, 'edit'])->name('product.edit')->middleware(['auth', 'verified']);
//Route::delete('products', [ProductController::class, 'destroy'])->name('product.destroy')->middleware(['auth', 'verified']);

Route::resource('prizes', PrizeController::class)->middleware(['auth', 'verified']);
Route::resource('receipts', ReceiptController::class)->middleware(['auth', 'verified']);

Route::resource('image', ImageController::class);

// DataTables

Route::get('/users_dt', [UsersDataTableController::class, 'index'])->name('users.index_dt');

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

// Grocery Crud
// New code
//Route::get('/admin/customers-management', [AdminController::class, 'customers']);
//Route::get('/admin/customers-management/{operation}', [AdminController::class, 'customers']);
//Route::get('/admin/customers-management/{operation}/{id}', [AdminController::class, 'customers']);
//Route::post('/admin/customers-management', [AdminController::class, 'customers']);
//Route::post('/admin/customers-management/{operation}', [AdminController::class, 'customers']);
//Route::post('/admin/customers-management/{operation}/{id}', [AdminController::class, 'customers']);

Route::get('/admin/users-management', [AdminController::class, 'users']);
Route::get('/admin/users-management/{operation}', [AdminController::class, 'users']);
Route::get('/admin/users-management/{operation}/{id}', [AdminController::class, 'users']);
Route::post('/admin/users-management', [AdminController::class, 'users']);
Route::post('/admin/users-management/{operation}', [AdminController::class, 'users']);
Route::post('/admin/users-management/{operation}/{id}', [AdminController::class, 'users']);

Route::get('/admin/settings-management', [AdminController::class, 'settings']);
Route::get('/admin/settings-management/{operation}', [AdminController::class, 'settings']);
Route::get('/admin/settings-management/{operation}/{id}', [AdminController::class, 'settings']);
Route::post('/admin/settings-management', [AdminController::class, 'settings']);
Route::post('/admin/settings-management/{operation}', [AdminController::class, 'settings']);
Route::post('/admin/settings-management/{operation}/{id}', [AdminController::class, 'settings']);

Route::get('/admin/products-management', [AdminController::class, 'products']);
Route::get('/admin/products-management/{operation}', [AdminController::class, 'products']);
Route::get('/admin/products-management/{operation}/{id}', [AdminController::class, 'products']);
Route::post('/admin/products-management', [AdminController::class, 'products']);
Route::post('/admin/products-management/{operation}', [AdminController::class, 'products']);
Route::post('/admin/products-management/{operation}/{id}', [AdminController::class, 'products']);

Route::get('/admin/prizes-management', [AdminController::class, 'prizes']);
Route::get('/admin/prizes-management/{operation}', [AdminController::class, 'prizes']);
Route::get('/admin/prizes-management/{operation}/{id}', [AdminController::class, 'prizes']);
Route::post('/admin/prizes-management', [AdminController::class, 'prizes']);
Route::post('/admin/prizes-management/{operation}', [AdminController::class, 'prizes']);
Route::post('/admin/prizes-management/{operation}/{id}', [AdminController::class, 'prizes']);

Route::get('/admin/categories-management', [AdminController::class, 'categories']);
Route::get('/admin/categories-management/{operation}', [AdminController::class, 'categories']);
Route::get('/admin/categories-management/{operation}/{id}', [AdminController::class, 'categories']);
Route::post('/admin/categories-management', [AdminController::class, 'categories']);
Route::post('/admin/categories-management/{operation}', [AdminController::class, 'categories']);
Route::post('/admin/categories-management/{operation}/{id}', [AdminController::class, 'categories']);

Route::get('/admin/countries-management', [AdminController::class, 'countries']);
Route::get('/admin/countries-management/{operation}', [AdminController::class, 'countries']);
Route::get('/admin/countries-management/{operation}/{id}', [AdminController::class, 'countries']);
Route::post('/admin/countries-management', [AdminController::class, 'countries']);
Route::post('/admin/countries-management/{operation}', [AdminController::class, 'countries']);
Route::post('/admin/countries-management/{operation}/{id}', [AdminController::class, 'countries']);

Route::get('/admin/orders-management', [AdminController::class, 'orders']);
Route::get('/admin/orders-management/{operation}', [AdminController::class, 'orders']);
Route::get('/admin/orders-management/{operation}/{id}', [AdminController::class, 'orders']);
Route::post('/admin/orders-management', [AdminController::class, 'orders']);
Route::post('/admin/orders-management/{operation}', [AdminController::class, 'orders']);
Route::post('/admin/orders-management/{operation}/{id}', [AdminController::class, 'orders']);

Route::get('/admin/receipts-management', [AdminController::class, 'receipts']);
Route::get('/admin/receipts-management/{operation}', [AdminController::class, 'receipts']);
Route::get('/admin/receipts-management/{operation}/{id}', [AdminController::class, 'receipts']);
Route::post('/admin/receipts-management', [AdminController::class, 'receipts']);
Route::post('/admin/receipts-management/{operation}', [AdminController::class, 'receipts']);
Route::post('/admin/receipts-management/{operation}/{id}', [AdminController::class, 'receipts']);


// Helper
Route::get('call-helper', function(){

    $str1 = "MILKA Chocko & Buiscuit 300G ";
    $str2 = "MILKA CH&Bis 300gr";

    $compare = compareTwoStrings($str1,$str2);
    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);

    $str1 = "Milka Choco Cow 120G  ";
    $str2 = "MILKA CCow 120gr";

    $compare = compareTwoStrings($str1,$str2);
    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);

    $str1 = "Milka Sensation Dark 156G";
    $str2 = "MILKA sens 300gr";

    $compare = compareTwoStrings($str1,$str2);
    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);

    $str1 = "Milka Oreo 300G ";
    $str2 = "MLKA Or 300gr";

    $compare = compareTwoStrings($str1,$str2);
    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);

    $str1 = "Milka Almond Crispy Creme 90G";
    $str2 = "MILKA CCrem 90";

    $compare = compareTwoStrings($str1,$str2);
    print_a('Compare:' .$str1.' - '.$str2 .' -> result:'. $compare);
});
