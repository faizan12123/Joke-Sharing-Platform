<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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
/*format routes: Route::get($uri, $callback); */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::view('/login', 'login');
// Route::view('/register', 'create');




// can be used to get values from the user and inject them into the view. For example they can pass a value through the get request and then we can extract them and dump them into the route.
Route::get('/greeting', function () {
    return view('greeting', ['name' => 'Faizan', 'movie_title' => 'Matrix']); #dependency injection
});

Route:: resource('user', UserController::class);
Route:: get('/users', [UserController::class, 'show_all']);

Route:: view('/register', 'register');

Route::get('/home', function () {
    return view('home'); 
});
// Route::redirect('/greeting', '/');