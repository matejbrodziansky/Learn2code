<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PagesController;




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



Route::get('/', [PagesController::class,'index']);
Route::get('/blog', [PagesController::class,'blog']);
Route::get('/gallery', [PagesController::class,'gallery']);
Route::get('/contact', [PagesController::class,'contact']);



Route::post('contact', [PagesController::class,'store']);




// foreach ( Route::getRoutes() as $route) {
//     dd($route->uri());
// }

// $routes = array_map(function (\Illuminate\Routing\Route $route)     {         return $route->uri;     }, (array) Route::getRoutes()->getIterator());
// $routes = array_map(function (\Illuminate\Routing\Route $route)
//     { return $route->uri; }, (array) Route::getRoutes()->getIterator());

// dd($routes);
