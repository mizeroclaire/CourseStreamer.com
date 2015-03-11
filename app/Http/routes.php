<?php
/*
|--------------------------------------------------------------------------
| Application Routes
| 
| Here, you can get a bird's eye view of the app structure and api.
|--------------------------------------------------------------------------
*/


/**
 * Basic application landing pages
 * @author  Muragijimana Richard <strimup@gmail.com>
 */

Route::get('/', 'WelcomeController@index');

/**
 * Basic application common resources
 * @author Muragijimana richard <strimup@gmail.com>
 */

Route::resource('home','HomeController');


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
Route::resource('api','TutorialController');

Route::get('users/1/home', function ()
{
	return view('users/home ');
}); 

Route::get('users/1/edit', function ()
{
	return view('users/edit');
}); 