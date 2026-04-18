<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('dashboard/dashboard');
});

Route::get('/kategori', function () {
    return view('dashboard/kategori');
});

Route::get('/data_barang', function () {
    return view('dashboard/data_barang');
});

Route::get('/barang_masuk', function () {
    return view('dashboard/barang_masuk');
});

Route::get('/login', [AuthController::class, 'login']);