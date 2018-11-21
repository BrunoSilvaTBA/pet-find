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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/adote-me', 'HomeController@adote')->name('adote');
Route::get('/contato', 'HomeController@contato')->name('contato');
Route::get('/cadastro', 'HomeController@cadastro')->name('cadastro');
Route::get('/municipios/{uf}', 'MunicipioController@getMunicipiosByUF')->name('municipios.uf');
Route::get('/bairros/{uf}/{code}', 'BairroController@getBairrosByUFAndCode')->name('bairro.uf');
Route::post('/cadastrar', 'UsuarioController@store')->name('cadastrar');
Route::post('/logar', 'UsuarioController@logar')->name('logar');
Route::post('/carregar-foto-pet', 'PetController@uploadFotoPet')->name('carregar-foto-pet');
Route::get('/pet/{slug}', 'PetController@verPet')->name('ver-pet');

Route::group(['middleware' =>['auth']], function(){
    Auth::routes();

    Route::get('/painel', 'PainelUsuarioController@index')->name('painel');
    Route::get('/painel/cadastrar-pet', 'PainelUsuarioController@cadastrarPet')->name('cadastrar.pet');
    Route::post('/painel/cadastrar-pet', 'PetController@store')->name('cadastrar.pet.post');
});

