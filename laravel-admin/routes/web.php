<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\IsLogin;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'cek']);

Route::middleware(IsLogin::class)->group(function () {
    Route::get('/home', [DashboardController::class, 'home']);
    Route::get('/product', [DashboardController::class, 'product']);
    Route::get('/service', [DashboardController::class, 'service']);
    Route::get('/contact', [DashboardController::class, 'contact']);
    Route::get('/about', [DashboardController::class, 'about']);

    Route::resource('admin', AdminController::class);

    Route::post('/logout', [AuthController::class, 'logout']);
});
