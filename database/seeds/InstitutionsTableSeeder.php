<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use StrimUp\Institution;

class InstitutionsTableSeeder extends Seeder {

    public function run()
    {
        Institution::truncate();
        Institution::create([

        	'user_id'=>'1'
        ]);
    }

}