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

Route::group(['middleware' => 'auth'], function() {

	Route::get('/', 'PostController@index');
	Route::get('tag/{id}',  'TagController@show');
	Route::get('user/{id}', 'UserController@show');
	Route::resource('post', 'PostController');

});


// Authentication routes...
Route::get('auth/login',  [ 'as' => 'login',  'uses' => 'Auth\AuthController@getLogin' ]);
Route::get('auth/logout', [ 'as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('auth/register', [ 'as' => 'register', 'uses' => 'Auth\AuthController@getRegister' ]);
Route::post('auth/register', 'Auth\AuthController@postRegister');