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

Route::get('/', 'UsuarioController@index');
Route::get('/novo', 'UsuarioController@create');
Route::post('/novo', 'UsuarioController@store');
Route::get('/editar/{id}', 'UsuarioController@edit');
Route::put('/editar/{id}', 'UsuarioController@update');
Route::delete('/deletar/{id}', 'UsuarioController@destroy');

