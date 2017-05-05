<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('venues')->delete();
        
        \DB::table('venues')->insert(array (
            0 => 
            array (
                'id' => 1,
                'club_name' => 'Offchurch Sports Club',
                'thumbnail' => '/tmp/phpzoc2dW',
                'address_1' => 'Hunningham Road',
                'address_2' => 'Offchurch',
                'city_town' => 'Leamington Spa',
                'County' => 'Warwickshire',
                'Country' => 'United Kingdom',
                'post_code' => 'CV33 9AF',
                'description' => 'Offchurch Sports Club is amazing',
                'created_at' => '2017-04-26 16:09:57',
                'updated_at' => '2017-04-26 16:09:57',
            ),
            1 => 
            array (
                'id' => 2,
                'club_name' => 'Nottinghamshire Knights',
                'thumbnail' => '/tmp/phpmRzUjQ',
                'address_1' => 'Nottinghamshire Knights',
                'address_2' => 'Nottinghamshire Knights',
                'city_town' => 'Nottinghamshire Knights',
                'County' => 'Nottinghamshire Knights',
                'Country' => 'United Kingdom',
                'post_code' => 'Nottinghamshire Knights',
                'description' => 'Nottinghamshire Knights',
                'created_at' => '2017-04-28 10:20:45',
                'updated_at' => '2017-04-28 10:20:45',
            ),
            2 => 
            array (
                'id' => 3,
                'club_name' => 'Lancashire Lions',
                'thumbnail' => '/tmp/phpwyMf3z',
                'address_1' => 'Lancashire Lions',
                'address_2' => 'Lancashire Lions',
                'city_town' => 'Lancashire Lions',
                'County' => 'Lancashire Lions',
                'Country' => 'United Kingdom',
                'post_code' => 'Lancashire Lions',
                'description' => 'Lancashire Lions',
                'created_at' => '2017-04-28 10:21:14',
                'updated_at' => '2017-04-28 10:21:14',
            ),
            3 => 
            array (
                'id' => 4,
                'club_name' => 'London Metro',
                'thumbnail' => '/tmp/phpoAET7V',
                'address_1' => 'London Metro',
                'address_2' => 'London Metro',
                'city_town' => 'London Metro',
                'County' => 'London Metro',
                'Country' => 'United Kingdom',
                'post_code' => 'London Metro',
                'description' => 'London Metro',
                'created_at' => '2017-04-28 10:21:37',
                'updated_at' => '2017-04-28 10:21:37',
            ),
            4 => 
            array (
                'id' => 5,
                'club_name' => 'Northants Steelbacks',
                'thumbnail' => '/tmp/phpbjhB9T',
                'address_1' => 'Northants Steelbacks',
                'address_2' => 'Northants Steelbacks',
                'city_town' => 'Northants Steelbacks',
                'County' => 'Northants Steelbacks',
                'Country' => 'United Kingdom',
                'post_code' => 'Northants Steelbacks',
                'description' => 'Northants Steelbacks',
                'created_at' => '2017-04-28 10:22:01',
                'updated_at' => '2017-04-28 10:22:01',
            ),
            5 => 
            array (
                'id' => 6,
                'club_name' => 'Sussex Sharks',
                'thumbnail' => '/tmp/phpBrt7H6',
                'address_1' => 'Sussex Sharks',
                'address_2' => 'Sussex Sharks',
                'city_town' => 'Sussex Sharks',
                'County' => 'Sussex Sharks',
                'Country' => 'United Kingdom',
                'post_code' => 'Sussex Sharks',
                'description' => 'Sussex Sharks',
                'created_at' => '2017-04-28 10:22:23',
                'updated_at' => '2017-04-28 10:22:23',
            ),
            6 => 
            array (
                'id' => 7,
                'club_name' => 'Yorkshire Vikings',
                'thumbnail' => '/tmp/phpuAjt1w',
                'address_1' => 'Yorkshire Vikings',
                'address_2' => 'Yorkshire Vikings',
                'city_town' => 'Yorkshire Vikings',
                'County' => 'Yorkshire Vikings',
                'Country' => 'United Kingdom',
                'post_code' => 'Yorkshire Vikings',
                'description' => 'Yorkshire Vikings',
                'created_at' => '2017-04-28 10:22:49',
                'updated_at' => '2017-04-28 10:22:49',
            ),
            7 => 
            array (
                'id' => 8,
                'club_name' => 'Somerset VICC',
                'thumbnail' => '/tmp/phpa7gQ3o',
                'address_1' => 'Somerset VICC',
                'address_2' => 'Somerset VICC',
                'city_town' => 'Somerset VICC',
                'County' => 'Somerset VICC',
                'Country' => 'United Kingdom',
                'post_code' => 'Somerset VICC',
                'description' => 'Somerset VICC',
                'created_at' => '2017-04-28 10:23:36',
                'updated_at' => '2017-04-28 10:23:36',
            ),
            8 => 
            array (
                'id' => 9,
                'club_name' => 'Bath Cricket Club',
                'thumbnail' => '/tmp/php6FyqIS',
                'address_1' => 'North Parade Bridge Road',
                'address_2' => 'Line 2',
                'city_town' => 'Bath',
                'County' => 'Somerset',
                'Country' => 'United Kingdom',
                'post_code' => 'BA2 4EX',
                'description' => 'Some shit',
                'created_at' => '2017-04-28 23:23:59',
                'updated_at' => '2017-04-28 23:23:59',
            ),
        ));
        
        
    }
}