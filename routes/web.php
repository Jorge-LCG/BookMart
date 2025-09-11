<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RecoverPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClaimsBookController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\HomeBookController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationBookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\PerfilController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


// RUTAS PUBLICAS
Route::get('/', HomeController::class)->name('bookmart');
Route::get('/nuestros-libros', HomeBookController::class)->name('homebook');
Route::get('/sobre-nosotros', HomeAboutController::class)->name('homeabout');

Route::get('/contactanos', [HomeContactController::class, 'index'])->name('homecontact');
Route::post('/contactanos', [HomeContactController::class, 'store'])->name('homecontact.store');

Route::get('/libro-reclamaciones', [ClaimsBookController::class, 'index'])->name('claims.index');
Route::post('/libro-reclamaciones', [ClaimsBookController::class, 'store'])->name('claims.store');

Route::get('/libro/{book}', [InformationBookController::class, 'show'])->name('bookmart.book');

// RUTAS DE AUTENTICACION
Route::get('/iniciar-sesión', [LoginController::class, 'index'])->name('login');
Route::post('/iniciar-sesión', [LoginController::class, 'store'])->name('login.store');

Route::get('/registrar-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/registrar-cuenta', [RegisterController::class, 'store'])->name('register.store');

Route::get('/recuperar-contraseña', [PasswordController::class, 'index'])->name('password');
Route::post('/recuperar-contraseña', [PasswordController::class, 'store'])->name('password.store');

Route::get('/recuperar-contraseña/codigo', [RecoverPasswordController::class, 'index'])->name('password.recover.index');
Route::post('/recuperar-contraseña/codigo', [RecoverPasswordController::class, 'store'])->name('password.recover.store');

Route::post('/cerrar-sesion', [LogoutController::class, 'store'])->name('logout.store');

// ZONA AUTENTICADA
Route::middleware('auth')->prefix('bookmart')->group(function () {
    // PERFIL USUARIO
    Route::get('/bookmart/perfil', [PerfilController::class, 'index'])->name('perfil');
    Route::get('/bookmart/perfil/informacion', [UserController::class, 'index'])->name('user.index');

    Route::get('/bookmart/perfil/mis-libros', [BookController::class, 'index'])->name('book.index');
    Route::get('/bookmart/perfil/mis-libros/{book}', [BookController::class, 'show'])->name('user.books.show');
    
    // RUTAS CARRITO DE COMPRAS
    Route::get('/carrito', [CartController::class, 'index'])->name('cart.index');
    Route::post('/carrito/agregar/{book}', [CartController::class, 'add'])->name('cart.add');
    Route::put('/carrito/actualizar/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/carrito/eliminar/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/carrito/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('/carrito/procesar-pedido', [CartController::class, 'processCheckout'])->name('cart.process');

    // RUTAS ORDENES - PEDIDOS
    Route::get('/mis-pedidos', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/mis-pedidos/{order}', [OrderController::class, 'show'])->name('orders.show');
});