<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tutorials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('class_id');
			$table->string('name');
			$table->string('slug')->nullable();
			$table->string('language')->default('EN');
			$table->text('description')->nullable();
			$table->string('url')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tutorials');
	}

}
