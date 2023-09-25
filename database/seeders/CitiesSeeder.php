<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities_folders = Storage::disk('dashboard')->directories();
        foreach ($cities_folders as $cf) {
            if ($cf == 'world') {
                continue;
            }
            $indexJs = Storage::disk('dashboard')->get("$cf/index.js");
            $filelString = str_replace('export default ', '', $indexJs);
            $jsoncontent = json_decode($filelString, true);
            foreach ($jsoncontent['locations'] as $city) {
                try {
                    City::firstOrCreate([
                        'code' => $city['id'],
                        'name' => $city['name'],
                        'country_id' => $this->getCountnryId($cf)
                    ]);
                } catch (\Throwable $th) {
                    throw $th;
                }
            }
        }
    }

    /**
     * getCountnryId
     *
     * @param  string $cf
     * @return int
     */
    private function getCountnryId($cf)
    {
        $country = Country::where('code', ArabianCountriesEnum::COUNTRIES_DIRECTORIES[$cf])->firstOrFail();
        return $country->id;
    }
}
