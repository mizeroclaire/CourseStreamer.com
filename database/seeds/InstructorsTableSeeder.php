<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use StrimUp\Instructor;

class InstructorsTableSeeder extends Seeder {

    public function run()
    {
    try{
       DB::table('instructors')->truncate();
          $instructors=array(
              ['class_id'=>'1','instution_id'=>'1','profession'=>'master in java']
            );
          DB::table('instructors')->insert($instructors);
  	}catch(exception $e){
   		
   }
}

}