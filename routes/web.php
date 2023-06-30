<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// authentication
Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');
// untuk export pdf
Route::post('produk/export-produk', [App\Http\Controllers\ProdukController::class, 'viewPDF'])->name('produk.view-pdf');
