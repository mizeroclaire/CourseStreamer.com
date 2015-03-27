<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use StrimUp\Exercise;
class ExercisesTableSeeder extends Seeder {

    public function run()
    {
        try {
        	Exercise::truncate();
        	Exercise::create([
        		'tutorial_id'=>'1',
        		'problem'=>'what is variable',
        		'solution'=>'not yet answeres'
        	]);
        } catch (Exception $e) {
        	
        }
    }

}