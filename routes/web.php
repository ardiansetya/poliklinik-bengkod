<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\PeriksaPasienController;
use App\Http\Controllers\RiwayatPasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.perform');

// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.perform');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// dokter
// Route::resource('/dokter/dashboard', ObatController::class)->names(names: 'dokter.dashboard');
Route::resource('/dokter/periksa', PeriksaController::class)->names(names: 'dokter.periksa');
Route::resource('/dokter/obat', ObatController::class)->names(names: 'dokter.obat');

Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard');
})->name('dokter.dashboard');

// Route::get('/dokter/periksa', function () {
//     return view('dokter.periksa');
// })->name('dokter.periksa');

// Route::get('/dokter/obat', function () {
//     return view('dokter.obat');
// })->name('dokter.obat');



// pasien
Route::get('/pasien/dashboard', function () {
    return view('pasien.dashboard');
})->name('pasien.dashboard');

// Route::get('/pasien/periksa', function () {
//     return view('pasien.periksa');
// })->name('pasien.periksa');

// Route::get('/pasien/riwayat', function () {
//     return view('pasien.riwayat');
// })->name('pasien.riwayat');

Route::resource('/pasien/periksa', PeriksaPasienController::class)->names(names: 'pasien.periksa');
Route::resource('/pasien/riwayat', RiwayatPasienController::class)->names(names: 'pasien.riwayat');
