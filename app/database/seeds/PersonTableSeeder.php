<?php

class PersonTableSeeder extends Seeder {

	/**
	 * Run the database seeds for persons.
	 *
	 * @return void
	 */
	public function run()
	{
		$persons = array(
			array('first_name' => 'Mike', 'last_name' => 'Tayson', 'job' => 'Boxer'),
			array('first_name' => 'Tom', 'last_name' => 'Hanks', 'job' => 'Actor'),
			array('first_name' => 'Helen', 'last_name' => 'Hunt', 'job' => 'Actor'),
			array('first_name' => 'Denzel', 'last_name' => 'Washington', 'job' => 'Actor'),
			array('first_name' => 'Madonna', 'last_name' => '', 'job' => 'Singer'),
		);

		DB::table('persons')->insert($persons);
	}

}
