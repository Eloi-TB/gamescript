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

//Grup de rutes per a la secció de jocs
Route::group(array('prefix' => 'games'), function(){
    //Rutes de cada joc
    Route::get('snake', 'SnakeController@index');
    Route::get('birds', 'BirdsController@index');
    Route::get('pacman', 'PacManController@index');
    Route::get('buscaminas', 'BuscaminasController@index');
    Route::get('game', 'GameController@index');
    Route::get('snake', 'GameController@index');
});
