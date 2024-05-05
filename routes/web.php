<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

// Awal masuk langsung redirect ke home
Route::get('/', function () {
    return redirect() ->route('home');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::resource('list-barang', ListBarangController::class);

Route::delete('/list-barang/{barang}', [ListBarangController::class, 'destroy'])->name('list-barang.destroy');
