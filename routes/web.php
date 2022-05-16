<?php

use App\Http\Controllers\MemeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RatingsController;




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


// Route:: resource('/user', UserController::class);
Route:: get('/register', [UserController::class, 'create']);
Route:: post('/register', [UserController::class, 'store']);
Route:: get('/login', [LoginController::class, 'login']);
Route:: post('/login', [LoginController::class, 'authenticate']);
Route:: get('/home', [MemeController::class, 'show_all']);
Route:: get('/tech', [MemeController::class, 'show_tech']);
Route:: get('/business', [MemeController::class, 'show_business']);
Route:: get('/other', [MemeController::class, 'show_other']);
Route:: get('/biology', [MemeController::class, 'show_bio']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/', function () {
    return redirect('/login');
});

//create post view
Route::get('/createPost', [MemeController::class, 'create']);
//POST the meme
Route::post('/createPost',[MemeController::class, 'store'] );


//create rating view
Route::get('/createRating', [RatingsController::class, 'create']);
//POST the rating
Route::post('/createRating', [RatingsController::class, 'store']);

//web page showing all reviews (view)
Route::get('/reviews', [RatingsController::class, 'show_all']);



