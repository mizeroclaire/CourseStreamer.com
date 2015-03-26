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

//Route::resource('home','HomeController');


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
	# countries
	Route::resource('countries','Api\CountriesController');

	# currencies
	Route::resource('currencies','Api\CurrenciesController');
//iI used prefix In to allow multiple service that will
//be offered by StrimUp eg In/education, or In/businesss
Route::group(array('prefix' => 'In','before'=>'csrf'), function(){

    Route::resource('learn','TutorialController');
    # users
	Route::resource('users','Api\UsersController');

	#tutorial by specific user
	Route::resource('users.learn','Api\LearningController');

	# profiles
	Route::resource('profiles','Api\ProfilesController');

	# groups
	Route::resource('groups','Api\GroupsController');

	Route::resource('strims','Api\UsersController');

});

/*Route::get('in/community',function(){
   return view('layouts.community') ;
});


Route::get('users/1/edit', function ()
{
	return view('users/edit');
}); */