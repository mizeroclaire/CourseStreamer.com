<?php

use Illuminate\Database\Seeder;
use StrimUp\Message;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MessagesTableSeeder extends Seeder {

    public function run()
    {
	    try{
	       Message::truncate();
	       Message::create([
	       	'from_user_id'=>'1',
	       	'to_user_id'=>'2',
	       	'message'=>'hello richard'

	       	]);
	   }catch(exception $e){
	   		//report any error happen by on my email or log it
	   }
    }

}