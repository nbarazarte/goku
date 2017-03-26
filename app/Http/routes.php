<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/********* index ***********/
	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' =>'home'
	]);

	//Route::get('curso/{curso}','HomeController@curso');

	Route::get('/Servicios/{curso}', [
		'uses' => 'HomeController@curso',
		'as' =>'curso'
	]);

	Route::get('/Blog', [
		'uses' => 'HomeController@blog',
		'as' =>'blog'
	]);

/********* conocenos: info de los lideres ***********/

	Route::get('clover', [
		'uses' => 'CloverController@index',
		'as' =>'clover'
	]);

	Route::get('maria', [
		'uses' => 'MariaController@index',
		'as' =>'maria'
	]);

	Route::put('Enviando', [
			'uses' => 'HomeController@enviar',
			'as' =>'enviar'
	]);	