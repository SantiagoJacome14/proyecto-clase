<?php

use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('product') ->controller(ProductController::class)->group(function (){

Route::get('/', 'index');
Route::get('/create',  'create');
Route::get('/{producto}', 'show');

});