<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CountriesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (ArabianCountriesEnum::COUNTRIES_ARRAY as $country) {
            try {
                Country::firstOrCreate([
                    'code' => $country['id'],
                    'name' => $country['name']
                ]);
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }
}
