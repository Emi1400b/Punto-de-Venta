<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Ruta de login
Route::view('/', '/auth/login')->name('login')->middleware('guest');

Route::get('/registrar', [UsuarioController::class, 'index']);

//Ruta que acepta petición POST a la URL de login
Route::get('/', [LoginController::class, 'login']);

//Ruta de cerrar sesión
Route::post('logout', [LoginController::class, 'logout']);

Route::view('index','index')->middleware('auth');

Route::view('lista_usuarios','lista_usuarios')->middleware('auth');

Route::view('registrar_usu','registrar_usu')->middleware('auth');

Route::view('actualizar_usu','actualizar_usu')->middleware('auth');

Route::view('papelera_usu','papelera_usu')->middleware('auth');

Route::view('lista_empleados','lista_empleados')->middleware('auth');

Route::view('registrar_emp','registrar_emp')->middleware('auth');

Route::view('actualizar_emp','actualizar_emp')->middleware('auth');

Route::view('papelera_emp','papelera_emp')->middleware('auth');

Route::view('lista_pues','lista_pues')->middleware('auth');

Route::view('registrar_pues','registrar_pues')->middleware('auth');

Route::view('actualizar_pues','actualizar_pues')->middleware('auth');

Route::view('papelera_pues','papelera_pues')->middleware('auth');

Route::view('lista_clientes','lista_clientes')->middleware('auth');

Route::view('registrar_cli','registrar_cli')->middleware('auth');

Route::view('actualizar_cli','actualizar_cli')->middleware('auth');

Route::view('papelera_cli','papelera_cli')->middleware('auth');

Route::view('lista_ventas','lista_ventas')->middleware('auth');

Route::view('registrar_venta','registrar_venta')->middleware('auth');

Route::view('actualizar_venta','actualizar_venta')->middleware('auth');

Route::view('registrar_prod_rap','registrar_prod_rap')->middleware('auth');

Route::view('registrar_pagos_cred','registrar_pagos_cred')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');