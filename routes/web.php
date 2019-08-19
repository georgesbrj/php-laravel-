<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

/*rota para home*/
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);
/*rota para listar todos os cursos o as e um apelido com a extensao*/
Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
/*rota para adicionar*/
Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
/*rota para salvar*/
Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
/*rota para  editar*/
Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
/*rota para atualizar*/
Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
/*rota para deletar*/
Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);
