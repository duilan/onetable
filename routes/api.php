<?php

use Illuminate\Http\Request;
use App\Negocio;
use App\Sucursal;
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

Route::get('/negocios', function (Request $request) {
    $negocios = Negocio::where('status','=','activo')
                        ->get(['id','razonSocial as fullName','logo']);
    return response()->json($negocios);
})->middleware('api');


Route::get('/negocios/{id}', function (Request $request ,$id) {
    $sucursal = Sucursal::where('negocio_id','=',$id)
                        ->join('users', 'sucursales.user_id', '=', 'users.id')
                        ->get(['sucursales.id as id_sucursal','sucursales.nombre','sucursales.descripcion as description','users.name as encargado','sucursales.foto as photo']);
    return response()->json($sucursal);
})->middleware('api');
