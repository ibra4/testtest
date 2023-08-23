<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AbasDomainsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abas_domains')->delete();
        
        \DB::table('abas_domains')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'المجال المفاهيمي',
                'name_en' => NULL,
                'created_at' => '2023-08-22 19:08:29',
                'updated_at' => '2023-08-22 19:08:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'المجال الاجتماعي',
                'name_en' => NULL,
                'created_at' => '2023-08-22 19:08:36',
                'updated_at' => '2023-08-22 19:08:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'المجال العملي',
                'name_en' => NULL,
                'created_at' => '2023-08-22 19:08:43',
                'updated_at' => '2023-08-22 19:08:43',
            ),
        ));
        
        
    }
}