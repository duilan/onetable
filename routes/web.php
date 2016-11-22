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

Route::group(['prefix'=>'admin'], function () {
  Route::get('/', 'OnetableController@index');
  Route::resource('usuarios', 'UsuariosController');
  Route::resource('roles', 'RolesController');
});

Route::get('/home', 'HomeController@index');

Route::get('/{slung?}', 'HomeController@index');
