<?php

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
Route::get('/movies', function () {
    return view('movies', ['name' => 'Faizan', 'movie_title' => 'Matrix']); #dependency injection
});

// when user route is rendered, use the usecontroller as it's controller
Route:: resource('/user', UserController::class);

//when the users route is rendered use the showAll function of the usercontroller as it's controller
Route:: get('/users', [UserController::class, 'show_all']);

Route:: get('/login', [UserController::class, 'login']);


Route::get('/home', function () {
    return view('home'); 
});
Route::get('/loginbub', function () {
    return view('loginUI'); 
});

Route::get('/registerbub', function () {
    return view('registerUI'); 
});
// Route::redirect('/greeting', '/');
