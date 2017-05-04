<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Warwickshire CCVI',
                'venue_id' => 1,
                'logo' => 'new website logo.png',
                'description' => 'This is Warwickshire CCVI',
                'created_at' => '2017-04-23 01:02:27',
                'updated_at' => '2017-04-23 01:02:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Somerset VICC',
                'venue_id' => 8,
                'logo' => 'somerset-team-photo.jpg',
                'description' => 'This is Somerset VICC',
                'created_at' => '2017-04-26 16:28:16',
                'updated_at' => '2017-04-26 16:28:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nottinghamshire Knights',
                'venue_id' => 2,
                'logo' => 'Nottinghamshire.png',
                'description' => 'Nottinghamshire Knights',
                'created_at' => '2017-04-28 10:28:15',
                'updated_at' => '2017-04-28 10:28:15',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lancashire Lions',
                'venue_id' => 3,
                'logo' => 'Lancashire Lions.jpg',
                'description' => 'Lancashire Lions',
                'created_at' => '2017-04-28 10:28:41',
                'updated_at' => '2017-04-28 10:28:41',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'London Metro',
                'venue_id' => 4,
                'logo' => 'somerset-team-photo.jpg',
                'description' => 'London Metro',
                'created_at' => '2017-04-28 10:29:03',
                'updated_at' => '2017-04-28 10:29:03',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Northants Steelbacks',
                'venue_id' => 5,
                'logo' => 'northants.png',
                'description' => 'Northants Steelbacks',
                'created_at' => '2017-04-28 10:29:22',
                'updated_at' => '2017-04-28 10:29:22',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Sussex Sharks',
                'venue_id' => 6,
                'logo' => 'SussexSharks.png',
                'description' => 'Sussex Sharks',
                'created_at' => '2017-04-28 10:29:43',
                'updated_at' => '2017-04-28 10:29:43',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Yorkshire Vikings',
                'venue_id' => 7,
                'logo' => 'YorkshireVikings.jpg',
                'description' => 'Yorkshire Vikings',
                'created_at' => '2017-04-28 10:30:02',
                'updated_at' => '2017-04-28 10:30:02',
            ),
        ));
        
        
    }
}