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


/**
 * REST API Routes
 * @author Arnold Mwumva <fordarnold@gmail.com>
 */

# api help
Route::get('api/help/users/auth', 'HelpController@getUserAuth');    
Route::get('api/help/resources/{resource}', 'HelpController@getResourceDocs');

# users
Route::resource('users','Api\UsersController');

# profiles
Route::resource('profiles','Api\ProfilesController');

# groups
Route::resource('groups','Api\GroupsController');

# countries
Route::resource('countries','Api\CountriesController');

# currencies
Route::resource('currencies','Api\CurrenciesController');


# test !
Route::get('users/1/home', function ()
{
	return view('users/home');
}); 