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
    return view('test.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('visita/{id}','VisitasController@getUsuarios');


Route::group(['prefix'=>'api'], function(){
	//Route::get('ciudades', 'CiudadesController@api');
	
});

	
Route::group(['prefix'=>'admin'], function(){
	Route::resource('clientes','ClientesController');
	Route::resource('provincias','ProvinciasController');
	Route::resource('corredoras','CorredorasController');
	
});

Route::get('provincias/{id}', 'CorredorasController@getProvincias');
Route::get('comunas/{id}', 'CorredorasController@getComunas');
