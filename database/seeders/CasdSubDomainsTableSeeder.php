<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CasdSubDomainsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('casd_sub_domains')->delete();
        
        \DB::table('casd_sub_domains')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'المشكلات المرتبطة بالتفاعل الاجتماعي',
                'name_en' => NULL,
                'created_at' => '2023-09-05 11:18:35',
                'updated_at' => '2023-09-05 11:18:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'المثابرة',
                'name_en' => NULL,
                'created_at' => '2023-09-05 11:18:42',
                'updated_at' => '2023-09-05 11:18:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'اضطراب الحس – جسدي',
                'name_en' => NULL,
                'created_at' => '2023-09-05 11:18:50',
                'updated_at' => '2023-09-05 11:18:50',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'تطور نمائي وتواصلي غير اعتيادي',
                'name_en' => NULL,
                'created_at' => '2023-09-05 11:18:58',
                'updated_at' => '2023-09-05 11:18:58',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'اضطراب في المزاج',
                'name_en' => NULL,
                'created_at' => '2023-09-05 11:19:09',
                'updated_at' => '2023-09-05 11:19:09',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'مشاكل الانتباه والأمان',
                'name_en' => NULL,
                'created_at' => '2023-09-05 11:19:15',
                'updated_at' => '2023-09-05 11:19:15',
            ),
        ));
        
        
    }
}