<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware' => ['auth','authUsuarioAdmin'] ], function () {
    Route::resource('usuarios', 'UsuariosController');
    Route::resource('roles', 'RolesController');
    Route::resource('paises', 'PaisesController');
    Route::resource('negocios', 'NegociosController');
    Route::get('/{slug?}', 'HomeController@index');
});

Route::group(['prefix'=>'negocio', 'middleware' => ['auth','authUsuarioNegocio'] ], function () {
    Route::resource('insumoTipos', 'InsumoTiposController');
    Route::resource('sucursales', 'SucursalesController');
    Route::resource('insumos', 'InsumosController');
    Route::get('/{slug?}', 'HomeController@index');
});

Route::group(['prefix'=>'sucursal', 'middleware' => ['auth','authUsuarioSucursal'] ], function () {
    Route::resource('mesas', 'MesasController');
    Route::resource('reservaciones', 'ReservacionesController');
    Route::resource('ajustes', 'AjustesSucursalController');
    Route::get('/{slug?}', 'HomeController@index');
});

Route::get('/home', 'HomeController@index');

Route::get('/logotipos/{logo}','DisksController@logotipos');
Route::get('/fotosucursales/{foto}','DisksController@fotosucursal');
Route::get('/fotoinsumos/{foto}','DisksController@fotoinsumo');
Route::get('/{slug?}', 'HomeController@index');
