<?php

namespace Database\Seeders;

use App\Models\LeiterRecord;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeiterRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leiter_records')->truncate();
        $recordsPath = resource_path('tables/output/finalData.json');
        $records = json_decode(file_get_contents($recordsPath), true);
        foreach ($records as $record) {
            LeiterRecord::create($record);
        }
    }
}
