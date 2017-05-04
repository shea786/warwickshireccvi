<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('matches')->delete();
        
        \DB::table('matches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'match_type' => 2,
                'season_id' => 1,
                'home_team' => 1,
                'away_team' => 2,
                'venue_id' => 9,
                'start_date_and_time' => '2017-04-30 13:00:00',
                'created_at' => '2017-04-26 16:36:48',
                'updated_at' => '2017-04-26 16:36:48',
            ),
            1 => 
            array (
                'id' => 2,
                'match_type' => 1,
                'season_id' => 1,
                'home_team' => 1,
                'away_team' => 4,
                'venue_id' => 1,
                'start_date_and_time' => '2017-05-06 13:00:00',
                'created_at' => '2017-04-28 10:31:50',
                'updated_at' => '2017-04-28 10:31:50',
            ),
            2 => 
            array (
                'id' => 3,
                'match_type' => 1,
                'season_id' => 1,
                'home_team' => 1,
                'away_team' => 5,
                'venue_id' => 1,
                'start_date_and_time' => '2017-05-07 13:00:00',
                'created_at' => '2017-04-28 10:32:19',
                'updated_at' => '2017-04-28 10:32:19',
            ),
            3 => 
            array (
                'id' => 4,
                'match_type' => 1,
                'season_id' => 1,
                'home_team' => 1,
                'away_team' => 7,
                'venue_id' => 1,
                'start_date_and_time' => '2017-06-17 13:00:00',
                'created_at' => '2017-04-28 10:33:18',
                'updated_at' => '2017-04-28 10:33:18',
            ),
            4 => 
            array (
                'id' => 5,
                'match_type' => 1,
                'season_id' => 1,
                'home_team' => 8,
                'away_team' => 1,
                'venue_id' => 7,
                'start_date_and_time' => '2017-07-01 13:00:00',
                'created_at' => '2017-04-28 10:35:19',
                'updated_at' => '2017-04-28 10:35:19',
            ),
            5 => 
            array (
                'id' => 6,
                'match_type' => 1,
                'season_id' => 1,
                'home_team' => 2,
                'away_team' => 1,
                'venue_id' => 8,
                'start_date_and_time' => '2017-07-29 13:00:00',
                'created_at' => '2017-04-28 10:35:52',
                'updated_at' => '2017-04-28 10:35:52',
            ),
            6 => 
            array (
                'id' => 7,
                'match_type' => 1,
                'season_id' => 1,
                'home_team' => 6,
                'away_team' => 1,
                'venue_id' => 5,
                'start_date_and_time' => '2017-08-13 13:00:00',
                'created_at' => '2017-04-28 10:37:29',
                'updated_at' => '2017-04-28 10:37:29',
            ),
            7 => 
            array (
                'id' => 8,
                'match_type' => 1,
                'season_id' => 1,
                'home_team' => 3,
                'away_team' => 1,
                'venue_id' => 2,
                'start_date_and_time' => '2017-04-15 13:00:00',
                'created_at' => '2017-04-28 10:38:52',
                'updated_at' => '2017-04-28 10:38:52',
            ),
        ));
        
        
    }
}