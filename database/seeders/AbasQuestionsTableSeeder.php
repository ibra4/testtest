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
                'name' => 'يستخدم جملة  مكونة من اسم وفعل',
                'name_en' => 'Uses sentences with a noun and verb',
                'created_at' => '2023-08-23 12:31:02',
                'updated_at' => '2023-08-24 10:55:07',
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
            26 => 
            array (
                'id' => 27,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺒﻘﻰ ﻣﻊ اﻟﻮاﻟﺪﻳﻦ أو أﻓﺮاد اﻷﺳﺮة اﻵﺧﺮﻳﻦ ﻓﻲ ﻣﺘﺠﺮ و لا يبتعد عنهم',
                'name_en' => 'Stays with parents or other family members in a store and does not wander off',
                'created_at' => '2023-08-23 19:21:19',
                'updated_at' => '2023-08-23 19:21:19',
            ),
            27 => 
            array (
                'id' => 28,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﻌﺮف ﻋﻠﻰ ﻣﻨﺰﻟﻪ ﻓﻲ ﻣﻨﻄﻘﺘﻪ أو  مكان السكن او الشارع',
                'name_en' => 'Recognizes own home in his or her immediate neighborhood',
                'created_at' => '2023-08-23 19:22:20',
                'updated_at' => '2023-08-23 19:22:20',
            ),
            28 => 
            array (
                'id' => 29,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻤﺸﻲ ﻋﻠﻰ اﻟﺮﺻﻴﻒ ﺑﺪﻻ ً ﻣﻦ ﺍﻟﺸﺎﺭع',
                'name_en' => 'Walks on sidewalk rather than street',
                'created_at' => '2023-08-23 19:25:15',
                'updated_at' => '2023-08-23 19:25:15',
            ),
            29 => 
            array (
                'id' => 30,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺨﺒﺮ اﻟﻮاﻟﺪﻳﻦ ﻋﻨﺪﻣﺎ ﻳﺄﺗﻲ ﺷﺨﺺ ﻣﺎ إﻟﻰ باب البيت',
                'name_en' => 'Informs parents when someone comes to the door',
                'created_at' => '2023-08-23 19:26:10',
                'updated_at' => '2023-08-23 19:26:10',
            ),
            30 => 
            array (
                'id' => 31,
                'abas_sub_domain_id' => 2,
            'name' => 'ﻳﻈﻬﺮ اﺣﺘﺮﺍﻣﺎً ﻟﻠﻤﻤﺘﻠﻜﺎت  اﻟﻌﺎﻣﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، رﻣﻲ اﻟﻘﻤﺎﻣﺔ ﻓﻲ ﻋﻠﺐ ، ﻻ ﻳﻀﺮ ﺑﺎﻟﻤﻤﺘﻠﻜﺎت.)',
            'name_en' => 'Shows respect for public property (for example, throws trash in cans, does not damage property)',
                'created_at' => '2023-08-23 19:27:50',
                'updated_at' => '2023-08-23 19:27:50',
            ),
            31 => 
            array (
                'id' => 32,
                'abas_sub_domain_id' => 2,
                'name' => 'يستجيب لطلب ﺷﺨﺺ ﺑﺎﻟﻎ "ﻋﺪم ﻟﻤﺲ" اﻟﻌﻨﺎﺻﺮ ﻋﻨﺪ اﻟﺘﺴﻮق',
                'name_en' => 'Obeys an adult’s request to “don’t touch” items when shopping',
                'created_at' => '2023-08-23 19:29:07',
                'updated_at' => '2023-08-23 19:29:07',
            ),
            32 => 
            array (
                'id' => 33,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻄﻠﺐ اﻟﺬﻫﺎب إﻟﻰ ﺣﺪﻳﻘﺔ أو ﻣﻜﺎن ﺁﺧﺮ ﻣﻔﻀﻞ ﻓﻲ اﻟﻤﺠﺘﻤﻊ',
                'name_en' => 'Asks to go to a park or other favorite community place',
                'created_at' => '2023-08-23 19:30:06',
                'updated_at' => '2023-08-23 19:30:06',
            ),
            33 => 
            array (
                'id' => 34,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻄﺮق اﻟﺒﺎب أو ﻳﻘﺮع ﺟﺮس اﻟﺒﺎب ﻗﺒﻞ دﺧﻮل ﻣﻨﺰل ﺷﺨﺺ ﺁﺧﺮ',
                'name_en' => 'Knocks on a door or rings the doorbell before entering another person’s  home',
                'created_at' => '2023-08-23 19:31:27',
                'updated_at' => '2023-08-23 19:31:27',
            ),
            34 => 
            array (
                'id' => 35,
                'abas_sub_domain_id' => 2,
            'name' => 'اﻻﻣﺘﻨﺎع ﻋﻦ اﻟﺘﺤﺪث ﺑﺼﻮت ﻋﺎل ٍﻓﻲ ﻣﻜﺎن ﻋﺎم (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻓﻲ السينما أو المول أو المسجد.)',
            'name_en' => 'Refrains from talking loudly in a public place (for example, in a theater,  movie, or church)',
                'created_at' => '2023-08-23 19:33:57',
                'updated_at' => '2023-08-23 19:33:57',
            ),
            35 => 
            array (
                'id' => 36,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺒﻘﻰ ﺟﺎﻟﺴﺎً أﺛﻨﺎء مناسبة اجتماعية او خبطبة يوم الجمعة او مشاهدة فيلم في السينما',
                'name_en' => 'Remains seated during a religious service or a movie',
                'created_at' => '2023-08-23 19:34:48',
                'updated_at' => '2023-08-23 19:34:48',
            ),
            36 => 
            array (
                'id' => 37,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻄﻠﺐ أن ﻳﺄﻛﻞ ﻓﻲ ﻣﻄﻌﻢ ﻣﻔﻀﻞ',
                'name_en' => 'Asks to eat in a favorite restaurant',
                'created_at' => '2023-08-23 19:35:43',
                'updated_at' => '2023-08-23 19:35:43',
            ),
            37 => 
            array (
                'id' => 38,
                'abas_sub_domain_id' => 2,
            'name' => 'ﻳﺘﻌﺮف وﻳﺴﻤﻲ اﻟﻤﺒﺎﻧﻲ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻣﺴﺘﺸﻔﻰ ، ﻣﺤﻄﺔ وﻗﻮد ، ﻗﺴﻢ إﻃﻔﺎء)',
            'name_en' => 'Recognizes and names buildings (for example, hospital, gas station, fire  department)',
                'created_at' => '2023-08-23 19:37:01',
                'updated_at' => '2023-08-23 19:37:01',
            ),
            38 => 
            array (
                'id' => 39,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺤﺪد ﻣﻮاﻗﻊ اﻷﺣﻴﺎء ﺣﻴﺚ ﺗﺤﺼﻞ أﺳﺮﺗﻪ ﻋﻠﻰ اﻟﻌﻨﺎﺻﺮ اﻟﻤﻄﻠﻮﺑﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻣﻜﺎن ﺷﺮﺍء
ﺍﻟﻄﻌﺎم)',
            'name_en' => 'Identifies neighborhood locations where his or her family obtains needed  items (for example, where to buy food)',
                'created_at' => '2023-08-23 19:39:46',
                'updated_at' => '2023-08-23 19:39:46',
            ),
            39 => 
            array (
                'id' => 40,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺪﺭك اﻟﺤﺎﺟﺔ إﻟﻰ دﻓﻊ ﺛﻤﻦ أﺣﺪ اﻟﻌﻨﺎﺻﺮ ﻗﺒﻞ ﻣﻐﺎدرة اﻟﻤﺘﺠﺮ',
                'name_en' => 'Recognizes the need to pay for an item before leaving a store',
                'created_at' => '2023-08-23 19:40:36',
                'updated_at' => '2023-08-23 19:40:36',
            ),
            40 => 
            array (
                'id' => 41,
                'abas_sub_domain_id' => 2,
            'name' => 'ﻳﺼﻒ مهام  اﻟﻌﻤﺎل (ﻣﺜﻼ ﻳﻘﻮل أن رﺟﺎل اﻻﻃﻔﺎء يطفئون ﺍاﻟﺤﺮائق و اﻷﻃﺒﺎء ﻳﺴﺎﻋﺪون اﻟﻤﺮﺿﻰ)',
            'name_en' => 'Describes the duties of workers (for example, says that firefighters put out  fires and doctors help the sick)',
                'created_at' => '2023-08-23 19:43:18',
                'updated_at' => '2023-08-23 19:43:18',
            ),
            41 => 
            array (
                'id' => 42,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻨﻈﺮ ﻓﻲ ﻛﻼ اﻻﺗﺠﺎﻫﻴﻦ ﻗﺒﻞ ﻋﺒﻮر  اﻟﺸﺎرع  أو  ﺳﺎﺣﺔ اﻧﺘﻈﺎر اﻟﺴﻴﺎرات',
                'name_en' => 'Looks both ways before crossing a street or parking lot',
                'created_at' => '2023-08-23 19:44:30',
                'updated_at' => '2023-08-23 19:44:30',
            ),
            42 => 
            array (
                'id' => 43,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻄﻠﺐ اﻟﺬﻫﺎب إﻟﻰ اﻟﻤﻜﺘﺒﺔ',
                'name_en' => 'Asks to go to the library',
                'created_at' => '2023-08-23 19:45:11',
                'updated_at' => '2023-08-23 19:45:11',
            ),
            43 => 
            array (
                'id' => 44,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺠﺪ اﻟﻤﺮﺣﺎض ﻓﻲ اﻷﻣﺎﻛﻦ اﻟﻌﺎﻣﺔ',
                'name_en' => 'Finds the restroom in public places',
                'created_at' => '2023-08-23 19:46:15',
                'updated_at' => '2023-08-23 19:46:15',
            ),
            44 => 
            array (
                'id' => 45,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻃﻠﺐ  وﺟﺒﺎت اﻟﻄﻌﺎم  اﻟﺨﺎﺻﺔ ﻋﻨﺪ ﺗﻨﺎول اﻟﻄﻌﺎم ﺑﺎﻟﺨﺎﺭج',
                'name_en' => 'Orders own meals when eating out',
                'created_at' => '2023-08-23 19:47:26',
                'updated_at' => '2023-08-23 19:47:26',
            ),
            45 => 
            array (
                'id' => 46,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻘﻮم ﺑﻌﻤﻠﻴﺔ ﺷﺮاء ﺻﻐﻴﺮة ﻣﻦ ﻣﺘﺠﺮ اﻟﻤﻮاد اﻟﻐﺬائية.',
                'name_en' => 'Makes a small purchase at a food store',
                'created_at' => '2023-08-23 19:48:19',
                'updated_at' => '2023-08-23 19:48:19',
            ),
            46 => 
            array (
                'id' => 47,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺤﻤﻞ ﻧﻘﻮدﺍً ﻛﺎﻓﻴﺔ ﻹﺟﺮاء ﻋﻤﻠﻴﺎت ﺷﺮاء ﺻﻐﻴﺮة(ﻋﻠﻰ ﺳﺒﻴﻞ  
اﻟﻤﺜﺎل ، ﻣﺸﺮوب ﻏﺎزي )',
            'name_en' => 'Carries enough money to make small purchases (for example, a soft drink)',
                'created_at' => '2023-08-23 19:49:35',
                'updated_at' => '2023-08-23 19:49:35',
            ),
            47 => 
            array (
                'id' => 48,
                'abas_sub_domain_id' => 2,
                'name' => 'يذهب لوحده إﻟﻰ اماكن سكن  اﻷﺻﺪﻗﺎء ﻓﻲ اﻟﺤﻲ',
                'name_en' => 'Walks alone to friends’ houses or apartments in the neighborhood',
                'created_at' => '2023-08-23 19:50:15',
                'updated_at' => '2023-08-23 19:50:15',
            ),
            48 => 
            array (
                'id' => 49,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳﺸﻴﺮ  إﻟﻰ ﺟﺰء وﺍﺣﺪ ﻋﻠﻰ اﻷﻗﻞ ﻣﻦ اﻟﺠﺴﻢ ﻋﻨﺪ ﺳﺆاﻟﻪ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﺍﻟﺮأس" أو "ﺍﻟﺴﺎﻕ.)',
            'name_en' => 'Points to at least one body part when asked (for example, “head” or “leg”)',
                'created_at' => '2023-08-24 07:42:03',
                'updated_at' => '2023-08-24 07:42:03',
            ),
            49 => 
            array (
                'id' => 50,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻘﻠﺐﺻﻔﺤﺎت اﻟﻜﺘﺎب واﺣﺪة ﺗﻠﻮ اﻷﺧﺮى',
                'name_en' => 'Turns book pages one by one',
                'created_at' => '2023-08-24 07:42:59',
                'updated_at' => '2023-08-24 07:42:59',
            ),
            50 => 
            array (
                'id' => 51,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺸﻴﺮ  إﻟﻰ اﻟﺼﻮﺭ اﻟﻤﻮﺟﻮدة ﻓﻲ اﻟﻜﺘﺐ ﻋﻨﺪﻣﺎ ﻳﻄُﻠﺐ ﻣﻨﻚ ذﻟﻚ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﺸﻴﺮ  إﻟﻰ ﺣﺼﺎن أو
ﺑﻘﺮة )',
            'name_en' => 'Points to pictures in books when asked (for example, points to a horse  or cow).',
                'created_at' => '2023-08-24 07:44:45',
                'updated_at' => '2023-08-24 07:44:45',
            ),
            51 => 
            array (
                'id' => 52,
                'abas_sub_domain_id' => 3,
                'name' => 'يعد ﺛﻼﺛﺔ أﺷﻴﺎء أو أﻛﺜﺮ.',
                'name_en' => 'Counts three or more objects',
                'created_at' => '2023-08-24 07:45:25',
                'updated_at' => '2023-08-24 07:45:25',
            ),
            52 => 
            array (
                'id' => 53,
                'abas_sub_domain_id' => 3,
                'name' => 'يعد ﺛﻼﺛﺔ أﺷﻴﺎء أو أﻛﺜﺮ.',
                'name_en' => 'Counts three or more objects',
                'created_at' => '2023-08-24 07:45:25',
                'updated_at' => '2023-08-24 07:45:25',
            ),
            53 => 
            array (
                'id' => 54,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺬﻛﺮ ﻋﻤﺮه ﺑﺎﻟﺴﻨﻮات ﻋﻨﺪﻣﺎ يسال',
                'name_en' => 'States his or her age in years when asked',
                'created_at' => '2023-08-24 07:46:54',
                'updated_at' => '2023-08-24 07:46:54',
            ),
            54 => 
            array (
                'id' => 55,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻐﻨﻲ أﻏﻨﻴﺔ اﻷﺑﺠﺪﻳﺔ',
                'name_en' => 'Sings the alphabet song',
                'created_at' => '2023-08-24 07:47:22',
                'updated_at' => '2023-08-24 07:47:22',
            ),
            55 => 
            array (
                'id' => 56,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺴﻤﻲ ﺳﺘﺔ أﻟﻮان أو أﺃﻛﺜﺮ ، ﺑﻤﺎ ﻓﻲ ذﻟﻚ اﻷﺣﻤر  و اﻷزرق والأﺻﻔﺮ.',
                'name_en' => 'Names six or more colors, including red, blue, and yellow',
                'created_at' => '2023-08-24 07:48:54',
                'updated_at' => '2023-08-24 07:48:54',
            ),
            56 => 
            array (
                'id' => 57,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳﺴﻤﻲ أﺭﺑﻌﺔ أﺷﻜﺎل  أو أﻛﺜﺮ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، دائرة ، ﻣﺮﺑﻊ ، ﻣﺴﺘﻄﻴﻞ ، ﻣﺜﻠﺚ)',
            'name_en' => 'Names four or more shapes (for example, circle, square, rectangle, triangle)',
                'created_at' => '2023-08-24 07:50:12',
                'updated_at' => '2023-08-24 07:50:12',
            ),
            57 => 
            array (
                'id' => 58,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻘﺮأ أﻏﺎﻧﻲ اﻟﺤﻀﺎﻧﺔ ﻣﻦ اﻟﺬاﻛﺮة.',
                'name_en' => 'Recites nursery rhymes from memory',
                'created_at' => '2023-08-24 07:53:50',
                'updated_at' => '2023-08-24 07:53:50',
            ),
            58 => 
            array (
                'id' => 59,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻘﺮأ اﺳﻤﻪ  ﻋﻨﺪ ﻃﺒﺎﻋﺘﻪ',
                'name_en' => 'Reads his or her name when printed',
                'created_at' => '2023-08-24 07:59:04',
                'updated_at' => '2023-08-24 07:59:04',
            ),
            59 => 
            array (
                'id' => 60,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺴﻤﻲ ﺣﺮﻓﻴﻦ ﻋﻠﻰ اﻷﻗﻞ ﻋﻨﺪ إﻇﻬﺎﺭ اﺳﻤﻪ',
                'name_en' => 'Names at least two letters when shown his or her name',
                'created_at' => '2023-08-24 07:59:54',
                'updated_at' => '2023-08-24 07:59:54',
            ),
            60 => 
            array (
                'id' => 61,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳﺤﺪد ﻋﻤﻠﺔ واﺣﺪة ﻋﻠﻰ اﻷﻗﻞ ﺑﺎﻻﺳﻢ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻋﺸﺮة  قروش أو ربع دينار  )',
            'name_en' => 'Identifies at least one coin by name (for example, penny or dime).',
                'created_at' => '2023-08-24 08:02:30',
                'updated_at' => '2023-08-24 08:02:30',
            ),
            61 => 
            array (
                'id' => 62,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ أسئلة  ﺑﺴﻴﻄﺔ ﺣﻮل ﻗﺼﺔ قرات له.',
                'name_en' => 'Answers simple questions about a story read to him or her',
                'created_at' => '2023-08-24 08:06:03',
                'updated_at' => '2023-08-24 08:06:03',
            ),
            62 => 
            array (
                'id' => 63,
                'abas_sub_domain_id' => 3,
                'name' => 'يعد ّ 10 أﺷﻴﺎء أو أﻛﺜﺮ بدون اﺳﺘﺨﺪام اﻷﺻﺎﺑﻊ.',
                'name_en' => 'Counts 10 or more objects without using fingers',
                'created_at' => '2023-08-24 08:07:30',
                'updated_at' => '2023-08-24 08:07:30',
            ),
            63 => 
            array (
                'id' => 64,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺮﺳﻢ وجه ﻣﻤﻴﺰ ﻳﺘﻀﻤﻦ ﻋﻴﻨﻴﻦ وأنف و فمو ﺷﻌﺮ.',
                'name_en' => 'Draws a recognizable face that includes two eyes, a nose, a mouth, and hair',
                'created_at' => '2023-08-24 08:09:33',
                'updated_at' => '2023-08-24 08:09:33',
            ),
            64 => 
            array (
                'id' => 65,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺴﻤﻲ ﻣﻌﻈﻢ اﻟﺤﺮوف ﻋﻨﺪﻣﺎ تعرض عليه',
                'name_en' => 'Names most letters when shown the alphabet',
                'created_at' => '2023-08-24 08:11:01',
                'updated_at' => '2023-08-24 08:11:01',
            ),
            65 => 
            array (
                'id' => 66,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺴﻤﻲ ﻣﻌﻈﻢ اﻟﺤﺮوف ﻋﻨﺪﻣﺎ تعرض عليه',
                'name_en' => 'Names most letters when shown the alphabet',
                'created_at' => '2023-08-24 08:11:01',
                'updated_at' => '2023-08-24 08:11:01',
            ),
            66 => 
            array (
                'id' => 67,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻌﺪ ﻣﻦ 1 ﺇﻟﻰ .20',
                'name_en' => 'Counts from 1 to 20',
                'created_at' => '2023-08-24 08:11:31',
                'updated_at' => '2023-08-24 08:11:31',
            ),
            67 => 
            array (
                'id' => 68,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻃﺒﺎﻋﺔ ﺣﺮﻓﻴﻦ ﻋﻠﻰ اﻷﻗﻞ ﻓﻲ اﺳﻤﻪ.',
                'name_en' => 'Prints at least two letters in his or her name',
                'created_at' => '2023-08-24 08:14:05',
                'updated_at' => '2023-08-24 08:14:05',
            ),
            68 => 
            array (
                'id' => 69,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳﻘﺮأ و ﻳﻠﺘﺰم  ﺑﺎﻟﻌﻼﻣﺎت اﻟﺸﺎئعة (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻻ ﺗﺪﺧﻞ ، ﺧﺮوج، ﺗﻮﻗﻒ)',
            'name_en' => 'Reads and obeys common signs (for example, Do Not Enter, Exit, Stop)',
                'created_at' => '2023-08-24 08:19:00',
                'updated_at' => '2023-08-24 08:19:00',
            ),
            69 => 
            array (
                'id' => 70,
                'abas_sub_domain_id' => 3,
                'name' => 'يسمي أﻳﺎم ﺍﻷﺳﺒﻮع ﺑﺎﻟﺘﺮﺗﻴﺐ',
                'name_en' => 'States the days of the week in order',
                'created_at' => '2023-08-24 08:19:39',
                'updated_at' => '2023-08-24 10:52:40',
            ),
            70 => 
            array (
                'id' => 71,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻜﺘﺐ أو ﻳﻄﺒﻊ اﺳﻤﻪ الأول و اﻷﺧﻴﺮ',
                'name_en' => 'Writes or prints his or her first and last name',
                'created_at' => '2023-08-24 08:20:38',
                'updated_at' => '2023-08-24 08:20:38',
            ),
            71 => 
            array (
                'id' => 72,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻜﺘﺐ اﻷرﻗﺎم ﻣﻦ 1 إﻟﻰ 10 ﺑﺸﻜﻞ ﺻﺤﻴﺢ',
                'name_en' => 'Writes numbers 1 through 10 correctly',
                'created_at' => '2023-08-24 08:21:48',
                'updated_at' => '2023-08-24 08:21:48',
            ),
            72 => 
            array (
                'id' => 73,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳقول أي ﻳﻮم ﻳﺄﺗﻲ ﻗﺒﻞ ﺁﺧﺮ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻳﺄﺗﻲ الأرﺑﻌﺎء ﻗﺒﻞ اﻟﺨﻤﻴﺲ)',
            'name_en' => 'Tells which day comes before another (for example, “Wednesday comes before Thursday”)',
                'created_at' => '2023-08-24 08:22:54',
                'updated_at' => '2023-08-24 08:22:54',
            ),
            73 => 
            array (
                'id' => 74,
                'abas_sub_domain_id' => 3,
                'name' => 'يحدد أيام و أوﻗﺎت  اﻷﻧﺸﻄﺔ اﻟﻤﻔﻀﻠﺔ ﺑﻌﺪ اﻟﻤﺪﺭﺳﺔ ، ﻣﺜﻞ اﻟﺘﻤﺎﺭﻳﻦ اﻟﺮﻳﺎﺿﻴﺔ أو دروس
اﻟﻤﻮﺳﻴﻘﻰ أو اﻟﺒﺮاﻣﺞ اﻟﺘﻠﻔﺰﻳﻮﻧﻴﺔ',
                'name_en' => 'States days and times of favorite after-school activities, such as sports  practice, music lessons, or television shows.',
                'created_at' => '2023-08-24 08:24:33',
                'updated_at' => '2023-08-24 08:24:33',
            ),
            74 => 
            array (
                'id' => 75,
                'abas_sub_domain_id' => 4,
                'name' => 'يزيل او يفتح اغلفة الاشياء مثل علبة لبن او صندوق طعام او علبة حلوى',
                'name_en' => 'Removes cookies, chips, or other food from a box or bag',
                'created_at' => '2023-08-24 08:48:21',
                'updated_at' => '2023-08-24 08:48:21',
            ),
            75 => 
            array (
                'id' => 76,
                'abas_sub_domain_id' => 4,
                'name' => 'ﻳﻈُﻬﺮ ﻗﻠﻘﻪ ﻋﻨﺪﻣﺎ ﻳﻨﺴﻜﺐ شيئا ﻣﺎ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻘﻮل "أوه  ﻻ" أو ﻳﺨﺒﺮ ﺷﺨﺼﺎً ﺑﺎﻟﻐﺎً',
                'name_en' => 'Shows concern when he or she spills something (for example, says “Oh no” or tells an adult).',
                    'created_at' => '2023-08-24 08:51:38',
                    'updated_at' => '2023-08-24 08:51:38',
                ),
                76 => 
                array (
                    'id' => 77,
                    'abas_sub_domain_id' => 4,
                'name' => 'ﻳﺸﻴﺮ إﻟﻰ ﻣﻜﺎن ﺣﻔﻆ اﻃﻌﻤﺔ شائعة اﻻﺳﺘﺨﺪام ﻓﻲ ﻣﻨﺰﻟﻪ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺜﻼﺟﺔ)',
                'name_en' => 'Points to where commonly used foods are kept in his or her home (for  example, the refrigerator).',
                    'created_at' => '2023-08-24 09:05:31',
                    'updated_at' => '2023-08-24 10:49:42',
                ),
                77 => 
                array (
                    'id' => 78,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺸﻴﺮ إﻟﻰ ﻣﻜﺎن ﺗﺨﺰﻳﻦ ﻣﻼﺑﺴﻪ',
                    'name_en' => 'Points to the place where his or her clothes are stored',
                    'created_at' => '2023-08-24 09:17:33',
                    'updated_at' => '2023-08-24 09:17:33',
                ),
                78 => 
                array (
                    'id' => 79,
                    'abas_sub_domain_id' => 4,
                    'name' => 'يخرج  ﻗﻤﻴﺼﺎً أو ﻗﻄﻌﺔ ﻣﻼﺑﺲ أﺧﺮى ﻣﻦ اﻟﺪرج ﻋﻨﺪ اﻟﻄﻠﺐ',
                    'name_en' => 'Takes a shirt or other piece of clothing out of a drawer when asked',
                    'created_at' => '2023-08-24 09:19:01',
                    'updated_at' => '2023-08-24 09:19:01',
                ),
                79 => 
                array (
                    'id' => 80,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺴﺎﻋﺪ اﻵﺧﺮﻳﻦ ﻓﻲ وﺿﻊ وترتيب اﻷﻟﻌﺎب  واﻷﺷﻴﺎء اﻷﺧﺮى',
                    'name_en' => 'Assists other people with putting away toys, games, and other items',
                    'created_at' => '2023-08-24 09:33:07',
                    'updated_at' => '2023-08-24 09:33:07',
                ),
                80 => 
                array (
                    'id' => 81,
                    'abas_sub_domain_id' => 4,
                    'name' => 'يجمع  اﻟﻘﻤﺎﻣﺔ أو اﻟﻮرق ﻓﻲ اﻟﻤﻨﺰل ويضعها في مكانها المخصص',
                    'name_en' => 'Picks up and throws away trash or paper at home',
                    'created_at' => '2023-08-24 09:33:59',
                    'updated_at' => '2023-08-24 09:33:59',
                ),
                81 => 
                array (
                    'id' => 82,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻘﻮم ﺑﻤﻬﻤﺔ ﺑﺴﻴﻄﺔ ﻋﻨﺪﻣﺎ ﻳﻄُﻠﺐ ﻣﻨﻚ ذﻟﻚ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻌﻤﻞ ﻟﻠﺤﺼﻮل ﻋﻠﻰ ﻣﻨﺸﻔﺔ ﻻﻧﺴﻜﺎب اﻟﺴﻮائل',
                    'name_en' => 'Does a simple errand when asked (for example, runs to get a towel for a spill)',
                        'created_at' => '2023-08-24 09:34:59',
                        'updated_at' => '2023-08-24 09:34:59',
                    ),
                    82 => 
                    array (
                        'id' => 83,
                        'abas_sub_domain_id' => 4,
                        'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ رﻛﻞ أو ﺿﺮب  اﻷﺛﺎث',
                        'name_en' => 'Refrains from kicking or hitting furniture.',
                        'created_at' => '2023-08-24 09:35:43',
                        'updated_at' => '2023-08-24 09:35:43',
                    ),
                    83 => 
                    array (
                        'id' => 84,
                        'abas_sub_domain_id' => 4,
                        'name' => 'تشغيل و إﻳﻘﺎف  اﻟﺘﻠﻔﺰﻳﻮن.',
                        'name_en' => 'Turns television on and off',
                        'created_at' => '2023-08-24 09:36:32',
                        'updated_at' => '2023-08-24 09:36:32',
                    ),
                    84 => 
                    array (
                        'id' => 85,
                        'abas_sub_domain_id' => 4,
                        'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ رمي  اﻟﻄﻌﺎم  أو  اﻟﻮرق  ﻋﻠﻰ اﻷرض',
                        'name_en' => 'Refrains from throwing food or paper on the floor',
                        'created_at' => '2023-08-24 10:41:20',
                        'updated_at' => '2023-08-24 10:41:20',
                    ),
                    85 => 
                    array (
                        'id' => 86,
                        'abas_sub_domain_id' => 4,
                        'name' => 'ﻳﻐﺴﻞ ﻳﺪيه دون  رش اﻟﻤﺎء ﻋﻠﻰ الأرض',
                        'name_en' => 'Washes hands without splashing water on the floor',
                        'created_at' => '2023-08-24 10:49:10',
                        'updated_at' => '2023-08-24 10:49:10',
                    ),
                    86 => 
                    array (
                        'id' => 87,
                        'abas_sub_domain_id' => 4,
                        'name' => 'يحصل ﻋﻠﻰ اﻟﻮﺟﺒﺎت اﻟﺨﻔﻴﻔﺔ اﻟﺨﺎﺻﺔ به ﻣﻦ اﻟﺨﺰاﻧﺔ أو  اﻟﻤﺨﺰن',
                        'name_en' => 'Gets own snacks from cabinet or pantry',
                        'created_at' => '2023-08-24 10:53:06',
                        'updated_at' => '2023-08-24 10:53:06',
                    ),
                    87 => 
                    array (
                        'id' => 88,
                        'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺴﺎﻋﺪ اﻟﺒﺎﻟﻐﻴﻦ ﻓﻲ إﻋﺪاد  وﺟﺒﺎت ﺧﻔﻴﻔﺔ أو  وﺟﺒﺎت ﺑﺴﻴﻄﺔ )ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺗﻘﺪﻳﻢ ﺷﺮﺍئح اﻟﺨﺒﺰ ﻟﻠﻜﺒﺎﺭ ﻟﺼﻨﻊ اﻟﺴﻨﺪوﻳﺸﺎت)',
                'name_en' => 'Assists adults with preparing simple snacks or meals (for example, hands slices of bread to adult for making sandwiches).',
                    'created_at' => '2023-08-24 10:57:37',
                    'updated_at' => '2023-08-24 10:57:37',
                ),
                88 => 
                array (
                    'id' => 89,
                    'abas_sub_domain_id' => 4,
                'name' => 'يضع اﻟﻤﻼﺑﺲ اﻟﻤﺘﺴﺨﺔ ﻓﻲ اﻟﻤﻜﺎن اﻟﻤﻨﺎﺳﺐ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، الغسالة   أو ﺳﻠﺔ  ﻣﻼﺑﺲ)',
                'name_en' => 'Places dirty clothes in the proper place (for example, a hamper or clothes  basket)',
                    'created_at' => '2023-08-24 10:58:43',
                    'updated_at' => '2023-08-24 10:58:43',
                ),
                89 => 
                array (
                    'id' => 90,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻤﺴﺢ الارضية و الطاولة ﺑﺎﻟﻤﻨﺰل',
                    'name_en' => 'Wipes up spills at home',
                    'created_at' => '2023-08-24 11:01:16',
                    'updated_at' => '2023-08-24 11:01:16',
                ),
                90 => 
                array (
                    'id' => 91,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺄﺧﺬ اﻟﻤﻼﺑﺲ اﻟﺨﺎﺻﺔ ﻣﻦ اﻷدراج  أو اﻟﺨﺰاﻧﺔ ﻋﻨﺪ ﺍﺭﺗﺪﺍء اﻟﻤﻼﺑﺲ',
                    'name_en' => 'Takes own clothes from drawers or closet when getting dressed',
                    'created_at' => '2023-08-24 11:02:10',
                    'updated_at' => '2023-08-24 11:02:10',
                ),
                91 => 
                array (
                    'id' => 92,
                    'abas_sub_domain_id' => 4,
                    'name' => 'يبقي الأحذية والأقدام المتسخة بعيدة عن الأثاث',
                    'name_en' => 'Keeps dirty shoes and feet off furniture',
                    'created_at' => '2023-08-24 11:02:35',
                    'updated_at' => '2023-08-24 11:02:35',
                ),
                92 => 
                array (
                    'id' => 93,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻀﻊ ﺯﺟﺎﺟﻪ أو ﻃﺒﻘﻪ اﻟﻤﺘﺴﺦ ﻓﻲ اﻟﺤﻮض أو ﻏﺴﺎﻟﺔ اﻷﻃﺒﺎق.',
                    'name_en' => 'Puts his or her own dirty glass or plate in the sink or dishwasher',
                    'created_at' => '2023-08-24 11:03:27',
                    'updated_at' => '2023-08-24 11:03:27',
                ),
                93 => 
                array (
                    'id' => 94,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻀﻊ اﻷﺷﻴﺎء ﻓﻲ أﻣﺎﻛﻨﻬﺎ اﻟﺼﺤﻴﺤﺔ ﻋﻨﺪ اﻻﻧﺘﻬﺎء ﻣﻦ اﺳﺘﺨﺪاﻣﻬﺎ',
                    'name_en' => 'Puts things in their proper places when finished using them',
                    'created_at' => '2023-08-24 11:04:07',
                    'updated_at' => '2023-08-24 11:04:07',
                ),
                94 => 
                array (
                    'id' => 95,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺤﺎﻓﻆ ﻋﻠﻰ اﻷﻟﻌﺎب و اﻟﻤﻤﺘﻠﻜﺎت اﻷﺧﺮى ﻣﺮﺗﺒﺔ وﻧﻈﻴﻔﺔ',
                    'name_en' => 'Keeps toys, games, and other belongings neat and clean',
                    'created_at' => '2023-08-24 11:05:59',
                    'updated_at' => '2023-08-24 11:05:59',
                ),
                95 => 
                array (
                    'id' => 96,
                    'abas_sub_domain_id' => 4,
                    'name' => 'اﻟﺘﺨﻠﺺﻣﻦ ﺑﻘﺎﻳﺎ ﻃﻌﺎﻣﻪ',
                    'name_en' => 'Disposes of his or her leftover food',
                    'created_at' => '2023-08-24 11:06:33',
                    'updated_at' => '2023-08-24 11:06:33',
                ),
                96 => 
                array (
                    'id' => 97,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺼﺐ اﻟﺴﺎئل ﻣﻦ وﻋﺎء أﻛﺒﺮ ﻓﻲ اﻟﻜﻮب أو  زجاجة دون  اﻧﺴﻜﺎب',
                    'name_en' => 'Pours liquid from a larger container into own cup or glass without spilling',
                    'created_at' => '2023-08-24 11:07:24',
                    'updated_at' => '2023-08-24 11:07:24',
                ),
                97 => 
                array (
                    'id' => 98,
                    'abas_sub_domain_id' => 4,
                    'name' => 'يرتب ﺳﺮﻳﺮه',
                    'name_en' => 'Makes his or her bed',
                    'created_at' => '2023-08-24 11:07:56',
                    'updated_at' => '2023-08-24 11:07:56',
                ),
                98 => 
                array (
                    'id' => 99,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻄﻮي اﻟﻤﻼﺑﺲ اﻟﻨﻈﻴﻔﺔ.',
                    'name_en' => 'Folds clean clothes',
                    'created_at' => '2023-08-24 11:08:32',
                    'updated_at' => '2023-08-24 11:08:32',
                ),
            ));
        
        
    }
}