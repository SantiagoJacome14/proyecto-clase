<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Product;
use App\Http\Controllers\CartController;

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
| Admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::prefix('categories')->controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('admin.categories.index');
        Route::get('/create', 'create')->name('admin.categories.create');
        Route::post('/store', 'store')->name('admin.categories.store');
        Route::get('/{category}/edit', 'edit')->name('admin.categories.edit');
        Route::put('/{category}', 'update')->name('admin.categories.update');
        Route::delete('/{category}', 'destroy')->name('admin.categories.destroy');
    });

});
/*
|--------------------------------------------------------------------------
| Cart
|--------------------------------------------------------------------------
*/
Route::prefix('cart')->controller(CartController::class)->group(function () {
    Route::get('/', 'index')->name('cart.index');
    Route::post('/add/{product}', 'add')->name('cart.add');
    Route::delete('/remove/{id}', 'remove')->name('cart.remove');
    Route::delete('/clear', 'clear')->name('cart.clear');
});

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