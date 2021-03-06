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
    return view('home');
});

Route::get('mis-ideas','IdeasController@index');
Route::post('guardar-idea','IdeasController@store');
Route::delete('eliminar-idea/{id}','IdeasController@destroy');