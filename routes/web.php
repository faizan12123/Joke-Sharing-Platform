<?php

use App\Http\Controllers\MemeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;





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

// Route::view('/', 'welcome');






// Route::get('/memes', function () {
//     return view('memes', ['name' => 'Faizan', 'movie_title' => 'Matrix']) ; #dependency injection
// });


Route:: resource('/user', UserController::class);
Route:: get('/register', [UserController::class, 'create']);
Route:: post('/register', [UserController::class, 'store']);
Route:: get('/login', [loginController::class, 'login']);
Route:: post('/login', [loginController::class, 'authenticate']);
Route:: get('/home', [MemeController::class, 'show_all']);
Route::get('/logout', [loginController::class, 'logout']);






