<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use StrimUp\Tutorial;

class TutorialsTableSeeder extends Seeder {
 
    public function run()
    {
       try {
       		DB::table('tutorials')->truncate();
       		$tutorials=array(
       				['class_id'=>'1','name'=>'android'],
       			);
       		DB::table('tutorials')->insert($tutorials);
       } catch (Exception $e) {
       	
       }
    }

}