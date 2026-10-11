<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Tugas Sesi 14
|--------------------------------------------------------------------------
| Daftar route untuk aplikasi toko online sederhana.
*/

Route::get('/', function () {
    return view('welcome');
});

// Route daftar produk dengan pagination
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
