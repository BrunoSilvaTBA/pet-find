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

Route::middleware('api')->group(function(){
   Route::get('/especies', 'Api\EspecieController@getEspecies')->name('api.especies');
   Route::get('/raca/{especie}', 'Api\RacaController@getRacas')->name('api.racas');

   Route::get('/raca/{especie}', 'Api\RacaController@getRacas')->name('api.racas');

   Route::get('/caracteristicas/{especie}', 'Api\EspecieCaracteristicaController@getCaracteristicas')->name('api.caracteristicas.especies');
});
