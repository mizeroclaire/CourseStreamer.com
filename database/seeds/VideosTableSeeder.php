<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use StrimUp\Video;
class VideosTableSeeder extends Seeder {

    public function run()
    {
        try {
        	Video::truncate();
        	//use faker for url and name, for me i don't have installed!
        	Video::create([
        		'tutorial_id'=>'1',
        		'name'=>'android for biginner',
        		'url'=>'www.youtube.com/StrimUp/3433'
        	]);
        } catch (Exception $e) {
        	
        }
    }

}