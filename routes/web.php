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
Route::get('/pasien/periksa', function () {
    return view('pasien.periksa');
});
Route::get('/pasien/riwayat', function () {
    return view('pasien.riwayat');
});