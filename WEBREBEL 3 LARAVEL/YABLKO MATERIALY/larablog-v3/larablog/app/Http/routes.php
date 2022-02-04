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

	Route::get('/', 'PostsController@index');         // all posts
	Route::get('tag/{id}', 'TagsController@show');    // posts by tag
	Route::get('user/{id}', 'UsersController@show');  // posts by user

	// posts resource
	Route::resource('posts', 'PostsController', [ 'except' => [ 'show' ] ]);
	Route::get('posts/{id}/delete/', [ 'as' => 'posts.delete', 'uses' => 'PostsController@delete' ]);
	Route::get('{slug}', [ 'as' => 'posts.show', 'uses' => 'PostsController@show' ]);

});

// Authentication routes...
Route::get('auth/login',  [ 'as' => 'login',  'uses' => 'Auth\AuthController@getLogin' ]);
Route::get('auth/logout', [ 'as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('auth/register', [ 'as' => 'register', 'uses' => 'Auth\AuthController@getRegister' ]);
Route::post('auth/register', 'Auth\AuthController@postRegister');