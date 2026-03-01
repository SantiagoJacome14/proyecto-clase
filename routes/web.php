<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/

Route::controller(ProductController::class)->prefix('products')->group(function () {

    Route::get('/', 'index')->name('products.index');

    Route::get('/create', 'create')->name('products.create');

    Route::get('/{product}', 'show')->name('products.show');

});