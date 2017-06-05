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


Route::group(['middleware' => ['web']], function () {
    //Pàgina principal de l'aplicació
    Route::get('/', 'WelcomeController@index')->name('welcome');

    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es|cat'
    ]);

});

Route::get('/ligas', function () {
    return view('ligas');
});
//Secció d'autentificació
Auth::routes();

//Pàgina principal dels usuaris loguejats
Route::get('/home', 'HomeController@index')->name('home');

//Rutas dinámicas de los juegos
Route::get('game/{game_name}', 'GameController@index');
Route::get('game/topScore/{gameId}', 'GameController@getGameTopScores');
Route::post('game/store/score', 'GameController@store');

//password resets
Route::get('password/reset', 'Auth\ForgotPasswordController@index');
Route::post('password/email', 'Auth\ForgotPasswordController@sendPassword');
