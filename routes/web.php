<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/welcome', [AuthController::class, 'welcome'])->name('welcome');
