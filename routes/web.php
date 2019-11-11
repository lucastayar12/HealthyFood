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

<<<<<<< HEAD
Route::get(	'/sobre',['as' =>'site.sobre', 'uses' =>'Site\PaginaController@sobre']);
=======
Route::get(	'/sobre',['as' =>'site.sobre', function(){
	return view('site.sobre');
}]);
>>>>>>> cbf467440a79771a5b34b0694878ed3602a40777

Route::get(	'/contato',['as' =>'site.contato', function(){
	return view('site.contato');
}]);

Route::get(	'/dica/{id}/{titulo?}',['as' =>'site.dica', function(){
	return view('site.dica');
}]);


Route::get('/admin/login',['as' => 'admin.login', function(){
	return view('admin.login.index');
}]);

Route::post('/admin/login', ['as' => 'admin.login', 'uses' => 'Admin\UsuarioController@login']);


<<<<<<< HEAD
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



});

	
=======
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> cbf467440a79771a5b34b0694878ed3602a40777
