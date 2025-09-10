<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('bookmart');

// Iniciar Sesión
Route::get('/iniciar-sesión', [LoginController::class, 'index'])->name('login');
Route::get('/registrar-cuenta', [RegisterController::class, 'index'])->name('register');
Route::get('/recuperar-contraseña', [PasswordController::class, 'index'])->name('password');