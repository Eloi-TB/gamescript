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

//Pàgina principal de l'aplicació
Route::get('/', function () {
    return view('welcome');
});

//Secció d'autentificació
Auth::routes();

//Pàgina principal dels usuaris loguejats
Route::get('/home', 'HomeController@index')->name('home');

//Rutas dinámicas de los juegos
Route::get('game/{game_name}', 'GameController@index');
Route::post('game/store/score', 'GameController@store');
