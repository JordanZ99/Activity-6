<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Debajo de la línea 7 agrega:
Route::resource('products', 'ProductController');

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);