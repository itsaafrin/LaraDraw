<?php

class UsersTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('users')->truncate();

        $user = User::create(array(
                    //'username' => 'admin',
                    'first_name' => 'System',
                    'last_name' => 'Administrator',
                    'email' => 'admin@site.com',
                    'password' => Hash::make('123')
        ));
        
        $user = User::create(array(
                    //'username' => 'user',
                    'first_name' => 'System',
                    'last_name' => 'User',
                    'email' => 'user@site.com',
                    'password' => Hash::make('123')
        ));


        // Uncomment the below to run the seeder
        // DB::table('users')->insert($users);
    }

}
