<?php

class RolesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('roles')->truncate();
        //creating roles

        
        
        DB::table('roles')->insert(array(
            array('name' => 'admin', 'display_name' => 'Admin'),
            array('name' => 'user', 'display_name' => 'User'),
        ));




        // Uncomment the below to run the seeder
        // DB::table('roles')->insert($roles);
    }

}
