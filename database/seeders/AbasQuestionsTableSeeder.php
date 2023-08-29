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
                99 => 
                array (
                    'id' => 100,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺒﺘﻠﻊ اﻷدوﻳﺔ  اﻟﺴﺎئلة ﺣﺴﺐ اﻟﺤﺎﺟﺔ ، دون إزعاج.',
                    'name_en' => 'Swallows liquid medicines as needed, without fussing',
                    'created_at' => '2023-08-27 08:26:32',
                    'updated_at' => '2023-08-27 08:26:32',
                ),
                100 => 
                array (
                    'id' => 101,
                    'abas_sub_domain_id' => 5,
                    'name' => 'يبقى جالس على كرسي مرتفع او طاولة او كرسي الاطفال دون سقوط عنه',
                    'name_en' => 'Sits still in high chair, booster seat, or chair, without climbing or sliding off',
                    'created_at' => '2023-08-27 08:27:00',
                    'updated_at' => '2023-08-27 08:27:00',
                ),
                101 => 
                array (
                    'id' => 102,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺘﺠﻨﺐ اﻻﺻﻄﺪام ﺑﺎﻟﺠﺪران  أو اﻷﺷﻴﺎء ﻋﻨﺪ اﻟﺰﺣﻒ أو  اﻟﻤﺸﻲ.',
                    'name_en' => 'Avoids bumping into walls or objects when crawling or walking.',
                    'created_at' => '2023-08-27 08:27:55',
                    'updated_at' => '2023-08-27 08:27:55',
                ),
                102 => 
                array (
                    'id' => 103,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺴﻤﺢ بقياس دﺭﺟﺔ حرارته  دون ﻗﻠﻖ',
                    'name_en' => 'Allows temperature to be taken without fussing.',
                    'created_at' => '2023-08-27 08:28:46',
                    'updated_at' => '2023-08-27 08:28:46',
                ),
                103 => 
                array (
                    'id' => 104,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﻈُﻬﺮ أو  ﻳﺸﻴﺮ   أو  ﻳﺨﺒﺮ  ﺷﺨﺼﺎً ﺁﺧﺮ ﻋﻦ ﺟﺮح أو ﻛﺪﻣﺔ أو إﺻﺎﺑﺔ ﻃﻔﻴﻔﺔ أﺧﺮى   .',
                    'name_en' => 'Shows, points to, or tells another person about a cut, bruise, or other minor  0
injury',
                    'created_at' => '2023-08-27 08:29:50',
                    'updated_at' => '2023-08-27 08:29:50',
                ),
                104 => 
                array (
                    'id' => 105,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺘﺒﻊ ﺗﻮﺟﻴﻬﺎت ﺷﺨﺺ ﺁﺧﺮ "ﻟﻠﺘﻮﻗﻒ" ﻋﻨﺪ اﻻﻗﺘﺮﺍب ﻣﻦ اﻟﺨﻄﺮ ، ﻣﺜﻞ اﻟﺤﺮﻳﻖ أو اﻟﺰﺟﺎج اﻟﻤﻜﺴﻮﺭ',
                    'name_en' => 'Follows another person’s direction to “stop” when near danger, such as fire or broken glass',
                    'created_at' => '2023-08-27 08:30:52',
                    'updated_at' => '2023-08-27 08:30:52',
                ),
                105 => 
                array (
                    'id' => 106,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺸﻴﺮ إﻟﻰ ﺟﺰء اﻟﺠﺴﻢ اﻟﺬي ﻳﺘﺄﻟﻢ ﻋﻨﺪﻣﺎ ﻳﻜﻮن  ﻣﺮﻳﻀﺎً أو ﻣﺼﺎﺑﺎً.',
                    'name_en' => 'Points to the body part that hurts when he or she is sick or injured',
                    'created_at' => '2023-08-27 08:32:16',
                    'updated_at' => '2023-08-27 08:32:16',
                ),
                106 => 
                array (
                    'id' => 107,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﻈﻞ ﺛﺎﺑﺘﺎً إﻟﻰ ﺣﺪ ﻣﺎ ﻋﻨﺪﻣﺎ ﻳﻌﺎﻟﺞ ﺷﺨﺺ ﺑﺎﻟﻎ ﺟﺮﺣﺎً أو ﺧﺪﺷﺎً.',
                    'name_en' => 'Remains fairly still when an adult treats a cut or scrape',
                    'created_at' => '2023-08-27 08:33:05',
                    'updated_at' => '2023-08-27 08:33:05',
                ),
                107 => 
                array (
                    'id' => 108,
                    'abas_sub_domain_id' => 5,
                'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ وﺿﻊ أﺷﻴﺎء ﻏﻴﺮ ﺻﺎﻟﺤﺔ ﻟﻸﻛﻞ ﻓﻲ اﻟﻔﻢ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، أﻗﻼم  اﻟﺘﻠﻮﻳﻦ ، و الاشياء الصلبة ، و اﻟﺮﻣﻞ)',
                    'name_en' => 'Refrains from putting non-edible objects in mouth (for example, crayons, blocks, sand',
                        'created_at' => '2023-08-27 08:35:41',
                        'updated_at' => '2023-08-27 08:35:41',
                    ),
                    108 => 
                    array (
                        'id' => 109,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﺗﺠﻨﺐ اﻻﻗﺘﺮاب ﻛﺜﻴﺮﺍً ﻣﻦ اﻟﻨﺎﺭ أو  اﻟﺰﺟﺎج  اﻟﻤﻜﺴﻮر أو  أي ﺧﻄﺮ ﻣﺤﺘﻤﻞ ﺁﺧﺮ',
                        'name_en' => 'Avoids getting too near a fire, broken glass, or other potential danger.',
                        'created_at' => '2023-08-27 08:36:57',
                        'updated_at' => '2023-08-27 08:36:57',
                    ),
                    109 => 
                    array (
                        'id' => 110,
                        'abas_sub_domain_id' => 5,
                    'name' => 'ﺗﺠﻨﺐ ﻟﻤﺲ اﻷﺷﻴﺎء اﻟﺨﻄﺮة أو اللعب  ﺑﻬﺎ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، مبيد اﻟﺤﺸﺮات أو اﻟﺴﻜﺎﻛﻴﻦ اﻟﺤﺎدة)',
                    'name_en' => 'Avoids touching or playing with dangerous items (for example, insect spray   or sharp knives)',
                        'created_at' => '2023-08-27 08:43:00',
                        'updated_at' => '2023-08-27 08:43:00',
                    ),
                    110 => 
                    array (
                        'id' => 111,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﺗﺠﻨﺐ اﻟﺰﺣﻒ أو اﻟﺘﺴﻠﻖ ﻓﻲ اﻷﻣﺎﻛﻦ اﻟﻤﺮﺗﻔﻌﺔ أو اﻟﺨﻄﺮة.',
                        'name_en' => 'Avoids crawling or climbing on high or dangerous places',
                        'created_at' => '2023-08-27 08:44:15',
                        'updated_at' => '2023-08-27 08:44:15',
                    ),
                    111 => 
                    array (
                        'id' => 112,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺨﺒﺮ ﺷﺨﺼﺎً ﺑﺎﻟﻐﺎً إذا ﻛﺎن ﻳﻌﺎﻧﻲ ﻣﻦ ﺁﻻم  ﻓﻲ اﻟﻤﻌﺪة أو ﻣﺮض ﺁﺧﺮ.',
                        'name_en' => 'Tells an adult if he or she has a stomachache or other illness',
                        'created_at' => '2023-08-27 08:45:21',
                        'updated_at' => '2023-08-27 08:45:21',
                    ),
                    112 => 
                    array (
                        'id' => 113,
                        'abas_sub_domain_id' => 5,
                        'name' => 'يتذوق اﻷﻃﻌﻤﺔ اﻟﺴﺎﺧﻨﺔ ﻗﺒﻞ ﺗﻨﺎوﻟﻬﺎ',
                        'name_en' => 'Tests hot foods before eating them',
                        'created_at' => '2023-08-27 08:46:01',
                        'updated_at' => '2023-08-27 08:46:01',
                    ),
                    113 => 
                    array (
                        'id' => 114,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺮﺗﺪي ﻣﻌﻄﻔﺎً أو ﺳﺘﺮة ﻋﻨﺪ اﻟﺒﺮد',
                        'name_en' => 'Puts on a coat or sweater when cold.',
                        'created_at' => '2023-08-27 08:46:47',
                        'updated_at' => '2023-08-27 08:46:47',
                    ),
                    114 => 
                    array (
                        'id' => 115,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺤﻤﻞ اﻷﺷﻴﺎءاﺍﻟﻘﺎﺑﻠﺔ ﻟﻠﻜﺴﺮ ﺑﺄﻣﺎن وﺣﺬﺭ.',
                        'name_en' => 'Carries breakable objects safely and carefully',
                        'created_at' => '2023-08-27 08:47:29',
                        'updated_at' => '2023-08-27 08:47:29',
                    ),
                    115 => 
                    array (
                        'id' => 116,
                        'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺴﺄل ﺷﺨﺼﺎً ﺑﺎﻟﻐﺎً ﻗﺒﻞ اﻻﻗﺘﺮاب ﻣﻦ ﺷﻲء ﻗﺪ ﻳﻜﻮن ﺧﻄﻴﺮﺍً (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺤﻴﻮاﻧﺎت أو اﻟﺸﻮارع اﻟﻤﺰدﺣﻤﺔ أو ﻣﻌﺪات اﻟﻤﻼﻋﺐ اﻟﻌﺎﻟﻴﺔ)',
                    'name_en' => 'Asks an adult before going near something that might be dangerous (for  example, animals, busy streets, or high playground equipment)',
                        'created_at' => '2023-08-27 08:50:12',
                        'updated_at' => '2023-08-27 08:50:12',
                    ),
                    116 => 
                    array (
                        'id' => 117,
                        'abas_sub_domain_id' => 5,
                        'name' => 'يلتزم بمعاير الامان في السياره بربط الحزام لوحده',
                        'name_en' => 'Buckles own car seat or seat belt',
                        'created_at' => '2023-08-27 08:50:38',
                        'updated_at' => '2023-08-27 08:50:38',
                    ),
                    117 => 
                    array (
                        'id' => 118,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺤﻤﻞ اﻟﻤﻘﺺ ﺑﺄﻣﺎن',
                        'name_en' => 'Carries scissors safely',
                        'created_at' => '2023-08-27 08:52:05',
                        'updated_at' => '2023-08-27 08:52:05',
                    ),
                    118 => 
                    array (
                        'id' => 119,
                        'abas_sub_domain_id' => 5,
                        'name' => 'يحمل الاوعية اﻟﺴﺎﺧﻨﺔ ﺑﺄﻣﺎن و ﺑﻌﻨﺎﻳﺔ',
                        'name_en' => 'Carries hot containers safely and carefully',
                        'created_at' => '2023-08-27 08:53:05',
                        'updated_at' => '2023-08-27 08:53:05',
                    ),
                    119 => 
                    array (
                        'id' => 120,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺴﺘﺨﺪم  اﻟﻤﻨﺎﻓﺬ أو اﻟﻤﻘﺎﺑﺲ اﻟﻜﻬﺮﺑﺎئية ﺑﺄﻣﺎن',
                        'name_en' => 'Uses electrical outlets or sockets safely',
                        'created_at' => '2023-08-27 08:54:37',
                        'updated_at' => '2023-08-27 08:54:37',
                    ),
                    120 => 
                    array (
                        'id' => 121,
                        'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﻌﺘﻨﻲ ﺑﺎﻹﺻﺎﺑﺎت  اﻟﻄﻔﻴﻔﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺟﺮوح اﻟﻮرق وﺧﺪوش اﻟﺮﻛﺒﺔ وﻧﺰﻳﻒ اﻷﻧﻒ)',
                        'name_en' => 'Cares for own minor injuries (for example, paper cuts, knee scrapes, nosebleeds',
                            'created_at' => '2023-08-27 08:57:38',
                            'updated_at' => '2023-08-27 08:57:38',
                        ),
                        121 => 
                        array (
                            'id' => 122,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺒﺘﺴﻢ أو ﻳﻈﻬﺮ اﻻﻫﺘﻤﺎم ﻋﻨﺪﻣﺎ ﻳﺮى ﻟﻌﺒﺔ ﻣﻔﻀﻠﺔ',
                            'name_en' => 'Smiles or shows interest when he or she sees a favorite toy.',
                            'created_at' => '2023-08-27 08:58:33',
                            'updated_at' => '2023-08-27 08:58:33',
                        ),
                        122 => 
                        array (
                            'id' => 123,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ﺑﻤﺠﻤﻮﻋﺔ ﻣﺘﻨﻮﻋﺔ ﻣﻦ اﻷﻟﻌﺎب ﺑﺪﻻ ًﻣﻦ واﺣﺪة  أو  اﺛﻨﺘﻴﻦ ﻓﻘﻂ',
                            'name_en' => 'Plays with a variety of toys instead of only one or two',
                            'created_at' => '2023-08-27 08:59:21',
                            'updated_at' => '2023-08-27 08:59:21',
                        ),
                        123 => 
                        array (
                            'id' => 124,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ﺑﻠﻌﺒﺔ أو  ﻟﻌﺒﺔ  واﺣﺪة ﻟﻤﺪة  دﻗﻴﻘﺔ واحدة  ﻋﻠﻰ اﻷﻗﻞ',
                            'name_en' => 'Plays with a single toy or game for at least 1 minute',
                            'created_at' => '2023-08-27 09:00:12',
                            'updated_at' => '2023-08-27 09:00:12',
                        ),
                        124 => 
                        array (
                            'id' => 125,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ﺑﻤﻔﺮده ﻣﻊ اﻟﺪﻣﻰ واﻷﻟﻌﺎب أو ﻳﻤﺎﺭس أﻧﺸﻄﺔ ﻣﺮﺣﺔ أﺧﺮى',
                            'name_en' => 'Plays alone with toys and games, or does other fun activities',
                            'created_at' => '2023-08-27 09:01:08',
                            'updated_at' => '2023-08-27 09:01:08',
                        ),
                        125 => 
                        array (
                            'id' => 126,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ أﻟﻌﺎﺑﺎً ﺑﺴﻴﻄﺔ ﻣﺜﻞ "بخ-عينوو" أو دﺣﺮﺟﺔ اﻟﻜﺮة ﻟﻶﺧﺮﻳﻦ',
                            'name_en' => 'Plays simple games like “peek-a-boo” or rolls a ball to others',
                            'created_at' => '2023-08-27 09:08:24',
                            'updated_at' => '2023-08-27 09:08:24',
                        ),
                        126 => 
                        array (
                            'id' => 127,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻨﻈﺮ ﻣﻊ ﺷﺨﺺ ﺑﺎﻟﻎ ﺇﻟﻰ اﻟﺼﻮﺭ ﻓﻲ اﻟﻜﺘﺐأو  اﻟﻤﺠﻼت',
                            'name_en' => 'Looks with an adult at pictures in books or magazines',
                            'created_at' => '2023-08-27 09:09:19',
                            'updated_at' => '2023-08-27 09:09:19',
                        ),
                        127 => 
                        array (
                            'id' => 128,
                            'abas_sub_domain_id' => 6,
                            'name' => 'يراقب ﻟﺒﻀﻊ  دﻗﺎئق  ﺑﻴﻨﻤﺎ ﻳﻠﻌﺐ اﻟﻨﺎس ﺑﺎﻷﻟﻌﺎب',
                            'name_en' => 'Watches for a few minutes as people play with toys or games',
                            'created_at' => '2023-08-27 09:10:53',
                            'updated_at' => '2023-08-27 09:10:53',
                        ),
                        128 => 
                        array (
                            'id' => 129,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻈﻬﺮ اﻫﺘﻤﺎﻣﺎً ﺑﻠﻌﺒﺔ أو ﺷﻲء ﺁﺧﺮ  ﺑﺎﻹﺷﺎرة  إﻟﻴﻬﺎ',
                            'name_en' => 'Shows interest in a toy or other object by pointing to it',
                            'created_at' => '2023-08-27 09:13:05',
                            'updated_at' => '2023-08-27 09:13:05',
                        ),
                        129 => 
                        array (
                            'id' => 130,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺨﺘﺎر ﻟﻌﺒﺔ ﺃﺛﻨﺎء وﻗﺖ اﻟﻠﻌﺐ',
                            'name_en' => 'Chooses a game or toy during playtime',
                            'created_at' => '2023-08-27 09:13:39',
                            'updated_at' => '2023-08-27 09:13:39',
                        ),
                        130 => 
                        array (
                            'id' => 131,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ  ﺑﺎﻷﻟﻌﺎب أو ﻏﻴﺮﻫﺎ ﻣﻦ اﻟﻌﻨﺎﺻﺮ اﻟﻤﻤﺘﻌﺔ ﻣﻊ  اﻵﺧﺮﻳﻦ',
                            'name_en' => 'Plays with toys, games, or other fun items with others',
                            'created_at' => '2023-08-27 09:14:33',
                            'updated_at' => '2023-08-27 09:14:33',
                        ),
                        131 => 
                        array (
                            'id' => 132,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ﺑﻠﻌﺒﺔ واﺣﺪة ﻷﻛﺜﺮ ﻣﻦ 5 دﻗﺎئق',
                            'name_en' => 'Plays with a single toy or game for more than 5 minutes',
                            'created_at' => '2023-08-27 09:16:03',
                            'updated_at' => '2023-08-27 09:16:03',
                        ),
                        132 => 
                        array (
                            'id' => 133,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ضمن المساحة المخصصة للعلب ضمن المحيط المخصص',
                            'name_en' => 'Plays on playground equipment',
                            'created_at' => '2023-08-27 09:17:44',
                            'updated_at' => '2023-08-27 09:17:44',
                        ),
                        133 => 
                        array (
                            'id' => 134,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻄﻠﺐ اﻟﻘﺮاءة ﻣﻦ ﻛﺘﺎب ﻣﻔﻀﻞ',
                            'name_en' => 'Asks to be read to from a favorite book',
                            'created_at' => '2023-08-27 09:19:11',
                            'updated_at' => '2023-08-27 09:19:11',
                        ),
                        134 => 
                        array (
                            'id' => 135,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺤﻀﺮ أﻧﺸﻄﺔ ﻣﻤﺘﻌﺔ ﻓﻲ ﻣﻨﺰل ﺷﺨﺺ ﺁﺧﺮ',
                            'name_en' => 'Attends fun activities at another’s home',
                            'created_at' => '2023-08-27 09:21:15',
                            'updated_at' => '2023-08-27 09:21:15',
                        ),
                        135 => 
                        array (
                            'id' => 136,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺸﺎرك ﻓﻲ اﻟﻠﻌﺐ اﻟﺘﺨﻴﻠﻲ أو اﻟﺘﺨﻴﻠﻲ ﻣﻊ اﻵﺧﺮﻳﻦ',
                            'name_en' => 'Engages in imaginary or make-believe play with others',
                            'created_at' => '2023-08-27 09:22:23',
                            'updated_at' => '2023-08-27 09:22:23',
                        ),
                        136 => 
                        array (
                            'id' => 137,
                            'abas_sub_domain_id' => 6,
                        'name' => 'ﻳﺸﺎرك ﺑﺎﻧﺘﻈﺎم ﻓﻲ ﻧﺸﺎط ﻣﻤﺘﻊ ﻣﺤﺪد(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻻﺳﺘﻤﺎع  إﻟﻰ ﻧﻮع  ﻣﻌﻴﻦ ﻣﻦ اﻟﻤﻮﺳﻴﻘﻰ أو ﻟﻌﺐ إﺣﺪى أﻟﻌﺎب  اﻟﻜﻤﺒﻴﻮﺗﺮ اﻟﻤﻔﻀﻠﺔ)',
                        'name_en' => 'Participates regularly in a specific fun activity (for example, listening to a  certain type of music or playing a favorite computer game)',
                            'created_at' => '2023-08-27 09:24:57',
                            'updated_at' => '2023-08-27 09:24:57',
                        ),
                        137 => 
                        array (
                            'id' => 138,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ أﻟﻌﺎﺑﺎً ﺑﺴﻴﻄﺔ ﻣﻊ ﺯﻣﻼئه ﻓﻲ اﻟﻠﻌﺐ دون  إﺷﺮاف ﻣﻦ اﻟﻜﺒﺎر',
                            'name_en' => 'Plays simple games with playmates without adult supervision',
                            'created_at' => '2023-08-27 09:25:57',
                            'updated_at' => '2023-08-27 09:25:57',
                        ),
                        138 => 
                        array (
                            'id' => 139,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺪﻋﻮ اﻵﺧﺮﻳﻦ ﻟﻼﻧﻀﻤﺎم  إﻟﻴﻪ ﻓﻲ ﻣﻤﺎرﺳﺔ اﻷﻟﻌﺎب  و اﻷﻧﺸﻄﺔ اﻟﺘﺮﻓﻴﻬﻴﺔ  اﻷﺧﺮى.',
                            'name_en' => 'Invites others to join him or her in playing games and other fun activities',
                            'created_at' => '2023-08-27 09:27:19',
                            'updated_at' => '2023-08-27 09:27:19',
                        ),
                        139 => 
                        array (
                            'id' => 140,
                            'abas_sub_domain_id' => 6,
                        'name' => 'ﻳﺤﻔﻆ اﻷﺷﻴﺎء اﻟﻤﻬﻤﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺼﺨﻮر  و اﻟﺮﻳﺶ و اﻟﺼﻮﺭ)',
                            'name_en' => 'Saves things of interest (for example, rocks, feathers, pictures',
                                'created_at' => '2023-08-27 09:28:48',
                                'updated_at' => '2023-08-27 09:28:48',
                            ),
                            140 => 
                            array (
                                'id' => 141,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﻨﺘﻈﺮ دوره ﻓﻲ اﻷﻟﻌﺎب و اﻷﻧﺸﻄﺔ اﻟﺘﺮﻓﻴﻬﻴﺔ  اﻷﺧﺮى',
                                'name_en' => 'Waits for his or her turn in games and other fun activities',
                                'created_at' => '2023-08-27 09:30:22',
                                'updated_at' => '2023-08-27 09:30:22',
                            ),
                            141 => 
                            array (
                                'id' => 142,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﺘﺒﻊ اﻟﻘﻮاﻋﺪ ﻓﻲ اﻷﻟﻌﺎب  و اﻷﻧﺸﻄﺔ اﻟﺘﺮﻓﻴﻬﻴﺔ اﻷﺧﺮى.',
                                'name_en' => 'Follows the rules in games and other fun activities',
                                'created_at' => '2023-08-27 09:32:09',
                                'updated_at' => '2023-08-27 09:32:09',
                            ),
                            142 => 
                            array (
                                'id' => 143,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﺪﻋﻮ اﻵﺧﺮﻳﻦ إﻟﻰ اﻟﻤﻨﺰل ﻟﻨﺸﺎط  ﻣﻤﺘﻊ',
                                'name_en' => 'Invites others home for a fun activity',
                                'created_at' => '2023-08-27 09:33:07',
                                'updated_at' => '2023-08-27 09:33:07',
                            ),
                            143 => 
                            array (
                                'id' => 144,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﻠﻌﺐ أﻟﻌﺎب ﻟﻮﺣﻴﺔ ﺑﺴﻴﻄﺔ',
                                'name_en' => 'Plays simple board games',
                                'created_at' => '2023-08-27 09:33:48',
                                'updated_at' => '2023-08-27 09:33:48',
                            ),
                            144 => 
                            array (
                                'id' => 145,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﺸﺎرك ﻓﻲ ﺑﺮﻧﺎﻣﺞ ﻣﻨﻈﻢ ﻟﺮﻳﺎﺿﺔ أو  ﻫﻮاﻳﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻤﺎرس  ﻛﺮة اﻟﺴﻠﺔ أو  ﻳﺄﺧﺬ
ﻓﺼﻞ ﻣﻮﺳﻴﻘﻰ)',
                            'name_en' => 'Participates in an organized program for a sport or hobby (for example,  practices basketball or takes a music class).',
                                'created_at' => '2023-08-27 09:37:00',
                                'updated_at' => '2023-08-27 09:37:00',
                            ),
                            145 => 
                            array (
                                'id' => 146,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺒﺘﻠﻊ اﻟﺴﻮائل دون  ﺻﻌﻮﺑﺔ',
                                'name_en' => 'Swallows liquids without difficulty',
                                'created_at' => '2023-08-27 10:05:10',
                                'updated_at' => '2023-08-27 10:05:10',
                            ),
                            146 => 
                            array (
                                'id' => 147,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻨﺎم  ﻣﻌﻈﻢ اﻟﻠﻴﻞ ، وﻻ ﻳﺴﺘﻴﻘﻆ أﻛﺜﺮ ﻣﻦ ﻣﺮة أو ﻣﺮﺗﻴﻦ.',
                                'name_en' => 'Sleeps through most of the night, waking no more than one or two times',
                                'created_at' => '2023-08-27 10:28:56',
                                'updated_at' => '2023-08-27 10:28:56',
                            ),
                            147 => 
                            array (
                                'id' => 148,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺒﺘﻠﻊ اﻟﻄﻌﺎم اﻟﻄﺮي  أو اﻟﻤﺼﻔﻰ أو اﻟﻤﻬﺮوس  ﻣﺜﻞأﻏﺬﻳﺔ اﻷﻃﻔﺎل أو ﻋﺼﻴﺮ اﻟﺘﻔﺎح',
                                'name_en' => 'Swallows soft, strained, or mashed food such as baby food or applesauce',
                                'created_at' => '2023-08-27 10:29:28',
                                'updated_at' => '2023-08-27 10:31:20',
                            ),
                            148 => 
                            array (
                                'id' => 149,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻔﺘﺢ اﻟﻔﻢ ﻋﻨﺪ ﺗﻘﺪﻳﻢ اﻟﻄﻌﺎم ﺑﺎﻟﻤﻠﻌﻘﺔ',
                                'name_en' => 'Opens mouth when offered food on a spoon.',
                                'created_at' => '2023-08-27 10:32:13',
                                'updated_at' => '2023-08-27 10:32:13',
                            ),
                            149 => 
                            array (
                                'id' => 150,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ياكل بمفرده الشيبس أو اﻟﺒﺴﻜﻮﻳﺖ أو اﻟﺤﺒﻮب اﻟﺠﺎﻓﺔ أو اﻷﻃﻌﻤﺔ اﻷﺧﺮى اﻟﺘﻲ ﺗﺆﻛﻞ ﺑﺎﻷﺻﺎﺑﻊ',
                                'name_en' => 'Feeds himself or herself crackers, cookies, dry cereal, or other finger foods',
                                'created_at' => '2023-08-27 10:33:24',
                                'updated_at' => '2023-08-27 10:33:24',
                            ),
                            150 => 
                            array (
                                'id' => 151,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺄﻛﻞ اﻷﻃﻌﻤﺔ القاسية اﻟﺘﻲ ﺗﺘﻄﻠﺐ اﻟﻌﺾ و اﻟﻤﻀﻎ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺨﻀﺎﺭ اﻟﻤﻄﺒﻮﺧﺔ
ﻋﻠﻰ اﻟﺒﺨﺎﺭ)',
                            'name_en' => 'Eats firm foods that require biting and chewing (for example, steamed vegetables)',
                                'created_at' => '2023-08-27 10:34:35',
                                'updated_at' => '2023-08-27 10:34:35',
                            ),
                            151 => 
                            array (
                                'id' => 152,
                                'abas_sub_domain_id' => 7,
                                'name' => 'يشرب من كوب أو كأس، حتى لو كان يجب على شخص آخر أن يحمله',
                                'name_en' => 'Drinks from a cup or glass, even if another person must hold it',
                                'created_at' => '2023-08-27 10:35:07',
                                'updated_at' => '2023-08-27 10:35:07',
                            ),
                            152 => 
                            array (
                                'id' => 153,
                                'abas_sub_domain_id' => 7,
                                'name' => 'يرفع ذراعيه حسب الحاجة عندما يقوم شخص آخر بإلباسه أو خلع ملابسه',
                                'name_en' => 'Lifts arms as needed when another person is dressing or undressing him or her',
                                'created_at' => '2023-08-27 10:35:47',
                                'updated_at' => '2023-08-27 10:35:47',
                            ),
                            153 => 
                            array (
                                'id' => 154,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺸﻴﺮ  إﻟﻰ اﻟﻄﻌﺎم  أو ﻳﻄﻠﺒﻪ ﻋﻨﺪ اﻟﺠﻮع',
                                'name_en' => 'Points to or asks for food when hungry',
                                'created_at' => '2023-08-27 10:36:33',
                                'updated_at' => '2023-08-27 10:36:33',
                            ),
                            154 => 
                            array (
                                'id' => 155,
                                'abas_sub_domain_id' => 7,
                                'name' => 'يخلع حذائه',
                                'name_en' => 'Takes shoes off',
                                'created_at' => '2023-08-27 10:37:38',
                                'updated_at' => '2023-08-27 10:37:38',
                            ),
                            155 => 
                            array (
                                'id' => 156,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ياكل ﺑﻨﻔﺴﻪ باستخدام  اﻟﻤﻠﻌﻘﺔ أو  اﻟﺸﻮﻛﺔ و ﻟﻴﺲ ﺑﺎﻟﻴﺪ.',
                                'name_en' => 'Feeds himself or herself with a spoon or fork, not hands',
                                'created_at' => '2023-08-27 11:09:23',
                                'updated_at' => '2023-08-27 11:09:23',
                            ),
                            156 => 
                            array (
                                'id' => 157,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻐﺴﻞ ﻳﺪيه ﺑﺎﻟﻤﺎء و اﻟﺼﺎﺑﻮن',
                                'name_en' => 'Washes hands with both soap and water',
                                'created_at' => '2023-08-27 11:09:52',
                                'updated_at' => '2023-08-27 11:09:52',
                            ),
                            157 => 
                            array (
                                'id' => 158,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻤﺴﺢ و ﺟﻬﻪ ﻋﻨﺪﻣﺎ ﻳﻌﻄﻴﻪ ﺷﺨﺺ ﺑﺎﻟﻎ ﻣﻨﺸﻔﺔ',
                                'name_en' => 'Wipes his or her own face when given a washcloth by an adult',
                                'created_at' => '2023-08-27 11:10:15',
                                'updated_at' => '2023-08-27 11:10:15',
                            ),
                            158 => 
                            array (
                                'id' => 159,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺒﻘﻰ ﺟﺎﻓﺎً دون ﺗﺮﻃﻴﺐ ﻃﻮال اﻟﻴﻮم.',
                                'name_en' => 'Remains dry without wetting throughout the day',
                                'created_at' => '2023-08-27 11:10:46',
                                'updated_at' => '2023-08-27 11:10:46',
                            ),
                            159 => 
                            array (
                                'id' => 160,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺠﻠﺲ ﻋﻠﻰ اﻟﻤﺮﺣﺎض أو ﻣﻘﻌﺪ اﻟﻨﻮﻧﻴﺔ  دون  أن ﻳﻤُﺴﻚِ',
                                'name_en' => 'Sits on the toilet or potty seat without being held.',
                                'created_at' => '2023-08-27 11:11:37',
                                'updated_at' => '2023-08-27 11:11:37',
                            ),
                            160 => 
                            array (
                                'id' => 161,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺨﺒﺮ اﻟﻮاﻟﺪ أو أي ﺷﺨﺺ ﺑﺎﻟﻎ ﺁﺧﺮ  ﻋﻨﺪﻣﺎ ﻳﺤﺘﺎج ﺇﻟﻰ اﺳﺘﺨﺪام اﻟﺤﻤﺎم.',
                                'name_en' => 'Tells parent or other adult when he or she needs to use the bathroom',
                                'created_at' => '2023-08-27 11:16:10',
                                'updated_at' => '2023-08-27 11:16:10',
                            ),
                            161 => 
                            array (
                                'id' => 162,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺒﻘﻰ ﺟﺎﻓﺎً دون ﺗﺮﻃﻴﺐ ﻃﻮال اﻟﻠﻴﻞ.',
                                'name_en' => 'Remains dry without wetting throughout the night',
                                'created_at' => '2023-08-27 11:16:42',
                                'updated_at' => '2023-08-27 11:16:42',
                            ),
                            162 => 
                            array (
                                'id' => 163,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻨﻈﻒ اﻷﺳﻨﺎن ﺑﻘﻠﻴﻞ ﻣﻦ الازعاج ﻋﻨﺪﻣﺎ ﻳﻄﻠﺐ منه ﺷﺨﺺ ﺑﺎﻟﻎ اﻟﻘﻴﺎم ﺑﺬﻟﻚ',
                                'name_en' => 'Brushes teeth with little fussing when told to do so by an adult',
                                'created_at' => '2023-08-27 11:17:21',
                                'updated_at' => '2023-08-27 11:17:21',
                            ),
                            163 => 
                            array (
                                'id' => 164,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺴﺘﺨﺪم  اﻟﺤﻤﺎم  دون  ﻣﺴﺎﻋﺪة',
                                'name_en' => 'Uses bathroom without help',
                                'created_at' => '2023-08-27 11:17:56',
                                'updated_at' => '2023-08-27 11:17:56',
                            ),
                            164 => 
                            array (
                                'id' => 165,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻠﺒﺲ ملابسه لوحده.',
                                'name_en' => 'Dresses himself or herself',
                                'created_at' => '2023-08-27 11:18:16',
                                'updated_at' => '2023-08-27 11:18:16',
                            ),
                            165 => 
                            array (
                                'id' => 166,
                                'abas_sub_domain_id' => 7,
                                'name' => 'يزرر ازرار  ﺎﻟﻤﻼﺑﺲ.',
                                'name_en' => 'Buttons own clothing',
                                'created_at' => '2023-08-27 11:18:48',
                                'updated_at' => '2023-08-27 11:18:48',
                            ),
                            166 => 
                            array (
                                'id' => 167,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺴﺘﺤﻢ أو ﺑﺪون ﻣﺴﺎﻋﺪة',
                                'name_en' => 'Takes a bath or shower without help',
                                'created_at' => '2023-08-27 11:19:20',
                                'updated_at' => '2023-08-27 11:19:20',
                            ),
                            167 => 
                            array (
                                'id' => 168,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻐﺴﻞ ﺷﻌﺮه',
                                'name_en' => 'Washes his or her own hair',
                                'created_at' => '2023-08-27 11:19:40',
                                'updated_at' => '2023-08-27 11:19:40',
                            ),
                            168 => 
                            array (
                                'id' => 169,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﺗﻘﻄﻊ اﻟﻠﺤﻮم أو  اﻷﻃﻌﻤﺔ  اﻷﺧﺮى  إﻟﻰ ﻗﻄﻊ ﺻﻐﻴﺮة ﺑﺴﻜﻴﻦ',
                                'name_en' => 'Cuts meats or other foods into bite-size pieces with a knife',
                                'created_at' => '2023-08-27 11:21:36',
                                'updated_at' => '2023-08-27 11:21:36',
                            ),
                            169 => 
                            array (
                                'id' => 170,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻈﻬﺮ اﻫﺘﻤﺎﻣﺎً ﺑﻠﻌﺒﺔ أو  ﺷﻲء ﺁﺧﺮ ﺑﺎﻟﻨﻈﺮ ﺇﻟﻴﻬﺎ ﻟﺒﻀﻊ ﺛﻮان',
                                'name_en' => 'Shows interest in a toy or other object by looking at it for a few seconds',
                                'created_at' => '2023-08-27 11:22:24',
                                'updated_at' => '2023-08-27 11:22:24',
                            ),
                            170 => 
                            array (
                                'id' => 171,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺠﻠﺲ ﺑﻬﺪوء ﻟﻤﺪة دﻗﻴﻘﺔ واﺣﺪة ﻋﻠﻰ اﻷﻗﻞ دون ﻃﻠﺐ اﻻﻧﺘﺒﺎه',
                                'name_en' => 'Sits quietly for at least 1 minute without demanding attention.',
                                'created_at' => '2023-08-27 11:23:15',
                                'updated_at' => '2023-08-27 11:23:15',
                            ),
                            171 => 
                            array (
                                'id' => 172,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺠﺪ ﺷﻴئا  ﻳﻔﻌﻠﻪ ﻟﻤﺪة 5 دﻗﺎئق ﻋﻠﻰ اﻷﻗﻞ دون أن ﻳﻄﻠﺐ اﻻﻧﺘﺒﺎه',
                                'name_en' => 'Finds something to do for at least 5 minutes without demanding attention',
                                'created_at' => '2023-08-27 11:24:06',
                                'updated_at' => '2023-08-27 11:24:06',
                            ),
                            172 => 
                            array (
                                'id' => 173,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻠﻌﺐ ﺑﻠﻌﺒﺔ دون  وﺿﻌﻬﺎ ﻓﻲ ﻓﻤﻪ',
                                'name_en' => 'Plays with a toy without putting it into his or her mouth.',
                                'created_at' => '2023-08-27 11:24:36',
                                'updated_at' => '2023-08-27 11:24:36',
                            ),
                            173 => 
                            array (
                                'id' => 174,
                                'abas_sub_domain_id' => 8,
                            'name' => 'ﻳﺴﺘﻜﺸﻒ ﻏﺮﻓﺔ ﻏﻴﺮ ﻣﺄﻟﻮﻓﺔ أو ﻣﻮﻗﻔﺎً ﺟﺪﻳﺪﺍً ﺁﺧﺮ ، ﺣﺘﻰ إذا ﻛﺎن ﻳﺠﺐ ﻋﻠﻰ أﺣﺪ ﺍﻟﻮاﻟﺪﻳﻦ تشجيعه (ﻋﻠﻰﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻏﺮﻓﺔ اﻧﺘﻈﺎر ﺍﻟﻄﺒﻴﺐ)',
                            'name_en' => 'Explores an unfamiliar room or other new situation, even if a parent must  encourage it (for example, a doctor’s waiting room)',
                                'created_at' => '2023-08-27 11:26:18',
                                'updated_at' => '2023-08-27 11:26:18',
                            ),
                            174 => 
                            array (
                                'id' => 175,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺨﺘﺎر اﻟﻄﻌﺎم أو  اﻟﻮﺟﺒﺔ اﻟﺨﻔﻴﻔﺔ اﻟﺘﻲ ﻳﺮﻏﺐ ﻓﻲ ﺗﻨﺎوﻟﻬﺎ',
                                'name_en' => 'Chooses the food or snack he or she wishes to eat when given a choice',
                                'created_at' => '2023-08-27 11:27:34',
                                'updated_at' => '2023-08-27 11:27:34',
                            ),
                            175 => 
                            array (
                                'id' => 176,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺘﺤﺮك ﻋﻠﻰ ﺑﻌﺪ أﻣﺘﺎﺭ ﻗﻠﻴﻠﺔ ﻣﻦ أﺣﺪ اﻟﻮاﻟﺪﻳﻦ ﻓﻲ ﻣﻮﻗﻒ ﺟﺪﻳﺪ ﻃﺎﻟﻤﺎ أن اﻟﻮاﻟﺪ ﻓﻲ نفس المكان
(ﻋﻠﻰﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻋﻨﺪ زﻳﺎرة ﻣﺴﻜﻦ ﻏﻴﺮ ﻣﺄﻟﻮف)',
                            'name_en' => 'Moves a few feet away from a parent in a new situation as long as the  parent is in sight (for example, when visiting an unfamiliar residence)',
                                'created_at' => '2023-08-27 11:29:25',
                                'updated_at' => '2023-08-27 11:29:25',
                            ),
                            176 => 
                            array (
                                'id' => 177,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺤﺎول اﻟﻘﻴﺎم ﺑﻤﻌﻈﻢ  اﻷﺷﻴﺎء ﺑﻤﻔﺮده  دون ﻣﺴﺎﻋﺪة ﺷﺨﺺ ﺑﺎﻟﻎ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ارﺗﺪاء اﻟﻤﻼﺑﺲ
أو إﻃﻌﺎم ﻧﻔﺴﻪ)',
                            'name_en' => 'Tries to do most things alone without an adult’s help (for example, dressing or feeding self)',
                                'created_at' => '2023-08-27 11:30:56',
                                'updated_at' => '2023-08-27 11:30:56',
                            ),
                            177 => 
                            array (
                                'id' => 178,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺘﺒﻊ ﻃﻠﺐ ﺷﺨﺺ ﺑﺎﻟﻎ "ﺑﺎﻟﻬﺪوء" ﺃﻭ "اﻟﺘﺼﺮف."',
                                'name_en' => 'Follows an adult’s request to “quiet down” or “behave.”',
                                'created_at' => '2023-08-27 11:31:32',
                                'updated_at' => '2023-08-27 11:31:32',
                            ),
                            178 => 
                            array (
                                'id' => 179,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻘﺎوم دﻓﻊ أو  ﺿﺮب ﻃﻔﻞ ﺁﺧﺮ ﻋﻨﺪما يشعر بالغضب أو  اﻻﻧﺰﻋﺎج.',
                                'name_en' => 'Resists pushing or hitting another child when angry or upset.',
                                'created_at' => '2023-08-27 11:32:19',
                                'updated_at' => '2023-08-27 11:32:19',
                            ),
                            179 => 
                            array (
                                'id' => 180,
                                'abas_sub_domain_id' => 8,
                            'name' => 'ﻳﺘﺒﻊ ﻗﻮاﻋﺪ ﻣﻨﺰﻟﻴﺔ ﺑﺴﻴﻄﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻣﻤﻨﻮع اﻟﺠﺮي ﻓﻲ اﻟﻤﻨﺰل)',
                            'name_en' => 'Follows simple household rules (for example, “No running in the house”).',
                                'created_at' => '2023-08-27 11:39:43',
                                'updated_at' => '2023-08-27 11:39:43',
                            ),
                            180 => 
                            array (
                                'id' => 181,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻘﻒﺛﺎﺑﺘﺎً ﻋﻨﺪ اﻟﺤﺎﺟﺔ ، دون  ﺗﻤﻠﻤﻞ أو  ﺗﺤﺮﻳﻚ.',
                                'name_en' => 'Stands still when needed, without fidgeting or moving around.',
                                'created_at' => '2023-08-27 11:40:36',
                                'updated_at' => '2023-08-27 11:40:36',
                            ),
                            181 => 
                            array (
                                'id' => 182,
                                'abas_sub_domain_id' => 8,
                            'name' => '.13ﻳﺒﺪأ  ﻧﺸﺎﻃﺎً ﻓﻲ اﻟﺤﺎل ﻋﻨﺪﻣﺎ ﻳﻄُﻠﺐ ﻣﻨﻪ اﻟﻘﻴﺎم ﺑﺬﻟﻚ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "اذﻫﺐ واﺳﺘﺤﻢ")',
                            'name_en' => 'Starts an activity at once when told to do so (for example, “Go take a  bath”)',
                                'created_at' => '2023-08-27 11:42:04',
                                'updated_at' => '2023-08-27 11:42:04',
                            ),
                            182 => 
                            array (
                                'id' => 183,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺘﺤﻜﻢ ﻓﻲ ردود فعله ﻋﻨﺪﻣﺎ ﻳﺄﺧﺬ ﺃﺣﺪ اﻟﻮاﻟﺪﻳﻦ أو  أي ﺷﺨﺺ ﺑﺎﻟﻎ ﻟﻌﺒﺔ أو ﺷﻲء ﺑﻌﻴﺪﺍً.',
                                'name_en' => 'Controls temper when a parent or other adult takes a toy or object away',
                                'created_at' => '2023-08-27 11:42:52',
                                'updated_at' => '2023-08-27 11:42:52',
                            ),
                            183 => 
                            array (
                                'id' => 184,
                                'abas_sub_domain_id' => 8,
                            'name' => 'ﻳﻄﻠﺐ اﻹذن ﻣﻦ ﺷﺨﺺ ﺑﺎﻟﻎ ﻋﻨﺪ اﻟﺤﺎﺟﺔ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻫﻞ ﻳﻤﻜﻨﻨﻲ اﻟﺨﺮوج للعب)',
                            'name_en' => 'Asks permission from an adult when needed (for example, “May I go outside to play?”).',
                                'created_at' => '2023-08-27 11:44:23',
                                'updated_at' => '2023-08-27 11:44:23',
                            ),
                            184 => 
                            array (
                                'id' => 185,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺴﺘﻤﺮ ﻓﻲاﻟﻌﻤﻞ ﻋﻠﻰ اﻟﻤﻬﺎم  اﻟﺼﻌﺒﺔ  دون  اﻟﺸﻌﻮﺭ ﺑﺎﻹﺣﺒﺎط أو  اﻻﺳﺘﻘﺎﻟﺔ أو اﻟﺤﺎﺟﺔ إلى التذكير',
                                'name_en' => 'Keeps working on hard tasks without becoming discouraged, quitting, or needing reminders',
                                'created_at' => '2023-08-27 11:45:51',
                                'updated_at' => '2023-08-27 11:45:51',
                            ),
                            185 => 
                            array (
                                'id' => 186,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻌﻤﻞ ﺑﺸﻜﻞ ﻣﺴﺘﻘﻞ ولا  ﻳﻄﻠﺐ اﻟﻤﺴﺎﻋﺪة  إلا ﻋﻨﺪ اﻟﻀﺮورة',
                                'name_en' => 'Works independently and asks for help only when necessary.',
                                'created_at' => '2023-08-27 11:46:49',
                                'updated_at' => '2023-08-27 11:46:49',
                            ),
                            186 => 
                            array (
                                'id' => 187,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻮﻗﻒ ﻧﺸﺎﻃﺎً ﻣﻤﺘﻌﺎً ، دون ﺷﻜﻮى ، ﻋﻨﺪ إﺧﺒﺎره ﺑﺄن اﻟﻮﻗﺖ ﻗﺪ اﻧﺘﻬﻰ.',
                                'name_en' => 'Stops a fun activity, without complaining, when told that time is up.',
                                'created_at' => '2023-08-27 11:51:32',
                                'updated_at' => '2023-08-27 11:51:32',
                            ),
                            187 => 
                            array (
                                'id' => 188,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺘﺤﻜﻢ ﻓﻲ ردود فعله ﻋﻨﺪ اﻻﺧﺘﻼف ﻣﻊ اﻷﺻﺪﻗﺎء',
                                'name_en' => 'Controls temper when disagreeing with friends',
                                'created_at' => '2023-08-27 11:52:08',
                                'updated_at' => '2023-08-27 11:52:08',
                            ),
                            188 => 
                            array (
                                'id' => 189,
                                'abas_sub_domain_id' => 8,
                            'name' => 'ﻳﺘﺒﻊ روﺗﻴﻨﺎً دون ﺗﺬﻛﻴﺮ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺗﻨﻈﻴﻒ اﻷﺳﻨﺎن ﻗﺒﻞ اﻟﻨﻮم أو  إﻃﻌﺎم ﺣﻴﻮان أﻟﻴﻒ)',
                            'name_en' => 'Follows a routine without being reminded (for example, brushing teeth  before bedtime or feeding a pet)',
                                'created_at' => '2023-08-27 11:54:18',
                                'updated_at' => '2023-08-27 11:54:18',
                            ),
                            189 => 
                            array (
                                'id' => 190,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻄﻠﺐ الإذن ﻗﺒﻞ اﻟﻠﻌﺐ ﺑﻠﻌﺒﺔ ﻃﻔﻞ ﺁﺧﺮ          .',
                                'name_en' => 'Asks permission before playing with another child’s toy or game.',
                                'created_at' => '2023-08-27 11:55:08',
                                'updated_at' => '2023-08-27 11:55:08',
                            ),
                            190 => 
                            array (
                                'id' => 191,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺨﺘﺎر ﻣﻼﺑﺴﻪ اﻟﺨﺎﺻﺔ ﻛﻞ ﻳﻮم ﺗﻘﺮﻳﺒﺎً',
                                'name_en' => 'Chooses own clothes almost every day.',
                                'created_at' => '2023-08-27 11:57:12',
                                'updated_at' => '2023-08-27 11:57:12',
                            ),
                            191 => 
                            array (
                                'id' => 192,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻌﻤﻞ ﻋﻠﻰ ﻧﺸﺎط ﻣﻨﺰﻟﻲ أو ﻣﺪﺭﺳﻲ وﺍﺣﺪ ﻟﻤﺪة 15  دﻗﻴﻘﺔ ﻋﻠﻰ اﻷﻗﻞ دون ﺗﺬﻛﻴﺮ.',
                                'name_en' => 'Works on one home or school activity for at least 15 minutes without   reminders.',
                                'created_at' => '2023-08-27 11:58:05',
                                'updated_at' => '2023-08-27 11:58:05',
                            ),
                            192 => 
                            array (
                                'id' => 193,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻨﺎﻗﺶ ﻃﺮق ﺣﻞ اﻟﻨﺰاﻋﺎت ﻣﻊ اﻵﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻳﻤﻜﻨﻚ اﻟﺤﺼﻮل ﻋﻠﻰ ﻫﺬا اﻵن  إذا
ﻛﺎن ﺑﺈﻣﻜﺎﻧﻲ اﻟﺤﺼﻮل ﻋﻠﻴﻪ ﻻﺣﻘﺎً)',
                            'name_en' => 'Discusses ways to solve conflicts with others (for example, “You can have  this now if I can have it later”).',
                                'created_at' => '2023-08-27 12:00:00',
                                'updated_at' => '2023-08-27 12:00:00',
                            ),
                            193 => 
                            array (
                                'id' => 194,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺒﺘﺴﻢ ﻋﻨﺪﻣﺎ ﻳﺮى أﺣﺪ اﻟﻮاﻟﺪﻳﻦ.',
                                'name_en' => 'Smiles when he or she sees a parent.',
                                'created_at' => '2023-08-27 12:51:07',
                                'updated_at' => '2023-08-27 12:51:07',
                            ),
                            194 => 
                            array (
                                'id' => 195,
                                'abas_sub_domain_id' => 9,
                            'name' => 'يرخي جسده ﻋﻨﺪ اﻹﻣﺴﺎك ﺑﻪ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، الحضن)',
                            'name_en' => 'Relaxes body when held (for example, snuggles).',
                                'created_at' => '2023-08-27 12:52:00',
                                'updated_at' => '2023-08-27 12:52:00',
                            ),
                            195 => 
                            array (
                                'id' => 196,
                                'abas_sub_domain_id' => 9,
                                'name' => 'يبتسم  أو اﻟﻀﺤﻚ ﻋﻨﺪﻣﺎ ﻳﻜﻮن ﺳﻌﻴﺪﺍً أو  ﻣﺒﺘﻬﺠﺎً.',
                                'name_en' => 'Squeals or laughs when happy or delighted.',
                                'created_at' => '2023-08-27 12:52:28',
                                'updated_at' => '2023-08-27 12:52:28',
                            ),
                            196 => 
                            array (
                                'id' => 197,
                                'abas_sub_domain_id' => 9,
                            'name' => 'يشعر بالفرح ﻣﻦ أﺣﺪ اﻟﻮاﻟﺪﻳﻦ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻜﻮن ﺳﻌﻴﺪﺍً ﻋﻨﺪ ﻋﻮدة اﻟﻮاﻟﺪﻳﻦ)',
                            'name_en' => 'Displays closeness to a parent (for example, is happy when parent returns).',
                                'created_at' => '2023-08-27 12:53:25',
                                'updated_at' => '2023-08-27 12:53:25',
                            ),
                            197 => 
                            array (
                                'id' => 198,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﻈﻬﺮ روح  اﻟﺪﻋﺎﺑﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻀﺤﻚ ﻋﻨﺪﻣﺎ ﻳﺘﺼﺮف ﺷﺨﺺ ﻣﺎ ﺑﻄﺮﻳﻘﺔ مرحه)',
                            'name_en' => 'Shows a sense of humor (for example, laughs when someone acts silly)',
                                'created_at' => '2023-08-27 12:58:07',
                                'updated_at' => '2023-08-27 12:58:07',
                            ),
                            198 => 
                            array (
                                'id' => 199,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺮﻓﻊ اﻟﺬﺭاﻋﻴﻦ ﻟﻠﺘﻌﺒﻴﺮ ﻋﻦ اﻟﺮﻏﺒﺔ ﻓﻲ أن  ﻳﺘﻢ ﺭﻓﻌﻪ.',
                                'name_en' => 'Lifts arms to express a desire to be picked up.',
                                'created_at' => '2023-08-27 12:58:46',
                                'updated_at' => '2023-08-27 12:58:46',
                            ),
                            199 => 
                            array (
                                'id' => 200,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺴﺘﺠﻴﺐ ﺑﺸﻜﻞ ﻣﺨﺘﻠﻒ ﻟﻸﺷﺨﺎص اﻟﻤﺄﻟﻮﻓﻴﻦ وﻏﻴﺮ اﻟﻤﺄﻟﻮﻓﻴﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻜﻮن أﻗﻞ
تودد ﻟﺸﺨﺺ ﻏﻴﺮ ﻣﺄﻟﻮف)',
                            'name_en' => 'Responds differently to familiar and unfamiliar persons (for example, is less  warm to an unfamiliar person).',
                                'created_at' => '2023-08-27 13:00:17',
                                'updated_at' => '2023-08-27 13:00:17',
                            ),
                            200 => 
                            array (
                                'id' => 201,
                                'abas_sub_domain_id' => 9,
                                'name' => 'اﻟﻌﻨﺎق و اﻟﻘﺒﻼت ﻟﻠﻮاﻟﺪﻳﻦ أو ﻏﻴﺮﻫﻢ.',
                                'name_en' => 'Hugs and kisses parents or others.',
                                'created_at' => '2023-08-27 13:01:05',
                                'updated_at' => '2023-08-27 13:01:05',
                            ),
                            201 => 
                            array (
                                'id' => 202,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﻘﻠﺪ ﺗﺼﺮﻓﺎت اﻟﺒﺎﻟﻐﻴﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﺘﻈﺎﻫﺮ ﺑﺘﻨﻈﻴﻒ اﻟﻤﻨﺰل أو ﻗﻴﺎدة اﻟﺴﻴﺎﺭة)',
                            'name_en' => 'Imitates actions of adults (for example, pretends to clean house or drive a car).',
                                'created_at' => '2023-08-27 13:02:23',
                                'updated_at' => '2023-08-27 13:02:23',
                            ),
                            202 => 
                            array (
                                'id' => 203,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻈُﻬﺮ  اﻻﺣﺘﺮام للكبار ذوي السلطة  ﻣﻦ ﺧﻼل اﺗﺒﺎع  ﻗﻮاﻋﺪﻫﻢ وﺗﻮﺟﻴﻬﺎﺗﻬﻢ(ﻋﻠﻰ ﺳﺒﻴﻞ
اﻟﻤﺜﺎل ،اﻵﺑﺎء و اﻤﻌﻠﻤﻴﻦ و ﺿﺒﺎط اﻟﺸﺮﻃﺔ)',
                            'name_en' => 'Shows respect for persons in authority by following their rules and  directions (for example, parents, teachers, police officers).',
                                'created_at' => '2023-08-27 13:07:23',
                                'updated_at' => '2023-08-27 13:07:23',
                            ),
                            203 => 
                            array (
                                'id' => 204,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺸﺎﺭك العابه الخاصة و هو سعيد ﻣﻊ ﺍﻵﺧﺮﻳﻦ.',
                                'name_en' => 'Shares toys willingly with others.',
                                'created_at' => '2023-08-27 13:09:15',
                                'updated_at' => '2023-08-27 13:09:15',
                            ),
                            204 => 
                            array (
                                'id' => 205,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﺮﺣﺐﺑﺎﻷﻃﻔﺎل اﻵﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞاﻟﻤﺜﺎل ، ﻳﻘﻮل "ﻣﺮﺣﺒﺎً.)',
                            'name_en' => 'Greets other children (for example, says “Hi”).',
                                'created_at' => '2023-08-27 13:10:30',
                                'updated_at' => '2023-08-27 13:10:30',
                            ),
                            205 => 
                            array (
                                'id' => 206,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻘﻮل "ﺷﻜﺮﺍً" ﻋﻨﺪ إﻋﻄﺎئه ﻫﺪﻳﺔ.',
                                'name_en' => 'Says “Thank you” when given a gift.',
                                'created_at' => '2023-08-27 13:11:46',
                                'updated_at' => '2023-08-27 13:11:46',
                            ),
                            206 => 
                            array (
                                'id' => 207,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻈﻬﺮ اﻟﺘﻌﺎﻃﻒ ﻣﻊ اﻵﺧﺮﻳﻦ ﻋﻨﺪﻣﺎ ﻳﻜﻮﻧﻮن ﺣﺰﻳﻨﻴﻦ أو ﻣﺴﺘائين.',
                                'name_en' => 'Shows sympathy for others when they are sad or upset.',
                                'created_at' => '2023-08-27 13:12:21',
                                'updated_at' => '2023-08-27 13:12:21',
                            ),
                            207 => 
                            array (
                                'id' => 208,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺴﻌﻰ إﻟﻰ اﻟﺼﺪاﻗﺔ ﻣﻊ اﻵﺧﺮﻳﻦ ﻓﻲ فئته اﻟﻌﻤﺮﻳﺔ.',
                                'name_en' => '. Seeks friendship with others in his or her age group.',
                                'created_at' => '2023-08-27 13:12:50',
                                'updated_at' => '2023-08-27 13:12:50',
                            ),
                            208 => 
                            array (
                                'id' => 209,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﺴﺘﺠﻴﺐ ﺑﺸﻜﻞ ﻣﻨﺎﺳﺐ ﻋﻨﺪ ﺗﻘﺪﻳﻤﻪ ﻟﻶﺧﺮﻳﻦ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻘﻮل "ﻣﺮﺣﺒﺎً)"',
                            'name_en' => 'Responds appropriately when introduced to others (for example, says  “Hello”).',
                                'created_at' => '2023-08-27 13:13:46',
                                'updated_at' => '2023-08-27 13:13:46',
                            ),
                            209 => 
                            array (
                                'id' => 210,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻘﻮل "ﻣﻦ ﻓﻀﻠﻚ" ﻋﻨﺪﻣﺎ ﻳﻄﻠﺐ شيئا.',
                                'name_en' => 'Says “Please” when asking for something.',
                                'created_at' => '2023-08-27 13:14:10',
                                'updated_at' => '2023-08-27 13:14:10',
                            ),
                            210 => 
                            array (
                                'id' => 211,
                                'abas_sub_domain_id' => 9,
                                'name' => 'يعبر عن مشاعره ويقول اشعر ﺑﺎﻟﺴﻌﺎدة أو اﻟﺤﺰن أو اﻟﺨﻮف أو اﻟﻐﻀﺐ.',
                                'name_en' => 'Says when he or she feels happy, sad, scared, or angry.',
                                'created_at' => '2023-08-27 13:16:11',
                                'updated_at' => '2023-08-27 13:16:11',
                            ),
                            211 => 
                            array (
                                'id' => 212,
                                'abas_sub_domain_id' => 9,
                                'name' => 'يتبع ﺁداب اﻟﻤﺎئدة بشكل جيد (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺑﺎﺳﺘﺨﺪام ﻣﻨﺪﻳﻞ و اﻟﺒﻘﺎء ﻋﻠﻰ
اﻟﻄﺎوﻟﺔ ﺣﺘﻰ انهاء الطعام)',
                            'name_en' => 'Displays good table manners (for example, by using a napkin and   remaining at the table until excused).',
                                'created_at' => '2023-08-27 13:18:49',
                                'updated_at' => '2023-08-27 13:18:49',
                            ),
                            212 => 
                            array (
                                'id' => 213,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﻘﺪم اﻟﻤﺴﺎﻋﺪة  ﻟﻶﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻟﺤﻤﻞ اﻟﻄﺮود أو ﺗﺨﺰﻳﻦ اﻟﻄﻌﺎم )',
                            'name_en' => 'Offers assistance to others (for example, to carry packages or put away  food).',
                                'created_at' => '2023-08-27 13:19:41',
                                'updated_at' => '2023-08-27 13:19:41',
                            ),
                            213 => 
                            array (
                                'id' => 214,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻌﺘﺬر  إذا  ﻛﺎن ﻳﺆذي ﻣﺸﺎﻋﺮ اﻵﺧﺮﻳﻦ.',
                                'name_en' => 'Apologizes if he or she hurts the feelings of others',
                                'created_at' => '2023-08-27 13:20:10',
                                'updated_at' => '2023-08-27 13:20:10',
                            ),
                            214 => 
                            array (
                                'id' => 215,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻀﻊ ﻣﻄﺎﻟﺐ ﻣﻌﻘﻮﻟﺔ ﻋﻠﻰ ﺍﻷﺻﺪﻗﺎء (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻻ ﺗﻨﺰﻋﺞ ﻋﻨﺪﻣﺎ ﻳﻠﻌﺐ ﺻﺪﻳﻖ ﻣﻊ
ﺻﺪﻳﻖ ﺁﺧﺮ)',
                                'name_en' => '. Places reasonable demands on friends (for example, does not become upset when a friend plays with another friend',
                                    'created_at' => '2023-08-27 13:21:13',
                                    'updated_at' => '2023-08-27 13:21:13',
                                ),
                                215 => 
                                array (
                                    'id' => 216,
                                    'abas_sub_domain_id' => 9,
                                    'name' => 'اﻻﻣﺘﻨﺎع عن  ﻗﻮل  أو  ﻓﻌﻞ أﺷﻴﺎء ﻗﺪ ﺗﺤﺮج اﻵﺧﺮﻳﻦ أو  ﺗﺆذﻳﻬﻢ.',
                                    'name_en' => 'Refrains from saying or doing things that might embarrass or hurt others.',
                                    'created_at' => '2023-08-27 13:21:54',
                                    'updated_at' => '2023-08-27 13:21:54',
                                ),
                                216 => 
                                array (
                                    'id' => 217,
                                    'abas_sub_domain_id' => 9,
                                    'name' => 'ﻳﺼﻨﻊ ﺃﻭ ﻳﺸﺘﺮي اﻟﻬﺪاﻳﺎ ﻷﻓﺮاد  اﻷﺳﺮة ﺷﺨﺼﻴﺎً ﻓﻲ أﻋﻴﺎد اﻟﻤﻴﻼد أو اﻷﻋﻴﺎد اﻟﻜﺒﺮى.',
                                    'name_en' => 'Personally makes or buys gifts for family members on birthdays or major holidays',
                                    'created_at' => '2023-08-27 13:22:50',
                                    'updated_at' => '2023-08-27 13:22:50',
                                ),
                                217 => 
                                array (
                                    'id' => 218,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺮﻓﻊ ﺭأﺳﻪ ﻟﻠﻨﻈﺮ ﺣﻮﻟﻪ.',
                                    'name_en' => 'Lifts head to look around',
                                    'created_at' => '2023-08-27 21:07:39',
                                    'updated_at' => '2023-08-27 21:07:39',
                                ),
                                218 => 
                                array (
                                    'id' => 219,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺘﺒﻊ ﺟﺴﻢ ﻣﺘﺤﺮك بتحريك اﻟﺮأس',
                                    'name_en' => 'Follows a moving object by turning head',
                                    'created_at' => '2023-08-27 21:08:20',
                                    'updated_at' => '2023-08-27 21:08:20',
                                ),
                                219 => 
                                array (
                                    'id' => 220,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺘﺪﺣﺮج ﻣﻦ اﻟﻤﻌﺪة إﻟﻰ اﻟﺠﺎﻧﺐ؟؟؟؟؟',
                                    'name_en' => 'Rolls from stomach to side.',
                                    'created_at' => '2023-08-27 21:08:58',
                                    'updated_at' => '2023-08-27 21:08:58',
                                ),
                                220 => 
                                array (
                                    'id' => 221,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻬﺰالخرخيشه أو اﻷﻟﻌﺎب اﻷﺧﺮى',
                                    'name_en' => 'Shakes rattle or other toys',
                                    'created_at' => '2023-08-27 21:09:33',
                                    'updated_at' => '2023-08-27 21:09:33',
                                ),
                                221 => 
                                array (
                                    'id' => 222,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺼﻞ إﻟﻰ أﺷﻴﺎء ﻣﺜﻞ علبة أو لعبة',
                                    'name_en' => 'Reaches for objects such as a bottle or toy',
                                    'created_at' => '2023-08-27 21:10:20',
                                    'updated_at' => '2023-08-27 21:10:20',
                                ),
                                222 => 
                                array (
                                    'id' => 223,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻨﻘﻞ اﻷﺷﻴﺎء ﻣﻦ ﻳﺪ إﻟﻰ أﺧﺮى',
                                    'name_en' => 'Transfers objects from one hand to the other',
                                    'created_at' => '2023-08-27 21:10:52',
                                    'updated_at' => '2023-08-27 21:10:52',
                                ),
                                223 => 
                                array (
                                    'id' => 224,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺠﻠﺲ ﻣﻨﺘﺼﺒﺎً ﻋﻠﻰ اﻷرض بدون دﻋﻢ.',
                                    'name_en' => 'Sits upright on the floor without support.',
                                    'created_at' => '2023-08-27 21:11:24',
                                    'updated_at' => '2023-08-27 21:11:24',
                                ),
                                224 => 
                                array (
                                    'id' => 225,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻨﺘﻘﻞ إﻟﻰ وﺿﻊ اﻟﺠﻠﻮس ، ﺣﺘﻰ إذا ﻛﺎن اﻟﺘﻮازن ﻏﻴﺮ ﻣﺴﺘﻘﺮ',
                                    'name_en' => 'Moves to a sitting position, even if balance is unsteady',
                                    'created_at' => '2023-08-27 21:12:12',
                                    'updated_at' => '2023-08-27 21:12:12',
                                ),
                                225 => 
                                array (
                                    'id' => 226,
                                    'abas_sub_domain_id' => 10,
                                'name' => 'ﻳﺴﺤﺐ ﻧﻔﺴﻪ  إﻟﻰ وﺿﻊ اﻟﻮﻗﻮف(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻓﻲ ﺳﺮﻳﺮ اﻷﻃﻔﺎل)',
                                'name_en' => 'Pulls himself or herself to a standing position (for example, in a crib)',
                                    'created_at' => '2023-08-27 21:14:21',
                                    'updated_at' => '2023-08-27 21:14:21',
                                ),
                                226 => 
                                array (
                                    'id' => 227,
                                    'abas_sub_domain_id' => 10,
                                'name' => 'يلتقط اﻷﺷﻴﺎء  اﻟﺼﻐﻴﺮة اﻟﻤﺴﻄﺤﺔ ﻣﻦ ﻃﺎوﻟﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﻌﻤﻼت اﻟﻤﻌﺪﻧﻴﺔ أو  اﻷﺯﺭﺍﺭ)',
                                'name_en' => 'Picks up small flat objects from a table (for example, coins or buttons)',
                                    'created_at' => '2023-08-27 21:15:41',
                                    'updated_at' => '2023-08-27 21:15:41',
                                ),
                                227 => 
                                array (
                                    'id' => 228,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺰﺣﻒ ﻟﺤﻮاﻟﻲ 10 أﻗﺪام دون أن ﻳﺴﻘﻂ',
                                    'name_en' => 'Crawls for about 10 feet without falling over',
                                    'created_at' => '2023-08-27 21:16:24',
                                    'updated_at' => '2023-08-27 21:16:24',
                                ),
                                228 => 
                                array (
                                    'id' => 229,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻋﻨﺪ اﻟﻮﻗﻮف ، اﻧﺤﻨﻰلاﻟﺘﻘﺎط اﻷﺷﻴﺎء ﻣﻦ اﻷﺭض.',
                                    'name_en' => 'When standing, bends over to pick up items from the floor',
                                    'created_at' => '2023-08-27 21:17:16',
                                    'updated_at' => '2023-08-27 21:17:16',
                                ),
                                229 => 
                                array (
                                    'id' => 230,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻘﻒ ﻣﻦ وﺿﻌﻴﺔ اﻟﺠﻠﻮس',
                                    'name_en' => 'Stands up from a sitting position',
                                    'created_at' => '2023-08-27 21:17:51',
                                    'updated_at' => '2023-08-27 21:17:51',
                                ),
                                230 => 
                                array (
                                    'id' => 231,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يدحرج  اﻟﻜﺮة ﻟﻶﺧﺮﻳﻦ',
                                    'name_en' => 'Rolls ball to others',
                                    'created_at' => '2023-08-27 21:18:25',
                                    'updated_at' => '2023-08-27 21:18:25',
                                ),
                                231 => 
                                array (
                                    'id' => 232,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻤﺸﻲ ﺑﺪون ﻣﺴﺎﻋﺪة',
                                    'name_en' => 'Walks without help',
                                    'created_at' => '2023-08-27 21:18:55',
                                    'updated_at' => '2023-08-27 21:18:55',
                                ),
                                232 => 
                                array (
                                    'id' => 233,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يرمي ﻛﺮة  ﺻﻐﻴﺮة ﻣﻦ ﻓﻮق ﻳﺪه',
                                    'name_en' => 'Throws a small ball overhand',
                                    'created_at' => '2023-08-27 21:19:53',
                                    'updated_at' => '2023-08-27 21:19:53',
                                ),
                                233 => 
                                array (
                                    'id' => 234,
                                    'abas_sub_domain_id' => 10,
                                'name' => 'ﻳﻤﺸﻲ ﻣﺎ ﻻ ﻳﻘﻞ ﻋﻦ ﺧﻤﺲ إﻟﻰ ﺳﺖ درﺟﺎﺕ دون  اﻟﻮﻗﻮع (ﻗﺪ ﻳﺴﺘﺨﺪم  اﻟﺪراﺑﺰﻳﻦ)',
                                'name_en' => 'Walks up at least five to six steps without falling (may use handrail)',
                                    'created_at' => '2023-08-27 21:24:24',
                                    'updated_at' => '2023-08-27 21:24:24',
                                ),
                                234 => 
                                array (
                                    'id' => 235,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺮﻛﻞ اﻟﻜﺮة دون أن  يقع',
                                    'name_en' => 'Kicks a ball without falling',
                                    'created_at' => '2023-08-27 21:24:59',
                                    'updated_at' => '2023-08-27 21:24:59',
                                ),
                                235 => 
                                array (
                                    'id' => 236,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يركض ﺑﺪون اﻟﻮﻗﻮع',
                                    'name_en' => 'Runs without falling',
                                    'created_at' => '2023-08-27 21:25:50',
                                    'updated_at' => '2023-08-27 21:25:50',
                                ),
                                236 => 
                                array (
                                    'id' => 237,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يضرب اﻟﻜﺮة ﻟﻌﺪة  ﺛﻮان',
                                    'name_en' => 'Bounces a ball for several seconds',
                                    'created_at' => '2023-08-27 21:30:31',
                                    'updated_at' => '2023-08-27 21:30:31',
                                ),
                                237 => 
                                array (
                                    'id' => 238,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻤﺴﻚ ﻛﺮة ﻣﻘﺬوﻓﺔ ﻣﻦ ﻣﺴﺎﻓﺔ 5 إﻟﻰ 10 أﻗﺪام',
                                    'name_en' => 'Catches a ball tossed from 5 to 10 feet away',
                                    'created_at' => '2023-08-27 22:01:26',
                                    'updated_at' => '2023-08-27 22:01:26',
                                ),
                                238 => 
                                array (
                                    'id' => 239,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺮﺳﻢﺧﻄﻮﻃﺎً ﻣﺴﺘﻘﻴﻤﺔ على قطعة ﻣﻦ الورق',
                                    'name_en' => 'Draws straight lines across a piece of paper',
                                    'created_at' => '2023-08-27 22:02:21',
                                    'updated_at' => '2023-08-27 22:02:21',
                                ),
                                239 => 
                                array (
                                    'id' => 240,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يلون ضمن حدود الرسمة أو ﻓﻲ ﻛﺘﺎب اﻟﺘﻠﻮﻳﻦ.',
                                    'name_en' => 'Colors within the lines of a drawing or in a coloring book',
                                    'created_at' => '2023-08-27 22:03:42',
                                    'updated_at' => '2023-08-27 22:03:42',
                                ),
                                240 => 
                                array (
                                    'id' => 241,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يقوم بوضع غطاء المرتبان واغلاقه باحكام؟؟',
                                    'name_en' => 'Puts twist-off tops back on jars and closes them tightly.',
                                    'created_at' => '2023-08-27 22:10:09',
                                    'updated_at' => '2023-08-27 22:10:09',
                                ),
                                241 => 
                                array (
                                    'id' => 242,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺴﺘﺨﺪم اﻟﻤﻘﺺ لقص ﻋﻠﻰ  ﺧﻂ ﻣﺴﺘﻘﻴﻢ',
                                    'name_en' => 'Uses scissors to cut along a straight line',
                                    'created_at' => '2023-08-27 22:12:14',
                                    'updated_at' => '2023-08-27 22:12:14',
                                ),
                                242 => 
                                array (
                                    'id' => 243,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺴﺘﺨﺪم اﻟﻤﻘﺺ ﻟﻘﺺ اﻷﺷﻜﺎل ﺑﺨﻄﻮط ﻣﻨﺤﻨﻴﺔ',
                                    'name_en' => 'Uses scissors to cut shapes with curved lines',
                                    'created_at' => '2023-08-27 22:12:48',
                                    'updated_at' => '2023-08-27 22:12:48',
                                ),
                                243 => 
                                array (
                                    'id' => 244,
                                    'abas_sub_domain_id' => 11,
                                'name' => 'ﻳﻘﻮل أﺳﻤﺎء  أﺷﺨﺎص ﺁﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻣﺎﻣﺎ" أو "ﺑﺎﺑﺎ" أو  أﺳﻤﺎء اﻷﺻﺪﻗﺎء)',
                                'name_en' => 'Says the names of other people (for example, “Mama,” “Daddy,” or names of friends).',
                                    'created_at' => '2023-08-28 08:27:12',
                                    'updated_at' => '2023-08-28 08:27:12',
                                ),
                                244 => 
                                array (
                                    'id' => 245,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻬﺰ رأﺳﻪ أو ﻳﻘﻮل "ﻧﻌﻢ" أو "ﻻ" رﺩﺍً ﻋﻠﻰ ﺳﺆال ﺑﺴﻴﻂ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻫﻞ ﺗﺮﻳﺪ شيئا
ﺗﺸﺮﺑﻪ؟)',
                                'name_en' => 'Shakes head or says “Yes” or “No” in response to a simple question (for  example, “Do you want something to drink?”).',
                                    'created_at' => '2023-08-28 08:29:54',
                                    'updated_at' => '2023-08-28 08:29:54',
                                ),
                                245 => 
                                array (
                                    'id' => 246,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻘﻮل "ﻣﺮﺣﺒﺎً" و "إﻟﻰ اﻟﻠﻘﺎء" ﻟﻶﺧﺮﻳﻦ.',
                                    'name_en' => 'Says “Hello” and “Good-bye” to others.',
                                    'created_at' => '2023-08-28 08:30:37',
                                    'updated_at' => '2023-08-28 08:30:37',
                                ),
                                246 => 
                                array (
                                    'id' => 247,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺴﻤﻲ20 أو أﻛﺜﺮ ﻣﻦ اﻷﺷﻴﺎء اﻟﻤﺄﻟﻮﻓﺔ',
                                    'name_en' => 'Names 20 or more familiar objects',
                                    'created_at' => '2023-08-28 08:33:17',
                                    'updated_at' => '2023-08-28 08:33:17',
                                ),
                                247 => 
                                array (
                                    'id' => 248,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺨﺒﺮ  اﻟﻮاﻟﺪﻳﻦ أو اﻷﺻﺪﻗﺎء أو اﻵﺧﺮﻳﻦ ﻋﻦ أﻧﺸﻄﺘﻪ اﻟﻤﻔﻀﻠﺔ',
                                    'name_en' => 'Tells parents, friends, or others about his or her favorite activities.',
                                    'created_at' => '2023-08-28 08:34:24',
                                    'updated_at' => '2023-08-28 08:34:24',
                                ),
                                248 => 
                                array (
                                    'id' => 249,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺴﺘﺨﺪم اﻟﺠﻤﻞ ﻣﻊ اﻻﺳﻢ و اﻟﻔﻌﻞ',
                                    'name_en' => 'Uses sentences with a noun and verb',
                                    'created_at' => '2023-08-28 08:35:05',
                                    'updated_at' => '2023-08-28 08:35:05',
                                ),
                                249 => 
                                array (
                                    'id' => 250,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ اﻟﻬﺎﺗﻒ ﺑﻘﻮل "ﻣﺮﺣﺒﺎً."',
                                    'name_en' => 'Answers the telephone by saying “Hello.”',
                                    'created_at' => '2023-08-28 08:35:41',
                                    'updated_at' => '2023-08-28 08:35:41',
                                ),
                                250 => 
                                array (
                                    'id' => 251,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺘﺤﺪث ﺑﺸﻜﻞ واﺿﺢ وﻣﻤﻴﺰ',
                                    'name_en' => 'Speaks clearly and distinctly.',
                                    'created_at' => '2023-08-28 08:36:36',
                                    'updated_at' => '2023-08-28 08:36:36',
                                ),
                                251 => 
                                array (
                                    'id' => 252,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻨﻈﺮ  إﻟﻰ وﺟﻮه  اﻵﺧﺮﻳﻦ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪﺛﻮن ﺇﻟﻴﻪ أو ﻣﻌﻬﺎ.',
                                    'name_en' => 'Looks at other people’s faces when they are talking to him or her.',
                                    'created_at' => '2023-08-28 08:37:38',
                                    'updated_at' => '2023-08-28 08:37:38',
                                ),
                                252 => 
                                array (
                                    'id' => 253,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺴﺘﻤﻊ ﻋﻦ ﻛﺜﺐ ﻟﻤﺪة 5 دﻗﺎئق ﻋﻠﻰ اﻷﻗﻞ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪث اﻟﻨﺎس.',
                                    'name_en' => 'Listens closely for at least 5 minutes when people talk.',
                                    'created_at' => '2023-08-28 08:38:35',
                                    'updated_at' => '2023-08-28 08:38:35',
                                ),
                                253 => 
                                array (
                                    'id' => 254,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'يستخدم اﻹﻳﻤﺎءات أو اﻻﺑﺘﺴﺎﻣﺎت ﻟﺘﺸﺠﻴﻊ اﻵﺧﺮﻳﻦ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪﺛﻮن',
                                    'name_en' => 'Nods or smiles to encourage others when they are talking.',
                                    'created_at' => '2023-08-28 08:47:30',
                                    'updated_at' => '2023-08-28 08:47:30',
                                ),
                                254 => 
                                array (
                                    'id' => 255,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻘﻮل أﺳﻤﺎء اﻟﺠﻤﻊ ﻏﻴﺮ اﻟﻤﻨﺘﻈﻤﺔ ﺑﺸﻜﻞ ﺻﺤﻴﺢ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻘﻮل"ﻗﺪم" ﺑﺪﻻ ًﻣﻦ "
أﻗﺪام " و "رﺟﺎل" ﺑﺪﻻ ًﻣﻦ "رﺟﻞ.")',
                                'name_en' => 'Says irregular plural nouns correctly (for example, says “feet” instead of “foots” and “men” instead of “mans”).',
                                    'created_at' => '2023-08-28 08:48:58',
                                    'updated_at' => '2023-08-28 08:48:58',
                                ),
                                255 => 
                                array (
                                    'id' => 256,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺘﺒﻊ اﻟﺘﻌﻠﻴﻤﺎت اﻟﺸﻔﻬﻴﺔ ﻟﻠﻮاﻟﺪﻳﻦ أو  ﻣﻘﺪم  اﻟﺮﻋﺎﻳﺔ ﻋﻨﺪ إﻛﻤﺎل اﻟﻤﻬﺎم  أو اﻟﻤﺸﺎرﻛﺔ ﻓﻲ اﻷﻧﺸﻄﺔ (ﻋﻠﻰ
ﺳﺒﻴﻞاﻟﻤﺜﺎل ، ﻋﻤﻞ ﻣﻨﺰﻟﻲ أو ﻟﻌﺒﺔ ﺟﺪﻳﺪة.)',
                                'name_en' => 'Follows parent’s or caregiver’s verbal instructions when completing tasks  or participating in activities (for example, a household chore or new game).',
                                    'created_at' => '2023-08-28 08:56:16',
                                    'updated_at' => '2023-08-28 08:56:16',
                                ),
                                256 => 
                                array (
                                    'id' => 257,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻌﻄﻲ ﺗﻌﻠﻴﻤﺎت ﺷﻔﻬﻴﺔ ﻟﻶﺧﺮﻳﻦ ﺗﺘﻀﻤﻦ ﺧﻄﻮﺗﻴﻦ أو أﻛﺜﺮ ﻣﻦ اﻷﻧﺸﻄﺔ',
                                    'name_en' => 'Gives verbal instructions to others that involve two or more steps or  activities.',
                                    'created_at' => '2023-08-28 08:57:28',
                                    'updated_at' => '2023-08-28 08:57:28',
                                ),
                                257 => 
                                array (
                                    'id' => 258,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺬﻛﺮ رﻗﻢ ﻫﺎﺗﻔﻪ',
                                    'name_en' => 'States his or her telephone number.',
                                    'created_at' => '2023-08-28 08:58:09',
                                    'updated_at' => '2023-08-28 08:58:21',
                                ),
                                258 => 
                                array (
                                    'id' => 259,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺸﺎرك ﻓﻲ اﻟﻤﺤﺎدثات دون  اﻟﺘﺤﺪث ﻛﺜﻴﺮﺍ  أو  اﻟﻘﻠﻴﻞ ﺟﺪﺍ',
                                    'name_en' => 'Participates in conversations without talking too much or too little.',
                                    'created_at' => '2023-08-28 09:00:22',
                                    'updated_at' => '2023-08-28 09:00:22',
                                ),
                                259 => 
                                array (
                                    'id' => 260,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺒﺪأ ﻣﺤﺎدثات ﺣﻮل ﻣﻮاﺿﻴﻊ ﺗﻬﻢ  اﻵﺧﺮﻳﻦ',
                                    'name_en' => 'Starts conversations on topics of interest to others.',
                                    'created_at' => '2023-08-28 09:01:46',
                                    'updated_at' => '2023-08-28 09:01:46',
                                ),
                                260 => 
                                array (
                                    'id' => 261,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻨﺎﻗﺶ ﻣﻮﺿﻮﻋﺎً ﻟﻤﺪة 3 دقائق ﻋﻠﻰ اﻷﻗﻞ.',
                                    'name_en' => 'Discusses a topic for at least 3 minutes',
                                    'created_at' => '2023-08-28 09:02:19',
                                    'updated_at' => '2023-08-28 09:02:19',
                                ),
                                261 => 
                                array (
                                    'id' => 262,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ ﺗﻜﺮار ﻣﺎ ﻳﻘﻮﻟﻪ ﻣﺮارﺍً و ﺗﻜﺮﺍﺭﺍً.',
                                    'name_en' => 'Refrains from repeating what he or she says over and over again.',
                                    'created_at' => '2023-08-28 09:03:28',
                                    'updated_at' => '2023-08-28 09:03:28',
                                ),
                                262 => 
                                array (
                                    'id' => 263,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺬﻛﺮ ﻋﻨﻮان ﻣﻨﺰﻟﻪ',
                                    'name_en' => 'States his or her home address, including zip code.',
                                    'created_at' => '2023-08-28 09:03:58',
                                    'updated_at' => '2023-08-28 09:03:58',
                                ),
                                263 => 
                                array (
                                    'id' => 264,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻤﻴﺰ ﺑﻴﻦ اﻹدﻋﺎءات اﻟﺼﺎدﻗﺔ و اﻟﻤﺒﺎﻟﻎ ﻓﻴﻬﺎ ﻣﻦ ﻗﺒﻞ اﻷﺻﺪﻗﺎء أو اﻟﻤﻌﻠﻨﻴﻦ أو ﻏﻴﺮﻫﻢ.؟؟؟؟',
                                    'name_en' => 'Distinguishes truthful from exaggerated claims by friends, advertisers, or others.',
                                    'created_at' => '2023-08-28 09:20:50',
                                    'updated_at' => '2023-08-28 09:21:56',
                                ),
                                264 => 
                                array (
                                    'id' => 265,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺘﺤﺪث ﻋﻦ أﻫﺪاف  ﺗﻌﻠﻴﻤﻴﺔ أو  ﻣﻬﻨﻴﺔ واﻗﻌﻴﺔ ﻓﻲ اﻟﻤﺴﺘﻘﺒﻞ',
                                    'name_en' => 'Talks about realistic future educational or career goals.',
                                    'created_at' => '2023-08-28 09:23:09',
                                    'updated_at' => '2023-08-28 09:23:09',
                                ),
                                265 => 
                                array (
                                    'id' => 266,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ اﻷسئلة اﻟﻤﻌﻘﺪة اﻟﺘﻲ ﺗﺘﻄﻠﺐ ﺗﻔﻜﻴﺮﺍً دقيق (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، أﺳئلة
ﺣﻮل  اﻷﺣﺪاث اﻟﺠﺎرﻳﺔ.)',
                                'name_en' => 'Answers complex questions that require careful thought and opinion  (for example, questions about politics or current events).',
                                    'created_at' => '2023-08-28 09:33:00',
                                    'updated_at' => '2023-08-28 09:33:00',
                                ),
                                266 => 
                                array (
                                    'id' => 267,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻣﺤﺎدثات ﻣﻊ اﻵﺧﺮﻳﻦ ﺣﻮل ﻣﻮاﺿﻴﻊ ﻣﻌﻘﺪة ﻟﻤﺪة 10 دقائق ﻋﻠﻰ اﻷﻗﻞ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺣﻮل
اﻷﺣﺪاث اﻟﺠﺎرﻳﺔ.)',
                                'name_en' => 'Talks with others about complex topics for at least 10 minutes (for example, about politics or current events)',
                                    'created_at' => '2023-08-28 09:34:44',
                                    'updated_at' => '2023-08-28 09:34:44',
                                ),
                                267 => 
                                array (
                                    'id' => 268,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﻨﻈﺮ ﻓﻲ ﻛﻼ اﻻﺗﺠﺎﻫﻴﻦ ﻗﺒﻞ ﻋﺒﻮر  اﻟﺸﺎرع أو ﺳﺎﺣﺔ اﻧﺘﻈﺎﺭ اﻟﺴﻴﺎرات',
                                    'name_en' => 'Looks both ways before crossing a street or parking lot.',
                                    'created_at' => '2023-08-28 09:44:25',
                                    'updated_at' => '2023-08-28 09:44:25',
                                ),
                                268 => 
                                array (
                                    'id' => 269,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻃﻠﺐ وﺟﺒﺎت اﻟﻄﻌﺎم اﻟﺨﺎﺻﺔ ﻋﻨﺪ ﺗﻨﺎول  اﻟﻄﻌﺎم ﺑﺎﻟﺨﺎرج',
                                    'name_en' => 'Orders own meals when eating out',
                                    'created_at' => '2023-08-28 09:45:28',
                                    'updated_at' => '2023-08-28 09:45:28',
                                ),
                                269 => 
                                array (
                                    'id' => 270,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺠﺪ اﻟﻤﺮﺣﺎض  ﻓﻲ اﻷﻣﺎﻛﻦ اﻟﻌﺎﻣﺔ',
                                    'name_en' => '. Finds the restroom in public places',
                                    'created_at' => '2023-08-28 09:46:19',
                                    'updated_at' => '2023-08-28 09:46:19',
                                ),
                                270 => 
                                array (
                                    'id' => 271,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺤﺰم ﻣﻼﺑﺴﻪ و احتياجاته  ﻟﻠﺮﺣﻼت اﻟﻠﻴﻠﻴﺔ',
                                    'name_en' => 'Packs his or her own clothing and supplies for overnight trips.',
                                    'created_at' => '2023-08-28 09:57:49',
                                    'updated_at' => '2023-08-28 09:57:49',
                                ),
                                271 => 
                                array (
                                    'id' => 272,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺴﺘﺨﺪم  ﻣﻜﺘﺒﺔ اﻟﻤﺪرﺳﺔ أو  اﻟﻤﻜﺘﺒﺔ اﻟﻌﺎﻣﺔ أو  اﻹﻧﺘﺮﻧﺖ ﻟﻠﺤﺼﻮل ﻋﻠﻰ اﻟﻜﺘﺐ أو  اﻟﻤﻮاد  اﻟﻤﺮﺟﻌﻴﺔ.',
                                    'name_en' => 'Uses the school library, public library, or Internet to get books or reference   materials.',
                                    'created_at' => '2023-08-28 09:59:19',
                                    'updated_at' => '2023-08-28 09:59:19',
                                ),
                                272 => 
                                array (
                                    'id' => 273,
                                    'abas_sub_domain_id' => 12,
                                'name' => 'ﻳﺤﻤﻞ ﻧﻘﻮداً ﻛﺎﻓﻴﺔ ﻹﺟﺮاء ﻋﻤﻠﻴﺎت ﺷﺮاء ﺻﻐﻴﺮة (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻣﺸﺮوب ﻏﺎزي.)',
                                'name_en' => 'Carries enough money to make small purchases (for example, a soft drink).',
                                    'created_at' => '2023-08-28 10:03:15',
                                    'updated_at' => '2023-08-28 10:03:15',
                                ),
                                273 => 
                                array (
                                    'id' => 274,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'اﻟﺒﺤﺚ ﻋﻦ ﻣﻨﻄﻘﺔ ﻣﻌﻴﻨﺔ ﻓﻲ ﻣﺘﺠﺮ أو ﺷﺮﻛﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻣﻤﺮ  اﻷﻟﺒﺎن ﻓﻲ ﻣﺘﺠﺮ أو
ﻗﺴﻢ ﺧﺪﻣﺔ اﻟﻌﻤﻼء ﻓﻲ أﺣﺪ اﻟﺒﻨﻮك.)',
                                'name_en' => 'Finds a specific area in a store or business (for example, dairy aisle in a   store or customer service department in a bank).',
                                    'created_at' => '2023-08-28 10:28:39',
                                    'updated_at' => '2023-08-28 10:28:39',
                                ),
                                274 => 
                                array (
                                    'id' => 275,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺘﺒﻊ ﺗﻮﺟﻴﻬﺎت ﺷﺨﺺ ﺁﺧﺮ إﻟﻰ اﻷﻣﺎﻛﻦ اﻟﻤﺠﺎورة',
                                    'name_en' => 'Follows another person’s directions to nearby places',
                                    'created_at' => '2023-08-28 12:28:08',
                                    'updated_at' => '2023-08-28 12:28:08',
                                ),
                                275 => 
                                array (
                                    'id' => 276,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﻤﺸﻲ ﺑﻤﻔﺮده إﻟﻰ ﻣﻨﺎزل أو  ﺷﻘﻖ اﻷﺻﺪﻗﺎء ﻓﻲ اﻟﺤﻲ',
                                    'name_en' => 'Walks alone to friends’ houses or apartments in the neighborhood',
                                    'created_at' => '2023-08-28 12:32:46',
                                    'updated_at' => '2023-08-28 12:32:46',
                                ),
                                276 => 
                                array (
                                    'id' => 277,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'قبل شراء أي منتج من أحد المتاجر، يفكر مليًا في مدى الحاجة إليه وتكلفته',
                                    'name_en' => 'Before buying an item in a store, gives careful thought to the need for it and its cost',
                                    'created_at' => '2023-08-28 12:34:38',
                                    'updated_at' => '2023-08-28 12:34:38',
                                ),
                                277 => 
                                array (
                                    'id' => 278,
                                    'abas_sub_domain_id' => 12,
                                'name' => 'يوضح العنوان العام لوجهة السفر (على سبيل المثال، "في عمان خلدا، بالقرب من إشارة البنك العربي").',
                                'name_en' => 'States general address of a travel destination (for example, “On  Washington Avenue, near Lake Street”).',
                                    'created_at' => '2023-08-28 12:36:17',
                                    'updated_at' => '2023-08-28 12:36:17',
                                ),
                                278 => 
                                array (
                                    'id' => 279,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺘﻌﺮف ﻋﻨﺪﻣﺎ تكون منتجات او الادوات في  اﻟﻤﺘﺠﺮ سيئه اﻟﺼﻨﻊ أو باهظة الظمن',
                                    'name_en' => 'Recognizes when a store item is poorly made or too expensive.',
                                    'created_at' => '2023-08-28 12:42:25',
                                    'updated_at' => '2023-08-28 12:42:25',
                                ),
                                279 => 
                                array (
                                    'id' => 280,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺤﻤﻞ ﻫﻮﻳﺔ ﺷﺨﺼﻴﺔ ﻋﻨﺪ  التنقل إﻟﻰ أﻣﺎﻛﻦ ﻗﺮﻳﺒﺔ ﻓﻲ بلده.',
                                    'name_en' => 'Carries personal identification when traveling to nearby places in the community',
                                    'created_at' => '2023-08-28 12:44:22',
                                    'updated_at' => '2023-08-28 12:44:22',
                                ),
                                280 => 
                                array (
                                    'id' => 281,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﻌﺘﻤﺪ ﻋﻠﻰ ﻧﻔﺴﻪ ﻓﻲ التنقل  داﺧﻞ بلده ( ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﻤﺸﻲ أو اﺳﺘﺨﺪام  وﺳﺎئل
اﻟﻨﻘﻞ اﻟﻌﺎﻡ ، أو اﻟﺪراﺟﺔ الهوائية  ، أو  اﻟﺴﻴﺎﺭة)',
                                'name_en' => 'Relies on himself or herself for travel in the community (for example, walks  or uses public transportation, a bicycle, or a car).',
                                    'created_at' => '2023-08-28 12:46:20',
                                    'updated_at' => '2023-08-28 12:46:20',
                                ),
                                281 => 
                                array (
                                    'id' => 282,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'يذهب للتسوق بدل عن  الأﺻﺪﻗﺎء أو  اﻟﻌﺎئلة  اﻟﺬﻳﻦ  لا ﻳﺘﻤﻜﻨﻮن ﻣﻦ  الذهاب للتسوق',
                                    'name_en' => 'Shops for friends or family who may be unable to shop.',
                                    'created_at' => '2023-08-28 12:49:16',
                                    'updated_at' => '2023-08-28 12:49:16',
                                ),
                                282 => 
                                array (
                                    'id' => 283,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'اﺻﻄﺤﺎب أﺷﺨﺎص  ﺁﺧﺮﻳﻦ ﻓﻲ رﺣﻼت  إﻟﻰ أﻣﺎﻛﻦ ﻗﺮﻳﺒﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﺻﻄﺤﺎب
اﻵﺧﺮﻳﻦ ﻟﻠﺘﺴﻮق أو  اﺻﻄﺤﺎب ﻃﻔﻞ أﺻﻐﺮ ﺳﻨﺎً  إﻟﻰ اﻟﺤﺪﻳﻘﺔ.)',
                                    'name_en' => 'Takes other people on trips to nearby places (for example, takes others  shopping or takes a younger child to a par',
                                        'created_at' => '2023-08-28 12:51:08',
                                        'updated_at' => '2023-08-28 12:51:08',
                                    ),
                                    283 => 
                                    array (
                                        'id' => 284,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺴﺘﺨﺪم  اﻟﻮرق أو  اﻟﺨﺮائط  اﻟﺮﻗﻤﻴﺔ ﻹﻳﺠﺎد ﻃﺮﻳﻘﻪ  إﻟﻰ اﻟﻤﻮاﻗﻊ  اﻟﻤﻄﻠﻮﺑﺔ.',
                                        'name_en' => 'Uses paper or digital maps to find his or her way to desired locations.',
                                        'created_at' => '2023-08-28 12:52:50',
                                        'updated_at' => '2023-08-28 12:52:50',
                                    ),
                                    284 => 
                                    array (
                                        'id' => 285,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺴﺘﺨﺪم اﻟﻤﻮارد  اﻟﻤﻄﺒﻮﻋﺔ أو  اﻹﻧﺘﺮﻧﺖ ﻟﻠﺤﺼﻮل  ﻋﻠﻰ اﻟﻤﻌﻠﻮﻣﺎت ﻗﺒﻞ إﺟﺮاء ﻋﻤﻠﻴﺎت ﺷﺮاء
ﻛﺒﻴﺮة(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺴﻴﺎرات ، واﻷﺟﻬﺰة ، وأﺟﻬﺰة اﻟﻜﻤﺒﻴﻮﺗﺮ)',
                                    'name_en' => 'Uses printed or Internet resources to obtain information before making major purchases (for example, cars, appliances, computers)',
                                        'created_at' => '2023-08-28 13:09:33',
                                        'updated_at' => '2023-08-28 13:09:33',
                                    ),
                                    285 => 
                                    array (
                                        'id' => 286,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺠﻌﻞ اﻟﻤﻮﺍﻋﻴﺪ ﻋﻦ ﻃﺮﻳﻖ اﻟﻬﺎﺗﻒ أو اﻟﺠﻬﺎز اﻟﻤﺤﻤﻮل أو اﻹﻧﺘﺮﻧﺖ',
                                        'name_en' => 'Makes appointments by telephone, mobile device, or Internet.',
                                        'created_at' => '2023-08-29 08:03:38',
                                        'updated_at' => '2023-08-29 08:03:38',
                                    ),
                                    286 => 
                                    array (
                                        'id' => 287,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺤﺼﻞ ﻋﻠﻰ اﻟﻤﺎل ﻣﻦ ﺟﻬﺎز اﻟﺼﺮاف اﻵﻟﻲ',
                                        'name_en' => 'Obtains money from an ATM.',
                                        'created_at' => '2023-08-29 08:04:15',
                                        'updated_at' => '2023-08-29 08:04:15',
                                    ),
                                    287 => 
                                    array (
                                        'id' => 288,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺴﺘﺨﺪم  ﺑﻄﺎﻗﺔ الائتمان أو  اﻟﺨﺼﻢ ﻹﺟﺮاء ﻋﻤﻠﻴﺎت اﻟﺸﺮاء',
                                        'name_en' => 'Uses a credit or debit card for making purchases.',
                                        'created_at' => '2023-08-29 08:05:49',
                                        'updated_at' => '2023-08-29 08:05:49',
                                    ),
                                    288 => 
                                    array (
                                        'id' => 289,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻣﺴﺆول ﻋﻦ ﺷﺆوﻧﻪ اﻟﻤﺎﻟﻴﺔ اﻟﺸﺨﺼﻴﺔ ، ﻣﺜﻞ اﻟﺤﺴﺎب اﻟﻤﺼﺮﻓﻲ أو ﺑﻄﺎﻗﺔ الائتمان  أو ﻓﺎﺗﻮرة
اﻟﻤﺮاﻓﻖ',
                                        'name_en' => 'Is responsible for his or her personal finances, such as bank account, credit card, or utility bill.',
                                        'created_at' => '2023-08-29 08:07:30',
                                        'updated_at' => '2023-08-29 08:07:30',
                                    ),
                                    289 => 
                                    array (
                                        'id' => 290,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺘﺼﻞ ﺑﻔﻨﻲ اﻹﺻﻼح ﻋﻨﺪ اﻟﺤﺎﺟﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، إذا ﺗﻮﻗﻒ ﻣﻜﻴﻒ اﻟﻬﻮاء أو اﻟﺴﺨﺎن ﻋﻦ
اﻟﻌﻤﻞ).',
                                    'name_en' => 'Calls a repairperson when needed (for example, if the air conditioner or  heater stops working).',
                                        'created_at' => '2023-08-29 08:09:24',
                                        'updated_at' => '2023-08-29 08:09:24',
                                    ),
                                    290 => 
                                    array (
                                        'id' => 291,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﻜﺘﺐ أو ﻳﻄﺒﻊ اﺳﻤﻪ اﻷول واﻷﺧﻴﺮ.',
                                        'name_en' => 'Writes or prints his or her first and last name.',
                                        'created_at' => '2023-08-29 08:19:13',
                                        'updated_at' => '2023-08-29 08:19:13',
                                    ),
                                    291 => 
                                    array (
                                        'id' => 292,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﻘﺮﺃ اﺳﻤﻪ  ﻋﻨﺪ ﻃﺒﺎﻋﺘﻪ',
                                        'name_en' => 'Reads his or her name when printed.',
                                        'created_at' => '2023-08-29 08:20:02',
                                        'updated_at' => '2023-08-29 08:20:02',
                                    ),
                                    292 => 
                                    array (
                                        'id' => 293,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يذكر أﻳﺎم  اﻷﺳﺒﻮع ﺑﺎﻟﺘﺮﺗﻴﺐ',
                                        'name_en' => 'States the days of the week in order.',
                                        'created_at' => '2023-08-29 08:21:46',
                                        'updated_at' => '2023-08-29 08:21:46',
                                    ),
                                    293 => 
                                    array (
                                        'id' => 294,
                                        'abas_sub_domain_id' => 13,
                                    'name' => 'ﻳﻘﺮأ وﻳﻠﺘﺰم ﺑﺎﻟﻌﻼﻣﺎت اﻟﺸﺎئعة (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، لاﺗﺪﺧﻞ ، ﺧﺮوج ، ﺗﻮﻗﻒ)',
                                    'name_en' => 'Reads and obeys common signs (for example, Do Not Enter, Exit, Stop)',
                                        'created_at' => '2023-08-29 08:23:19',
                                        'updated_at' => '2023-08-29 08:23:19',
                                    ),
                                    294 => 
                                    array (
                                        'id' => 295,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ أسئلة ﺑﺴﻴﻄﺔ ﺣﻮل ﻗﺼﺔ تقرأ ﻟﻪ',
                                        'name_en' => 'Answers simple questions about a story read to him or her.',
                                        'created_at' => '2023-08-29 08:24:26',
                                        'updated_at' => '2023-08-29 08:24:26',
                                    ),
                                    295 => 
                                    array (
                                        'id' => 296,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﺤﺎﻓﻆ ﻋﻠﻰ اﻟﻨﺘﻴﺠﺔ ﺑﺸﻜﻞ ﺻﺤﻴﺢ ﻋﻨﺪ ﻣﻤﺎرﺳﺔ اﻷﻟﻌﺎب',
                                        'name_en' => 'Keeps score correctly when playing games',
                                        'created_at' => '2023-08-29 08:25:21',
                                        'updated_at' => '2023-08-29 08:25:21',
                                    ),
                                    296 => 
                                    array (
                                        'id' => 297,
                                        'abas_sub_domain_id' => 13,
                                    'name' => 'ﺗﺤﺪﻳﺪ اﻟﺘﻮارﻳﺦ اﻟﻤﻬﻤﺔ ﻓﻲ اﻟﺘﻘﻮﻳﻢ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، أﻋﻴﺎد اﻟﻤﻴﻼد أو  اﻹﺟﺎزات)',
                                    'name_en' => 'Locates important dates on a calendar (for example, birthdays or holidays).',
                                        'created_at' => '2023-08-29 08:27:39',
                                        'updated_at' => '2023-08-29 08:27:39',
                                    ),
                                    297 => 
                                    array (
                                        'id' => 298,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﺤﻜﻲاﻟﻮﻗﺖ ﺑﺸﻜﻞ ﺻﺤﻴﺢ ، ﺑﺎﺳﺘﺨﺪام ﺳﺎﻋﺔ رقمية أو ﺳﺎﻋﺔ ﻣﻊ ﻋﻘﺎرب.',
                                        'name_en' => 'Tells time correctly, using a watch or a clock with hands.',
                                        'created_at' => '2023-08-29 08:28:45',
                                        'updated_at' => '2023-08-29 08:28:45',
                                    ),
                                    298 => 
                                    array (
                                        'id' => 299,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يقرأ قوائم الطعام في المطاعم.',
                                        'name_en' => 'Reads menus at restaurants.',
                                        'created_at' => '2023-08-29 08:30:19',
                                        'updated_at' => '2023-08-29 08:30:19',
                                    ),
                                    299 => 
                                    array (
                                        'id' => 300,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يكتب عنوانه، بما في ذلك الرمز البريدي',
                                        'name_en' => 'Writes his or her address, including zip code.',
                                        'created_at' => '2023-08-29 08:30:44',
                                        'updated_at' => '2023-08-29 08:30:44',
                                    ),
                                    300 => 
                                    array (
                                        'id' => 301,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يقيس الطول والارتفاع',
                                        'name_en' => 'Measures length and height.',
                                        'created_at' => '2023-08-29 08:32:28',
                                        'updated_at' => '2023-08-29 08:32:44',
                                    ),
                                    301 => 
                                    array (
                                        'id' => 302,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يعطي الموظف المبلغ اللازم من المال عند الشراء.',
                                        'name_en' => 'Gives a clerk the necessary amount of money when buying items.',
                                        'created_at' => '2023-08-29 08:35:11',
                                        'updated_at' => '2023-08-29 08:35:11',
                                    ),
                                    302 => 
                                    array (
                                        'id' => 303,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يكتب ويرسل الرسائل أو الملاحظات الشخصية أو رسائل البريد الإلكتروني.',
                                        'name_en' => 'Writes and sends letters, personal notes, or emails.',
                                        'created_at' => '2023-08-29 08:35:40',
                                        'updated_at' => '2023-08-29 08:35:40',
                                    ),
                                    303 => 
                                    array (
                                        'id' => 304,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يتابع شيء مهم او  مفضلاً أو حدثًا حاليًا من خلال القراءة عنه في الصحف أو الكتب أو المواد الأخرى أو على الإنترنت.',
                                        'name_en' => 'Follows a favorite interest or current event by reading about it in    newspapers, books, or other materials, or on the Internet.',
                                        'created_at' => '2023-08-29 08:36:42',
                                        'updated_at' => '2023-08-29 08:36:42',
                                    ),
                                    304 => 
                                    array (
                                        'id' => 305,
                                        'abas_sub_domain_id' => 13,
                                    'name' => 'يستخدم الموارد المطبوعة أو عبر الإنترنت للعثور على المعلومات (على سبيل المثال، في القواميس والموسوعات)',
                                    'name_en' => 'Uses printed or Internet resources to find information (for example, in dictionaries and encyclopedias)',
                                        'created_at' => '2023-08-29 08:37:34',
                                        'updated_at' => '2023-08-29 08:37:34',
                                    ),
                                    305 => 
                                    array (
                                        'id' => 306,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يستخدم القوائم والتذكيرات لتذكر الأشياء المهمة.',
                                        'name_en' => 'Uses lists and reminders to remember important things.',
                                        'created_at' => '2023-08-29 08:38:01',
                                        'updated_at' => '2023-08-29 08:38:01',
                                    ),
                                    306 => 
                                    array (
                                        'id' => 307,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يسجل التواريخ والأوقات للمواعيد والمواعيد النهائية.',
                                        'name_en' => 'Records dates and times for appointments and deadlines.',
                                        'created_at' => '2023-08-29 08:38:25',
                                        'updated_at' => '2023-08-29 08:38:25',
                                    ),
                                    307 => 
                                    array (
                                        'id' => 308,
                                        'abas_sub_domain_id' => 13,
                                        'name' => '. التحقق من التغيير الصحيح بعد شراء السلعة.',
                                        'name_en' => '. Checks for correct change after buying an item.',
                                        'created_at' => '2023-08-29 08:39:02',
                                        'updated_at' => '2023-08-29 08:39:02',
                                    ),
                                    308 => 
                                    array (
                                        'id' => 309,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يقرأ ويتبع التعليمات لتجميع المشتريات الجديدة.',
                                        'name_en' => 'Reads and follows instructions for assembling new purchases.',
                                        'created_at' => '2023-08-29 08:39:36',
                                        'updated_at' => '2023-08-29 08:39:36',
                                    ),
                                    309 => 
                                    array (
                                        'id' => 310,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يقرأ الملصقات قبل شراء المنتجات للحصول على معلومات مهمة حول الحجم والوزن واتجاهات الاستخدام.',
                                        'name_en' => 'Reads labels before purchasing products for important information about size, weight, and directions for use.',
                                        'created_at' => '2023-08-29 08:40:09',
                                        'updated_at' => '2023-08-29 08:40:09',
                                    ),
                                    310 => 
                                    array (
                                        'id' => 311,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'التحقق من دقة الرسوم قبل دفع الفاتورة.',
                                        'name_en' => 'Checks the accuracy of charges before paying a bill.',
                                        'created_at' => '2023-08-29 08:41:22',
                                        'updated_at' => '2023-08-29 08:41:22',
                                    ),
                                    311 => 
                                    array (
                                        'id' => 312,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'قم بتخصيص الأموال لتغطية النفقات لمدة أسبوع واحد على الأقل.',
                                        'name_en' => 'Budgets money to cover expenses for at least 1 week.',
                                        'created_at' => '2023-08-29 08:42:14',
                                        'updated_at' => '2023-08-29 08:42:14',
                                    ),
                                    312 => 
                                    array (
                                        'id' => 313,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يكمل النماذج المكتوبة للتقدم للوظائف.',
                                        'name_en' => 'Completes written forms to apply for jobs.',
                                        'created_at' => '2023-08-29 08:42:45',
                                        'updated_at' => '2023-08-29 08:42:45',
                                    ),
                                    313 => 
                                    array (
                                        'id' => 314,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يمسح الطاولة و الارضية في المنزل.',
                                        'name_en' => 'Wipes up spills at home.',
                                        'created_at' => '2023-08-29 08:43:39',
                                        'updated_at' => '2023-08-29 08:43:39',
                                    ),
                                    314 => 
                                    array (
                                        'id' => 315,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يلتقط ويرمي القمامة أو الورق في المنزل.',
                                        'name_en' => 'Picks up and throws away trash or paper at home.',
                                        'created_at' => '2023-08-29 08:44:16',
                                        'updated_at' => '2023-08-29 08:44:16',
                                    ),
                                    315 => 
                                    array (
                                        'id' => 316,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'وضع الملابس المتسخة في المكان المناسب (مثلاً الغسالة أو سلة ملابس).',
                                    'name_en' => 'Places dirty clothes in the proper place (for example, a hamper or clothes  basket).',
                                        'created_at' => '2023-08-29 08:44:57',
                                        'updated_at' => '2023-08-29 08:44:57',
                                    ),
                                    316 => 
                                    array (
                                        'id' => 317,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يسكب السائل من وعاء أكبر في الكوب أو الزجاج الخاص به دون أن ينسكب',
                                        'name_en' => 'Pours liquid from a larger container into own cup or glass without spilling',
                                        'created_at' => '2023-08-29 08:45:20',
                                        'updated_at' => '2023-08-29 08:45:20',
                                    ),
                                    317 => 
                                    array (
                                        'id' => 318,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'يُظهِر الاحترام عند استخدام ممتلكات الآخرين (على سبيل المثال، من خلال الحفاظ على نظافتها وإعادتها سليمة عند الطلب)',
                                    'name_en' => 'Shows respect when using others’ possessions (for example, by keeping   them clean and returning them undamaged when requested)',
                                        'created_at' => '2023-08-29 08:45:50',
                                        'updated_at' => '2023-08-29 08:45:50',
                                    ),
                                    318 => 
                                    array (
                                        'id' => 319,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'يظهر احترامًا لخصوصية الآخرين (على سبيل المثال، يطرق الأبواب المغلقة قبل الدخول).',
                                    'name_en' => 'Shows respect for other people’s privacy (for example, knocks on closed   doors before entering).',
                                        'created_at' => '2023-08-29 08:46:13',
                                        'updated_at' => '2023-08-29 08:46:13',
                                    ),
                                    319 => 
                                    array (
                                        'id' => 320,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يحافظ على الألعاب  والممتلكات الأخرى مرتبة ونظيفة.',
                                        'name_en' => 'Keeps toys, games, and other belongings neat and clean.',
                                        'created_at' => '2023-08-29 08:46:32',
                                        'updated_at' => '2023-08-29 08:46:32',
                                    ),
                                    320 => 
                                    array (
                                        'id' => 321,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'إعادة الأشياء إلى مكانها الصحيح بعد استخدامها.',
                                        'name_en' => 'Returns things to their proper place after using them.',
                                        'created_at' => '2023-08-29 08:46:47',
                                        'updated_at' => '2023-08-29 08:46:47',
                                    ),
                                    321 => 
                                    array (
                                        'id' => 322,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'ينظف الطاولة تماماً بعد تناول الطعام.',
                                        'name_en' => 'Clears the table completely after a meal.',
                                        'created_at' => '2023-08-29 08:47:58',
                                        'updated_at' => '2023-08-29 08:47:58',
                                    ),
                                    322 => 
                                    array (
                                        'id' => 323,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'ينظف غرفته أو أماكن معيشته بانتظام.',
                                        'name_en' => 'Cleans his or her room or living quarters regularly.',
                                        'created_at' => '2023-08-29 08:48:16',
                                        'updated_at' => '2023-08-29 08:48:16',
                                    ),
                                    323 => 
                                    array (
                                        'id' => 324,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يرتب سريره.',
                                        'name_en' => '. Makes his or her bed.',
                                        'created_at' => '2023-08-29 08:48:35',
                                        'updated_at' => '2023-08-29 08:48:35',
                                    ),
                                    324 => 
                                    array (
                                        'id' => 325,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'إعداد وجبات بسيطة لا تتطلب أي طهي (على سبيل المثال، السندويشات أو سلطة).',
                                    'name_en' => 'Makes simple meals that require no cooking (for example, sandwiches or  salads).',
                                        'created_at' => '2023-08-29 08:48:56',
                                        'updated_at' => '2023-08-29 08:48:56',
                                    ),
                                    325 => 
                                    array (
                                        'id' => 326,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يشغل  الميكروويف.',
                                        'name_en' => 'Operates a microwave oven.',
                                        'created_at' => '2023-08-29 08:49:19',
                                        'updated_at' => '2023-08-29 08:49:19',
                                    ),
                                    326 => 
                                    array (
                                        'id' => 327,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يمسح الأرضية.',
                                        'name_en' => 'Sweeps floor.',
                                        'created_at' => '2023-08-29 08:49:33',
                                        'updated_at' => '2023-08-29 08:49:33',
                                    ),
                                    327 => 
                                    array (
                                        'id' => 328,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يطوي الملابس النظيفة.',
                                        'name_en' => 'Folds clean clothes.',
                                        'created_at' => '2023-08-29 08:49:46',
                                        'updated_at' => '2023-08-29 08:49:46',
                                    ),
                                    328 => 
                                    array (
                                        'id' => 329,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يُغسل الأطباق إما يدويًا أو بغسالة الأطباق.',
                                        'name_en' => 'Washes dishes either by hand or with a dishwasher.',
                                        'created_at' => '2023-08-29 08:50:01',
                                        'updated_at' => '2023-08-29 08:50:01',
                                    ),
                                    329 => 
                                    array (
                                        'id' => 330,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يقوم بإخراج القمامة عندما تكون العلبة ممتلئة.',
                                        'name_en' => 'Takes out trash when can is full.',
                                        'created_at' => '2023-08-29 08:50:16',
                                        'updated_at' => '2023-08-29 08:50:16',
                                    ),
                                    330 => 
                                    array (
                                        'id' => 331,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'يستخدم الأجهزة الكهربائية الصغيرة (على سبيل المثال، فتاحة العلب أو الخلاط).',
                                    'name_en' => 'Uses small electrical appliances (for example, a can opener or blender).',
                                        'created_at' => '2023-08-29 08:50:37',
                                        'updated_at' => '2023-08-29 08:50:37',
                                    ),
                                    331 => 
                                    array (
                                        'id' => 332,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'ينظم المهام في المنزل بحيث يتم الانتهاء من أهمها أولا.',
                                        'name_en' => 'Organizes tasks at home so that the most important are completed first.',
                                        'created_at' => '2023-08-29 08:50:52',
                                        'updated_at' => '2023-08-29 08:50:52',
                                    ),
                                    332 => 
                                    array (
                                        'id' => 333,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يستخدم مجفف الملابس.',
                                        'name_en' => 'Uses a clothes dryer.',
                                        'created_at' => '2023-08-29 08:51:06',
                                        'updated_at' => '2023-08-29 08:51:06',
                                    ),
                                    333 => 
                                    array (
                                        'id' => 334,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'ينظف الحمام بمستلزمات التنظيف المناسبة.',
                                        'name_en' => 'Cleans bathroom with proper cleaning supplies.',
                                        'created_at' => '2023-08-29 08:51:20',
                                        'updated_at' => '2023-08-29 08:51:20',
                                    ),
                                    334 => 
                                    array (
                                        'id' => 335,
                                        'abas_sub_domain_id' => 14,
                                    'name' => '. إجراء إصلاحات بسيطة  على الممتلكات الشخصية (على سبيل المثال، الدراجات والألعاب والملابس).',
                                    'name_en' => '. Makes minor repairs to personal possessions (for example, bikes, toys,  clothes).',
                                        'created_at' => '2023-08-29 08:51:53',
                                        'updated_at' => '2023-08-29 08:51:53',
                                    ),
                                    335 => 
                                    array (
                                        'id' => 336,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'يخلط ويطهى الأطعمة المعقدة إلى حد ما باستخدام الموقد أو الفرن (على سبيل المثال، الكعك أو كعك البراونيز).',
                                    'name_en' => 'Mixes and cooks fairly complex foods using a stove or oven (for example,  cake or brownies).',
                                        'created_at' => '2023-08-29 08:52:23',
                                        'updated_at' => '2023-08-29 08:52:23',
                                    ),
                                    336 => 
                                    array (
                                        'id' => 337,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يتسوق للحصول على أفضل الأسعار من خلال البحث عن المبيعات أو مقارنة المتاجر أو مواقع الإنترنت المختلفة',
                                        'name_en' => 'Shops for the best prices by looking for sales or comparing different stores   or Internet sites',
                                        'created_at' => '2023-08-29 08:52:52',
                                        'updated_at' => '2023-08-29 08:52:52',
                                    ),
                                    337 => 
                                    array (
                                        'id' => 338,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'إجراء إصلاحات منزلية بسيطة (على سبيل المثال، إصلاح المغسلة المسدودة أو الصنبور المتسرب)',
                                    'name_en' => 'Performs minor household repairs (for example, fixes a clogged drain or   leaky faucet)',
                                        'created_at' => '2023-08-29 08:53:24',
                                        'updated_at' => '2023-08-29 08:53:24',
                                    ),
                                    338 => 
                                    array (
                                        'id' => 339,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يتبع قواعد السلامه بالسياره ويضع حزام الامان.',
                                        'name_en' => 'Buckles own car seat or seat belt.',
                                        'created_at' => '2023-08-29 09:20:11',
                                        'updated_at' => '2023-08-29 09:20:11',
                                    ),
                                    339 => 
                                    array (
                                        'id' => 340,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يظهر الحذر بشأن العناصر الساخنة أو الخطرة.',
                                        'name_en' => 'Shows caution around hot or dangerous items.',
                                        'created_at' => '2023-08-29 09:20:26',
                                        'updated_at' => '2023-08-29 09:20:26',
                                    ),
                                    340 => 
                                    array (
                                        'id' => 341,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يحمل المقص بأمان.',
                                        'name_en' => 'Carries scissors safely.',
                                        'created_at' => '2023-08-29 09:20:43',
                                        'updated_at' => '2023-08-29 09:20:43',
                                    ),
                                    341 => 
                                    array (
                                        'id' => 342,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يتبع قواعد السلامة العامة في المنزل.',
                                        'name_en' => 'Follows general safety rules at home.',
                                        'created_at' => '2023-08-29 09:21:01',
                                        'updated_at' => '2023-08-29 09:21:01',
                                    ),
                                    342 => 
                                    array (
                                        'id' => 343,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يوضح السلوكيات الآمنة في الحدائق والملاعب وفي الحي',
                                        'name_en' => 'Displays safe behaviors at parks and playgrounds and in the neighborhood',
                                        'created_at' => '2023-08-29 09:22:11',
                                        'updated_at' => '2023-08-29 09:22:11',
                                    ),
                                    343 => 
                                    array (
                                        'id' => 344,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يبتلع الأدوية السائلة حسب الحاجة، دون ضجة.',
                                        'name_en' => 'Swallows liquid medicines as needed, without fussing.',
                                        'created_at' => '2023-08-29 09:22:28',
                                        'updated_at' => '2023-08-29 09:22:28',
                                    ),
                                    344 => 
                                    array (
                                        'id' => 345,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يحمل الأشياء القابلة للكسر بأمان وحذر.',
                                        'name_en' => 'Carries breakable objects safely and carefully.',
                                        'created_at' => '2023-08-29 09:22:50',
                                        'updated_at' => '2023-08-29 09:22:50',
                                    ),
                                    345 => 
                                    array (
                                        'id' => 346,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'اختبار الأطعمة الساخنة قبل تناولها.',
                                        'name_en' => 'Tests hot foods before eating them.',
                                        'created_at' => '2023-08-29 09:23:18',
                                        'updated_at' => '2023-08-29 09:23:18',
                                    ),
                                    346 => 
                                    array (
                                        'id' => 347,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يدعو للمساعدة إذا أصيب شخص ما في المنزل.',
                                        'name_en' => 'Calls for help if someone is hurt at home.',
                                        'created_at' => '2023-08-29 09:24:00',
                                        'updated_at' => '2023-08-29 09:24:00',
                                    ),
                                    347 => 
                                    array (
                                        'id' => 348,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يستخدم المنافذ الكهربائية أو المقابس بأمان.',
                                        'name_en' => 'Uses electrical outlets or sockets safely.',
                                        'created_at' => '2023-08-29 09:24:25',
                                        'updated_at' => '2023-08-29 09:24:25',
                                    ),
                                    348 => 
                                    array (
                                        'id' => 349,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يطيع طلبات الآخرين فقط إذا كان يعرفهم ويثق بهم.',
                                        'name_en' => 'Obeys requests from other people only if he or she knows and trusts them.',
                                        'created_at' => '2023-08-29 09:24:50',
                                        'updated_at' => '2023-08-29 09:24:50',
                                    ),
                                    349 => 
                                    array (
                                        'id' => 350,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يتبع قواعد السلامة للدراجات وألواح التزلج ومعدات اللعب الأخرى.',
                                        'name_en' => 'Follows safety rules for bikes, skateboards, and other play equipment.',
                                        'created_at' => '2023-08-29 09:25:06',
                                        'updated_at' => '2023-08-29 09:25:06',
                                    ),
                                    350 => 
                                    array (
                                        'id' => 351,
                                        'abas_sub_domain_id' => 15,
                                    'name' => 'يهتم بإصاباته الطفيفة (على سبيل المثال، جروح، وخدوش الركبة، ونزيف الأنف).',
                                    'name_en' => 'Cares for own minor injuries (for example, paper cuts, knee scrapes, nosebleeds).',
                                        'created_at' => '2023-08-29 09:25:39',
                                        'updated_at' => '2023-08-29 09:25:39',
                                    ),
                                    351 => 
                                    array (
                                        'id' => 352,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'بلع الحبوب أو الكبسولات مع الماء إذا لزم الأمر عندما يكون مريض.',
                                        'name_en' => 'Swallows pills or capsules with water if needed for illness.',
                                        'created_at' => '2023-08-29 09:26:13',
                                        'updated_at' => '2023-08-29 09:26:13',
                                    ),
                                    352 => 
                                    array (
                                        'id' => 353,
                                        'abas_sub_domain_id' => 15,
                                    'name' => 'يتجنب الأشخاص الذين قد يستغلونه (على سبيل المثال، من أجل المال أو الجنس)',
                                    'name_en' => 'Avoids people who might take advantage of him or her (for example, for  money or sex)',
                                        'created_at' => '2023-08-29 09:26:35',
                                        'updated_at' => '2023-08-29 09:26:35',
                                    ),
                                    353 => 
                                    array (
                                        'id' => 354,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يستخدم الأدوات والمعدات بشكل آمن.',
                                        'name_en' => 'Uses tools and equipment safely.',
                                        'created_at' => '2023-08-29 09:26:59',
                                        'updated_at' => '2023-08-29 09:26:59',
                                    ),
                                    354 => 
                                    array (
                                        'id' => 355,
                                        'abas_sub_domain_id' => 15,
                                        'name' => '. يطيع إشارات المرور عند ركوب الدراجة أو قيادة السيارة.',
                                        'name_en' => '. Obeys traffic signals when riding a bike or driving a car.',
                                        'created_at' => '2023-08-29 09:27:20',
                                        'updated_at' => '2023-08-29 09:27:20',
                                    ),
                                    355 => 
                                    array (
                                        'id' => 356,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'قياس درجة الحرارة بميزان الحراره عند الشعور بالمرض',
                                        'name_en' => 'Takes temperature with a thermometer when feeling sick',
                                        'created_at' => '2023-08-29 09:28:53',
                                        'updated_at' => '2023-08-29 09:28:53',
                                    ),
                                    356 => 
                                    array (
                                        'id' => 357,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'تناول الأدوية دون إشراف في الأيام والأوقات الموصوفة.',
                                        'name_en' => 'Takes medications without supervision on days and at times prescribed.',
                                        'created_at' => '2023-08-29 09:30:00',
                                        'updated_at' => '2023-08-29 09:30:00',
                                    ),
                                    357 => 
                                    array (
                                        'id' => 358,
                                        'abas_sub_domain_id' => 15,
                                        'name' => '. يشتري الأدوية التي لا تستلزم وصفة طبية عند الحاجة إليها بسبب المرض.',
                                        'name_en' => '. Buys over-the-counter medications when needed for illness.',
                                        'created_at' => '2023-08-29 09:30:21',
                                        'updated_at' => '2023-08-29 09:30:21',
                                    ),
                                    358 => 
                                    array (
                                        'id' => 359,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يلعب بالدمى أو الألعاب أو غيرها من الأشياء الممتعة مع الآخرين',
                                        'name_en' => 'Plays with toys, games, or other fun items with others',
                                        'created_at' => '2023-08-29 09:31:37',
                                        'updated_at' => '2023-08-29 09:31:37',
                                    ),
                                    359 => 
                                    array (
                                        'id' => 360,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يحضر الأنشطة الترفيهية في منزل شخص آخر',
                                        'name_en' => 'Attends fun activities at another’s home',
                                        'created_at' => '2023-08-29 09:31:59',
                                        'updated_at' => '2023-08-29 09:31:59',
                                    ),
                                    360 => 
                                    array (
                                        'id' => 361,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يشارك في مجموعة متنوعة من الأنشطة الترفيهية بدلاً من نشاط واحد أو اثنين فقط.',
                                        'name_en' => 'Engages in a variety of fun activities instead of only one or two.',
                                        'created_at' => '2023-08-29 09:32:47',
                                        'updated_at' => '2023-08-29 09:32:47',
                                    ),
                                    361 => 
                                    array (
                                        'id' => 362,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يتبع القواعد في الألعاب والأنشطة الترفيهية الأخرى.',
                                        'name_en' => 'Follows the rules in games and other fun activities.',
                                        'created_at' => '2023-08-29 09:33:20',
                                        'updated_at' => '2023-08-29 09:33:20',
                                    ),
                                    362 => 
                                    array (
                                        'id' => 363,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'ينتظر دوره في الألعاب والأنشطة الترفيهية الأخرى.',
                                        'name_en' => 'Waits for his or her turn in games and other fun activities.',
                                        'created_at' => '2023-08-29 09:33:48',
                                        'updated_at' => '2023-08-29 09:33:48',
                                    ),
                                    363 => 
                                    array (
                                        'id' => 364,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'ينظر إلى الصور أو يقرأ الكتب أو المجلات أثناء وقت الفراغ',
                                        'name_en' => 'Looks at pictures or reads books or magazines during free time',
                                        'created_at' => '2023-08-29 09:34:17',
                                        'updated_at' => '2023-08-29 09:34:17',
                                    ),
                                    364 => 
                                    array (
                                        'id' => 365,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يشارك بانتظام في نشاط ممتع محدد (على سبيل المثال، الاستماع إلى أغنية
نوع معين من الموسيقى أو تشغيل إحدى ألعاب الكمبيوتر المفضلة).',
                                        'name_en' => 'Participates regularly in a specific fun activity (for example, listening to a   
certain type of music or playing a favorite computer game).',
                                        'created_at' => '2023-08-29 09:35:05',
                                        'updated_at' => '2023-08-29 09:35:05',
                                    ),
                                    365 => 
                                    array (
                                        'id' => 366,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يدعو الآخرين للانضمام إليه في ممارسة الألعاب والأنشطة الترفيهية الأخرى.',
                                        'name_en' => 'Invites others to join him or her in playing games and other fun activities.',
                                        'created_at' => '2023-08-29 09:37:34',
                                        'updated_at' => '2023-08-29 09:37:34',
                                    ),
                                    366 => 
                                    array (
                                        'id' => 367,
                                        'abas_sub_domain_id' => 16,
                                    'name' => 'يختار برامج تلفزيونية أو يستخدم الإنترنت لمتابعة مجال اهتمامه (على سبيل المثال، الرياضة، الموسيقى، الطبيعة).',
                                    'name_en' => '. Selects television programs or uses the Internet to keep up with an area of   interest (for example, sports, music, nature).',
                                        'created_at' => '2023-08-29 09:38:24',
                                        'updated_at' => '2023-08-29 09:38:24',
                                    ),
                                    367 => 
                                    array (
                                        'id' => 368,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يدعو الآخرين إلى المنزل للقيام بنشاط ممتع.',
                                        'name_en' => 'Invites others home for a fun activity.',
                                        'created_at' => '2023-08-29 09:39:11',
                                        'updated_at' => '2023-08-29 09:39:11',
                                    ),
                                    368 => 
                                    array (
                                        'id' => 369,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يستمع إلى الموسيقى من أجل المتعة والاسترخاء.',
                                        'name_en' => 'Listens to music for fun and relaxation.',
                                        'created_at' => '2023-08-29 09:39:42',
                                        'updated_at' => '2023-08-29 09:39:42',
                                    ),
                                    369 => 
                                    array (
                                        'id' => 370,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يبدأ الألعاب أو يختار البرامج التلفزيونية التي يحبها الأصدقاء أو أفراد الأسرة.',
                                        'name_en' => 'Initiates games or selects television programs liked by friends or family   members.',
                                        'created_at' => '2023-08-29 09:40:09',
                                        'updated_at' => '2023-08-29 09:40:09',
                                    ),
                                    370 => 
                                    array (
                                        'id' => 371,
                                        'abas_sub_domain_id' => 16,
                                    'name' => 'يشارك في برنامج منظم لممارسة رياضة أو هواية (على سبيل المثال، ممارسة كرة السلة أو حضور دروس الموسيقى).',
                                    'name_en' => 'Participates in an organized program for a sport or hobby (for example,  practices basketball or takes a music class).',
                                        'created_at' => '2023-08-29 09:40:54',
                                        'updated_at' => '2023-08-29 09:40:54',
                                    ),
                                    371 => 
                                    array (
                                        'id' => 372,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يدعو الآخرين ليكونوا أولًا في الألعاب أو اللعب أو الأنشطة الأخرى.',
                                        'name_en' => 'Invites others to go first in games, play, or other activities.',
                                        'created_at' => '2023-08-29 09:41:26',
                                        'updated_at' => '2023-08-29 09:41:26',
                                    ),
                                    372 => 
                                    array (
                                        'id' => 373,
                                        'abas_sub_domain_id' => 16,
                                    'name' => 'يحضر أنشطة مجتمعية ممتعة مع الآخرين (على سبيل المثال، فيلم أو حفل موسيقي).',
                                    'name_en' => 'Attends fun community activities with others (for example, a movie or concert).',
                                        'created_at' => '2023-08-29 09:42:03',
                                        'updated_at' => '2023-08-29 09:42:03',
                                    ),
                                    373 => 
                                    array (
                                        'id' => 374,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يجرب نشاطًا جديدًا للتعرف على شيء جديد.',
                                        'name_en' => 'Tries a new activity to learn about something new.',
                                        'created_at' => '2023-08-29 09:42:54',
                                        'updated_at' => '2023-08-29 09:42:54',
                                    ),
                                    374 => 
                                    array (
                                        'id' => 375,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'خطط مسبقًا للعب أو الأنشطة الترفيهية في الأيام المجانية أو بعد الظهر.',
                                        'name_en' => 'Plans ahead for play or fun activities on free days or afternoons.',
                                        'created_at' => '2023-08-29 09:44:00',
                                        'updated_at' => '2023-08-29 09:44:00',
                                    ),
                                    375 => 
                                    array (
                                        'id' => 376,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'ينظم لعبة أو أي نشاط ممتع آخر لمجموعة من الأصدقاء دون مساعدة من الآخرين.',
                                        'name_en' => 'Organizes a game or other fun activity for a group of friends without help   from others.',
                                        'created_at' => '2023-08-29 09:44:44',
                                        'updated_at' => '2023-08-29 09:44:44',
                                    ),
                                    376 => 
                                    array (
                                        'id' => 377,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'التخطيط المسبق للأنشطة الترفيهية أثناء فترات الراحة المدرسية أو الإجازات.',
                                        'name_en' => 'Plans ahead for leisure activities during school breaks or vacations.',
                                        'created_at' => '2023-08-29 09:45:04',
                                        'updated_at' => '2023-08-29 09:45:04',
                                    ),
                                    377 => 
                                    array (
                                        'id' => 378,
                                        'abas_sub_domain_id' => 16,
                                    'name' => 'الانضمام إلى مجموعة منظمة دون مساعدة من شخص آخر (على سبيل المثال، نادٍ أو فريق رياضي أو مجموعة موسيقية)',
                                    'name_en' => 'Joins an organized group without help from another person (for example,  a club, sports team, or musical group)',
                                        'created_at' => '2023-08-29 09:45:38',
                                        'updated_at' => '2023-08-29 09:45:38',
                                    ),
                                    378 => 
                                    array (
                                        'id' => 379,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يستخدم الشوكة في تناول الطعام الصلب',
                                        'name_en' => 'Uses a fork to eat solid food',
                                        'created_at' => '2023-08-29 10:07:29',
                                        'updated_at' => '2023-08-29 10:07:29',
                                    ),
                                    379 => 
                                    array (
                                        'id' => 380,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يستخدم الحمام في المنزل دون مساعدة.',
                                        'name_en' => 'Uses restroom at home without help.',
                                        'created_at' => '2023-08-29 10:07:49',
                                        'updated_at' => '2023-08-29 10:07:49',
                                    ),
                                    380 => 
                                    array (
                                        'id' => 381,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يغسل اليدين بالماء والصابون.',
                                        'name_en' => 'Washes hands with both soap and water.',
                                        'created_at' => '2023-08-29 10:08:05',
                                        'updated_at' => '2023-08-29 10:08:05',
                                    ),
                                    381 => 
                                    array (
                                        'id' => 382,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يلبس لوحده',
                                        'name_en' => 'Dresses himself or herself.',
                                        'created_at' => '2023-08-29 10:09:21',
                                        'updated_at' => '2023-08-29 10:09:21',
                                    ),
                                    382 => 
                                    array (
                                        'id' => 383,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يشرب السوائل دون انسكاب.',
                                        'name_en' => '. Drinks liquids without spilling',
                                        'created_at' => '2023-08-29 10:09:47',
                                        'updated_at' => '2023-08-29 10:09:47',
                                    ),
                                    383 => 
                                    array (
                                        'id' => 384,
                                        'abas_sub_domain_id' => 17,
                                        'name' => '. يلبس الحذاء بشكل صحيح',
                                        'name_en' => '. Puts shoes on the correct feet',
                                        'created_at' => '2023-08-29 10:10:45',
                                        'updated_at' => '2023-08-29 10:10:45',
                                    ),
                                    384 => 
                                    array (
                                        'id' => 385,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يفرش أسنانه.',
                                        'name_en' => 'Brushes teeth',
                                        'created_at' => '2023-08-29 10:11:49',
                                        'updated_at' => '2023-08-29 10:11:49',
                                    ),
                                    385 => 
                                    array (
                                        'id' => 386,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يزر أزرار الملابس',
                                        'name_en' => 'Buttons own clothing',
                                        'created_at' => '2023-08-29 10:12:40',
                                        'updated_at' => '2023-08-29 10:12:40',
                                    ),
                                    386 => 
                                    array (
                                        'id' => 387,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'ينظف ويمسح الأنف بمنديل .',
                                        'name_en' => 'Blows and wipes nose with tissue or handkerchief.',
                                        'created_at' => '2023-08-29 10:13:27',
                                        'updated_at' => '2023-08-29 10:13:27',
                                    ),
                                    387 => 
                                    array (
                                        'id' => 388,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يغلق ويقفل الباب قبل استخدام الحمامات العامة.',
                                        'name_en' => 'Closes and locks the door before using public restrooms.',
                                        'created_at' => '2023-08-29 10:13:52',
                                        'updated_at' => '2023-08-29 10:13:52',
                                    ),
                                    388 => 
                                    array (
                                        'id' => 389,
                                        'abas_sub_domain_id' => 17,
                                        'name' => '. يستحم يوميا',
                                        'name_en' => '. Bathes daily',
                                        'created_at' => '2023-08-29 10:29:05',
                                        'updated_at' => '2023-08-29 10:29:05',
                                    ),
                                    389 => 
                                    array (
                                        'id' => 390,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يعلق الملابس  قبل الخروج من الحمام.',
                                        'name_en' => 'Fastens and straightens clothing before leaving restroom.',
                                        'created_at' => '2023-08-29 12:08:28',
                                        'updated_at' => '2023-08-29 12:08:28',
                                    ),
                                    390 => 
                                    array (
                                        'id' => 391,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'ينظف نفسه  إذا كان موحلاً أو متسخًا.',
                                        'name_en' => 'Cleans or brushes himself or herself off if muddy or dirty.',
                                        'created_at' => '2023-08-29 12:09:07',
                                        'updated_at' => '2023-08-29 12:09:07',
                                    ),
                                    391 => 
                                    array (
                                        'id' => 392,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يربط حذائه بنفسه.',
                                        'name_en' => 'Ties his or her own shoes.',
                                        'created_at' => '2023-08-29 12:09:26',
                                        'updated_at' => '2023-08-29 12:09:26',
                                    ),
                                    392 => 
                                    array (
                                        'id' => 393,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يرتدي مجموعة متنوعة من الملابس، بدلًا من نفس الملابس أو ملابس مشابهة في معظم الأيام.',
                                        'name_en' => 'Wears a variety of clothes, instead of the same or similar clothes  most days.',
                                        'created_at' => '2023-08-29 12:10:30',
                                        'updated_at' => '2023-08-29 12:10:30',
                                    ),
                                    393 => 
                                    array (
                                        'id' => 394,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يتناول مجموعة متنوعة من الأطعمة بدلاً من تفضيل نوع واحد أو اثنين فقط.',
                                        'name_en' => 'Eats a variety of foods instead of preferring only one or two.',
                                        'created_at' => '2023-08-29 12:11:05',
                                        'updated_at' => '2023-08-29 12:11:05',
                                    ),
                                    394 => 
                                    array (
                                        'id' => 395,
                                        'abas_sub_domain_id' => 17,
                                    'name' => 'التحقق من ملابسه ومظهره قبل مغادرة المنزل (على سبيل المثال، أن يكون شعره مرتبًا وأن حذائه مربوط).',
                                    'name_en' => 'Checks his or her clothing and appearance before leaving home (for  example, that hair is tidy and shoes are tied).',
                                        'created_at' => '2023-08-29 12:12:28',
                                        'updated_at' => '2023-08-29 12:12:28',
                                    ),
                                    395 => 
                                    array (
                                        'id' => 396,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يستخدم الحمامات العامة بمفرده.',
                                        'name_en' => 'Uses public restroom alone.',
                                        'created_at' => '2023-08-29 12:12:49',
                                        'updated_at' => '2023-08-29 12:12:49',
                                    ),
                                    396 => 
                                    array (
                                        'id' => 397,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يغسل شعره بنفسه.',
                                        'name_en' => 'Washes his or her own hair.',
                                        'created_at' => '2023-08-29 12:13:04',
                                        'updated_at' => '2023-08-29 12:13:04',
                                    ),
                                    397 => 
                                    array (
                                        'id' => 398,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يوازن بين الماء الساخن والبارد للاستحمام أو الحمام.',
                                        'name_en' => 'Combines hot and cold water for a shower or bath.',
                                        'created_at' => '2023-08-29 12:14:18',
                                        'updated_at' => '2023-08-29 12:14:18',
                                    ),
                                    398 => 
                                    array (
                                        'id' => 399,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يتناول الطعام أو  الوجبات الخفيفة  التي تعزز اتباع نظام غذائي صحي.',
                                        'name_en' => 'Eats meals and snacks that promote a healthy diet.',
                                        'created_at' => '2023-08-29 12:17:04',
                                        'updated_at' => '2023-08-29 12:17:04',
                                    ),
                                    399 => 
                                    array (
                                        'id' => 400,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يخرج من السرير في الوقت المحدد بنفسه.',
                                        'name_en' => 'Gets out of bed on time by himself or herself.',
                                        'created_at' => '2023-08-29 12:17:48',
                                        'updated_at' => '2023-08-29 12:17:48',
                                    ),
                                    400 => 
                                    array (
                                        'id' => 401,
                                        'abas_sub_domain_id' => 17,
                                        'name' => '. يقطع اللحوم أو الأطعمة الأخرى إلى قطع صغيرة الحجم بسكين.',
                                        'name_en' => '. Cuts meats or other foods into bite-size pieces with a knife.',
                                        'created_at' => '2023-08-29 12:18:19',
                                        'updated_at' => '2023-08-29 12:18:19',
                                    ),
                                    401 => 
                                    array (
                                        'id' => 402,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'قص أوبرد أظافر يديه وأظافر قدميه بانتظام.',
                                        'name_en' => 'Cuts or files his or her own fingernails and toenails regularly.',
                                        'created_at' => '2023-08-29 12:20:21',
                                        'updated_at' => '2023-08-29 12:20:21',
                                    ),
                                    402 => 
                                    array (
                                        'id' => 403,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يحصل على قصات الشعر بانتظام من تلقاء نفسه.',
                                        'name_en' => 'Obtains haircuts regularly on his or her own.',
                                        'created_at' => '2023-08-29 12:20:58',
                                        'updated_at' => '2023-08-29 12:20:58',
                                    ),
                                ));
        
        
    }
}