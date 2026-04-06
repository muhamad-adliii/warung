<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('dashboard/dashboard');
});

Route::get('/kategori', function () {
    return view('dashboard/kategori');
});

Route::get('/login', [AuthController::class, 'login']);