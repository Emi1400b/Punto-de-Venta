<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Muestra el diseño de las vistas 

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/lista_usuarios', function () {
    return view('lista_usuarios');
});

    Route::get('/registrar_usu', function () {
        return view('registrar_usu');
    });

    Route::get('/actualizar_usu', function () {
        return view('actualizar_usu');
    });

    Route::get('/papelera_usu', function () {
        return view('papelera_usu');
    });

Route::get('/lista_empleados', function () {
    return view('lista_empleados');
});

    Route::get('/registrar_emp', function () {
        return view('registrar_emp');
    });

    Route::get('/actualizar_emp', function () {
        return view('actualizar_emp');
    });

    Route::get('/papelera_emp', function () {
        return view('papelera_emp');
    });

Route::get('/lista_pues', function () {
    return view('lista_pues');
});

    Route::get('/registrar_pues', function () {
        return view('registrar_pues');
    });

    Route::get('/actualizar_pues', function () {
        return view('actualizar_pues');
    });

    Route::get('/papelera_pues', function () {
        return view('papelera_pues');
    });

Route::get('/lista_clientes', function () {
    return view('lista_clientes');
});

    Route::get('/registrar_cli', function () {
        return view('registrar_cli');
    });

    Route::get('/actualizar_cli', function () {
        return view('actualizar_cli');
    });

    Route::get('/papelera_cli', function () {
        return view('papelera_cli');
    });

Route::get('/lista_ventas', function () {
    return view('lista_ventas');
});   

    Route::get('/registrar_venta', function () {
        return view('registrar_venta');
    });

    Route::get('/actualizar_venta', function () {
        return view('actualizar_venta');
    });

    Route::get('/registrar_prod_rap', function () {
        return view('registrar_prod_rap');
    });

Route::get('/registrar_pagos_cred', function () {
    return view('registrar_pagos_cred');
});