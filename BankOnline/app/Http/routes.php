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
    Route::resource('tarjetas','TarjetasController');
    Route::get('MostrarTarjeta/{id}',['as'=>'admin/MostrarTarjeta','uses'=>'TarjetasController@mostrar']);
    Route::group(['middleware' => 'superAdmin'], function () {
        Route::put('cliente/activate/{id}',['as'=>'admin/cliente/activate','uses'=>'CustomersController@activate']);
        Route::resource('clientes', 'CustomersController');
    });

});
