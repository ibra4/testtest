<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AbasSubDomainsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abas_sub_domains')->delete();
        
        \DB::table('abas_sub_domains')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'مهارات التواصل',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:01:13',
                'updated_at' => '2023-08-23 09:30:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'التوجه المجتمعي',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:01:23',
                'updated_at' => '2023-08-23 09:30:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'وظيفية قبل الأكاديميين',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:01:31',
                'updated_at' => '2023-08-23 09:31:02',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'المهارات المنزلية',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:01:39',
                'updated_at' => '2023-08-23 09:31:22',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'الصحة و السلامة',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:01:47',
                'updated_at' => '2023-08-23 09:31:30',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'وقت الفراغ',
                'name_en' => NULL,
                'abas_domain_id' => 2,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:01:56',
                'updated_at' => '2023-08-23 09:31:35',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'الرعاية الذاتية',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:02:03',
                'updated_at' => '2023-08-23 09:31:41',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'التوجيه الذاتي',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:02:12',
                'updated_at' => '2023-08-23 09:31:50',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'المهارات الاجتماعية',
                'name_en' => NULL,
                'abas_domain_id' => 2,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:02:18',
                'updated_at' => '2023-08-23 09:31:58',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'المهارات الحركية',
                'name_en' => NULL,
                'abas_domain_id' => NULL,
                'category' => 'parent_0_71',
                'created_at' => '2023-08-22 19:02:26',
                'updated_at' => '2023-08-22 19:02:26',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'مهارات التواصل',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:02:43',
                'updated_at' => '2023-08-23 09:32:26',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'التوجه المجتمعي',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:02:52',
                'updated_at' => '2023-08-23 09:32:34',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'وظيفية أكاديمية',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:03:07',
                'updated_at' => '2023-08-23 09:32:43',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'المهارات المنزلية',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:03:14',
                'updated_at' => '2023-08-23 09:32:48',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'الصحة و السلامة',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:03:21',
                'updated_at' => '2023-08-23 09:32:53',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'وقت الفراغ',
                'name_en' => NULL,
                'abas_domain_id' => 2,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:03:28',
                'updated_at' => '2023-08-23 09:32:59',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'الرعاية الذاتية',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:03:33',
                'updated_at' => '2023-08-23 09:33:07',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'التوجيه الذاتي',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:03:39',
                'updated_at' => '2023-08-23 09:33:16',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'المهارات الاجتماعية',
                'name_en' => NULL,
                'abas_domain_id' => 2,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:03:46',
                'updated_at' => '2023-08-23 09:33:21',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'مهارات العمل',
                'name_en' => NULL,
                'abas_domain_id' => NULL,
                'category' => 'parent_72_263',
                'created_at' => '2023-08-22 19:03:55',
                'updated_at' => '2023-08-22 19:03:55',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'مهارات التواصل',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:04:39',
                'updated_at' => '2023-08-23 09:39:22',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'وظيفية قبل الأكاديميين',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:05:25',
                'updated_at' => '2023-08-23 09:39:30',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'المهارات المدرسية',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:05:39',
                'updated_at' => '2023-08-23 09:39:40',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'الصحة و السلامة',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:05:46',
                'updated_at' => '2023-08-23 09:39:50',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'وقت الفراغ',
                'name_en' => NULL,
                'abas_domain_id' => 2,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:05:54',
                'updated_at' => '2023-08-23 09:39:56',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'الرعاية الذاتية',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:06:01',
                'updated_at' => '2023-08-23 09:40:08',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'التوجيه الذاتي',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:06:11',
                'updated_at' => '2023-08-23 09:40:16',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'المهارات الاجتماعية',
                'name_en' => NULL,
                'abas_domain_id' => 2,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:06:22',
                'updated_at' => '2023-08-23 09:40:22',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'المهارات الحركية',
                'name_en' => NULL,
                'abas_domain_id' => NULL,
                'category' => 'teacher_24_71',
                'created_at' => '2023-08-22 19:06:30',
                'updated_at' => '2023-08-22 19:06:30',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'مهارات التواصل',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:06:49',
                'updated_at' => '2023-08-23 09:41:54',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'التوجه المجتمعي',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:06:56',
                'updated_at' => '2023-08-23 09:42:02',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'وظيفية أكاديمية',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:07:04',
                'updated_at' => '2023-08-23 09:43:37',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'المهارات المدرسية',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:07:12',
                'updated_at' => '2023-08-23 09:43:26',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'الصحة و السلامة',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:07:18',
                'updated_at' => '2023-08-23 09:42:57',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'وقت الفراغ',
                'name_en' => NULL,
                'abas_domain_id' => 2,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:07:25',
                'updated_at' => '2023-08-23 09:42:46',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'الرعاية الذاتية',
                'name_en' => NULL,
                'abas_domain_id' => 3,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:07:32',
                'updated_at' => '2023-08-23 09:42:16',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'التوجيه الذاتي',
                'name_en' => NULL,
                'abas_domain_id' => 1,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:07:39',
                'updated_at' => '2023-08-23 09:42:25',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'المهارات الاجتماعية',
                'name_en' => NULL,
                'abas_domain_id' => 2,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:07:46',
                'updated_at' => '2023-08-23 09:41:29',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'مهارات العمل',
                'name_en' => NULL,
                'abas_domain_id' => NULL,
                'category' => 'teacher_72_263',
                'created_at' => '2023-08-22 19:07:53',
                'updated_at' => '2023-08-22 19:07:53',
            ),
        ));
        
        
    }
}