<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// dokter
Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard');
});
Route::get('/dokter/periksa', function () {
    return view('dokter.periksa');
});
Route::get('/dokter/obat', function () {
    return view('dokter.obat');
});


// pasien
Route::get('/pasien/dashboard', function () {
    return view('pasien.dashboard');
});