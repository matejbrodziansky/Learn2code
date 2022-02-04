<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

//AUTH
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/', function() {

//     $post = DB::table('posts'); 
//     exit;
//     echo '<pre>';
//     // print_r($post->get());
//     print_r($post->first());
//     echo '</pre>';
// });




// Route::get('/', [App\Http\Controllers\UserController::class, 'index']);

// Route::get('/', 'UserController@login');
// Route::get('user/login', 'UserController@login');
Route::get('user/login', 'UserController@login');
Route::get('user/register', 'UserController@register');

Route::get('auth/login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::get('auth/logout', ['as' => 'login', 'uses' => 'UserController@logout']);


Route::resource('post', 'PostController');
// Route::resource('tag', 'TagController');










// /implicitne adresy
// Route::resource('user.register', UserRegisterController::class);
// Route::resource('user',UserController::class);
// Route::get('login', [
//     'as' => 'login',
//     'user' => 'UserController@getLogin'
// ]);






// nezabudni pred form 
// laravelcollective/html
// composer require barryvdh/laravel-ide-helper
// nezabutnuť input token ak nebudeme form pomoc používať 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
