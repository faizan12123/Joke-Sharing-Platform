<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/greeting', function () {
    return view('greeting', ['name' => 'Faizan', 'movie_title' => 'Matrix']); #dependency injection
});

// Route::redirect('/greeting', '/');