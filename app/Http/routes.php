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

/********* conocenos: info de los lideres ***********/

	Route::get('clover', [
		'uses' => 'CloverController@index',
		'as' =>'clover'
	]);

	Route::get('maria', [
		'uses' => 'MariaController@index',
		'as' =>'maria'
	]);

/********* info de los cursos ***********/	

	Route::get('basesLegales', [
		'uses' => 'HomeController@basesLegales',
		'as' =>'basesLegales'
	]);

	Route::get('modalidadesElementos', [
		'uses' => 'HomeController@modalidadesElementos',
		'as' =>'modalidadesElementos'
	]);	