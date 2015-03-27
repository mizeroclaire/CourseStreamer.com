<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use StrimUp\Assignment;
class AssignmentsTableSeeder extends Seeder {

    public function run()
    {
        try {
        	Assignment::truncate();	
        	Assignment::create([
        		'tutorial_id'=>'1',
        		'problem'=>'define what is programming',
        		'solution'=>'is nothing just to think'
        	]);
        } catch (Exception $e) {
        	
        }
    }

}