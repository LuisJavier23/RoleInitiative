<?php

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
    return view('landing');
});

Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');

Route::get('/home', function () {
    return view('login');
});

Route::get('/characters', function () {
    return view('characters');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/landing', function () {
    return view('landing');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');