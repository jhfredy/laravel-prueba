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


Route::get('/','frontController@index');
Route::get('contacto','frontController@contacto');
Route::get('review','frontController@review');
Route::get('admin','frontController@admin');

Route::resource('genero','GeneroController');
Route::resource('usuario', 'UsuarioController');
Route::resource('pelicula','PeliculaController');

Route::resource('log','logController');
Route::get('generos','GeneroController@listing');
Route::get('logout','logController@logout'); 
