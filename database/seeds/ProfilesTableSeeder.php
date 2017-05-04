<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profiles')->delete();
        
        \DB::table('profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'description' => '<p>I am the developer of the site</p>',
                'debut' => 'Hampshire - 2012',
                'date_of_birth' => '1996-06-17',
                'nationality' => 'British',
                'height' => '182.22',
                'weight' => '120.00',
                'shirt_number' => 10,
                'twitter' => NULL,
                'facebook' => '100006732941971',
                'instagram' => 'shea786',
                'snapchat' => 'shea768',
                'created_at' => '2017-04-22 22:41:39',
                'updated_at' => '2017-04-22 22:41:39',
            ),
        ));
        
        
    }
}