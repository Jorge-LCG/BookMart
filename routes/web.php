<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\PerfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('bookmart');

// Registro y Iniciar Sesión
Route::get('/iniciar-sesión', [LoginController::class, 'index'])->name('login');
Route::post('/iniciar-sesión', [LoginController::class, 'store'])->name('login.store');

Route::get('/registrar-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/registrar-cuenta', [RegisterController::class, 'store'])->name('register.store');

Route::get('/recuperar-contraseña', [PasswordController::class, 'index'])->name('password');

// Usuarios
Route::get('/bookmart/perfil', [PerfilController::class, 'index'])->name('perfil');

// Route::middleware('auth')->group(function () {
    
// });