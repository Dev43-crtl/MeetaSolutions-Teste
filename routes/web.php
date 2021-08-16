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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre', 'SobreController@sobre')->name('site.sobre');
Route::get('/usuarios/cadastrar', 'CadastrarUsuarioController@cadastrarUsuario')->name('app.usuarios.cadastrar');
Route::post('/usuarios/cadastrar', 'CadastrarUsuarioController@adicionar')->name('app.usuarios.adicionar');
Route::get('/usuarios/lista', 'ListaUsuarioController@listaUsuarios')->name('app.usuarios.lista');
Route::get('/usuarios/lista/delete/{id}', 'ListaUsuarioController@softdelete')->name('app.usuarios.softdelete');
Route::get('/usuarios/lista/editar/{id}', 'ListaUsuarioController@editar')->name('app.usuarios.editar');
Route::post('/usuarios/lista/editar/{id}', 'ListaUsuarioController@editar')->name('app.usuarios.editar');

Route::get('/loggout', function(){
    return view('site.layouts._components.loggout');
})->name('site.loggout');