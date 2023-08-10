<?php

use Illuminate\Support\Facades\Route;

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

#Rotas da view cadastro
Route::get('/cadastro', 'App\Http\Controllers\UserController@cadastro')->name('cadastro');
Route::post('/cadastrar', 'App\Http\Controllers\UserController@cadastrar')->name('cadastrar');

#Rotas da view login
Route::get('/login', 'App\Http\Controllers\UserController@login')->name('login');
Route::post('/logar', 'App\Http\Controllers\UserController@logar')->name('logar');
Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');

#Rota para executar o middleware e impedir interação sem uma sessão ativa
Route::group(['middleware' => ['login']], function() {

    #Rota para sobre
    Route::get('/sobre', 'App\Http\Controllers\navController@sobre')->name('sobre');

    #Rota para download
    Route::get('/download', 'App\Http\Controllers\navController@download')->name('download');

    #Rota para home
    Route::get('/home', 'App\Http\Controllers\navController@home')->name('home');

    #Rota para parceria
    Route::get('/parceria', 'App\Http\Controllers\navController@parceria')->name('parceria');

    #Rotas para conta
    Route::group(['prefix' => 'conta'], function (){
        Route::get('/', 'App\Http\Controllers\UserController@conta')->name('conta');
        Route::get('/edicao', 'App\Http\Controllers\UserController@edicao')->name('edicao');
        Route::post('/editar', 'App\Http\Controllers\UserController@editar')->name('editarConta');
        Route::get('/excluir', 'App\Http\Controllers\UserController@deletar')->name('deletarConta');
});

    #Rotas para corrida
    Route::group(['prefix' => 'corrida'], function () {
        Route::get('/', 'App\Http\Controllers\corridaController@corrida')->name('corrida');
        Route::post('/cadastrar', 'App\Http\Controllers\corridaController@cadastrarCorrida')->name('cadastrarCorrida');
        Route::get('/listar', 'App\Http\Controllers\corridaController@listarCorridas')->name('listarCorridas');
        Route::post('/buscar', 'App\Http\Controllers\corridaController@buscarCorridas')->name('buscarCorridas');
});

});