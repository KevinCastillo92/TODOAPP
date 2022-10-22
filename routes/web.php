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
    return view('welcome');
});

Route::get('/tareas', 'tareasController@listarTareas');

Route::get('/registrar', 'tareasController@registrarTareas');

Route::post('/guardarTarea', 'tareasController@guardarTareas');

Route::get('/editarTarea/{id}', 'tareasController@editarTareas');

Route::post('/actualizarTarea/{id}', 'tareasController@actualizarTareas');

Route::get('/eliminarTarea/{id}', 'tareasController@eliminarTareas');