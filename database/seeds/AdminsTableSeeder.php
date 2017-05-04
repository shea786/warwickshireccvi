<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Asif',
                'lastname' => 'Ali',
                'email' => 'shea786@live.co.uk',
                'username' => 'shea786',
                'password' => '$2y$10$u5g8RMOZpO2ctrGJssCm7eCvDVSzGhwITSAfI9cCFpkiyRJasu5EG',
                'remember_token' => NULL,
                'status' => 1,
                'moderated_at' => '2017-04-22 22:10:29',
                'moderated_by' => NULL,
                'created_at' => '2017-04-22 22:10:29',
                'updated_at' => '2017-04-22 22:10:29',
            ),
        ));
        
        
    }
}