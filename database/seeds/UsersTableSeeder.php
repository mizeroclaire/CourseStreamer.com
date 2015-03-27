<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use StrimUp\User as User;

// Composer: "fzaninotto/faker"
//use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	/*$faker = Faker::create();

    	$user = new User();
        $user->email = 'user@user.com';
		$user->username = 'user';
		$user->password = 'pass';
		$user->first_name = $faker->firstName;
		$user->last_name = $faker->lastName;
		$user->save();

    	for ($i=0; $i < 3 ; $i++) 
    	{ 
    		$user = new User();
	        $user->email = $faker->email;
			$user->username = $faker->username;
			$user->password = 'pass';
			$user->first_name = $faker->firstName;
			$user->last_name = $faker->lastName;
			$user->save();
    	}*/
    	User::truncate();
    	User::create([
    		'email'=>'beastar457@gmail.com',
    		'username'=>'richard457',
    		'password'=>'pass',
    		'first_name'=>'richard',
    		'last_name'=>'muragijimana'
    	]);
    }

}