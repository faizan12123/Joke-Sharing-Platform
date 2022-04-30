<?php

use App\Http\Controllers\MemeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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
/*format routes: Route::get($uri, $callback); */

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'welcome');





// can be used to get values from the user and inject them into the view. For example they can pass a value through the get request and then we can extract them and dump them into the route.
Route::get('/memes', function () {
    return view('memes', ['name' => 'Faizan', 'movie_title' => 'Matrix']) ; #dependency injection
});

// when user route is rendered, use the usecontroller as it's controller
Route:: resource('/user', UserController::class);

//when the users route is rendered use the showAll function of the usercontroller as it's controller

Route:: get('/users', [UserController::class, 'show_all'])->middleware('auth.basic');

// Route:: get('/register', [UserController::class, 'create']);
Route:: get('/register', [UserController::class, 'create']);

Route:: post('/register', [UserController::class,  'store']);

Route:: get('/login', [loginController::class, 'login']);
// Route:: get('/registerUI',);

// Route:: resource('/home', MemeController::class);
Route:: get('/home', [MemeController::class, 'show_all']);
