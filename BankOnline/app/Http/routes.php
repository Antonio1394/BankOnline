<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Rutas de Autenticacion
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'admin', 'namespace' => '\Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'UsersController@begin');
<<<<<<< HEAD
    Route::resource('tarjetas','TarjetasController');
=======

    Route::group(['middleware' => 'superAdmin'], function () {  
      Route::resource('clientes', 'CustomersController');
    });
>>>>>>> 471a3915a9b6852dbb328615df375cc81ab2c960
});
