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
    return view('home');
});

Route::get('/home', "UsuarioLoginController@logout");
Route::get('/login', "UsuarioLoginController@login");
Route::post('/autentica', "UsuarioLoginController@autentica");
Route::get('/dashboard', "DadosSiteController@dashboard");
Route::post('/busca', "DadosSiteController@dadosSite");
Route::get('/artigos',"DadosSiteController@listar");
Route::get('/alterar', "DadosSiteController@alterar");
Route::get('/excluir/{id}', "DadosSiteController@excluir");
