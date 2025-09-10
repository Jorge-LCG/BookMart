<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\HomeBookController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\PerfilController;
use Illuminate\Support\Facades\Route;


// Navegación Página
Route::get('/', HomeController::class)->name('bookmart');
Route::get('/nuestros-libros', HomeBookController::class)->name('homebook');
Route::get('/sobre-nosotros', HomeAboutController::class)->name('homeabout');
Route::get('/contactanos', HomeContactController::class)->name('homecontact');


// Registro y Iniciar Sesión
Route::get('/iniciar-sesión', [LoginController::class, 'index'])->name('login');
Route::post('/iniciar-sesión', [LoginController::class, 'store'])->name('login.store');
Route::get('/registrar-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/registrar-cuenta', [RegisterController::class, 'store'])->name('register.store');
Route::get('/recuperar-contraseña', [PasswordController::class, 'index'])->name('password');
Route::post('/recuperar-contraseña', [PasswordController::class, 'store'])->name('password.store');
Route::post('/cerrar-sesion', [LogoutController::class, 'store'])->name('logout.store');

// User Autenticado
Route::middleware('auth')->group(function () {
    // Perfil Usuario
    Route::get('/bookmart/perfil', [PerfilController::class, 'index'])->name('perfil');
});