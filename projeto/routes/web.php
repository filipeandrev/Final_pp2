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
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('login');
});
Route:: get ('/funcionario', 'NaController@index' ) ->name ('namoral');

Route:: post ('/login/funcionario', 'Auth\FunController@login' ) ->name ('log');

Route:: post ('/cadastro', 'CadastroController@cadastrar') ->name ('cadastro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/veiculos', 'VeiculoController');

Route::get('/veiculos/{user}', 'VeiculoController@show')->name('veiculos.list');