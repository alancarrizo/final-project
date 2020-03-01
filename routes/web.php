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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/actores', 'ActorController@vista')->name('DatosActores');
Route::get('/actor/{id}/detalle', 'ActorController@detalleActor')->name('DatosAdetalles');

Route::get('/peliculas', 'PeliculaController@vista')->name('DatosPeliculas');
Route::get('/pelicula/{id}/detalle', 'PeliculaController@detallePelicula')->name('DatosPdetalles');

Route::get('/generos', 'GéneroController@vista')->name('DatosGénero');
Route::get('/genero/{id}/detalle', 'GéneroController@detalleGénero')->name('DatosGdetalles');

Route::get('/creActores', 'ActorController@form')->name('formularioActores');
Route::post('/creActores', 'ActorController@guardar');

Route::get('/editarpelicula/{id}/editar', 'PeliculaController@form')->name('FormEditPeli');
Route::put('/editarPelicula', 'PeliculaController@editar');
