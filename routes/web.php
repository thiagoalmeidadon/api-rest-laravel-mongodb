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

Route::get('/usuario/teste', ['as'=>'teste.usuario','uses'=>'UsuarioController@testando']);

Route::get('/usuario', ['as'=>'exibe.usuario','uses'=>'UsuarioController@index']);
Route::post('/usuario', ['as'=>'salva.usuario' ,'uses' => 'UsuarioController@salvar']);
Route::put('/usuario/{id}', ['as'=>'atualiza.usuario' ,'uses' => 'UsuarioController@update']);
Route::delete('/usuario/{id}', ['as'=>'deleta.usuario' ,'uses' => 'UsuarioController@delete']);
