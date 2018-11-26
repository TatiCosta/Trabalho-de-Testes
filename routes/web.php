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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::group(['prefix'=>'consultas','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'consultas', 'uses'=> 'ConsultasController@index']);
        Route::get('create', ['as'=>'consultas.create', 'uses'=> 'ConsultasController@create']);
        Route::get('{id}/destroy', ['as'=>'consultas.destroy', 'uses'=> 'ConsultasController@destroy']);
        Route::get('{id}/edit', ['as'=>'consultas.edit', 'uses'=> 'ConsultasController@edit']);
        Route::put('{id}/update', ['as'=>'consultas.update', 'uses'=> 'ConsultasController@update']);
        Route::post('store', ['as'=>'consultas.store', 'uses'=> 'ConsultasController@store']);

        Route::get('createmaster', ['as'=>'consultas.createmaster', 'uses'=>'ConsultasController@createmaster']);
        Route::post('masterdetail', ['as'=>'consultas.masterdetail', 'uses'=>'ConsultasController@masterdetail']);
    });
    
    Route::group(['prefix'=>'horarios','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'horarios', 'uses'=> 'HorariosController@index']);
        Route::get('create', ['as'=>'horarios.create', 'uses'=> 'HorariosController@create']);
        Route::get('{id}/destroy', ['as'=>'horarios.destroy', 'uses'=> 'HorariosController@destroy']);
        Route::get('{id}/edit', ['as'=>'horarios.edit', 'uses'=> 'HorariosController@edit']);
        Route::put('{id}/update', ['as'=>'horarios.update', 'uses'=> 'HorariosController@update']);
        Route::post('store', ['as'=>'horarios.store', 'uses'=> 'HorariosController@store']);
         
    });
    
    Route::group(['prefix'=>'usuarios','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'usuarios', 'uses'=> 'UsuariosController@index']);
        Route::get('create', ['as'=>'usuarios.create', 'uses'=> 'UsuariosController@create']);
        Route::get('{id}/destroy', ['as'=>'usuarios.destroy', 'uses'=> 'UsuariosController@destroy']);
        Route::get('{id}/edit', ['as'=>'usuarios.edit', 'uses'=> 'UsuariosController@edit']);
        Route::put('{id}/update', ['as'=>'usuarios.update', 'uses'=> 'UsuariosController@update']);
        Route::post('store', ['as'=>'usuarios.store', 'uses'=> 'UsuariosController@store']);
    });

    Route::group(['prefix'=>'user','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'user', 'uses'=> 'RegisterController@index']);
        Route::get('create', ['as'=>'user.create', 'uses'=> 'RegisterController@create']);
        Route::get('{id}/destroy', ['as'=>'user.destroy', 'uses'=> 'RegisterController@destroy']);
        Route::get('{id}/edit', ['as'=>'user.edit', 'uses'=> 'RegisterController@edit']);
        Route::put('{id}/update', ['as'=>'user.update', 'uses'=> 'RegisterController@update']);
        Route::post('store', ['as'=>'user.store', 'uses'=> 'RegisterController@store']);
    });
    
    Route::group(['prefix'=>'servicos','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'servicos', 'uses'=> 'ServicosController@index']);
        Route::get('create', ['as'=>'servicos.create', 'uses'=> 'ServicosController@create']);
        Route::get('{id}/destroy', ['as'=>'servicos.destroy', 'uses'=> 'ServicosController@destroy']);
        Route::get('{id}/edit', ['as'=>'servicos.edit', 'uses'=> 'ServicosController@edit']);
        Route::put('{id}/update', ['as'=>'servicos.update', 'uses'=> 'ServicosController@update']);
        Route::post('store', ['as'=>'servicos.store', 'uses'=> 'ServicosController@store']);
    });

    Route::group(['prefix'=>'medicos','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'medicos', 'uses'=> 'MedicosController@index']);
        Route::get('create', ['as'=>'medicos.create', 'uses'=> 'MedicosController@create']);
        Route::get('{id}/destroy', ['as'=>'medicos.destroy', 'uses'=> 'MedicosController@destroy']);
        Route::get('{id}/edit', ['as'=>'medicos.edit', 'uses'=> 'MedicosController@edit']);
        Route::put('{id}/update', ['as'=>'medicos.update', 'uses'=> 'MedicosController@update']);
        Route::post('store', ['as'=>'medicos.store', 'uses'=> 'MedicosController@store']);
    });
    
    Route::group(['prefix'=>'tipousuario','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'tipousuario', 'uses'=> 'TipoUsuarioController@index']);
        Route::get('create', ['as'=>'tipousuario.create', 'uses'=> 'TipoUsuarioController@create']);
        Route::get('{id}/destroy', ['as'=>'tipousuario.destroy', 'uses'=> 'TipoUsuarioController@destroy']);
        Route::get('{id}/edit', ['as'=>'tipousuario.edit', 'uses'=> 'TipoUsuarioController@edit']);
        Route::put('{id}/update', ['as'=>'tipousuario.update', 'uses'=> 'TipoUsuarioController@update']);
        Route::post('store', ['as'=>'tipousuario.store', 'uses'=> 'TipoUsuarioController@store']);
    });
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

