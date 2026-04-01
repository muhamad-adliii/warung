<?php

use Illuminate\Support\Facades\Route;

Route::get('/auth', function () {
    return view('login');
});

Route::get('/', function () {
    return view('dashboard/dashboard');
});