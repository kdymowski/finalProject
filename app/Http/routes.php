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
<<<<<<< HEAD
Route::get('home', 'PagesController@home');
Route::get('create', 'PagesController@createTeams');
Route::get('teams', 'PagesController@store');
=======
//Route::get('home', 'PagesController@home');
>>>>>>> a31a7095fee6b1b609f76cb848993f1e8ba1ba58
Route::get('auth/login', 'PagesController@auth');

Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);