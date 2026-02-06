<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');