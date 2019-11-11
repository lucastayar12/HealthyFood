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

Route::get(	'/',['as' =>'site.home', function(){
	return view('site.home');
}]);

Route::get(	'/sobre',['as' =>'site.sobre', 'uses' =>'Site\PaginaController@sobre']);

Route::get(	'/contato',['as' =>'site.contato', 'uses' =>'Site\PaginaController@contato']);

Route::post( '/contato/enviar',['as' =>'site.contato.enviar', 'uses' =>'Site\PaginaController@enviarContato']);

Route::get(	'/dica/{id}/{titulo?}',['as' =>'site.dica', function(){
	return view('site.dica');
}]);


Route::get('/admin/login',['as' => 'admin.login', function(){
	return view('admin.login.index');
}]);


Route::post('/admin/login', ['as' => 'admin.login', 'uses' => 'Admin\UsuarioController@login']);


Route::middleware(['auth', 'auth.basic'])->group(function () {

	Route::get('/admin/login/sair', ['as' => 'admin.login.sair', 'uses' => 'Admin\UsuarioController@sair']);


    Route::get('/admin',['as' => 'admin.principal', function(){
	return view('admin.principal.index');
	}]);

    Route::get('/admin/usuarios', ['as' => 'admin.usuarios', 'uses' => 'Admin\UsuarioController@index']);

	Route::get('/admin/usuarios/adicionar', ['as' => 'admin.usuarios.adicionar', 'uses' => 'Admin\UsuarioController@adicionar']);

	Route::get('/admin/usuarios/salvar', ['as' => 'admin.usuarios.salvar', 'uses' => 'Admin\UsuarioController@salvar']);

	Route::get('/admin/usuarios/editar/{id}', ['as' => 'admin.usuarios.editar', 'uses' => 'Admin\UsuarioController@editar']);

	Route::put('/admin/usuarios/atualizar/{id}', ['as' => 'admin.usuarios.atualizar', 'uses' => 'Admin\UsuarioController@atualizar']);

	Route::get('/admin/usuarios/deletar/{id}', ['as' => 'admin.usuarios.deletar', 'uses' => 'Admin\UsuarioController@deletar']);

	Route::get('admin/paginas',['as' => 'admin.paginas', 'uses' => 'Admin\PaginaController@index']);
	
	Route::get('admin/paginas/editar/{id}',['as' => 'admin.paginas.editar', 'uses' => 'Admin\PaginaController@editar']);
	
	Route::put('admin/paginas/atualizar/{id}',['as' => 'admin.paginas.atualizar', 'uses' => 'Admin\PaginaController@atualizar']);


	Route::get('/admin/tipos', ['as' => 'admin.tipos', 'uses' => 'Admin\TipoController@index']);

	Route::get('/admin/tipos/adicionar', ['as' => 'admin.tipos.adicionar', 'uses' => 'Admin\TipoController@adicionar']);

	Route::get('/admin/tipos/salvar', ['as' => 'admin.tipos.salvar', 'uses' => 'Admin\TipoController@salvar']);

	Route::get('/admin/tipos/editar/{id}', ['as' => 'admin.tipos.editar', 'uses' => 'Admin\TipoController@editar']);

	Route::put('/admin/tipos/atualizar/{id}', ['as' => 'admin.tipos.atualizar', 'uses' => 'Admin\TipoController@atualizar']);

	Route::get('/admin/tipos/deletar/{id}', ['as' => 'admin.tipos.deletar', 'uses' => 'Admin\TipoController@deletar']);



	Route::get('/admin/dicas', ['as' => 'admin.dicas', 'uses' => 'Admin\DicaController@index']);

	Route::get('/admin/dicas/adicionar', ['as' => 'admin.dicas.adicionar', 'uses' => 'Admin\DicaController@adicionar']);

	Route::get('/admin/dicas/salvar', ['as' => 'admin.dicas.salvar', 'uses' => 'Admin\DicaController@salvar']);

	Route::get('/admin/dicas/editar/{id}', ['as' => 'admin.dicas.editar', 'uses' => 'Admin\DicaController@editar']);

	Route::put('/admin/dicas/atualizar/{id}', ['as' => 'admin.dicas.atualizar', 'uses' => 'Admin\DicaController@atualizar']);

	Route::get('/admin/dicas/deletar/{id}', ['as' => 'admin.dicas.deletar', 'uses' => 'Admin\DicaController@deletar']);


});

	