<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
        return view('app');
    });

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/{lang}', function ($lang) {
     session(['lang' => $lang]);
     return \Redirect::back();
 })->where([
     'lang' => 'en|es'
 ]);
