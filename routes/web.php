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

Route::group(['middleware' => 'web'], function () {

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/test/{name?}', 'TestController@dashboard');

	Route::get('/add', 'TestController@add_data');

	Route::get('/view', 'TestController@view_data');

	Route::get('/form', 'TestController@form');

	Route::post('/form-submit', [

		'uses'  => 'TestController@formSubmit',
		'as'    => 'f.submit'
	]);

});

Route::get('/author/add', 'AuthorController@create');
Route::get('/author', 'AuthorController@index');

Route::get('/book/add', 'BookController@create');
Route::get('/book', 'BookController@index');

