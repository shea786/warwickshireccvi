<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 22,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 23,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 24,
                'migration' => '2017_04_20_172015_create_admins_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 27,
                'migration' => '2017_04_22_201923_create_profiles_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 38,
                'migration' => '2017_04_23_000132_create_match_types_table',
                'batch' => 3,
            ),
            5 => 
            array (
                'id' => 39,
                'migration' => '2017_04_23_000530_create_teams_table',
                'batch' => 3,
            ),
            6 => 
            array (
                'id' => 40,
                'migration' => '2017_04_23_000757_create_venues_table',
                'batch' => 3,
            ),
            7 => 
            array (
                'id' => 41,
                'migration' => '2017_04_23_001033_create_seasons_table',
                'batch' => 3,
            ),
            8 => 
            array (
                'id' => 42,
                'migration' => '2017_04_23_002315_create_matches_table',
                'batch' => 3,
            ),
        ));
        
        
    }
}