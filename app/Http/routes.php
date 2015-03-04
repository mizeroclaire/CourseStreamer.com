<?php
/*
|--------------------------------------------------------------------------
| Application Routes
| 
| Here, you can get a bird's eye view of the app structure and api.
|--------------------------------------------------------------------------
*/


Route::get('/', 'WelcomeController@index');
Route::get('in/vids', 'TutorialController@index');
Route::get('home', 'HomeController@index');
Route::get('in/choice','HomeController@pageSwitch');
Route::get('settings', 'HomeController@settings');

Route::get('user/{id}','HomeController@getUser');

Route::get('privacy', 'HomeController@privacy');

Route::get('play-ground', 'HomeController@play');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
