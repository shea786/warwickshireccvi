<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Asif',
                'lastname' => 'Ali',
                'email' => 'shea786@live.co.uk',
                'username' => 'shea786',
                'password' => '$2y$10$u5g8RMOZpO2ctrGJssCm7eCvDVSzGhwITSAfI9cCFpkiyRJasu5EG',
                'remember_token' => 'QdpA9xZva0cR7DFXmPtfap5YL3imCAuBpHoKhn2x2jeLKHKoTUWug9wEc19m',
                'status' => 1,
                'moderated_at' => '2017-04-22 00:00:00',
                'moderated_by' => 1,
                'created_at' => '2017-04-22 22:10:29',
                'updated_at' => '2017-04-22 22:10:29',
            ),
        ));
        
        
    }
}