<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use StrimUp\Note;

class NotesTableSeeder extends Seeder {

    public function run()
    {
    	try{
    		Note::truncate();
        	Note::create([
        	'tutorial_id'=>'1',
        	'text'=>'these are my notes'
        ]);
    	}catch(exception $e){

    	}
       
    }

}