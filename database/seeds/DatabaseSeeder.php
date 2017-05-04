<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(MatchesTableSeeder::class);
        $this->call(MatchTypesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(SeasonsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(VenuesTableSeeder::class);
    }
}
