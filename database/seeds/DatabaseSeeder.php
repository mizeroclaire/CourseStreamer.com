<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UsersTableSeeder');
		$this->call('ProfilesTableSeeder');

		$this->call('InstitutionsTableSeeder');
		$this->call('ClassesTableSeeder');
		$this->call('InstructorsTableSeeder');

		$this->call('TutorialsTableSeeder');
		$this->call('VideosTableSeeder');
		$this->call('NotesTableSeeder');
		$this->call('ExamplesTableSeeder');
		$this->call('ExercisesTableSeeder');
		$this->call('AssignmentsTableSeeder');

		$this->call('MessagesTableSeeder');
		$this->call('NotificationsTableSeeder');

		$this->command->info('Seeding Completed Successfully...');
	}

}
