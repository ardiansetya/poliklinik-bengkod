<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// dokter
Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard');
});

// pasien
Route::get('/pasien/dashboard', function () {
    return view('pasien.dashboard');
});