<?php

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
    return view('index');
});

Route::get('/recordatorios', function () {
    return view('recordatorios/index');
});
Route::get('/recordatorios/create', function () {
    return view('recordatorios/create');
});

Route::get('/config', function () {
    return view('configuracion/index');
});

Route::get('/mail-list', function () {
    return view('lista-correos/index');
});
