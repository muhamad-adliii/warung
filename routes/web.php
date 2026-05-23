<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\PenjualanController;
use App\Models\Kategori;
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

Route::get('/penjualan', function () {
    return view('dashboard/penjualan');
});

Route::get('/laporan', function () {
    return view('dashboard/laporan');
});

Route::get('/stock', function () {
    return view('dashboard/stock');
});

Route::get('/login', [AuthController::class, 'login']);

Route::resource('kategori', KategoriController::class);
Route::resource('barang', BarangController::class);
Route::resource('barang-masuk', BarangMasukController::class);
Route::resource('penjualan', PenjualanController::class);