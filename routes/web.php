<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $products = Product::all();
    return view('welcome', compact('products'));
})->name('home');

/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/
Route::prefix('products')->controller(ProductController::class)->group(function () {

    Route::get('/', 'index')->name('products.index');

    Route::get('/create', 'create')->name('products.create');

    Route::post('/store', 'store')->name('products.store');

    Route::get('/{product}', 'show')->name('products.show');

    Route::delete('/{product}', 'destroy')->name('products.destroy');

});