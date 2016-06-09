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
    Route::get('/', 'ClienteController@index');

    Route::resource('transacciones','TransaccionesController');
    Route::get('mostrar/{cuenta}',['as'=>'admin/mostrar','uses'=>'TransaccionesController@mostrar']);
    Route::get('mostrarTrans/{cuenta}',['as'=>'admin/mostrarTrans','uses'=>'TransaccionesController@mostrarTrans']);

    Route::get('transacciones/VerificarCuenta/{cuentaOrigen}/{monto}/{cuentaDestino}',['as'=>'admin/transacciones/verificarCuenta','uses'=>'TransaccionesController@verificarCuenta']);

    Route::resource('users', 'UsersController');
    Route::resource('tarjetas','TarjetasController');
    Route::get('MostrarTarjeta/{id}',['as'=>'admin/MostrarTarjeta','uses'=>'TarjetasController@mostrar']);
    Route::post('servicio/renovar', ['as'=>'admin/servicio/renovar','uses'=>'ServicesController@renewal']);
    Route::resource('servicios', 'ServicesController');

    Route::group(['middleware' => 'superAdmin'], function () {
        Route::resource('tarjetas','TarjetasController');
        Route::resource('retiros','RetiroController');
        Route::resource('cuentas', 'AccountController');
        Route::resource('clientes', 'CustomersController');
        Route::put('cuenta/activate/{id}',['as'=>'admin/cuenta/activate','uses'=>'AccountController@activate']);
        Route::get('retiros/VerificarCuenta/{cuenta}/{monto}',['as'=>'admin/retiros/verificarCuenta','uses'=>'RetiroController@verificarCuenta']);
        Route::resource('tarjetas','TarjetasController');
        Route::get('cuenta/new/{id}', 'AccountController@new');
        Route::resource('cuentas', 'AccountController');
        Route::resource('depositos', 'DepositosController');
        /*/*/

        /*//*/


    });

});
