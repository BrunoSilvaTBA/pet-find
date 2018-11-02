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
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/adote-me', 'HomeController@adote')->name('adote');
Route::get('/contato', 'HomeController@contato')->name('contato');
Route::get('/cadastro', 'HomeController@cadastro')->name('cadastro');
Route::get('/painel', 'PainelUsuarioController@index')->name('painel');

Route::post('/cadastrar', 'UsuarioController@store')->name('cadastrar');
Route::post('/logar', 'UsuarioController@logar')->name('logar');




