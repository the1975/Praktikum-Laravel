<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/service', [DashboardController::class, 'service']);
Route::get('/contact', [DashboardController::class, 'contact']);
Route::get('/about', [DashboardController::class, 'about']);
