<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MahasiswaController;

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

use App\Http\Controllers\KalkulatorController;

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);
