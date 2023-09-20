<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UserSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(CitiesSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(CasdQuestionsTableSeeder::class);
        $this->call(CasdSubDomainsTableSeeder::class);
    }
}
