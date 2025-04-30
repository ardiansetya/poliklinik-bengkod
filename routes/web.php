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
Route::get('/denied', function () {
    return view('denied');
})->name('denied');



// dokter
// Route::resource('/dokter/dashboard', ObatController::class)->names(names: 'dokter.dashboard');
Route::prefix('dokter')->middleware(["auth", 'role:dokter'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dokter.dashboard');
    })->name('dokter.dashboard');
    Route::resource('/periksa', PeriksaController::class)->names(names: 'dokter.periksa');
    Route::resource('/obat', ObatController::class)->names(names: 'dokter.obat');
});



// pasien
Route::prefix('pasien')->middleware(["auth", 'role:pasien'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pasien.dashboard');
    })->name('pasien.dashboard');
    Route::resource('/periksa', PeriksaPasienController::class)->names(names: 'pasien.periksa');
    Route::resource('/riwayat', RiwayatPasienController::class)->names(names: 'pasien.riwayat');
});