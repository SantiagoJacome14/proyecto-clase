<?php

use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('product') ->group(function (){


Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/create', [ProductController::class, 'create']);

Route::get('/product/{producto}', [ProductController::class, 'show']);

});