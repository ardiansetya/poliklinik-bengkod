<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// login
Route::get('/login', function () {
    return view('login');
});

// register
Route::get('/register', function () {
    return view('register');
});


// dokter
Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard');
})->name('dokter.dashboard');

Route::get('/dokter/periksa', function () {
    return view('dokter.periksa');
})->name('dokter.periksa');

Route::get('/dokter/obat', function () {
    return view('dokter.obat');
})->name('dokter.obat');


// pasien
Route::get('/pasien/dashboard', function () {
    return view('pasien.dashboard');
})->name('pasien.dashboard');

Route::get('/pasien/periksa', function () {
    return view('pasien.periksa');
})->name('pasien.periksa');

Route::get('/pasien/riwayat', function () {
    return view('pasien.riwayat');
})->name('pasien.riwayat');