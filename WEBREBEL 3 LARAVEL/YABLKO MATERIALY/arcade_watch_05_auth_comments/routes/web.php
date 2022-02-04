<?php

use App\User;

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


// auth
Auth::routes();

// Homepage
Route::get('/', 'PostController@index')->name('home');

// Posts
Route::resource('posts', 'PostController');

// Comments
Route::resource('comments', 'CommentController')->only([
	'store', 'update', 'destroy'
]);
