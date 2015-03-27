<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use StrimUp\Notification;
class NotificationsTableSeeder extends Seeder {

    public function run()
    {
        try{
        	Notification::truncate();
        	Notification::create([
        		
        	]);
        }catch(exception $e){

        }
    }

}