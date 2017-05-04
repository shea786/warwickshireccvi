<?php

use Illuminate\Database\Seeder;

class MatchTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('match_types')->delete();
        
        \DB::table('match_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'BBSNL',
                'display_name' => 'BCEW National league',
                'description' => 'Description',
                'created_at' => '2017-04-28 09:41:10',
                'updated_at' => '2017-04-28 09:41:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'BBSPCHSMC',
                'display_name' => 'BBS Primary Club Heindrich Swanepoel Memorial Cup',
                'description' => 'British Blind Sport Primary Club Heindrich Swanepoel Memorial Cup Description',
                'created_at' => '2017-04-28 09:37:31',
                'updated_at' => '2017-04-28 09:37:31',
            ),
        ));
        
        
    }
}