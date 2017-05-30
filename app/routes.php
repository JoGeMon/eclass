<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'as' => 'index',
	'uses' => 'CoordinadoraController@index'
));

Route::any('/ranking', array(
	'as' => 'ranking',
	'uses' => 'CoordinadoraController@index'
));

Route::any('/eficiencia/{mes}', array(
	'as' => 'eficiencia',
	'uses' => 'CoordinadoraController@eficiencia'
));

Route::get('/detalleRanking/{mes}',array(
	'as' => 'detalleRanking',
	'uses' => 'CoordinadoraController@ranking'
));