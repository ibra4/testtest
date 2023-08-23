<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AbasQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abas_questions')->delete();
        
        \DB::table('abas_questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻨﻈﺮ إﻟﻰ وﺟﻮه اﻵﺧﺮﻳﻦ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪﺛﻮن إﻟﻴﻪ',
                'name_en' => 'Looks at other people’s faces when they are talking to him or her',
                'created_at' => '2023-08-23 10:07:40',
                'updated_at' => '2023-08-23 11:26:15',
            ),
            1 => 
            array (
                'id' => 2,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻨﻈﺮ ﻷﻋﻠﻰ أو ﻳﺒﺘﺴﻢ ﻋﻨﺪﻣﺎ ﻳﻘﻮل أﺣﺪﻫﻢ إﺳﻤﻪ',
                'name_en' => 'Looks up or smiles when someone says his or her name',
                'created_at' => '2023-08-23 10:08:17',
                'updated_at' => '2023-08-23 10:34:48',
            ),
            2 => 
            array (
                'id' => 3,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻀﺤﻚ ﻋﻨﺪﻣﺎ ﻳﻀﺤﻚ أﺣﺪ اﻟﻮاﻟﺪﻳﻦ أو أي ﺷﺨﺺ آﺧﺮ.',
                'name_en' => 'Laughs when a parent or other person laughs',
                'created_at' => '2023-08-23 10:10:27',
                'updated_at' => '2023-08-23 10:36:02',
            ),
            3 => 
            array (
                'id' => 4,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺮﻓﻊ اﻟﺼﻮت ﻭﻳﺨﻔﻀﻪ ﻟﻠﺘﻌﺒﻴﺮ ﻋﻦ ﻣﺸﺎﻋﺮ ﺃو اﺣﺘﻴﺎﺟﺎت ﻣﺨﺘﻠﻔﺔ.',
                'name_en' => 'Raises and lowers voice to express different feelings or needs',
                'created_at' => '2023-08-23 10:10:41',
                'updated_at' => '2023-08-23 10:34:15',
            ),
            4 => 
            array (
                'id' => 5,
                'abas_sub_domain_id' => 1,
            'name' => 'ﻳﻘﻮل أﺳﻤﺎء أﺷﺨﺎص ﺁﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ ﺍﻟﻤﺜﺎل ، "ﻣﺎﻣﺎ" أو "ﺑﺎﺑﺎ" أو أﺳﻤﺎء اﻷﺻﺪﻗﺎء.)',
                'name_en' => 'Says the names of other people (for example, “Mama,” “Daddy,” or names  of friends',
                    'created_at' => '2023-08-23 10:11:12',
                    'updated_at' => '2023-08-23 10:37:00',
                ),
                5 => 
                array (
                    'id' => 6,
                    'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﺒﻊ أواﻣﺮ بسيطة (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻻ" أو "ﺗﻌﺎل ﻫﻨﺎ)',
                'name_en' => 'Follows simple commands (for example, “No” or “Come here”)',
                    'created_at' => '2023-08-23 10:12:09',
                    'updated_at' => '2023-08-23 10:39:25',
                ),
                6 => 
                array (
                    'id' => 7,
                    'abas_sub_domain_id' => 1,
                    'name' => 'ﻳﺴﺘﺨﺪم ﻛﻠﻤﺔ واﺣﺪة أو أﻛﺜﺮ ﻟﻠﺤﺼﻮل ﻋﻠﻰ ﺷﻲء ﻳﺮﻳﺪه ، ﺣﺘﻰ ﻟﻮ ﻟﻢ ﻳﺘﻢ ﻧﻄﻖ اﻟﻜﻠﻤﺔ  ﺑﺸﻜﻞ ﺻﺤﻴﺢ أو ﻟﻢ
ﻳﺘﻢﻧﻄﻘﻬﺎ ﺑﺸﻜﻞ ﺟﻴﺪ.',
                'name_en' => 'Follows simple commands (for example, “No” or “Come here”)',
                    'created_at' => '2023-08-23 10:12:46',
                    'updated_at' => '2023-08-23 10:46:06',
                ),
                7 => 
                array (
                    'id' => 8,
                    'abas_sub_domain_id' => 1,
                    'name' => 'ﻳﻬﺰ رأﺳﻪ أو ﻳﻘﻮل "ﻧﻌﻢ" أو "ﻻ" ردا ﻋﻠﻰ ﺳﺆال ﺑﺴﻴﻂ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻫﻞ ﺗﺮﻳﺪ ﺷﻴئا             
ﺗﺸﺮﺑﻪ)',
                'name_en' => 'Shakes head or says “Yes” or “No” in response to a simple question (for example, “Do you want something to drink?”)',
                    'created_at' => '2023-08-23 10:13:14',
                    'updated_at' => '2023-08-23 10:50:00',
                ),
                8 => 
                array (
                    'id' => 9,
                    'abas_sub_domain_id' => 1,
                    'name' => 'ﻳﺸﻴﺮ إﻟﻰ الأشياء الأساسية ﻓﻲ غرفة ﻋﻨﺪﻣﺎ ﻳﻄُﻠﺐ منه ذﻟﻚ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "أشر ﻟﻲ
اﻟﺘﻠﻔﺰﻳﻮن)',
                'name_en' => 'Points to common items in a room when asked (for example, “Show me the TV”)',
                    'created_at' => '2023-08-23 10:55:37',
                    'updated_at' => '2023-08-23 10:55:37',
                ),
                9 => 
                array (
                    'id' => 10,
                    'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻜﺮر اﻟﻜﻠﻤﺎت اﻟﺘﻲ ﻳﻘﻮﻟﻬﺎ اﻵﺧﺮون )ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻘﻮل "ﻃﻔﻞ" ﻋﻨﺪﻣﺎ ﻳﻘﻮل ﺷﺨﺺ ﺑﺎﻟﻎ "ﻃﻔﻞ',
            'name_en' => 'Repeats words others say (for example, says “baby” when an adult says  “baby”)',
                'created_at' => '2023-08-23 10:55:37',
                'updated_at' => '2023-08-23 12:05:51',
            ),
            10 => 
            array (
                'id' => 11,
                'abas_sub_domain_id' => 1,
            'name' => 'ﻳﻘﻮل ﻋﺒﺎرات ﺗﺤﺘﻮي ﻋﻠﻰ ﻛﻠﻤﺘﻴﻦ ﻋﻠﻰ اﻷﻗﻞ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻛﺘﺎﺑﻲ)',
            'name_en' => 'Says phrases with at least two words (for example, “My book”)',
                'created_at' => '2023-08-23 12:03:25',
                'updated_at' => '2023-08-23 12:03:41',
            ),
            11 => 
            array (
                'id' => 12,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻘﻮل اﺳﻢ اﻟﺸﻲء ﺑﻮﺿﻮح ﻛﺎف ٍ ﺑﺤﻴﺚ ﻳﺘﻌﺮف ﻋﻠﻴﻪ  اﻵﺧﺮون(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻛﺮة" ، "
ﻛﻠﺐ" ، "ﻛﻮب)',
            'name_en' => 'Says the name of an object clearly enough that others recognize it (for  example, “ball,” “dog,” “cup”).',
                'created_at' => '2023-08-23 12:08:36',
                'updated_at' => '2023-08-23 12:08:48',
            ),
            12 => 
            array (
                'id' => 13,
                'abas_sub_domain_id' => 1,
                'name' => 'ينصت ﻟﻤﺪة دﻗﻴﻘﺔ واﺣﺪة ﻋﻠﻰ اﻷﻗﻞ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪث اﻟﻨﺎس',
                'name_en' => 'Listens closely for at least 1 minute when people talk',
                'created_at' => '2023-08-23 12:09:57',
                'updated_at' => '2023-08-23 12:09:57',
            ),
            13 => 
            array (
                'id' => 14,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﺤﺪث ﺑﻮﺿﻮح ﻛﺎف ٍ ﺑﺤﻴﺚ ﻳﻤﻜﻦ ﻟﻶﺧﺮﻳﻦ اﻟﺬﻳﻦ ﻻ ﻳﻌﺮﻓﻮﻧﻪ أو ﻳﻌﺮﻓﻮﻧﻬﺎ أن  ﻳﻔﻬﻤﻮا
ﻣﻌﻈﻢﻣﺎ ﻳﻘﺎل.',
                'name_en' => 'Speaks clearly enough that others who do not know him or her can  understand most of what is said',
                'created_at' => '2023-08-23 12:22:04',
                'updated_at' => '2023-08-23 12:22:04',
            ),
            14 => 
            array (
                'id' => 15,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﺒﻊ ﺗﻮﺟﻴﻬﺎت ﺑﺴﻴﻄﺔ ﻣﻦ ﺧﻄﻮة واﺣﺪة ﺗﺘﻀﻤﻦ "ﻓﻮق" أو ﺗﺤﺖ (ﻋﻠﻰ ﺳﺒﻴﻞ ﺍﻟﻤﺜﺎل ، "
ارفع يديك للأعلى )',
            'name_en' => 'Follows simple, one-step directions that include “over” or “under” (for   example, “Put your hands over your head”).',
                'created_at' => '2023-08-23 12:24:11',
                'updated_at' => '2023-08-23 12:24:11',
            ),
            15 => 
            array (
                'id' => 16,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ ﺗﻜﺮار الكلام ﻣﺮارا  وﺗﻜﺮارا',
                'name_en' => 'Refrains from repeating what he or she says over and over again',
                'created_at' => '2023-08-23 12:25:35',
                'updated_at' => '2023-08-23 12:25:35',
            ),
            16 => 
            array (
                'id' => 17,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺴﻤﻲ 20 أو أﻛﺜﺮ ﻣﻦ اﻷﺷﻴﺎء اﻟﻤﺄﻟﻮﻓﺔ',
                'name_en' => 'Names 20 or more familiar objects',
                'created_at' => '2023-08-23 12:26:28',
                'updated_at' => '2023-08-23 12:26:28',
            ),
            17 => 
            array (
                'id' => 18,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻐﻨﻲ اغنية كاملة أو ﺟﺰء ﻣﻨﻬﺎ',
                'name_en' => 'Sings all or part of the words to songs',
                'created_at' => '2023-08-23 12:27:10',
                'updated_at' => '2023-08-23 12:27:10',
            ),
            18 => 
            array (
                'id' => 19,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻘﻮم ﺑﻌﻤﻞ ﺻﻴﻎ اﻟﺠﻤﻊ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "أﺣﺬﻳﺔ" ، "ﺟﻮارب" ،    
ﻛﻼب.)',
            'name_en' => 'Makes plurals of words by adding an -s (for example, “shoes,” “socks, “dogs”)',
                'created_at' => '2023-08-23 12:28:51',
                'updated_at' => '2023-08-23 12:28:51',
            ),
            19 => 
            array (
                'id' => 20,
                'abas_sub_domain_id' => 1,
                'name' => 'يكون جملة  مكونة من اسم وفعل',
                'name_en' => 'Uses sentences with a noun and verb',
                'created_at' => '2023-08-23 12:31:02',
                'updated_at' => '2023-08-23 12:34:50',
            ),
            20 => 
            array (
                'id' => 21,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺨﺒﺮ اﻟﻮاﻟﺪ أو اﻷﺻﺪﻗﺎءأو اﻵﺧﺮﻳﻦ ﻋﻦ أﻧﺸﻄﺘﻪ اﻟﻤﻔﻀﻠﺔ',
                'name_en' => 'Tells parent, friends, or others about his or her favorite activities',
                'created_at' => '2023-08-23 12:32:56',
                'updated_at' => '2023-08-23 12:32:56',
            ),
            21 => 
            array (
                'id' => 22,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻄﺮح أسئلة ﻣﺜﻞ "ﻫﻞ ﺗﻠﻌﺐ ﻣﻌﻲ..؟"',
                'name_en' => 'Asks questions such as “Will you play with me?',
                'created_at' => '2023-08-23 12:35:38',
                'updated_at' => '2023-08-23 12:38:06',
            ),
            22 => 
            array (
                'id' => 23,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﺤﺪث ﺑﺠﻤﻞ ﻣﻦ ﺳﺖ ﻛﻠﻤﺎت أو  أﻛﺜﺮ',
                'name_en' => 'Speaks in sentences of six or more words',
                'created_at' => '2023-08-23 12:36:28',
                'updated_at' => '2023-08-23 12:36:28',
            ),
            23 => 
            array (
                'id' => 24,
                'abas_sub_domain_id' => 1,
            'name' => 'ﻳﺴﺘﺨﺪم اﻟﺰﻣﻦ اﻟﻤﺎﺿﻲ ﻟﻠﺘﺤﺪث ﻋﻦ اﻷﺣﺪاث اﻟﺴﺎﺑﻘﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﺑﻘﻴﺖ ﺑﺎﻟﺪﺍﺧﻞ)',
            'name_en' => 'Uses past tense to talk about prior events (for example, “I stayed inside”)',
                'created_at' => '2023-08-23 12:38:22',
                'updated_at' => '2023-08-23 12:38:22',
            ),
            24 => 
            array (
                'id' => 25,
                'abas_sub_domain_id' => 1,
                'name' => 'يجري ﻣﺤﺎدﺛﺔ ﻣﻊ ﺷﺨﺺ آﺧﺮ ﻟﻤﺪة 3 دﻗﺎئق ﻋﻠﻰ اﻷﻗﻞ',
                'name_en' => 'Has a conversation with another person for at least 3 minutes',
                'created_at' => '2023-08-23 12:39:54',
                'updated_at' => '2023-08-23 12:39:54',
            ),
            25 => 
            array (
                'id' => 26,
                'abas_sub_domain_id' => 1,
                'name' => 'ينتظر ﺣﺘﻰ ﻳﻨﻬﻲ اﻵﺧﺮون ﻣﺎ ﻳﻘﻮﻟﻮﻧﻪ  دون ﻣﻘﺎﻃﻌﺔ',
                'name_en' => 'Waits for others to finish what they are saying, without interrupting',
                'created_at' => '2023-08-23 12:40:34',
                'updated_at' => '2023-08-23 12:40:34',
            ),
        ));
        
        
    }
}