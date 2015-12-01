<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'PagesController@welcome');
Route::get('info', 'PagesController@info');
Route::get('home', 'PagesController@home');
Route::get('auth/login', 'PagesController@auth');
Route::post('auth/{id}/update', 'PagesController@updateInfo');
Route::get('/profile/{uname}', 'ProfileController@index');

Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);