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

Route::get('/', 'WelcomeController@index');
Route::get('in/vids', 'TutorialController@index');
Route::get('home', 'HomeController@index');

Route::get('settings', 'HomeController@settings');

Route::get('privacy', 'HomeController@privacy');

Route::get('play-ground', 'HomeController@play');
//add some comments
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


