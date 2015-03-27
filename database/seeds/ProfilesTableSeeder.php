<?php

use Illuminate\Database\Seeder;
use StrimUp\Profile;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ProfilesTableSeeder extends Seeder {

    public function run()
    {
        try{
            Profile::truncate();
            for($i=1; $i<=5; $i++){
                Profile::create([
                	'user_id'=>$i,
                	'pic'=>'you.png',
                	'bio'=>'my biography here'.$i,
                	'location'=>'kigali',
                	'country_id'=>$i
                ]);
            }
        }catch(exception $e){

        }
    }

}