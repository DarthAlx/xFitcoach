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
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/proximamente', function () {
    return view('proximamente');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/clasesdeportivas', function () {
    return view('clasesdeportivas');
});

Route::get('/aviso', function () {
    return view('aviso');
});
