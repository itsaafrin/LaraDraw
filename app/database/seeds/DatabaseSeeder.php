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
                //disable the foreign key constraints
                DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                
		//seed the tables
                $this->call('RolesTableSeeder');
		$this->call('UsersTableSeeder');
                $this->call('UsersRolesTableSeeder');
                
                $this->command->info('Seeding completed sucessfully!');
                
                
                //enables the foreign key constraints
                DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		
		
	}

}