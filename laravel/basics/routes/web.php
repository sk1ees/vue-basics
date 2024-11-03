<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::view('/', 'home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');


Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');


Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');



