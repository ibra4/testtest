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
        $indexJs = Storage::disk('dashboard')->get('world/index.js');
        $filelString = str_replace('export default ', '', $indexJs);
        $jsoncontent = json_decode($filelString, true);
        foreach ($jsoncontent['locations'] as $city) {
            Country::create([
                'code' => $city['id'],
                'name' => $city['name'],
            ]);
        }
    }
}
