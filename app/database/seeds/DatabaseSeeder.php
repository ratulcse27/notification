<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('RolesTableSeeder');
		$this->call('PermissionsTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('EntrustTableSeeder');
		$this->call('ApplicationsTableSeeder');
	}

}
