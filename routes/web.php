<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductController');

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
