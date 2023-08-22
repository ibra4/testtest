<?php

namespace Database\Seeders;

use App\Models\AbasDomain;
use Illuminate\Database\Seeder;

class AbasDomainSeeder extends Seeder
{
    const DOMAINS = [
        ['name' =>  'المجال المفاهيمي'],
        ['name' =>  'المجال الاجتماعي'],
        ['name' =>  'المجال العملي']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::DOMAINS as $domain) {
            AbasDomain::firstOrCreate($domain);
        }
    }
}
