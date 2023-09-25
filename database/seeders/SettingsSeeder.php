<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();
        
        Setting::firstOrCreate([
            'key' => 'site_name',
            'value' => 'Bana Exams System',
            'label' => 'Site Name',
            'type' => 'textfield',
            'col' => 12
        ]);

        Setting::firstOrCreate([
            'key' => 'bana_logo',
            'value' => '/images/logo.png',
            'label' => 'Bana Center Logo',
            'type' => 'uploadfield',
            'col' => 3
        ]);

        Setting::firstOrCreate([
            'key' => 'bana_logo_teaser',
            'value' => '/images/logo_teaser.png',
            'label' => 'Bana Center Logo (Collapsed)',
            'type' => 'uploadfield',
            'col' => 3
        ]);

        Setting::firstOrCreate([
            'key' => 'leiter_logo',
            'value' => '/images/lieter3.png',
            'label' => 'Leiter Logo',
            'type' => 'uploadfield',
            'col' => 3
        ]);

        Setting::firstOrCreate([
            'key' => 'abas_logo',
            'value' => '',
            'label' => 'ABAS Logo',
            'type' => 'uploadfield',
            'col' => 3
        ]);

        Setting::firstOrCreate([
            'key' => 'abas_introduction',
            'value' => '<h3>مقدمة السلوك التكيفي</h3>',
            'label' => "ABAS Report Introduction",
            'type' => 'tinymcefield'
        ]);
    }
}
