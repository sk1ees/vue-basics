<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


Route::view('/', 'home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
