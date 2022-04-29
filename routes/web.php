<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\RegistrationController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('register', 'App\Http\Controllers\RegistrationController@store');
Route::get('/login', 'App\Http\Controllers\RegistrationController@login');

Route::get('/login', 'App\Http\Controllers\SessionsController@create');
Route::post('/login', 'App\Http\Controllers\SessionsController@store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy');

Route::get('/mainpage', function () {
    return view('mainpage');
});

Route::get('/createPOST', 'App\Http\Controllers\PostController@create');
Route::post('/createPOST', 'App\Http\Controllers\PostController@store');

Route::get('/viewPOST', 'App\Http\Controllers\PostController@view');

