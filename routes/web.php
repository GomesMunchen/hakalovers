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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middelware'=>'auth'], function(){
  Route::get('/import_xml', 'ImportExcelController@index');
  Route::post('/import_xml/import', 'ImportExcelController@import');

});


Route::group(['middleware'=>'auth', 'prefix'=>'torcedor'], function() {

          Route::get('/', 'TorcedorController@index');
          Route::get('/add', 'TorcedorController@create');
          Route::post('/', 'TorcedorController@store');
          Route::get('{id}', 'TorcedorController@show');
          Route::get('/edit/{id}', 'TorcedorController@edit');
          Route::put('{id}','TorcedorController@update');
          Route::delete('{id}', 'TorcedorController@destroy');
          Route::post('/busca', 'TorcedorController@busca');
          Route::get('/letra', 'TorcedorController@buscaLetra');

});
