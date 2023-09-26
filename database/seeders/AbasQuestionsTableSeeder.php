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
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻨﻈﺮ ﻷﻋﻠﻰ أو ﻳﺒﺘﺴﻢ ﻋﻨﺪﻣﺎ ﻳﻘﻮل أﺣﺪﻫﻢ إﺳﻤﻪ',
                'name_en' => 'Looks up or smiles when someone says his or her name',
                'created_at' => '2023-08-23 10:08:17',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻀﺤﻚ ﻋﻨﺪﻣﺎ ﻳﻀﺤﻚ أﺣﺪ اﻟﻮاﻟﺪﻳﻦ أو أي ﺷﺨﺺ آﺧﺮ.',
                'name_en' => 'Laughs when a parent or other person laughs',
                'created_at' => '2023-08-23 10:10:27',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺮﻓﻊ اﻟﺼﻮت ﻭﻳﺨﻔﻀﻪ ﻟﻠﺘﻌﺒﻴﺮ ﻋﻦ ﻣﺸﺎﻋﺮ ﺃو اﺣﺘﻴﺎﺟﺎت ﻣﺨﺘﻠﻔﺔ.',
                'name_en' => 'Raises and lowers voice to express different feelings or needs',
                'created_at' => '2023-08-23 10:10:41',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'abas_sub_domain_id' => 1,
            'name' => 'ﻳﻘﻮل أﺳﻤﺎء أﺷﺨﺎص ﺁﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ ﺍﻟﻤﺜﺎل ، "ﻣﺎﻣﺎ" أو "ﺑﺎﺑﺎ" أو أﺳﻤﺎء اﻷﺻﺪﻗﺎء.)',
                'name_en' => 'Says the names of other people (for example, “Mama,” “Daddy,” or names  of friends',
                    'created_at' => '2023-08-23 10:11:12',
                    'updated_at' => '2023-09-03 15:57:49',
                    'question_number' => 5,
                ),
                5 => 
                array (
                    'id' => 6,
                    'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﺒﻊ أواﻣﺮ بسيطة (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻻ" أو "ﺗﻌﺎل ﻫﻨﺎ)',
                'name_en' => 'Follows simple commands (for example, “No” or “Come here”)',
                    'created_at' => '2023-08-23 10:12:09',
                    'updated_at' => '2023-09-03 15:57:49',
                    'question_number' => 6,
                ),
                6 => 
                array (
                    'id' => 7,
                    'abas_sub_domain_id' => 1,
                    'name' => 'ﻳﺴﺘﺨﺪم ﻛﻠﻤﺔ واﺣﺪة أو أﻛﺜﺮ ﻟﻠﺤﺼﻮل ﻋﻠﻰ ﺷﻲء ﻳﺮﻳﺪه ، ﺣﺘﻰ ﻟﻮ ﻟﻢ ﻳﺘﻢ ﻧﻄﻖ اﻟﻜﻠﻤﺔ  ﺑﺸﻜﻞ ﺻﺤﻴﺢ أو ﻟﻢ
ﻳﺘﻢﻧﻄﻘﻬﺎ ﺑﺸﻜﻞ ﺟﻴﺪ.',
                'name_en' => 'Follows simple commands (for example, “No” or “Come here”)',
                    'created_at' => '2023-08-23 10:12:46',
                    'updated_at' => '2023-09-03 15:57:49',
                    'question_number' => 7,
                ),
                7 => 
                array (
                    'id' => 8,
                    'abas_sub_domain_id' => 1,
                    'name' => 'ﻳﻬﺰ رأﺳﻪ أو ﻳﻘﻮل "ﻧﻌﻢ" أو "ﻻ" ردا ﻋﻠﻰ ﺳﺆال ﺑﺴﻴﻂ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻫﻞ ﺗﺮﻳﺪ ﺷﻴئا             
ﺗﺸﺮﺑﻪ)',
                'name_en' => 'Shakes head or says “Yes” or “No” in response to a simple question (for example, “Do you want something to drink?”)',
                    'created_at' => '2023-08-23 10:13:14',
                    'updated_at' => '2023-09-03 15:57:49',
                    'question_number' => 8,
                ),
                8 => 
                array (
                    'id' => 9,
                    'abas_sub_domain_id' => 1,
                    'name' => 'ﻳﺸﻴﺮ إﻟﻰ الأشياء الأساسية ﻓﻲ غرفة ﻋﻨﺪﻣﺎ ﻳﻄُﻠﺐ منه ذﻟﻚ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "أشر ﻟﻲ
اﻟﺘﻠﻔﺰﻳﻮن)',
                'name_en' => 'Points to common items in a room when asked (for example, “Show me the TV”)',
                    'created_at' => '2023-08-23 10:55:37',
                    'updated_at' => '2023-09-03 15:57:49',
                    'question_number' => 9,
                ),
                9 => 
                array (
                    'id' => 10,
                    'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻜﺮر اﻟﻜﻠﻤﺎت اﻟﺘﻲ ﻳﻘﻮﻟﻬﺎ اﻵﺧﺮون )ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻘﻮل "ﻃﻔﻞ" ﻋﻨﺪﻣﺎ ﻳﻘﻮل ﺷﺨﺺ ﺑﺎﻟﻎ "ﻃﻔﻞ',
            'name_en' => 'Repeats words others say (for example, says “baby” when an adult says  “baby”)',
                'created_at' => '2023-08-23 10:55:37',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'abas_sub_domain_id' => 1,
            'name' => 'ﻳﻘﻮل ﻋﺒﺎرات ﺗﺤﺘﻮي ﻋﻠﻰ ﻛﻠﻤﺘﻴﻦ ﻋﻠﻰ اﻷﻗﻞ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻛﺘﺎﺑﻲ)',
            'name_en' => 'Says phrases with at least two words (for example, “My book”)',
                'created_at' => '2023-08-23 12:03:25',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 11,
            ),
            11 => 
            array (
                'id' => 12,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻘﻮل اﺳﻢ اﻟﺸﻲء ﺑﻮﺿﻮح ﻛﺎف ٍ ﺑﺤﻴﺚ ﻳﺘﻌﺮف ﻋﻠﻴﻪ  اﻵﺧﺮون(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻛﺮة" ، "
ﻛﻠﺐ" ، "ﻛﻮب)',
            'name_en' => 'Says the name of an object clearly enough that others recognize it (for  example, “ball,” “dog,” “cup”).',
                'created_at' => '2023-08-23 12:08:36',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 12,
            ),
            12 => 
            array (
                'id' => 13,
                'abas_sub_domain_id' => 1,
                'name' => 'ينصت ﻟﻤﺪة دﻗﻴﻘﺔ واﺣﺪة ﻋﻠﻰ اﻷﻗﻞ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪث اﻟﻨﺎس',
                'name_en' => 'Listens closely for at least 1 minute when people talk',
                'created_at' => '2023-08-23 12:09:57',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'abas_sub_domain_id' => 1,
                'name' => 'يرتدي معطفًا أو سترة عندما يكون الجو باردًا.',
                'name_en' => 'Puts on a coat or sweater when cold.',
                'created_at' => '2023-08-23 12:22:04',
                'updated_at' => '2023-09-07 08:43:00',
                'question_number' => 14,
            ),
            14 => 
            array (
                'id' => 15,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﺒﻊ ﺗﻮﺟﻴﻬﺎت ﺑﺴﻴﻄﺔ ﻣﻦ ﺧﻄﻮة واﺣﺪة ﺗﺘﻀﻤﻦ "ﻓﻮق" أو ﺗﺤﺖ (ﻋﻠﻰ ﺳﺒﻴﻞ ﺍﻟﻤﺜﺎل ، "
ارفع يديك للأعلى )',
            'name_en' => 'Follows simple, one-step directions that include “over” or “under” (for   example, “Put your hands over your head”).',
                'created_at' => '2023-08-23 12:24:11',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 15,
            ),
            15 => 
            array (
                'id' => 16,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ ﺗﻜﺮار الكلام ﻣﺮارا  وﺗﻜﺮارا',
                'name_en' => 'Refrains from repeating what he or she says over and over again',
                'created_at' => '2023-08-23 12:25:35',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 16,
            ),
            16 => 
            array (
                'id' => 17,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺴﻤﻲ 20 أو أﻛﺜﺮ ﻣﻦ اﻷﺷﻴﺎء اﻟﻤﺄﻟﻮﻓﺔ',
                'name_en' => 'Names 20 or more familiar objects',
                'created_at' => '2023-08-23 12:26:28',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 17,
            ),
            17 => 
            array (
                'id' => 18,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻐﻨﻲ اغنية كاملة أو ﺟﺰء ﻣﻨﻬﺎ',
                'name_en' => 'Sings all or part of the words to songs',
                'created_at' => '2023-08-23 12:27:10',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 18,
            ),
            18 => 
            array (
                'id' => 19,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻘﻮم ﺑﻌﻤﻞ ﺻﻴﻎ اﻟﺠﻤﻊ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "أﺣﺬﻳﺔ" ، "ﺟﻮارب" ،    
ﻛﻼب.)',
            'name_en' => 'Makes plurals of words by adding an -s (for example, “shoes,” “socks, “dogs”)',
                'created_at' => '2023-08-23 12:28:51',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 19,
            ),
            19 => 
            array (
                'id' => 20,
                'abas_sub_domain_id' => 1,
                'name' => 'يستخدم جملة  مكونة من اسم وفعل',
                'name_en' => 'Uses sentences with a noun and verb',
                'created_at' => '2023-08-23 12:31:02',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 20,
            ),
            20 => 
            array (
                'id' => 21,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺨﺒﺮ اﻟﻮاﻟﺪ أو اﻷﺻﺪﻗﺎءأو اﻵﺧﺮﻳﻦ ﻋﻦ أﻧﺸﻄﺘﻪ اﻟﻤﻔﻀﻠﺔ',
                'name_en' => 'Tells parent, friends, or others about his or her favorite activities',
                'created_at' => '2023-08-23 12:32:56',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 21,
            ),
            21 => 
            array (
                'id' => 22,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﻄﺮح أسئلة ﻣﺜﻞ "ﻫﻞ ﺗﻠﻌﺐ ﻣﻌﻲ..؟"',
                'name_en' => 'Asks questions such as “Will you play with me?',
                'created_at' => '2023-08-23 12:35:38',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 22,
            ),
            22 => 
            array (
                'id' => 23,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﺤﺪث ﺑﺠﻤﻞ ﻣﻦ ﺳﺖ ﻛﻠﻤﺎت أو  أﻛﺜﺮ',
                'name_en' => 'Speaks in sentences of six or more words',
                'created_at' => '2023-08-23 12:36:28',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 23,
            ),
            23 => 
            array (
                'id' => 24,
                'abas_sub_domain_id' => 1,
            'name' => 'ﻳﺴﺘﺨﺪم اﻟﺰﻣﻦ اﻟﻤﺎﺿﻲ ﻟﻠﺘﺤﺪث ﻋﻦ اﻷﺣﺪاث اﻟﺴﺎﺑﻘﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﺑﻘﻴﺖ ﺑﺎﻟﺪﺍﺧﻞ)',
            'name_en' => 'Uses past tense to talk about prior events (for example, “I stayed inside”)',
                'created_at' => '2023-08-23 12:38:22',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 24,
            ),
            24 => 
            array (
                'id' => 25,
                'abas_sub_domain_id' => 1,
                'name' => 'يجري ﻣﺤﺎدﺛﺔ ﻣﻊ ﺷﺨﺺ آﺧﺮ ﻟﻤﺪة 3 دﻗﺎئق ﻋﻠﻰ اﻷﻗﻞ',
                'name_en' => 'Has a conversation with another person for at least 3 minutes',
                'created_at' => '2023-08-23 12:39:54',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 25,
            ),
            25 => 
            array (
                'id' => 26,
                'abas_sub_domain_id' => 1,
                'name' => 'ينتظر ﺣﺘﻰ ﻳﻨﻬﻲ اﻵﺧﺮون ﻣﺎ ﻳﻘﻮﻟﻮﻧﻪ  دون ﻣﻘﺎﻃﻌﺔ',
                'name_en' => 'Waits for others to finish what they are saying, without interrupting',
                'created_at' => '2023-08-23 12:40:34',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 26,
            ),
            26 => 
            array (
                'id' => 27,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺒﻘﻰ ﻣﻊ اﻟﻮاﻟﺪﻳﻦ أو أﻓﺮاد اﻷﺳﺮة اﻵﺧﺮﻳﻦ ﻓﻲ ﻣﺘﺠﺮ و لا يبتعد عنهم',
                'name_en' => 'Stays with parents or other family members in a store and does not wander off',
                'created_at' => '2023-08-23 19:21:19',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'abas_sub_domain_id' => 1,
                'name' => 'ﻳﺘﻌﺮف ﻋﻠﻰ ﻣﻨﺰﻟﻪ ﻓﻲ ﻣﻨﻄﻘﺘﻪ أو  مكان السكن او الشارع',
                'name_en' => 'Recognizes own home in his or her immediate neighborhood',
                'created_at' => '2023-08-23 19:22:20',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 27,
            ),
            28 => 
            array (
                'id' => 29,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻤﺸﻲ ﻋﻠﻰ اﻟﺮﺻﻴﻒ ﺑﺪﻻ ً ﻣﻦ ﺍﻟﺸﺎﺭع',
                'name_en' => 'Walks on sidewalk rather than street',
                'created_at' => '2023-08-23 19:25:15',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺨﺒﺮ اﻟﻮاﻟﺪﻳﻦ ﻋﻨﺪﻣﺎ ﻳﺄﺗﻲ ﺷﺨﺺ ﻣﺎ إﻟﻰ باب البيت',
                'name_en' => 'Informs parents when someone comes to the door',
                'created_at' => '2023-08-23 19:26:10',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 3,
            ),
            30 => 
            array (
                'id' => 31,
                'abas_sub_domain_id' => 2,
            'name' => 'ﻳﻈﻬﺮ اﺣﺘﺮﺍﻣﺎً ﻟﻠﻤﻤﺘﻠﻜﺎت  اﻟﻌﺎﻣﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، رﻣﻲ اﻟﻘﻤﺎﻣﺔ ﻓﻲ ﻋﻠﺐ ، ﻻ ﻳﻀﺮ ﺑﺎﻟﻤﻤﺘﻠﻜﺎت.)',
            'name_en' => 'Shows respect for public property (for example, throws trash in cans, does not damage property)',
                'created_at' => '2023-08-23 19:27:50',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 4,
            ),
            31 => 
            array (
                'id' => 32,
                'abas_sub_domain_id' => 2,
                'name' => 'يستجيب لطلب ﺷﺨﺺ ﺑﺎﻟﻎ "ﻋﺪم ﻟﻤﺲ" اﻟﻌﻨﺎﺻﺮ ﻋﻨﺪ اﻟﺘﺴﻮق',
                'name_en' => 'Obeys an adult’s request to “don’t touch” items when shopping',
                'created_at' => '2023-08-23 19:29:07',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 5,
            ),
            32 => 
            array (
                'id' => 33,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻄﻠﺐ اﻟﺬﻫﺎب إﻟﻰ ﺣﺪﻳﻘﺔ أو ﻣﻜﺎن ﺁﺧﺮ ﻣﻔﻀﻞ ﻓﻲ اﻟﻤﺠﺘﻤﻊ',
                'name_en' => 'Asks to go to a park or other favorite community place',
                'created_at' => '2023-08-23 19:30:06',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 6,
            ),
            33 => 
            array (
                'id' => 34,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻄﺮق اﻟﺒﺎب أو ﻳﻘﺮع ﺟﺮس اﻟﺒﺎب ﻗﺒﻞ دﺧﻮل ﻣﻨﺰل ﺷﺨﺺ ﺁﺧﺮ',
                'name_en' => 'Knocks on a door or rings the doorbell before entering another person’s  home',
                'created_at' => '2023-08-23 19:31:27',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 7,
            ),
            34 => 
            array (
                'id' => 35,
                'abas_sub_domain_id' => 2,
            'name' => 'اﻻﻣﺘﻨﺎع ﻋﻦ اﻟﺘﺤﺪث ﺑﺼﻮت ﻋﺎل ٍﻓﻲ ﻣﻜﺎن ﻋﺎم (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻓﻲ السينما أو المول أو المسجد.)',
            'name_en' => 'Refrains from talking loudly in a public place (for example, in a theater,  movie, or church)',
                'created_at' => '2023-08-23 19:33:57',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 8,
            ),
            35 => 
            array (
                'id' => 36,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺒﻘﻰ ﺟﺎﻟﺴﺎً أﺛﻨﺎء مناسبة اجتماعية او خبطبة يوم الجمعة او مشاهدة فيلم في السينما',
                'name_en' => 'Remains seated during a religious service or a movie',
                'created_at' => '2023-08-23 19:34:48',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 9,
            ),
            36 => 
            array (
                'id' => 37,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻄﻠﺐ أن ﻳﺄﻛﻞ ﻓﻲ ﻣﻄﻌﻢ ﻣﻔﻀﻞ',
                'name_en' => 'Asks to eat in a favorite restaurant',
                'created_at' => '2023-08-23 19:35:43',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 10,
            ),
            37 => 
            array (
                'id' => 38,
                'abas_sub_domain_id' => 2,
            'name' => 'ﻳﺘﻌﺮف وﻳﺴﻤﻲ اﻟﻤﺒﺎﻧﻲ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻣﺴﺘﺸﻔﻰ ، ﻣﺤﻄﺔ وﻗﻮد ، ﻗﺴﻢ إﻃﻔﺎء)',
            'name_en' => 'Recognizes and names buildings (for example, hospital, gas station, fire  department)',
                'created_at' => '2023-08-23 19:37:01',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 11,
            ),
            38 => 
            array (
                'id' => 39,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺤﺪد ﻣﻮاﻗﻊ اﻷﺣﻴﺎء ﺣﻴﺚ ﺗﺤﺼﻞ أﺳﺮﺗﻪ ﻋﻠﻰ اﻟﻌﻨﺎﺻﺮ اﻟﻤﻄﻠﻮﺑﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻣﻜﺎن ﺷﺮﺍء
ﺍﻟﻄﻌﺎم)',
            'name_en' => 'Identifies neighborhood locations where his or her family obtains needed  items (for example, where to buy food)',
                'created_at' => '2023-08-23 19:39:46',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 12,
            ),
            39 => 
            array (
                'id' => 40,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺪﺭك اﻟﺤﺎﺟﺔ إﻟﻰ دﻓﻊ ﺛﻤﻦ أﺣﺪ اﻟﻌﻨﺎﺻﺮ ﻗﺒﻞ ﻣﻐﺎدرة اﻟﻤﺘﺠﺮ',
                'name_en' => 'Recognizes the need to pay for an item before leaving a store',
                'created_at' => '2023-08-23 19:40:36',
                'updated_at' => '2023-09-03 15:57:49',
                'question_number' => 13,
            ),
            40 => 
            array (
                'id' => 41,
                'abas_sub_domain_id' => 2,
            'name' => 'ﻳﺼﻒ مهام  اﻟﻌﻤﺎل (ﻣﺜﻼ ﻳﻘﻮل أن رﺟﺎل اﻻﻃﻔﺎء يطفئون ﺍاﻟﺤﺮائق و اﻷﻃﺒﺎء ﻳﺴﺎﻋﺪون اﻟﻤﺮﺿﻰ)',
            'name_en' => 'Describes the duties of workers (for example, says that firefighters put out  fires and doctors help the sick)',
                'created_at' => '2023-08-23 19:43:18',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 14,
            ),
            41 => 
            array (
                'id' => 42,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻨﻈﺮ ﻓﻲ ﻛﻼ اﻻﺗﺠﺎﻫﻴﻦ ﻗﺒﻞ ﻋﺒﻮر  اﻟﺸﺎرع  أو  ﺳﺎﺣﺔ اﻧﺘﻈﺎر اﻟﺴﻴﺎرات',
                'name_en' => 'Looks both ways before crossing a street or parking lot',
                'created_at' => '2023-08-23 19:44:30',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 15,
            ),
            42 => 
            array (
                'id' => 43,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻄﻠﺐ اﻟﺬﻫﺎب إﻟﻰ اﻟﻤﻜﺘﺒﺔ',
                'name_en' => 'Asks to go to the library',
                'created_at' => '2023-08-23 19:45:11',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 16,
            ),
            43 => 
            array (
                'id' => 44,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺠﺪ اﻟﻤﺮﺣﺎض ﻓﻲ اﻷﻣﺎﻛﻦ اﻟﻌﺎﻣﺔ',
                'name_en' => 'Finds the restroom in public places',
                'created_at' => '2023-08-23 19:46:15',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 17,
            ),
            44 => 
            array (
                'id' => 45,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻃﻠﺐ  وﺟﺒﺎت اﻟﻄﻌﺎم  اﻟﺨﺎﺻﺔ ﻋﻨﺪ ﺗﻨﺎول اﻟﻄﻌﺎم ﺑﺎﻟﺨﺎﺭج',
                'name_en' => 'Orders own meals when eating out',
                'created_at' => '2023-08-23 19:47:26',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 18,
            ),
            45 => 
            array (
                'id' => 46,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﻘﻮم ﺑﻌﻤﻠﻴﺔ ﺷﺮاء ﺻﻐﻴﺮة ﻣﻦ ﻣﺘﺠﺮ اﻟﻤﻮاد اﻟﻐﺬائية.',
                'name_en' => 'Makes a small purchase at a food store',
                'created_at' => '2023-08-23 19:48:19',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 19,
            ),
            46 => 
            array (
                'id' => 47,
                'abas_sub_domain_id' => 2,
                'name' => 'ﻳﺤﻤﻞ ﻧﻘﻮدﺍً ﻛﺎﻓﻴﺔ ﻹﺟﺮاء ﻋﻤﻠﻴﺎت ﺷﺮاء ﺻﻐﻴﺮة(ﻋﻠﻰ ﺳﺒﻴﻞ  
اﻟﻤﺜﺎل ، ﻣﺸﺮوب ﻏﺎزي )',
            'name_en' => 'Carries enough money to make small purchases (for example, a soft drink)',
                'created_at' => '2023-08-23 19:49:35',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 20,
            ),
            47 => 
            array (
                'id' => 48,
                'abas_sub_domain_id' => 2,
                'name' => 'يذهب لوحده إﻟﻰ اماكن سكن  اﻷﺻﺪﻗﺎء ﻓﻲ اﻟﺤﻲ',
                'name_en' => 'Walks alone to friends’ houses or apartments in the neighborhood',
                'created_at' => '2023-08-23 19:50:15',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 21,
            ),
            48 => 
            array (
                'id' => 49,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳﺸﻴﺮ  إﻟﻰ ﺟﺰء وﺍﺣﺪ ﻋﻠﻰ اﻷﻗﻞ ﻣﻦ اﻟﺠﺴﻢ ﻋﻨﺪ ﺳﺆاﻟﻪ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﺍﻟﺮأس" أو "ﺍﻟﺴﺎﻕ.)',
            'name_en' => 'Points to at least one body part when asked (for example, “head” or “leg”)',
                'created_at' => '2023-08-24 07:42:03',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻘﻠﺐﺻﻔﺤﺎت اﻟﻜﺘﺎب واﺣﺪة ﺗﻠﻮ اﻷﺧﺮى',
                'name_en' => 'Turns book pages one by one',
                'created_at' => '2023-08-24 07:42:59',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 2,
            ),
            50 => 
            array (
                'id' => 51,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺸﻴﺮ  إﻟﻰ اﻟﺼﻮﺭ اﻟﻤﻮﺟﻮدة ﻓﻲ اﻟﻜﺘﺐ ﻋﻨﺪﻣﺎ ﻳﻄُﻠﺐ ﻣﻨﻚ ذﻟﻚ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﺸﻴﺮ  إﻟﻰ ﺣﺼﺎن أو
ﺑﻘﺮة )',
            'name_en' => 'Points to pictures in books when asked (for example, points to a horse  or cow).',
                'created_at' => '2023-08-24 07:44:45',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 3,
            ),
            51 => 
            array (
                'id' => 52,
                'abas_sub_domain_id' => 3,
                'name' => 'يعد ﺛﻼﺛﺔ أﺷﻴﺎء أو أﻛﺜﺮ.',
                'name_en' => 'Counts three or more objects',
                'created_at' => '2023-08-24 07:45:25',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 4,
            ),
            52 => 
            array (
                'id' => 53,
                'abas_sub_domain_id' => 3,
                'name' => 'يعد ﺛﻼﺛﺔ أﺷﻴﺎء أو أﻛﺜﺮ.',
                'name_en' => 'Counts three or more objects',
                'created_at' => '2023-08-24 07:45:25',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 5,
            ),
            53 => 
            array (
                'id' => 54,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺬﻛﺮ ﻋﻤﺮه ﺑﺎﻟﺴﻨﻮات ﻋﻨﺪﻣﺎ يسال',
                'name_en' => 'States his or her age in years when asked',
                'created_at' => '2023-08-24 07:46:54',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 6,
            ),
            54 => 
            array (
                'id' => 55,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻐﻨﻲ أﻏﻨﻴﺔ اﻷﺑﺠﺪﻳﺔ',
                'name_en' => 'Sings the alphabet song',
                'created_at' => '2023-08-24 07:47:22',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 7,
            ),
            55 => 
            array (
                'id' => 56,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺴﻤﻲ ﺳﺘﺔ أﻟﻮان أو أﺃﻛﺜﺮ ، ﺑﻤﺎ ﻓﻲ ذﻟﻚ اﻷﺣﻤر  و اﻷزرق والأﺻﻔﺮ.',
                'name_en' => 'Names six or more colors, including red, blue, and yellow',
                'created_at' => '2023-08-24 07:48:54',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 8,
            ),
            56 => 
            array (
                'id' => 57,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳﺴﻤﻲ أﺭﺑﻌﺔ أﺷﻜﺎل  أو أﻛﺜﺮ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، دائرة ، ﻣﺮﺑﻊ ، ﻣﺴﺘﻄﻴﻞ ، ﻣﺜﻠﺚ)',
            'name_en' => 'Names four or more shapes (for example, circle, square, rectangle, triangle)',
                'created_at' => '2023-08-24 07:50:12',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 9,
            ),
            57 => 
            array (
                'id' => 58,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻘﺮأ أﻏﺎﻧﻲ اﻟﺤﻀﺎﻧﺔ ﻣﻦ اﻟﺬاﻛﺮة.',
                'name_en' => 'Recites nursery rhymes from memory',
                'created_at' => '2023-08-24 07:53:50',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 10,
            ),
            58 => 
            array (
                'id' => 59,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻘﺮأ اﺳﻤﻪ  ﻋﻨﺪ ﻃﺒﺎﻋﺘﻪ',
                'name_en' => 'Reads his or her name when printed',
                'created_at' => '2023-08-24 07:59:04',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 11,
            ),
            59 => 
            array (
                'id' => 60,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺴﻤﻲ ﺣﺮﻓﻴﻦ ﻋﻠﻰ اﻷﻗﻞ ﻋﻨﺪ إﻇﻬﺎﺭ اﺳﻤﻪ',
                'name_en' => 'Names at least two letters when shown his or her name',
                'created_at' => '2023-08-24 07:59:54',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 12,
            ),
            60 => 
            array (
                'id' => 61,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳﺤﺪد ﻋﻤﻠﺔ واﺣﺪة ﻋﻠﻰ اﻷﻗﻞ ﺑﺎﻻﺳﻢ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻋﺸﺮة  قروش أو ربع دينار  )',
            'name_en' => 'Identifies at least one coin by name (for example, penny or dime).',
                'created_at' => '2023-08-24 08:02:30',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 13,
            ),
            61 => 
            array (
                'id' => 62,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ أسئلة  ﺑﺴﻴﻄﺔ ﺣﻮل ﻗﺼﺔ قرات له.',
                'name_en' => 'Answers simple questions about a story read to him or her',
                'created_at' => '2023-08-24 08:06:03',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 14,
            ),
            62 => 
            array (
                'id' => 63,
                'abas_sub_domain_id' => 3,
                'name' => 'يعد ّ 10 أﺷﻴﺎء أو أﻛﺜﺮ بدون اﺳﺘﺨﺪام اﻷﺻﺎﺑﻊ.',
                'name_en' => 'Counts 10 or more objects without using fingers',
                'created_at' => '2023-08-24 08:07:30',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 15,
            ),
            63 => 
            array (
                'id' => 64,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺮﺳﻢ وجه ﻣﻤﻴﺰ ﻳﺘﻀﻤﻦ ﻋﻴﻨﻴﻦ وأنف و فمو ﺷﻌﺮ.',
                'name_en' => 'Draws a recognizable face that includes two eyes, a nose, a mouth, and hair',
                'created_at' => '2023-08-24 08:09:33',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 16,
            ),
            64 => 
            array (
                'id' => 65,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺴﻤﻲ ﻣﻌﻈﻢ اﻟﺤﺮوف ﻋﻨﺪﻣﺎ تعرض عليه',
                'name_en' => 'Names most letters when shown the alphabet',
                'created_at' => '2023-08-24 08:11:01',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 17,
            ),
            65 => 
            array (
                'id' => 66,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﺴﻤﻲ ﻣﻌﻈﻢ اﻟﺤﺮوف ﻋﻨﺪﻣﺎ تعرض عليه',
                'name_en' => 'Names most letters when shown the alphabet',
                'created_at' => '2023-08-24 08:11:01',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 18,
            ),
            66 => 
            array (
                'id' => 67,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻌﺪ ﻣﻦ 1 ﺇﻟﻰ .20',
                'name_en' => 'Counts from 1 to 20',
                'created_at' => '2023-08-24 08:11:31',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 19,
            ),
            67 => 
            array (
                'id' => 68,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻃﺒﺎﻋﺔ ﺣﺮﻓﻴﻦ ﻋﻠﻰ اﻷﻗﻞ ﻓﻲ اﺳﻤﻪ.',
                'name_en' => 'Prints at least two letters in his or her name',
                'created_at' => '2023-08-24 08:14:05',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 20,
            ),
            68 => 
            array (
                'id' => 69,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳﻘﺮأ و ﻳﻠﺘﺰم  ﺑﺎﻟﻌﻼﻣﺎت اﻟﺸﺎئعة (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻻ ﺗﺪﺧﻞ ، ﺧﺮوج، ﺗﻮﻗﻒ)',
            'name_en' => 'Reads and obeys common signs (for example, Do Not Enter, Exit, Stop)',
                'created_at' => '2023-08-24 08:19:00',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 21,
            ),
            69 => 
            array (
                'id' => 70,
                'abas_sub_domain_id' => 3,
                'name' => 'يسمي أﻳﺎم ﺍﻷﺳﺒﻮع ﺑﺎﻟﺘﺮﺗﻴﺐ',
                'name_en' => 'States the days of the week in order',
                'created_at' => '2023-08-24 08:19:39',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 22,
            ),
            70 => 
            array (
                'id' => 71,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻜﺘﺐ أو ﻳﻄﺒﻊ اﺳﻤﻪ الأول و اﻷﺧﻴﺮ',
                'name_en' => 'Writes or prints his or her first and last name',
                'created_at' => '2023-08-24 08:20:38',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 23,
            ),
            71 => 
            array (
                'id' => 72,
                'abas_sub_domain_id' => 3,
                'name' => 'ﻳﻜﺘﺐ اﻷرﻗﺎم ﻣﻦ 1 إﻟﻰ 10 ﺑﺸﻜﻞ ﺻﺤﻴﺢ',
                'name_en' => 'Writes numbers 1 through 10 correctly',
                'created_at' => '2023-08-24 08:21:48',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 24,
            ),
            72 => 
            array (
                'id' => 73,
                'abas_sub_domain_id' => 3,
            'name' => 'ﻳقول أي ﻳﻮم ﻳﺄﺗﻲ ﻗﺒﻞ ﺁﺧﺮ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻳﺄﺗﻲ الأرﺑﻌﺎء ﻗﺒﻞ اﻟﺨﻤﻴﺲ)',
            'name_en' => 'Tells which day comes before another (for example, “Wednesday comes before Thursday”)',
                'created_at' => '2023-08-24 08:22:54',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 25,
            ),
            73 => 
            array (
                'id' => 74,
                'abas_sub_domain_id' => 3,
                'name' => 'يحدد أيام و أوﻗﺎت  اﻷﻧﺸﻄﺔ اﻟﻤﻔﻀﻠﺔ ﺑﻌﺪ اﻟﻤﺪﺭﺳﺔ ، ﻣﺜﻞ اﻟﺘﻤﺎﺭﻳﻦ اﻟﺮﻳﺎﺿﻴﺔ أو دروس
اﻟﻤﻮﺳﻴﻘﻰ أو اﻟﺒﺮاﻣﺞ اﻟﺘﻠﻔﺰﻳﻮﻧﻴﺔ',
                'name_en' => 'States days and times of favorite after-school activities, such as sports  practice, music lessons, or television shows.',
                'created_at' => '2023-08-24 08:24:33',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 26,
            ),
            74 => 
            array (
                'id' => 75,
                'abas_sub_domain_id' => 4,
                'name' => 'يزيل او يفتح اغلفة الاشياء مثل علبة لبن او صندوق طعام او علبة حلوى',
                'name_en' => 'Removes cookies, chips, or other food from a box or bag',
                'created_at' => '2023-08-24 08:48:21',
                'updated_at' => '2023-09-03 15:57:50',
                'question_number' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'abas_sub_domain_id' => 4,
                'name' => 'ﻳﻈُﻬﺮ ﻗﻠﻘﻪ ﻋﻨﺪﻣﺎ ﻳﻨﺴﻜﺐ شيئا ﻣﺎ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻘﻮل "أوه  ﻻ" أو ﻳﺨﺒﺮ ﺷﺨﺼﺎً ﺑﺎﻟﻐﺎً',
                'name_en' => 'Shows concern when he or she spills something (for example, says “Oh no” or tells an adult).',
                    'created_at' => '2023-08-24 08:51:38',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 2,
                ),
                76 => 
                array (
                    'id' => 77,
                    'abas_sub_domain_id' => 4,
                'name' => 'ﻳﺸﻴﺮ إﻟﻰ ﻣﻜﺎن ﺣﻔﻆ اﻃﻌﻤﺔ شائعة اﻻﺳﺘﺨﺪام ﻓﻲ ﻣﻨﺰﻟﻪ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺜﻼﺟﺔ)',
                'name_en' => 'Points to where commonly used foods are kept in his or her home (for  example, the refrigerator).',
                    'created_at' => '2023-08-24 09:05:31',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 3,
                ),
                77 => 
                array (
                    'id' => 78,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺸﻴﺮ إﻟﻰ ﻣﻜﺎن ﺗﺨﺰﻳﻦ ﻣﻼﺑﺴﻪ',
                    'name_en' => 'Points to the place where his or her clothes are stored',
                    'created_at' => '2023-08-24 09:17:33',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 4,
                ),
                78 => 
                array (
                    'id' => 79,
                    'abas_sub_domain_id' => 4,
                    'name' => 'يخرج  ﻗﻤﻴﺼﺎً أو ﻗﻄﻌﺔ ﻣﻼﺑﺲ أﺧﺮى ﻣﻦ اﻟﺪرج ﻋﻨﺪ اﻟﻄﻠﺐ',
                    'name_en' => 'Takes a shirt or other piece of clothing out of a drawer when asked',
                    'created_at' => '2023-08-24 09:19:01',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 5,
                ),
                79 => 
                array (
                    'id' => 80,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺴﺎﻋﺪ اﻵﺧﺮﻳﻦ ﻓﻲ وﺿﻊ وترتيب اﻷﻟﻌﺎب  واﻷﺷﻴﺎء اﻷﺧﺮى',
                    'name_en' => 'Assists other people with putting away toys, games, and other items',
                    'created_at' => '2023-08-24 09:33:07',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 6,
                ),
                80 => 
                array (
                    'id' => 81,
                    'abas_sub_domain_id' => 4,
                    'name' => 'يجمع  اﻟﻘﻤﺎﻣﺔ أو اﻟﻮرق ﻓﻲ اﻟﻤﻨﺰل ويضعها في مكانها المخصص',
                    'name_en' => 'Picks up and throws away trash or paper at home',
                    'created_at' => '2023-08-24 09:33:59',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 7,
                ),
                81 => 
                array (
                    'id' => 82,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻘﻮم ﺑﻤﻬﻤﺔ ﺑﺴﻴﻄﺔ ﻋﻨﺪﻣﺎ ﻳﻄُﻠﺐ ﻣﻨﻚ ذﻟﻚ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻌﻤﻞ ﻟﻠﺤﺼﻮل ﻋﻠﻰ ﻣﻨﺸﻔﺔ ﻻﻧﺴﻜﺎب اﻟﺴﻮائل',
                    'name_en' => 'Does a simple errand when asked (for example, runs to get a towel for a spill)',
                        'created_at' => '2023-08-24 09:34:59',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 8,
                    ),
                    82 => 
                    array (
                        'id' => 83,
                        'abas_sub_domain_id' => 4,
                        'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ رﻛﻞ أو ﺿﺮب  اﻷﺛﺎث',
                        'name_en' => 'Refrains from kicking or hitting furniture.',
                        'created_at' => '2023-08-24 09:35:43',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 9,
                    ),
                    83 => 
                    array (
                        'id' => 84,
                        'abas_sub_domain_id' => 4,
                        'name' => 'تشغيل و إﻳﻘﺎف  اﻟﺘﻠﻔﺰﻳﻮن.',
                        'name_en' => 'Turns television on and off',
                        'created_at' => '2023-08-24 09:36:32',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 10,
                    ),
                    84 => 
                    array (
                        'id' => 85,
                        'abas_sub_domain_id' => 4,
                        'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ رمي  اﻟﻄﻌﺎم  أو  اﻟﻮرق  ﻋﻠﻰ اﻷرض',
                        'name_en' => 'Refrains from throwing food or paper on the floor',
                        'created_at' => '2023-08-24 10:41:20',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 11,
                    ),
                    85 => 
                    array (
                        'id' => 86,
                        'abas_sub_domain_id' => 4,
                        'name' => 'ﻳﻐﺴﻞ ﻳﺪيه دون  رش اﻟﻤﺎء ﻋﻠﻰ الأرض',
                        'name_en' => 'Washes hands without splashing water on the floor',
                        'created_at' => '2023-08-24 10:49:10',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 12,
                    ),
                    86 => 
                    array (
                        'id' => 87,
                        'abas_sub_domain_id' => 4,
                        'name' => 'يحصل ﻋﻠﻰ اﻟﻮﺟﺒﺎت اﻟﺨﻔﻴﻔﺔ اﻟﺨﺎﺻﺔ به ﻣﻦ اﻟﺨﺰاﻧﺔ أو  اﻟﻤﺨﺰن',
                        'name_en' => 'Gets own snacks from cabinet or pantry',
                        'created_at' => '2023-08-24 10:53:06',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 13,
                    ),
                    87 => 
                    array (
                        'id' => 88,
                        'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺴﺎﻋﺪ اﻟﺒﺎﻟﻐﻴﻦ ﻓﻲ إﻋﺪاد  وﺟﺒﺎت ﺧﻔﻴﻔﺔ أو  وﺟﺒﺎت ﺑﺴﻴﻄﺔ )ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺗﻘﺪﻳﻢ ﺷﺮﺍئح اﻟﺨﺒﺰ ﻟﻠﻜﺒﺎﺭ ﻟﺼﻨﻊ اﻟﺴﻨﺪوﻳﺸﺎت)',
                'name_en' => 'Assists adults with preparing simple snacks or meals (for example, hands slices of bread to adult for making sandwiches).',
                    'created_at' => '2023-08-24 10:57:37',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 14,
                ),
                88 => 
                array (
                    'id' => 89,
                    'abas_sub_domain_id' => 4,
                'name' => 'يضع اﻟﻤﻼﺑﺲ اﻟﻤﺘﺴﺨﺔ ﻓﻲ اﻟﻤﻜﺎن اﻟﻤﻨﺎﺳﺐ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، الغسالة   أو ﺳﻠﺔ  ﻣﻼﺑﺲ)',
                'name_en' => 'Places dirty clothes in the proper place (for example, a hamper or clothes  basket)',
                    'created_at' => '2023-08-24 10:58:43',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 15,
                ),
                89 => 
                array (
                    'id' => 90,
                    'abas_sub_domain_id' => 4,
                    'name' => 'مسح الماء او العصير الذي يسكب منه في اﻟﻤﻨﺰل',
                    'name_en' => 'Wipes up spills at home',
                    'created_at' => '2023-08-24 11:01:16',
                    'updated_at' => '2023-09-13 12:39:52',
                    'question_number' => 16,
                ),
                90 => 
                array (
                    'id' => 91,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺄﺧﺬ اﻟﻤﻼﺑﺲ اﻟﺨﺎﺻﺔ ﻣﻦ اﻷدراج  أو اﻟﺨﺰاﻧﺔ ﻋﻨﺪ ﺍﺭﺗﺪﺍء اﻟﻤﻼﺑﺲ',
                    'name_en' => 'Takes own clothes from drawers or closet when getting dressed',
                    'created_at' => '2023-08-24 11:02:10',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 17,
                ),
                91 => 
                array (
                    'id' => 92,
                    'abas_sub_domain_id' => 4,
                    'name' => 'يبقي الأحذية والأقدام المتسخة بعيدة عن الأثاث',
                    'name_en' => 'Keeps dirty shoes and feet off furniture',
                    'created_at' => '2023-08-24 11:02:35',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 18,
                ),
                92 => 
                array (
                    'id' => 93,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻀﻊ ﺯﺟﺎﺟﻪ أو ﻃﺒﻘﻪ اﻟﻤﺘﺴﺦ ﻓﻲ اﻟﺤﻮض أو ﻏﺴﺎﻟﺔ اﻷﻃﺒﺎق.',
                    'name_en' => 'Puts his or her own dirty glass or plate in the sink or dishwasher',
                    'created_at' => '2023-08-24 11:03:27',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 19,
                ),
                93 => 
                array (
                    'id' => 94,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻀﻊ اﻷﺷﻴﺎء ﻓﻲ أﻣﺎﻛﻨﻬﺎ اﻟﺼﺤﻴﺤﺔ ﻋﻨﺪ اﻻﻧﺘﻬﺎء ﻣﻦ اﺳﺘﺨﺪاﻣﻬﺎ',
                    'name_en' => 'Puts things in their proper places when finished using them',
                    'created_at' => '2023-08-24 11:04:07',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 20,
                ),
                94 => 
                array (
                    'id' => 95,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺤﺎﻓﻆ ﻋﻠﻰ اﻷﻟﻌﺎب و اﻟﻤﻤﺘﻠﻜﺎت اﻷﺧﺮى ﻣﺮﺗﺒﺔ وﻧﻈﻴﻔﺔ',
                    'name_en' => 'Keeps toys, games, and other belongings neat and clean',
                    'created_at' => '2023-08-24 11:05:59',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 21,
                ),
                95 => 
                array (
                    'id' => 96,
                    'abas_sub_domain_id' => 4,
                    'name' => 'اﻟﺘﺨﻠﺺﻣﻦ ﺑﻘﺎﻳﺎ ﻃﻌﺎﻣﻪ',
                    'name_en' => 'Disposes of his or her leftover food',
                    'created_at' => '2023-08-24 11:06:33',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 22,
                ),
                96 => 
                array (
                    'id' => 97,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﺼﺐ اﻟﺴﺎئل ﻣﻦ وﻋﺎء أﻛﺒﺮ ﻓﻲ اﻟﻜﻮب أو  زجاجة دون  اﻧﺴﻜﺎب',
                    'name_en' => 'Pours liquid from a larger container into own cup or glass without spilling',
                    'created_at' => '2023-08-24 11:07:24',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 23,
                ),
                97 => 
                array (
                    'id' => 98,
                    'abas_sub_domain_id' => 4,
                    'name' => 'يرتب ﺳﺮﻳﺮه',
                    'name_en' => 'Makes his or her bed',
                    'created_at' => '2023-08-24 11:07:56',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 24,
                ),
                98 => 
                array (
                    'id' => 99,
                    'abas_sub_domain_id' => 4,
                    'name' => 'ﻳﻄﻮي اﻟﻤﻼﺑﺲ اﻟﻨﻈﻴﻔﺔ.',
                    'name_en' => 'Folds clean clothes',
                    'created_at' => '2023-08-24 11:08:32',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 25,
                ),
                99 => 
                array (
                    'id' => 100,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺒﺘﻠﻊ اﻷدوﻳﺔ  اﻟﺴﺎئلة ﺣﺴﺐ اﻟﺤﺎﺟﺔ ، دون إزعاج.',
                    'name_en' => 'Swallows liquid medicines as needed, without fussing',
                    'created_at' => '2023-08-27 08:26:32',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 1,
                ),
                100 => 
                array (
                    'id' => 101,
                    'abas_sub_domain_id' => 5,
                    'name' => 'يبقى جالس على كرسي مرتفع او طاولة او كرسي الاطفال دون سقوط عنه',
                    'name_en' => 'Sits still in high chair, booster seat, or chair, without climbing or sliding off',
                    'created_at' => '2023-08-27 08:27:00',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 2,
                ),
                101 => 
                array (
                    'id' => 102,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺘﺠﻨﺐ اﻻﺻﻄﺪام ﺑﺎﻟﺠﺪران  أو اﻷﺷﻴﺎء ﻋﻨﺪ اﻟﺰﺣﻒ أو  اﻟﻤﺸﻲ.',
                    'name_en' => 'Avoids bumping into walls or objects when crawling or walking.',
                    'created_at' => '2023-08-27 08:27:55',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 3,
                ),
                102 => 
                array (
                    'id' => 103,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺴﻤﺢ بقياس دﺭﺟﺔ حرارته  دون ﻗﻠﻖ',
                    'name_en' => 'Allows temperature to be taken without fussing.',
                    'created_at' => '2023-08-27 08:28:46',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 4,
                ),
                103 => 
                array (
                    'id' => 104,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﻈُﻬﺮ أو  ﻳﺸﻴﺮ   أو  ﻳﺨﺒﺮ  ﺷﺨﺼﺎً ﺁﺧﺮ ﻋﻦ ﺟﺮح أو ﻛﺪﻣﺔ أو إﺻﺎﺑﺔ ﻃﻔﻴﻔﺔ أﺧﺮى   .',
                    'name_en' => 'Shows, points to, or tells another person about a cut, bruise, or other minor  0
injury',
                    'created_at' => '2023-08-27 08:29:50',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 5,
                ),
                104 => 
                array (
                    'id' => 105,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺘﺒﻊ ﺗﻮﺟﻴﻬﺎت ﺷﺨﺺ ﺁﺧﺮ "ﻟﻠﺘﻮﻗﻒ" ﻋﻨﺪ اﻻﻗﺘﺮﺍب ﻣﻦ اﻟﺨﻄﺮ ، ﻣﺜﻞ اﻟﺤﺮﻳﻖ أو اﻟﺰﺟﺎج اﻟﻤﻜﺴﻮﺭ',
                    'name_en' => 'Follows another person’s direction to “stop” when near danger, such as fire or broken glass',
                    'created_at' => '2023-08-27 08:30:52',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 6,
                ),
                105 => 
                array (
                    'id' => 106,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺸﻴﺮ إﻟﻰ ﺟﺰء اﻟﺠﺴﻢ اﻟﺬي ﻳﺘﺄﻟﻢ ﻋﻨﺪﻣﺎ ﻳﻜﻮن  ﻣﺮﻳﻀﺎً أو ﻣﺼﺎﺑﺎً.',
                    'name_en' => 'Points to the body part that hurts when he or she is sick or injured',
                    'created_at' => '2023-08-27 08:32:16',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 7,
                ),
                106 => 
                array (
                    'id' => 107,
                    'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﻈﻞ ﺛﺎﺑﺘﺎً إﻟﻰ ﺣﺪ ﻣﺎ ﻋﻨﺪﻣﺎ ﻳﻌﺎﻟﺞ ﺷﺨﺺ ﺑﺎﻟﻎ ﺟﺮﺣﺎً أو ﺧﺪﺷﺎً.',
                    'name_en' => 'Remains fairly still when an adult treats a cut or scrape',
                    'created_at' => '2023-08-27 08:33:05',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 8,
                ),
                107 => 
                array (
                    'id' => 108,
                    'abas_sub_domain_id' => 5,
                'name' => 'ﻳﻤﺘﻨﻊ ﻋﻦ وﺿﻊ أﺷﻴﺎء ﻏﻴﺮ ﺻﺎﻟﺤﺔ ﻟﻸﻛﻞ ﻓﻲ اﻟﻔﻢ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، أﻗﻼم  اﻟﺘﻠﻮﻳﻦ ، و الاشياء الصلبة ، و اﻟﺮﻣﻞ)',
                    'name_en' => 'Refrains from putting non-edible objects in mouth (for example, crayons, blocks, sand',
                        'created_at' => '2023-08-27 08:35:41',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 9,
                    ),
                    108 => 
                    array (
                        'id' => 109,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﺗﺠﻨﺐ اﻻﻗﺘﺮاب ﻛﺜﻴﺮﺍً ﻣﻦ اﻟﻨﺎﺭ أو  اﻟﺰﺟﺎج  اﻟﻤﻜﺴﻮر أو  أي ﺧﻄﺮ ﻣﺤﺘﻤﻞ ﺁﺧﺮ',
                        'name_en' => 'Avoids getting too near a fire, broken glass, or other potential danger.',
                        'created_at' => '2023-08-27 08:36:57',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 10,
                    ),
                    109 => 
                    array (
                        'id' => 110,
                        'abas_sub_domain_id' => 5,
                    'name' => 'ﺗﺠﻨﺐ ﻟﻤﺲ اﻷﺷﻴﺎء اﻟﺨﻄﺮة أو اللعب  ﺑﻬﺎ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، مبيد اﻟﺤﺸﺮات أو اﻟﺴﻜﺎﻛﻴﻦ اﻟﺤﺎدة)',
                    'name_en' => 'Avoids touching or playing with dangerous items (for example, insect spray   or sharp knives)',
                        'created_at' => '2023-08-27 08:43:00',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 11,
                    ),
                    110 => 
                    array (
                        'id' => 111,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﺗﺠﻨﺐ اﻟﺰﺣﻒ أو اﻟﺘﺴﻠﻖ ﻓﻲ اﻷﻣﺎﻛﻦ اﻟﻤﺮﺗﻔﻌﺔ أو اﻟﺨﻄﺮة.',
                        'name_en' => 'Avoids crawling or climbing on high or dangerous places',
                        'created_at' => '2023-08-27 08:44:15',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 12,
                    ),
                    111 => 
                    array (
                        'id' => 112,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺨﺒﺮ ﺷﺨﺼﺎً ﺑﺎﻟﻐﺎً إذا ﻛﺎن ﻳﻌﺎﻧﻲ ﻣﻦ ﺁﻻم  ﻓﻲ اﻟﻤﻌﺪة أو ﻣﺮض ﺁﺧﺮ.',
                        'name_en' => 'Tells an adult if he or she has a stomachache or other illness',
                        'created_at' => '2023-08-27 08:45:21',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 13,
                    ),
                    112 => 
                    array (
                        'id' => 113,
                        'abas_sub_domain_id' => 5,
                        'name' => 'يتذوق اﻷﻃﻌﻤﺔ اﻟﺴﺎﺧﻨﺔ ﻗﺒﻞ ﺗﻨﺎوﻟﻬﺎ',
                        'name_en' => 'Tests hot foods before eating them',
                        'created_at' => '2023-08-27 08:46:01',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 14,
                    ),
                    113 => 
                    array (
                        'id' => 114,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺮﺗﺪي ﻣﻌﻄﻔﺎً أو ﺳﺘﺮة ﻋﻨﺪ اﻟﺒﺮد',
                        'name_en' => 'Puts on a coat or sweater when cold.',
                        'created_at' => '2023-08-27 08:46:47',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 15,
                    ),
                    114 => 
                    array (
                        'id' => 115,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺤﻤﻞ اﻷﺷﻴﺎءاﺍﻟﻘﺎﺑﻠﺔ ﻟﻠﻜﺴﺮ ﺑﺄﻣﺎن وﺣﺬﺭ.',
                        'name_en' => 'Carries breakable objects safely and carefully',
                        'created_at' => '2023-08-27 08:47:29',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 16,
                    ),
                    115 => 
                    array (
                        'id' => 116,
                        'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﺴﺄل ﺷﺨﺼﺎً ﺑﺎﻟﻐﺎً ﻗﺒﻞ اﻻﻗﺘﺮاب ﻣﻦ ﺷﻲء ﻗﺪ ﻳﻜﻮن ﺧﻄﻴﺮﺍً (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺤﻴﻮاﻧﺎت أو اﻟﺸﻮارع اﻟﻤﺰدﺣﻤﺔ أو ﻣﻌﺪات اﻟﻤﻼﻋﺐ اﻟﻌﺎﻟﻴﺔ)',
                    'name_en' => 'Asks an adult before going near something that might be dangerous (for  example, animals, busy streets, or high playground equipment)',
                        'created_at' => '2023-08-27 08:50:12',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 17,
                    ),
                    116 => 
                    array (
                        'id' => 117,
                        'abas_sub_domain_id' => 5,
                        'name' => 'يلتزم بمعاير الامان في السياره بربط الحزام لوحده',
                        'name_en' => 'Buckles own car seat or seat belt',
                        'created_at' => '2023-08-27 08:50:38',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 18,
                    ),
                    117 => 
                    array (
                        'id' => 118,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺤﻤﻞ اﻟﻤﻘﺺ ﺑﺄﻣﺎن',
                        'name_en' => 'Carries scissors safely',
                        'created_at' => '2023-08-27 08:52:05',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 19,
                    ),
                    118 => 
                    array (
                        'id' => 119,
                        'abas_sub_domain_id' => 5,
                        'name' => 'يحمل الاوعية اﻟﺴﺎﺧﻨﺔ ﺑﺄﻣﺎن و ﺑﻌﻨﺎﻳﺔ',
                        'name_en' => 'Carries hot containers safely and carefully',
                        'created_at' => '2023-08-27 08:53:05',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 20,
                    ),
                    119 => 
                    array (
                        'id' => 120,
                        'abas_sub_domain_id' => 5,
                        'name' => 'ﻳﺴﺘﺨﺪم  اﻟﻤﻨﺎﻓﺬ أو اﻟﻤﻘﺎﺑﺲ اﻟﻜﻬﺮﺑﺎئية ﺑﺄﻣﺎن',
                        'name_en' => 'Uses electrical outlets or sockets safely',
                        'created_at' => '2023-08-27 08:54:37',
                        'updated_at' => '2023-09-03 15:57:50',
                        'question_number' => 21,
                    ),
                    120 => 
                    array (
                        'id' => 121,
                        'abas_sub_domain_id' => 5,
                    'name' => 'ﻳﻌﺘﻨﻲ ﺑﺎﻹﺻﺎﺑﺎت  اﻟﻄﻔﻴﻔﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺟﺮوح اﻟﻮرق وﺧﺪوش اﻟﺮﻛﺒﺔ وﻧﺰﻳﻒ اﻷﻧﻒ)',
                        'name_en' => 'Cares for own minor injuries (for example, paper cuts, knee scrapes, nosebleeds',
                            'created_at' => '2023-08-27 08:57:38',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 22,
                        ),
                        121 => 
                        array (
                            'id' => 122,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺒﺘﺴﻢ أو ﻳﻈﻬﺮ اﻻﻫﺘﻤﺎم ﻋﻨﺪﻣﺎ ﻳﺮى ﻟﻌﺒﺔ ﻣﻔﻀﻠﺔ',
                            'name_en' => 'Smiles or shows interest when he or she sees a favorite toy.',
                            'created_at' => '2023-08-27 08:58:33',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 1,
                        ),
                        122 => 
                        array (
                            'id' => 123,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ﺑﻤﺠﻤﻮﻋﺔ ﻣﺘﻨﻮﻋﺔ ﻣﻦ اﻷﻟﻌﺎب ﺑﺪﻻ ًﻣﻦ واﺣﺪة  أو  اﺛﻨﺘﻴﻦ ﻓﻘﻂ',
                            'name_en' => 'Plays with a variety of toys instead of only one or two',
                            'created_at' => '2023-08-27 08:59:21',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 2,
                        ),
                        123 => 
                        array (
                            'id' => 124,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ﺑﻠﻌﺒﺔ أو  ﻟﻌﺒﺔ  واﺣﺪة ﻟﻤﺪة  دﻗﻴﻘﺔ واحدة  ﻋﻠﻰ اﻷﻗﻞ',
                            'name_en' => 'Plays with a single toy or game for at least 1 minute',
                            'created_at' => '2023-08-27 09:00:12',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 3,
                        ),
                        124 => 
                        array (
                            'id' => 125,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ﺑﻤﻔﺮده ﻣﻊ اﻟﺪﻣﻰ واﻷﻟﻌﺎب أو ﻳﻤﺎﺭس أﻧﺸﻄﺔ ﻣﺮﺣﺔ أﺧﺮى',
                            'name_en' => 'Plays alone with toys and games, or does other fun activities',
                            'created_at' => '2023-08-27 09:01:08',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 4,
                        ),
                        125 => 
                        array (
                            'id' => 126,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ أﻟﻌﺎﺑﺎً ﺑﺴﻴﻄﺔ ﻣﺜﻞ "بخ-عينوو" أو دﺣﺮﺟﺔ اﻟﻜﺮة ﻟﻶﺧﺮﻳﻦ',
                            'name_en' => 'Plays simple games like “peek-a-boo” or rolls a ball to others',
                            'created_at' => '2023-08-27 09:08:24',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 5,
                        ),
                        126 => 
                        array (
                            'id' => 127,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻨﻈﺮ ﻣﻊ ﺷﺨﺺ ﺑﺎﻟﻎ ﺇﻟﻰ اﻟﺼﻮﺭ ﻓﻲ اﻟﻜﺘﺐأو  اﻟﻤﺠﻼت',
                            'name_en' => 'Looks with an adult at pictures in books or magazines',
                            'created_at' => '2023-08-27 09:09:19',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 6,
                        ),
                        127 => 
                        array (
                            'id' => 128,
                            'abas_sub_domain_id' => 6,
                            'name' => 'يراقب ﻟﺒﻀﻊ  دﻗﺎئق  ﺑﻴﻨﻤﺎ ﻳﻠﻌﺐ اﻟﻨﺎس ﺑﺎﻷﻟﻌﺎب',
                            'name_en' => 'Watches for a few minutes as people play with toys or games',
                            'created_at' => '2023-08-27 09:10:53',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 7,
                        ),
                        128 => 
                        array (
                            'id' => 129,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻈﻬﺮ اﻫﺘﻤﺎﻣﺎً ﺑﻠﻌﺒﺔ أو ﺷﻲء ﺁﺧﺮ  ﺑﺎﻹﺷﺎرة  إﻟﻴﻬﺎ',
                            'name_en' => 'Shows interest in a toy or other object by pointing to it',
                            'created_at' => '2023-08-27 09:13:05',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 8,
                        ),
                        129 => 
                        array (
                            'id' => 130,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺨﺘﺎر ﻟﻌﺒﺔ ﺃﺛﻨﺎء وﻗﺖ اﻟﻠﻌﺐ',
                            'name_en' => 'Chooses a game or toy during playtime',
                            'created_at' => '2023-08-27 09:13:39',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 9,
                        ),
                        130 => 
                        array (
                            'id' => 131,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ  ﺑﺎﻷﻟﻌﺎب أو ﻏﻴﺮﻫﺎ ﻣﻦ اﻟﻌﻨﺎﺻﺮ اﻟﻤﻤﺘﻌﺔ ﻣﻊ  اﻵﺧﺮﻳﻦ',
                            'name_en' => 'Plays with toys, games, or other fun items with others',
                            'created_at' => '2023-08-27 09:14:33',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 10,
                        ),
                        131 => 
                        array (
                            'id' => 132,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ﺑﻠﻌﺒﺔ واﺣﺪة ﻷﻛﺜﺮ ﻣﻦ 5 دﻗﺎئق',
                            'name_en' => 'Plays with a single toy or game for more than 5 minutes',
                            'created_at' => '2023-08-27 09:16:03',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 11,
                        ),
                        132 => 
                        array (
                            'id' => 133,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ ضمن المساحة المخصصة للعلب ضمن المحيط المخصص',
                            'name_en' => 'Plays on playground equipment',
                            'created_at' => '2023-08-27 09:17:44',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 12,
                        ),
                        133 => 
                        array (
                            'id' => 134,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻄﻠﺐ اﻟﻘﺮاءة ﻣﻦ ﻛﺘﺎب ﻣﻔﻀﻞ',
                            'name_en' => 'Asks to be read to from a favorite book',
                            'created_at' => '2023-08-27 09:19:11',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 13,
                        ),
                        134 => 
                        array (
                            'id' => 135,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺤﻀﺮ أﻧﺸﻄﺔ ﻣﻤﺘﻌﺔ ﻓﻲ ﻣﻨﺰل ﺷﺨﺺ ﺁﺧﺮ',
                            'name_en' => 'Attends fun activities at another’s home',
                            'created_at' => '2023-08-27 09:21:15',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 14,
                        ),
                        135 => 
                        array (
                            'id' => 136,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺸﺎرك ﻓﻲ اﻟﻠﻌﺐ اﻟﺘﺨﻴﻠﻲ أو اﻟﺘﺨﻴﻠﻲ ﻣﻊ اﻵﺧﺮﻳﻦ',
                            'name_en' => 'Engages in imaginary or make-believe play with others',
                            'created_at' => '2023-08-27 09:22:23',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 15,
                        ),
                        136 => 
                        array (
                            'id' => 137,
                            'abas_sub_domain_id' => 6,
                        'name' => 'ﻳﺸﺎرك ﺑﺎﻧﺘﻈﺎم ﻓﻲ ﻧﺸﺎط ﻣﻤﺘﻊ ﻣﺤﺪد(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻻﺳﺘﻤﺎع  إﻟﻰ ﻧﻮع  ﻣﻌﻴﻦ ﻣﻦ اﻟﻤﻮﺳﻴﻘﻰ أو ﻟﻌﺐ إﺣﺪى أﻟﻌﺎب  اﻟﻜﻤﺒﻴﻮﺗﺮ اﻟﻤﻔﻀﻠﺔ)',
                        'name_en' => 'Participates regularly in a specific fun activity (for example, listening to a  certain type of music or playing a favorite computer game)',
                            'created_at' => '2023-08-27 09:24:57',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 16,
                        ),
                        137 => 
                        array (
                            'id' => 138,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﻠﻌﺐ أﻟﻌﺎﺑﺎً ﺑﺴﻴﻄﺔ ﻣﻊ ﺯﻣﻼئه ﻓﻲ اﻟﻠﻌﺐ دون  إﺷﺮاف ﻣﻦ اﻟﻜﺒﺎر',
                            'name_en' => 'Plays simple games with playmates without adult supervision',
                            'created_at' => '2023-08-27 09:25:57',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 17,
                        ),
                        138 => 
                        array (
                            'id' => 139,
                            'abas_sub_domain_id' => 6,
                            'name' => 'ﻳﺪﻋﻮ اﻵﺧﺮﻳﻦ ﻟﻼﻧﻀﻤﺎم  إﻟﻴﻪ ﻓﻲ ﻣﻤﺎرﺳﺔ اﻷﻟﻌﺎب  و اﻷﻧﺸﻄﺔ اﻟﺘﺮﻓﻴﻬﻴﺔ  اﻷﺧﺮى.',
                            'name_en' => 'Invites others to join him or her in playing games and other fun activities',
                            'created_at' => '2023-08-27 09:27:19',
                            'updated_at' => '2023-09-03 15:57:50',
                            'question_number' => 18,
                        ),
                        139 => 
                        array (
                            'id' => 140,
                            'abas_sub_domain_id' => 6,
                        'name' => 'ﻳﺤﻔﻆ اﻷﺷﻴﺎء اﻟﻤﻬﻤﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺼﺨﻮر  و اﻟﺮﻳﺶ و اﻟﺼﻮﺭ)',
                            'name_en' => 'Saves things of interest (for example, rocks, feathers, pictures',
                                'created_at' => '2023-08-27 09:28:48',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 19,
                            ),
                            140 => 
                            array (
                                'id' => 141,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﻨﺘﻈﺮ دوره ﻓﻲ اﻷﻟﻌﺎب و اﻷﻧﺸﻄﺔ اﻟﺘﺮﻓﻴﻬﻴﺔ  اﻷﺧﺮى',
                                'name_en' => 'Waits for his or her turn in games and other fun activities',
                                'created_at' => '2023-08-27 09:30:22',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 20,
                            ),
                            141 => 
                            array (
                                'id' => 142,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﺘﺒﻊ اﻟﻘﻮاﻋﺪ ﻓﻲ اﻷﻟﻌﺎب  و اﻷﻧﺸﻄﺔ اﻟﺘﺮﻓﻴﻬﻴﺔ اﻷﺧﺮى.',
                                'name_en' => 'Follows the rules in games and other fun activities',
                                'created_at' => '2023-08-27 09:32:09',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 21,
                            ),
                            142 => 
                            array (
                                'id' => 143,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﺪﻋﻮ اﻵﺧﺮﻳﻦ إﻟﻰ اﻟﻤﻨﺰل ﻟﻨﺸﺎط  ﻣﻤﺘﻊ',
                                'name_en' => 'Invites others home for a fun activity',
                                'created_at' => '2023-08-27 09:33:07',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 22,
                            ),
                            143 => 
                            array (
                                'id' => 144,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﻠﻌﺐ أﻟﻌﺎب ﻟﻮﺣﻴﺔ ﺑﺴﻴﻄﺔ',
                                'name_en' => 'Plays simple board games',
                                'created_at' => '2023-08-27 09:33:48',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 23,
                            ),
                            144 => 
                            array (
                                'id' => 145,
                                'abas_sub_domain_id' => 6,
                                'name' => 'ﻳﺸﺎرك ﻓﻲ ﺑﺮﻧﺎﻣﺞ ﻣﻨﻈﻢ ﻟﺮﻳﺎﺿﺔ أو  ﻫﻮاﻳﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻤﺎرس  ﻛﺮة اﻟﺴﻠﺔ أو  ﻳﺄﺧﺬ
ﻓﺼﻞ ﻣﻮﺳﻴﻘﻰ)',
                            'name_en' => 'Participates in an organized program for a sport or hobby (for example,  practices basketball or takes a music class).',
                                'created_at' => '2023-08-27 09:37:00',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 24,
                            ),
                            145 => 
                            array (
                                'id' => 146,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺒﺘﻠﻊ اﻟﺴﻮائل دون  ﺻﻌﻮﺑﺔ',
                                'name_en' => 'Swallows liquids without difficulty',
                                'created_at' => '2023-08-27 10:05:10',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 1,
                            ),
                            146 => 
                            array (
                                'id' => 147,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻨﺎم  ﻣﻌﻈﻢ اﻟﻠﻴﻞ ، وﻻ ﻳﺴﺘﻴﻘﻆ أﻛﺜﺮ ﻣﻦ ﻣﺮة أو ﻣﺮﺗﻴﻦ.',
                                'name_en' => 'Sleeps through most of the night, waking no more than one or two times',
                                'created_at' => '2023-08-27 10:28:56',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 2,
                            ),
                            147 => 
                            array (
                                'id' => 148,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺒﺘﻠﻊ اﻟﻄﻌﺎم اﻟﻄﺮي  أو اﻟﻤﺼﻔﻰ أو اﻟﻤﻬﺮوس  ﻣﺜﻞأﻏﺬﻳﺔ اﻷﻃﻔﺎل أو ﻋﺼﻴﺮ اﻟﺘﻔﺎح',
                                'name_en' => 'Swallows soft, strained, or mashed food such as baby food or applesauce',
                                'created_at' => '2023-08-27 10:29:28',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 3,
                            ),
                            148 => 
                            array (
                                'id' => 149,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻔﺘﺢ اﻟﻔﻢ ﻋﻨﺪ ﺗﻘﺪﻳﻢ اﻟﻄﻌﺎم ﺑﺎﻟﻤﻠﻌﻘﺔ',
                                'name_en' => 'Opens mouth when offered food on a spoon.',
                                'created_at' => '2023-08-27 10:32:13',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 4,
                            ),
                            149 => 
                            array (
                                'id' => 150,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ياكل بمفرده الشيبس أو اﻟﺒﺴﻜﻮﻳﺖ أو اﻟﺤﺒﻮب اﻟﺠﺎﻓﺔ أو اﻷﻃﻌﻤﺔ اﻷﺧﺮى اﻟﺘﻲ ﺗﺆﻛﻞ ﺑﺎﻷﺻﺎﺑﻊ',
                                'name_en' => 'Feeds himself or herself crackers, cookies, dry cereal, or other finger foods',
                                'created_at' => '2023-08-27 10:33:24',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 5,
                            ),
                            150 => 
                            array (
                                'id' => 151,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺄﻛﻞ اﻷﻃﻌﻤﺔ القاسية اﻟﺘﻲ ﺗﺘﻄﻠﺐ اﻟﻌﺾ و اﻟﻤﻀﻎ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺨﻀﺎﺭ اﻟﻤﻄﺒﻮﺧﺔ
ﻋﻠﻰ اﻟﺒﺨﺎﺭ)',
                            'name_en' => 'Eats firm foods that require biting and chewing (for example, steamed vegetables)',
                                'created_at' => '2023-08-27 10:34:35',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 6,
                            ),
                            151 => 
                            array (
                                'id' => 152,
                                'abas_sub_domain_id' => 7,
                                'name' => 'يشرب من كوب أو كأس، حتى لو كان يجب على شخص آخر أن يحمله',
                                'name_en' => 'Drinks from a cup or glass, even if another person must hold it',
                                'created_at' => '2023-08-27 10:35:07',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 7,
                            ),
                            152 => 
                            array (
                                'id' => 153,
                                'abas_sub_domain_id' => 7,
                                'name' => 'يرفع ذراعيه حسب الحاجة عندما يقوم شخص آخر بإلباسه أو خلع ملابسه',
                                'name_en' => 'Lifts arms as needed when another person is dressing or undressing him or her',
                                'created_at' => '2023-08-27 10:35:47',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 8,
                            ),
                            153 => 
                            array (
                                'id' => 154,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺸﻴﺮ  إﻟﻰ اﻟﻄﻌﺎم  أو ﻳﻄﻠﺒﻪ ﻋﻨﺪ اﻟﺠﻮع',
                                'name_en' => 'Points to or asks for food when hungry',
                                'created_at' => '2023-08-27 10:36:33',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 9,
                            ),
                            154 => 
                            array (
                                'id' => 155,
                                'abas_sub_domain_id' => 7,
                                'name' => 'يخلع حذائه',
                                'name_en' => 'Takes shoes off',
                                'created_at' => '2023-08-27 10:37:38',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 10,
                            ),
                            155 => 
                            array (
                                'id' => 156,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ياكل ﺑﻨﻔﺴﻪ باستخدام  اﻟﻤﻠﻌﻘﺔ أو  اﻟﺸﻮﻛﺔ و ﻟﻴﺲ ﺑﺎﻟﻴﺪ.',
                                'name_en' => 'Feeds himself or herself with a spoon or fork, not hands',
                                'created_at' => '2023-08-27 11:09:23',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 11,
                            ),
                            156 => 
                            array (
                                'id' => 157,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻐﺴﻞ ﻳﺪيه ﺑﺎﻟﻤﺎء و اﻟﺼﺎﺑﻮن',
                                'name_en' => 'Washes hands with both soap and water',
                                'created_at' => '2023-08-27 11:09:52',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 12,
                            ),
                            157 => 
                            array (
                                'id' => 158,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻤﺴﺢ و ﺟﻬﻪ ﻋﻨﺪﻣﺎ ﻳﻌﻄﻴﻪ ﺷﺨﺺ ﺑﺎﻟﻎ ﻣﻨﺸﻔﺔ',
                                'name_en' => 'Wipes his or her own face when given a washcloth by an adult',
                                'created_at' => '2023-08-27 11:10:15',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 13,
                            ),
                            158 => 
                            array (
                                'id' => 159,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺒﻘﻰ ﺟﺎﻓﺎً دون ﺗﺮﻃﻴﺐ ﻃﻮال اﻟﻴﻮم.',
                                'name_en' => 'Remains dry without wetting throughout the day',
                                'created_at' => '2023-08-27 11:10:46',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 14,
                            ),
                            159 => 
                            array (
                                'id' => 160,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺠﻠﺲ ﻋﻠﻰ اﻟﻤﺮﺣﺎض أو ﻣﻘﻌﺪ اﻟﻨﻮﻧﻴﺔ  دون  أن ﻳﻤُﺴﻚِ',
                                'name_en' => 'Sits on the toilet or potty seat without being held.',
                                'created_at' => '2023-08-27 11:11:37',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 15,
                            ),
                            160 => 
                            array (
                                'id' => 161,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺨﺒﺮ اﻟﻮاﻟﺪ أو أي ﺷﺨﺺ ﺑﺎﻟﻎ ﺁﺧﺮ  ﻋﻨﺪﻣﺎ ﻳﺤﺘﺎج ﺇﻟﻰ اﺳﺘﺨﺪام اﻟﺤﻤﺎم.',
                                'name_en' => 'Tells parent or other adult when he or she needs to use the bathroom',
                                'created_at' => '2023-08-27 11:16:10',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 16,
                            ),
                            161 => 
                            array (
                                'id' => 162,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺒﻘﻰ ﺟﺎﻓﺎً دون ﺗﺮﻃﻴﺐ ﻃﻮال اﻟﻠﻴﻞ.',
                                'name_en' => 'Remains dry without wetting throughout the night',
                                'created_at' => '2023-08-27 11:16:42',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 17,
                            ),
                            162 => 
                            array (
                                'id' => 163,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻨﻈﻒ اﻷﺳﻨﺎن ﺑﻘﻠﻴﻞ ﻣﻦ الازعاج ﻋﻨﺪﻣﺎ ﻳﻄﻠﺐ منه ﺷﺨﺺ ﺑﺎﻟﻎ اﻟﻘﻴﺎم ﺑﺬﻟﻚ',
                                'name_en' => 'Brushes teeth with little fussing when told to do so by an adult',
                                'created_at' => '2023-08-27 11:17:21',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 18,
                            ),
                            163 => 
                            array (
                                'id' => 164,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺴﺘﺨﺪم  اﻟﺤﻤﺎم  دون  ﻣﺴﺎﻋﺪة',
                                'name_en' => 'Uses bathroom without help',
                                'created_at' => '2023-08-27 11:17:56',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 19,
                            ),
                            164 => 
                            array (
                                'id' => 165,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻠﺒﺲ ملابسه لوحده.',
                                'name_en' => 'Dresses himself or herself',
                                'created_at' => '2023-08-27 11:18:16',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 20,
                            ),
                            165 => 
                            array (
                                'id' => 166,
                                'abas_sub_domain_id' => 7,
                                'name' => 'يزرر ازرار  ﺎﻟﻤﻼﺑﺲ.',
                                'name_en' => 'Buttons own clothing',
                                'created_at' => '2023-08-27 11:18:48',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 21,
                            ),
                            166 => 
                            array (
                                'id' => 167,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﺴﺘﺤﻢ أو ﺑﺪون ﻣﺴﺎﻋﺪة',
                                'name_en' => 'Takes a bath or shower without help',
                                'created_at' => '2023-08-27 11:19:20',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 22,
                            ),
                            167 => 
                            array (
                                'id' => 168,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﻳﻐﺴﻞ ﺷﻌﺮه',
                                'name_en' => 'Washes his or her own hair',
                                'created_at' => '2023-08-27 11:19:40',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 23,
                            ),
                            168 => 
                            array (
                                'id' => 169,
                                'abas_sub_domain_id' => 7,
                                'name' => 'ﺗﻘﻄﻊ اﻟﻠﺤﻮم أو  اﻷﻃﻌﻤﺔ  اﻷﺧﺮى  إﻟﻰ ﻗﻄﻊ ﺻﻐﻴﺮة ﺑﺴﻜﻴﻦ',
                                'name_en' => 'Cuts meats or other foods into bite-size pieces with a knife',
                                'created_at' => '2023-08-27 11:21:36',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 24,
                            ),
                            169 => 
                            array (
                                'id' => 170,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻈﻬﺮ اﻫﺘﻤﺎﻣﺎً ﺑﻠﻌﺒﺔ أو  ﺷﻲء ﺁﺧﺮ ﺑﺎﻟﻨﻈﺮ ﺇﻟﻴﻬﺎ ﻟﺒﻀﻊ ﺛﻮان',
                                'name_en' => 'Shows interest in a toy or other object by looking at it for a few seconds',
                                'created_at' => '2023-08-27 11:22:24',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 1,
                            ),
                            170 => 
                            array (
                                'id' => 171,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺠﻠﺲ ﺑﻬﺪوء ﻟﻤﺪة دﻗﻴﻘﺔ واﺣﺪة ﻋﻠﻰ اﻷﻗﻞ دون ﻃﻠﺐ اﻻﻧﺘﺒﺎه',
                                'name_en' => 'Sits quietly for at least 1 minute without demanding attention.',
                                'created_at' => '2023-08-27 11:23:15',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 2,
                            ),
                            171 => 
                            array (
                                'id' => 172,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺠﺪ ﺷﻴئا  ﻳﻔﻌﻠﻪ ﻟﻤﺪة 5 دﻗﺎئق ﻋﻠﻰ اﻷﻗﻞ دون أن ﻳﻄﻠﺐ اﻻﻧﺘﺒﺎه',
                                'name_en' => 'Finds something to do for at least 5 minutes without demanding attention',
                                'created_at' => '2023-08-27 11:24:06',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 3,
                            ),
                            172 => 
                            array (
                                'id' => 173,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻠﻌﺐ ﺑﻠﻌﺒﺔ دون  وﺿﻌﻬﺎ ﻓﻲ ﻓﻤﻪ',
                                'name_en' => 'Plays with a toy without putting it into his or her mouth.',
                                'created_at' => '2023-08-27 11:24:36',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 4,
                            ),
                            173 => 
                            array (
                                'id' => 174,
                                'abas_sub_domain_id' => 8,
                            'name' => 'ﻳﺴﺘﻜﺸﻒ ﻏﺮﻓﺔ ﻏﻴﺮ ﻣﺄﻟﻮﻓﺔ أو ﻣﻮﻗﻔﺎً ﺟﺪﻳﺪﺍً ﺁﺧﺮ ، ﺣﺘﻰ إذا ﻛﺎن ﻳﺠﺐ ﻋﻠﻰ أﺣﺪ ﺍﻟﻮاﻟﺪﻳﻦ تشجيعه (ﻋﻠﻰﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻏﺮﻓﺔ اﻧﺘﻈﺎر ﺍﻟﻄﺒﻴﺐ)',
                            'name_en' => 'Explores an unfamiliar room or other new situation, even if a parent must  encourage it (for example, a doctor’s waiting room)',
                                'created_at' => '2023-08-27 11:26:18',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 5,
                            ),
                            174 => 
                            array (
                                'id' => 175,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺨﺘﺎر اﻟﻄﻌﺎم أو  اﻟﻮﺟﺒﺔ اﻟﺨﻔﻴﻔﺔ اﻟﺘﻲ ﻳﺮﻏﺐ ﻓﻲ ﺗﻨﺎوﻟﻬﺎ',
                                'name_en' => 'Chooses the food or snack he or she wishes to eat when given a choice',
                                'created_at' => '2023-08-27 11:27:34',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 6,
                            ),
                            175 => 
                            array (
                                'id' => 176,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺘﺤﺮك ﻋﻠﻰ ﺑﻌﺪ أﻣﺘﺎﺭ ﻗﻠﻴﻠﺔ ﻣﻦ أﺣﺪ اﻟﻮاﻟﺪﻳﻦ ﻓﻲ ﻣﻮﻗﻒ ﺟﺪﻳﺪ ﻃﺎﻟﻤﺎ أن اﻟﻮاﻟﺪ ﻓﻲ نفس المكان
(ﻋﻠﻰﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻋﻨﺪ زﻳﺎرة ﻣﺴﻜﻦ ﻏﻴﺮ ﻣﺄﻟﻮف)',
                            'name_en' => 'Moves a few feet away from a parent in a new situation as long as the  parent is in sight (for example, when visiting an unfamiliar residence)',
                                'created_at' => '2023-08-27 11:29:25',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 7,
                            ),
                            176 => 
                            array (
                                'id' => 177,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺤﺎول اﻟﻘﻴﺎم ﺑﻤﻌﻈﻢ  اﻷﺷﻴﺎء ﺑﻤﻔﺮده  دون ﻣﺴﺎﻋﺪة ﺷﺨﺺ ﺑﺎﻟﻎ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ارﺗﺪاء اﻟﻤﻼﺑﺲ
أو إﻃﻌﺎم ﻧﻔﺴﻪ)',
                            'name_en' => 'Tries to do most things alone without an adult’s help (for example, dressing or feeding self)',
                                'created_at' => '2023-08-27 11:30:56',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 8,
                            ),
                            177 => 
                            array (
                                'id' => 178,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺘﺒﻊ ﻃﻠﺐ ﺷﺨﺺ ﺑﺎﻟﻎ "ﺑﺎﻟﻬﺪوء" ﺃﻭ "اﻟﺘﺼﺮف."',
                                'name_en' => 'Follows an adult’s request to “quiet down” or “behave.”',
                                'created_at' => '2023-08-27 11:31:32',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 9,
                            ),
                            178 => 
                            array (
                                'id' => 179,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻘﺎوم دﻓﻊ أو  ﺿﺮب ﻃﻔﻞ ﺁﺧﺮ ﻋﻨﺪما يشعر بالغضب أو  اﻻﻧﺰﻋﺎج.',
                                'name_en' => 'Resists pushing or hitting another child when angry or upset.',
                                'created_at' => '2023-08-27 11:32:19',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 10,
                            ),
                            179 => 
                            array (
                                'id' => 180,
                                'abas_sub_domain_id' => 8,
                            'name' => 'ﻳﺘﺒﻊ ﻗﻮاﻋﺪ ﻣﻨﺰﻟﻴﺔ ﺑﺴﻴﻄﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻣﻤﻨﻮع اﻟﺠﺮي ﻓﻲ اﻟﻤﻨﺰل)',
                            'name_en' => 'Follows simple household rules (for example, “No running in the house”).',
                                'created_at' => '2023-08-27 11:39:43',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 11,
                            ),
                            180 => 
                            array (
                                'id' => 181,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻘﻒﺛﺎﺑﺘﺎً ﻋﻨﺪ اﻟﺤﺎﺟﺔ ، دون  ﺗﻤﻠﻤﻞ أو  ﺗﺤﺮﻳﻚ.',
                                'name_en' => 'Stands still when needed, without fidgeting or moving around.',
                                'created_at' => '2023-08-27 11:40:36',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 12,
                            ),
                            181 => 
                            array (
                                'id' => 182,
                                'abas_sub_domain_id' => 8,
                            'name' => '.13ﻳﺒﺪأ  ﻧﺸﺎﻃﺎً ﻓﻲ اﻟﺤﺎل ﻋﻨﺪﻣﺎ ﻳﻄُﻠﺐ ﻣﻨﻪ اﻟﻘﻴﺎم ﺑﺬﻟﻚ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "اذﻫﺐ واﺳﺘﺤﻢ")',
                            'name_en' => 'Starts an activity at once when told to do so (for example, “Go take a  bath”)',
                                'created_at' => '2023-08-27 11:42:04',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 13,
                            ),
                            182 => 
                            array (
                                'id' => 183,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺘﺤﻜﻢ ﻓﻲ ردود فعله ﻋﻨﺪﻣﺎ ﻳﺄﺧﺬ ﺃﺣﺪ اﻟﻮاﻟﺪﻳﻦ أو  أي ﺷﺨﺺ ﺑﺎﻟﻎ ﻟﻌﺒﺔ أو ﺷﻲء ﺑﻌﻴﺪﺍً.',
                                'name_en' => 'Controls temper when a parent or other adult takes a toy or object away',
                                'created_at' => '2023-08-27 11:42:52',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 14,
                            ),
                            183 => 
                            array (
                                'id' => 184,
                                'abas_sub_domain_id' => 8,
                            'name' => 'ﻳﻄﻠﺐ اﻹذن ﻣﻦ ﺷﺨﺺ ﺑﺎﻟﻎ ﻋﻨﺪ اﻟﺤﺎﺟﺔ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻫﻞ ﻳﻤﻜﻨﻨﻲ اﻟﺨﺮوج للعب)',
                            'name_en' => 'Asks permission from an adult when needed (for example, “May I go outside to play?”).',
                                'created_at' => '2023-08-27 11:44:23',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 15,
                            ),
                            184 => 
                            array (
                                'id' => 185,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺴﺘﻤﺮ ﻓﻲاﻟﻌﻤﻞ ﻋﻠﻰ اﻟﻤﻬﺎم  اﻟﺼﻌﺒﺔ  دون  اﻟﺸﻌﻮﺭ ﺑﺎﻹﺣﺒﺎط أو  اﻻﺳﺘﻘﺎﻟﺔ أو اﻟﺤﺎﺟﺔ إلى التذكير',
                                'name_en' => 'Keeps working on hard tasks without becoming discouraged, quitting, or needing reminders',
                                'created_at' => '2023-08-27 11:45:51',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 16,
                            ),
                            185 => 
                            array (
                                'id' => 186,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻌﻤﻞ ﺑﺸﻜﻞ ﻣﺴﺘﻘﻞ ولا  ﻳﻄﻠﺐ اﻟﻤﺴﺎﻋﺪة  إلا ﻋﻨﺪ اﻟﻀﺮورة',
                                'name_en' => 'Works independently and asks for help only when necessary.',
                                'created_at' => '2023-08-27 11:46:49',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 17,
                            ),
                            186 => 
                            array (
                                'id' => 187,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻮﻗﻒ ﻧﺸﺎﻃﺎً ﻣﻤﺘﻌﺎً ، دون ﺷﻜﻮى ، ﻋﻨﺪ إﺧﺒﺎره ﺑﺄن اﻟﻮﻗﺖ ﻗﺪ اﻧﺘﻬﻰ.',
                                'name_en' => 'Stops a fun activity, without complaining, when told that time is up.',
                                'created_at' => '2023-08-27 11:51:32',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 18,
                            ),
                            187 => 
                            array (
                                'id' => 188,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺘﺤﻜﻢ ﻓﻲ ردود فعله ﻋﻨﺪ اﻻﺧﺘﻼف ﻣﻊ اﻷﺻﺪﻗﺎء',
                                'name_en' => 'Controls temper when disagreeing with friends',
                                'created_at' => '2023-08-27 11:52:08',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 19,
                            ),
                            188 => 
                            array (
                                'id' => 189,
                                'abas_sub_domain_id' => 8,
                            'name' => 'ﻳﺘﺒﻊ روﺗﻴﻨﺎً دون ﺗﺬﻛﻴﺮ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺗﻨﻈﻴﻒ اﻷﺳﻨﺎن ﻗﺒﻞ اﻟﻨﻮم أو  إﻃﻌﺎم ﺣﻴﻮان أﻟﻴﻒ)',
                            'name_en' => 'Follows a routine without being reminded (for example, brushing teeth  before bedtime or feeding a pet)',
                                'created_at' => '2023-08-27 11:54:18',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 20,
                            ),
                            189 => 
                            array (
                                'id' => 190,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻄﻠﺐ الإذن ﻗﺒﻞ اﻟﻠﻌﺐ ﺑﻠﻌﺒﺔ ﻃﻔﻞ ﺁﺧﺮ          .',
                                'name_en' => 'Asks permission before playing with another child’s toy or game.',
                                'created_at' => '2023-08-27 11:55:08',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 21,
                            ),
                            190 => 
                            array (
                                'id' => 191,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﺨﺘﺎر ﻣﻼﺑﺴﻪ اﻟﺨﺎﺻﺔ ﻛﻞ ﻳﻮم ﺗﻘﺮﻳﺒﺎً',
                                'name_en' => 'Chooses own clothes almost every day.',
                                'created_at' => '2023-08-27 11:57:12',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 22,
                            ),
                            191 => 
                            array (
                                'id' => 192,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻌﻤﻞ ﻋﻠﻰ ﻧﺸﺎط ﻣﻨﺰﻟﻲ أو ﻣﺪﺭﺳﻲ وﺍﺣﺪ ﻟﻤﺪة 15  دﻗﻴﻘﺔ ﻋﻠﻰ اﻷﻗﻞ دون ﺗﺬﻛﻴﺮ.',
                                'name_en' => 'Works on one home or school activity for at least 15 minutes without   reminders.',
                                'created_at' => '2023-08-27 11:58:05',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 23,
                            ),
                            192 => 
                            array (
                                'id' => 193,
                                'abas_sub_domain_id' => 8,
                                'name' => 'ﻳﻨﺎﻗﺶ ﻃﺮق ﺣﻞ اﻟﻨﺰاﻋﺎت ﻣﻊ اﻵﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻳﻤﻜﻨﻚ اﻟﺤﺼﻮل ﻋﻠﻰ ﻫﺬا اﻵن  إذا
ﻛﺎن ﺑﺈﻣﻜﺎﻧﻲ اﻟﺤﺼﻮل ﻋﻠﻴﻪ ﻻﺣﻘﺎً)',
                            'name_en' => 'Discusses ways to solve conflicts with others (for example, “You can have  this now if I can have it later”).',
                                'created_at' => '2023-08-27 12:00:00',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 24,
                            ),
                            193 => 
                            array (
                                'id' => 194,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺒﺘﺴﻢ ﻋﻨﺪﻣﺎ ﻳﺮى أﺣﺪ اﻟﻮاﻟﺪﻳﻦ.',
                                'name_en' => 'Smiles when he or she sees a parent.',
                                'created_at' => '2023-08-27 12:51:07',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 1,
                            ),
                            194 => 
                            array (
                                'id' => 195,
                                'abas_sub_domain_id' => 9,
                            'name' => 'يرخي جسده ﻋﻨﺪ اﻹﻣﺴﺎك ﺑﻪ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، الحضن)',
                            'name_en' => 'Relaxes body when held (for example, snuggles).',
                                'created_at' => '2023-08-27 12:52:00',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 2,
                            ),
                            195 => 
                            array (
                                'id' => 196,
                                'abas_sub_domain_id' => 9,
                                'name' => 'يبتسم  أو اﻟﻀﺤﻚ ﻋﻨﺪﻣﺎ ﻳﻜﻮن ﺳﻌﻴﺪﺍً أو  ﻣﺒﺘﻬﺠﺎً.',
                                'name_en' => 'Squeals or laughs when happy or delighted.',
                                'created_at' => '2023-08-27 12:52:28',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 3,
                            ),
                            196 => 
                            array (
                                'id' => 197,
                                'abas_sub_domain_id' => 9,
                            'name' => 'يشعر بالفرح ﻣﻦ أﺣﺪ اﻟﻮاﻟﺪﻳﻦ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻜﻮن ﺳﻌﻴﺪﺍً ﻋﻨﺪ ﻋﻮدة اﻟﻮاﻟﺪﻳﻦ)',
                            'name_en' => 'Displays closeness to a parent (for example, is happy when parent returns).',
                                'created_at' => '2023-08-27 12:53:25',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 4,
                            ),
                            197 => 
                            array (
                                'id' => 198,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﻈﻬﺮ روح  اﻟﺪﻋﺎﺑﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻀﺤﻚ ﻋﻨﺪﻣﺎ ﻳﺘﺼﺮف ﺷﺨﺺ ﻣﺎ ﺑﻄﺮﻳﻘﺔ مرحه)',
                            'name_en' => 'Shows a sense of humor (for example, laughs when someone acts silly)',
                                'created_at' => '2023-08-27 12:58:07',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 5,
                            ),
                            198 => 
                            array (
                                'id' => 199,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺮﻓﻊ اﻟﺬﺭاﻋﻴﻦ ﻟﻠﺘﻌﺒﻴﺮ ﻋﻦ اﻟﺮﻏﺒﺔ ﻓﻲ أن  ﻳﺘﻢ ﺭﻓﻌﻪ.',
                                'name_en' => 'Lifts arms to express a desire to be picked up.',
                                'created_at' => '2023-08-27 12:58:46',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 6,
                            ),
                            199 => 
                            array (
                                'id' => 200,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺴﺘﺠﻴﺐ ﺑﺸﻜﻞ ﻣﺨﺘﻠﻒ ﻟﻸﺷﺨﺎص اﻟﻤﺄﻟﻮﻓﻴﻦ وﻏﻴﺮ اﻟﻤﺄﻟﻮﻓﻴﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻜﻮن أﻗﻞ
تودد ﻟﺸﺨﺺ ﻏﻴﺮ ﻣﺄﻟﻮف)',
                            'name_en' => 'Responds differently to familiar and unfamiliar persons (for example, is less  warm to an unfamiliar person).',
                                'created_at' => '2023-08-27 13:00:17',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 7,
                            ),
                            200 => 
                            array (
                                'id' => 201,
                                'abas_sub_domain_id' => 9,
                                'name' => 'اﻟﻌﻨﺎق و اﻟﻘﺒﻼت ﻟﻠﻮاﻟﺪﻳﻦ أو ﻏﻴﺮﻫﻢ.',
                                'name_en' => 'Hugs and kisses parents or others.',
                                'created_at' => '2023-08-27 13:01:05',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 8,
                            ),
                            201 => 
                            array (
                                'id' => 202,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﻘﻠﺪ ﺗﺼﺮﻓﺎت اﻟﺒﺎﻟﻐﻴﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﺘﻈﺎﻫﺮ ﺑﺘﻨﻈﻴﻒ اﻟﻤﻨﺰل أو ﻗﻴﺎدة اﻟﺴﻴﺎﺭة)',
                            'name_en' => 'Imitates actions of adults (for example, pretends to clean house or drive a car).',
                                'created_at' => '2023-08-27 13:02:23',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 9,
                            ),
                            202 => 
                            array (
                                'id' => 203,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻈُﻬﺮ  اﻻﺣﺘﺮام للكبار ذوي السلطة  ﻣﻦ ﺧﻼل اﺗﺒﺎع  ﻗﻮاﻋﺪﻫﻢ وﺗﻮﺟﻴﻬﺎﺗﻬﻢ(ﻋﻠﻰ ﺳﺒﻴﻞ
اﻟﻤﺜﺎل ،اﻵﺑﺎء و اﻤﻌﻠﻤﻴﻦ و ﺿﺒﺎط اﻟﺸﺮﻃﺔ)',
                            'name_en' => 'Shows respect for persons in authority by following their rules and  directions (for example, parents, teachers, police officers).',
                                'created_at' => '2023-08-27 13:07:23',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 10,
                            ),
                            203 => 
                            array (
                                'id' => 204,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺸﺎﺭك العابه الخاصة و هو سعيد ﻣﻊ ﺍﻵﺧﺮﻳﻦ.',
                                'name_en' => 'Shares toys willingly with others.',
                                'created_at' => '2023-08-27 13:09:15',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 11,
                            ),
                            204 => 
                            array (
                                'id' => 205,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﺮﺣﺐﺑﺎﻷﻃﻔﺎل اﻵﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞاﻟﻤﺜﺎل ، ﻳﻘﻮل "ﻣﺮﺣﺒﺎً.)',
                            'name_en' => 'Greets other children (for example, says “Hi”).',
                                'created_at' => '2023-08-27 13:10:30',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 12,
                            ),
                            205 => 
                            array (
                                'id' => 206,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻘﻮل "ﺷﻜﺮﺍً" ﻋﻨﺪ إﻋﻄﺎئه ﻫﺪﻳﺔ.',
                                'name_en' => 'Says “Thank you” when given a gift.',
                                'created_at' => '2023-08-27 13:11:46',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 13,
                            ),
                            206 => 
                            array (
                                'id' => 207,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻈﻬﺮ اﻟﺘﻌﺎﻃﻒ ﻣﻊ اﻵﺧﺮﻳﻦ ﻋﻨﺪﻣﺎ ﻳﻜﻮﻧﻮن ﺣﺰﻳﻨﻴﻦ أو ﻣﺴﺘائين.',
                                'name_en' => 'Shows sympathy for others when they are sad or upset.',
                                'created_at' => '2023-08-27 13:12:21',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 14,
                            ),
                            207 => 
                            array (
                                'id' => 208,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﺴﻌﻰ إﻟﻰ اﻟﺼﺪاﻗﺔ ﻣﻊ اﻵﺧﺮﻳﻦ ﻓﻲ فئته اﻟﻌﻤﺮﻳﺔ.',
                                'name_en' => '. Seeks friendship with others in his or her age group.',
                                'created_at' => '2023-08-27 13:12:50',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 15,
                            ),
                            208 => 
                            array (
                                'id' => 209,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﺴﺘﺠﻴﺐ ﺑﺸﻜﻞ ﻣﻨﺎﺳﺐ ﻋﻨﺪ ﺗﻘﺪﻳﻤﻪ ﻟﻶﺧﺮﻳﻦ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻳﻘﻮل "ﻣﺮﺣﺒﺎً)"',
                            'name_en' => 'Responds appropriately when introduced to others (for example, says  “Hello”).',
                                'created_at' => '2023-08-27 13:13:46',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 16,
                            ),
                            209 => 
                            array (
                                'id' => 210,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻘﻮل "ﻣﻦ ﻓﻀﻠﻚ" ﻋﻨﺪﻣﺎ ﻳﻄﻠﺐ شيئا.',
                                'name_en' => 'Says “Please” when asking for something.',
                                'created_at' => '2023-08-27 13:14:10',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 17,
                            ),
                            210 => 
                            array (
                                'id' => 211,
                                'abas_sub_domain_id' => 9,
                                'name' => 'يعبر عن مشاعره ويقول اشعر ﺑﺎﻟﺴﻌﺎدة أو اﻟﺤﺰن أو اﻟﺨﻮف أو اﻟﻐﻀﺐ.',
                                'name_en' => 'Says when he or she feels happy, sad, scared, or angry.',
                                'created_at' => '2023-08-27 13:16:11',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 18,
                            ),
                            211 => 
                            array (
                                'id' => 212,
                                'abas_sub_domain_id' => 9,
                                'name' => 'يتبع ﺁداب اﻟﻤﺎئدة بشكل جيد (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺑﺎﺳﺘﺨﺪام ﻣﻨﺪﻳﻞ و اﻟﺒﻘﺎء ﻋﻠﻰ
اﻟﻄﺎوﻟﺔ ﺣﺘﻰ انهاء الطعام)',
                            'name_en' => 'Displays good table manners (for example, by using a napkin and   remaining at the table until excused).',
                                'created_at' => '2023-08-27 13:18:49',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 19,
                            ),
                            212 => 
                            array (
                                'id' => 213,
                                'abas_sub_domain_id' => 9,
                            'name' => 'ﻳﻘﺪم اﻟﻤﺴﺎﻋﺪة  ﻟﻶﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻟﺤﻤﻞ اﻟﻄﺮود أو ﺗﺨﺰﻳﻦ اﻟﻄﻌﺎم )',
                            'name_en' => 'Offers assistance to others (for example, to carry packages or put away  food).',
                                'created_at' => '2023-08-27 13:19:41',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 20,
                            ),
                            213 => 
                            array (
                                'id' => 214,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻌﺘﺬر  إذا  ﻛﺎن ﻳﺆذي ﻣﺸﺎﻋﺮ اﻵﺧﺮﻳﻦ.',
                                'name_en' => 'Apologizes if he or she hurts the feelings of others',
                                'created_at' => '2023-08-27 13:20:10',
                                'updated_at' => '2023-09-03 15:57:50',
                                'question_number' => 21,
                            ),
                            214 => 
                            array (
                                'id' => 215,
                                'abas_sub_domain_id' => 9,
                                'name' => 'ﻳﻀﻊ ﻣﻄﺎﻟﺐ ﻣﻌﻘﻮﻟﺔ ﻋﻠﻰ ﺍﻷﺻﺪﻗﺎء (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻻ ﺗﻨﺰﻋﺞ ﻋﻨﺪﻣﺎ ﻳﻠﻌﺐ ﺻﺪﻳﻖ ﻣﻊ
ﺻﺪﻳﻖ ﺁﺧﺮ)',
                                'name_en' => '. Places reasonable demands on friends (for example, does not become upset when a friend plays with another friend',
                                    'created_at' => '2023-08-27 13:21:13',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 22,
                                ),
                                215 => 
                                array (
                                    'id' => 216,
                                    'abas_sub_domain_id' => 9,
                                    'name' => 'اﻻﻣﺘﻨﺎع عن  ﻗﻮل  أو  ﻓﻌﻞ أﺷﻴﺎء ﻗﺪ ﺗﺤﺮج اﻵﺧﺮﻳﻦ أو  ﺗﺆذﻳﻬﻢ.',
                                    'name_en' => 'Refrains from saying or doing things that might embarrass or hurt others.',
                                    'created_at' => '2023-08-27 13:21:54',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 23,
                                ),
                                216 => 
                                array (
                                    'id' => 217,
                                    'abas_sub_domain_id' => 9,
                                    'name' => 'ﻳﺼﻨﻊ ﺃﻭ ﻳﺸﺘﺮي اﻟﻬﺪاﻳﺎ ﻷﻓﺮاد  اﻷﺳﺮة ﺷﺨﺼﻴﺎً ﻓﻲ أﻋﻴﺎد اﻟﻤﻴﻼد أو اﻷﻋﻴﺎد اﻟﻜﺒﺮى.',
                                    'name_en' => 'Personally makes or buys gifts for family members on birthdays or major holidays',
                                    'created_at' => '2023-08-27 13:22:50',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 24,
                                ),
                                217 => 
                                array (
                                    'id' => 218,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺮﻓﻊ ﺭأﺳﻪ ﻟﻠﻨﻈﺮ ﺣﻮﻟﻪ.',
                                    'name_en' => 'Lifts head to look around',
                                    'created_at' => '2023-08-27 21:07:39',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 1,
                                ),
                                218 => 
                                array (
                                    'id' => 219,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺘﺒﻊ ﺟﺴﻢ ﻣﺘﺤﺮك بتحريك اﻟﺮأس',
                                    'name_en' => 'Follows a moving object by turning head',
                                    'created_at' => '2023-08-27 21:08:20',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 2,
                                ),
                                219 => 
                                array (
                                    'id' => 220,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺘﺪﺣﺮج ﻣﻦ اﻟﻤﻌﺪة إﻟﻰ اﻟﺠﺎﻧﺐ؟؟؟؟؟',
                                    'name_en' => 'Rolls from stomach to side.',
                                    'created_at' => '2023-08-27 21:08:58',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 3,
                                ),
                                220 => 
                                array (
                                    'id' => 221,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻬﺰالخرخيشه أو اﻷﻟﻌﺎب اﻷﺧﺮى',
                                    'name_en' => 'Shakes rattle or other toys',
                                    'created_at' => '2023-08-27 21:09:33',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 4,
                                ),
                                221 => 
                                array (
                                    'id' => 222,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺼﻞ إﻟﻰ أﺷﻴﺎء ﻣﺜﻞ علبة أو لعبة',
                                    'name_en' => 'Reaches for objects such as a bottle or toy',
                                    'created_at' => '2023-08-27 21:10:20',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 5,
                                ),
                                222 => 
                                array (
                                    'id' => 223,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻨﻘﻞ اﻷﺷﻴﺎء ﻣﻦ ﻳﺪ إﻟﻰ أﺧﺮى',
                                    'name_en' => 'Transfers objects from one hand to the other',
                                    'created_at' => '2023-08-27 21:10:52',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 6,
                                ),
                                223 => 
                                array (
                                    'id' => 224,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺠﻠﺲ ﻣﻨﺘﺼﺒﺎً ﻋﻠﻰ اﻷرض بدون دﻋﻢ.',
                                    'name_en' => 'Sits upright on the floor without support.',
                                    'created_at' => '2023-08-27 21:11:24',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 7,
                                ),
                                224 => 
                                array (
                                    'id' => 225,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻨﺘﻘﻞ إﻟﻰ وﺿﻊ اﻟﺠﻠﻮس ، ﺣﺘﻰ إذا ﻛﺎن اﻟﺘﻮازن ﻏﻴﺮ ﻣﺴﺘﻘﺮ',
                                    'name_en' => 'Moves to a sitting position, even if balance is unsteady',
                                    'created_at' => '2023-08-27 21:12:12',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 8,
                                ),
                                225 => 
                                array (
                                    'id' => 226,
                                    'abas_sub_domain_id' => 10,
                                'name' => 'ﻳﺴﺤﺐ ﻧﻔﺴﻪ  إﻟﻰ وﺿﻊ اﻟﻮﻗﻮف(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻓﻲ ﺳﺮﻳﺮ اﻷﻃﻔﺎل)',
                                'name_en' => 'Pulls himself or herself to a standing position (for example, in a crib)',
                                    'created_at' => '2023-08-27 21:14:21',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 9,
                                ),
                                226 => 
                                array (
                                    'id' => 227,
                                    'abas_sub_domain_id' => 10,
                                'name' => 'يلتقط اﻷﺷﻴﺎء  اﻟﺼﻐﻴﺮة اﻟﻤﺴﻄﺤﺔ ﻣﻦ ﻃﺎوﻟﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﻌﻤﻼت اﻟﻤﻌﺪﻧﻴﺔ أو  اﻷﺯﺭﺍﺭ)',
                                'name_en' => 'Picks up small flat objects from a table (for example, coins or buttons)',
                                    'created_at' => '2023-08-27 21:15:41',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 10,
                                ),
                                227 => 
                                array (
                                    'id' => 228,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺰﺣﻒ ﻟﺤﻮاﻟﻲ 10 أﻗﺪام دون أن ﻳﺴﻘﻂ',
                                    'name_en' => 'Crawls for about 10 feet without falling over',
                                    'created_at' => '2023-08-27 21:16:24',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 11,
                                ),
                                228 => 
                                array (
                                    'id' => 229,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻋﻨﺪ اﻟﻮﻗﻮف ، اﻧﺤﻨﻰلاﻟﺘﻘﺎط اﻷﺷﻴﺎء ﻣﻦ اﻷﺭض.',
                                    'name_en' => 'When standing, bends over to pick up items from the floor',
                                    'created_at' => '2023-08-27 21:17:16',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 12,
                                ),
                                229 => 
                                array (
                                    'id' => 230,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻘﻒ ﻣﻦ وﺿﻌﻴﺔ اﻟﺠﻠﻮس',
                                    'name_en' => 'Stands up from a sitting position',
                                    'created_at' => '2023-08-27 21:17:51',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 13,
                                ),
                                230 => 
                                array (
                                    'id' => 231,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يدحرج  اﻟﻜﺮة ﻟﻶﺧﺮﻳﻦ',
                                    'name_en' => 'Rolls ball to others',
                                    'created_at' => '2023-08-27 21:18:25',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 14,
                                ),
                                231 => 
                                array (
                                    'id' => 232,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻤﺸﻲ ﺑﺪون ﻣﺴﺎﻋﺪة',
                                    'name_en' => 'Walks without help',
                                    'created_at' => '2023-08-27 21:18:55',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 15,
                                ),
                                232 => 
                                array (
                                    'id' => 233,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يرمي ﻛﺮة  ﺻﻐﻴﺮة ﻣﻦ ﻓﻮق ﻳﺪه',
                                    'name_en' => 'Throws a small ball overhand',
                                    'created_at' => '2023-08-27 21:19:53',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 16,
                                ),
                                233 => 
                                array (
                                    'id' => 234,
                                    'abas_sub_domain_id' => 10,
                                'name' => 'ﻳﻤﺸﻲ ﻣﺎ ﻻ ﻳﻘﻞ ﻋﻦ ﺧﻤﺲ إﻟﻰ ﺳﺖ درﺟﺎﺕ دون  اﻟﻮﻗﻮع (ﻗﺪ ﻳﺴﺘﺨﺪم  اﻟﺪراﺑﺰﻳﻦ)',
                                'name_en' => 'Walks up at least five to six steps without falling (may use handrail)',
                                    'created_at' => '2023-08-27 21:24:24',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 17,
                                ),
                                234 => 
                                array (
                                    'id' => 235,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺮﻛﻞ اﻟﻜﺮة دون أن  يقع',
                                    'name_en' => 'Kicks a ball without falling',
                                    'created_at' => '2023-08-27 21:24:59',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 18,
                                ),
                                235 => 
                                array (
                                    'id' => 236,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يركض ﺑﺪون اﻟﻮﻗﻮع',
                                    'name_en' => 'Runs without falling',
                                    'created_at' => '2023-08-27 21:25:50',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 19,
                                ),
                                236 => 
                                array (
                                    'id' => 237,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يضرب اﻟﻜﺮة ﻟﻌﺪة  ﺛﻮان',
                                    'name_en' => 'Bounces a ball for several seconds',
                                    'created_at' => '2023-08-27 21:30:31',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 20,
                                ),
                                237 => 
                                array (
                                    'id' => 238,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﻤﺴﻚ ﻛﺮة ﻣﻘﺬوﻓﺔ ﻣﻦ ﻣﺴﺎﻓﺔ 5 إﻟﻰ 10 أﻗﺪام',
                                    'name_en' => 'Catches a ball tossed from 5 to 10 feet away',
                                    'created_at' => '2023-08-27 22:01:26',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 21,
                                ),
                                238 => 
                                array (
                                    'id' => 239,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺮﺳﻢﺧﻄﻮﻃﺎً ﻣﺴﺘﻘﻴﻤﺔ على قطعة ﻣﻦ الورق',
                                    'name_en' => 'Draws straight lines across a piece of paper',
                                    'created_at' => '2023-08-27 22:02:21',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 22,
                                ),
                                239 => 
                                array (
                                    'id' => 240,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يلون ضمن حدود الرسمة أو ﻓﻲ ﻛﺘﺎب اﻟﺘﻠﻮﻳﻦ.',
                                    'name_en' => 'Colors within the lines of a drawing or in a coloring book',
                                    'created_at' => '2023-08-27 22:03:42',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 23,
                                ),
                                240 => 
                                array (
                                    'id' => 241,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'يقوم بوضع غطاء المرتبان واغلاقه باحكام؟؟',
                                    'name_en' => 'Puts twist-off tops back on jars and closes them tightly.',
                                    'created_at' => '2023-08-27 22:10:09',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 24,
                                ),
                                241 => 
                                array (
                                    'id' => 242,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺴﺘﺨﺪم اﻟﻤﻘﺺ لقص ﻋﻠﻰ  ﺧﻂ ﻣﺴﺘﻘﻴﻢ',
                                    'name_en' => 'Uses scissors to cut along a straight line',
                                    'created_at' => '2023-08-27 22:12:14',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 25,
                                ),
                                242 => 
                                array (
                                    'id' => 243,
                                    'abas_sub_domain_id' => 10,
                                    'name' => 'ﻳﺴﺘﺨﺪم اﻟﻤﻘﺺ ﻟﻘﺺ اﻷﺷﻜﺎل ﺑﺨﻄﻮط ﻣﻨﺤﻨﻴﺔ',
                                    'name_en' => 'Uses scissors to cut shapes with curved lines',
                                    'created_at' => '2023-08-27 22:12:48',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 26,
                                ),
                                243 => 
                                array (
                                    'id' => 244,
                                    'abas_sub_domain_id' => 11,
                                'name' => 'ﻳﻘﻮل أﺳﻤﺎء  أﺷﺨﺎص ﺁﺧﺮﻳﻦ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻣﺎﻣﺎ" أو "ﺑﺎﺑﺎ" أو  أﺳﻤﺎء اﻷﺻﺪﻗﺎء)',
                                'name_en' => 'Says the names of other people (for example, “Mama,” “Daddy,” or names of friends).',
                                    'created_at' => '2023-08-28 08:27:12',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 1,
                                ),
                                244 => 
                                array (
                                    'id' => 245,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻬﺰ رأﺳﻪ أو ﻳﻘﻮل "ﻧﻌﻢ" أو "ﻻ" رﺩﺍً ﻋﻠﻰ ﺳﺆال ﺑﺴﻴﻂ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، "ﻫﻞ ﺗﺮﻳﺪ شيئا
ﺗﺸﺮﺑﻪ؟)',
                                'name_en' => 'Shakes head or says “Yes” or “No” in response to a simple question (for  example, “Do you want something to drink?”).',
                                    'created_at' => '2023-08-28 08:29:54',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 2,
                                ),
                                245 => 
                                array (
                                    'id' => 246,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻘﻮل "ﻣﺮﺣﺒﺎً" و "إﻟﻰ اﻟﻠﻘﺎء" ﻟﻶﺧﺮﻳﻦ.',
                                    'name_en' => 'Says “Hello” and “Good-bye” to others.',
                                    'created_at' => '2023-08-28 08:30:37',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 3,
                                ),
                                246 => 
                                array (
                                    'id' => 247,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺴﻤﻲ20 أو أﻛﺜﺮ ﻣﻦ اﻷﺷﻴﺎء اﻟﻤﺄﻟﻮﻓﺔ',
                                    'name_en' => 'Names 20 or more familiar objects',
                                    'created_at' => '2023-08-28 08:33:17',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 4,
                                ),
                                247 => 
                                array (
                                    'id' => 248,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺨﺒﺮ  اﻟﻮاﻟﺪﻳﻦ أو اﻷﺻﺪﻗﺎء أو اﻵﺧﺮﻳﻦ ﻋﻦ أﻧﺸﻄﺘﻪ اﻟﻤﻔﻀﻠﺔ',
                                    'name_en' => 'Tells parents, friends, or others about his or her favorite activities.',
                                    'created_at' => '2023-08-28 08:34:24',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 5,
                                ),
                                248 => 
                                array (
                                    'id' => 249,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺴﺘﺨﺪم اﻟﺠﻤﻞ ﻣﻊ اﻻﺳﻢ و اﻟﻔﻌﻞ',
                                    'name_en' => 'Uses sentences with a noun and verb',
                                    'created_at' => '2023-08-28 08:35:05',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 6,
                                ),
                                249 => 
                                array (
                                    'id' => 250,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ اﻟﻬﺎﺗﻒ ﺑﻘﻮل "ﻣﺮﺣﺒﺎً."',
                                    'name_en' => 'Answers the telephone by saying “Hello.”',
                                    'created_at' => '2023-08-28 08:35:41',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 7,
                                ),
                                250 => 
                                array (
                                    'id' => 251,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺘﺤﺪث ﺑﺸﻜﻞ واﺿﺢ وﻣﻤﻴﺰ',
                                    'name_en' => 'Speaks clearly and distinctly.',
                                    'created_at' => '2023-08-28 08:36:36',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 8,
                                ),
                                251 => 
                                array (
                                    'id' => 252,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻨﻈﺮ  إﻟﻰ وﺟﻮه  اﻵﺧﺮﻳﻦ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪﺛﻮن ﺇﻟﻴﻪ أو ﻣﻌﻬﺎ.',
                                    'name_en' => 'Looks at other people’s faces when they are talking to him or her.',
                                    'created_at' => '2023-08-28 08:37:38',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 9,
                                ),
                                252 => 
                                array (
                                    'id' => 253,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺴﺘﻤﻊ ﻋﻦ ﻛﺜﺐ ﻟﻤﺪة 5 دﻗﺎئق ﻋﻠﻰ اﻷﻗﻞ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪث اﻟﻨﺎس.',
                                    'name_en' => 'Listens closely for at least 5 minutes when people talk.',
                                    'created_at' => '2023-08-28 08:38:35',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 10,
                                ),
                                253 => 
                                array (
                                    'id' => 254,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'يستخدم اﻹﻳﻤﺎءات أو اﻻﺑﺘﺴﺎﻣﺎت ﻟﺘﺸﺠﻴﻊ اﻵﺧﺮﻳﻦ ﻋﻨﺪﻣﺎ ﻳﺘﺤﺪﺛﻮن',
                                    'name_en' => 'Nods or smiles to encourage others when they are talking.',
                                    'created_at' => '2023-08-28 08:47:30',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 11,
                                ),
                                254 => 
                                array (
                                    'id' => 255,
                                    'abas_sub_domain_id' => 11,
                                'name' => 'يستخدم جمع التكسير الاسماء بشكل صحيح (قدم - أقدام و باب -أبواب جامع - جوامع)',
                                'name_en' => 'Says irregular plural nouns correctly (for example, says “feet” instead of “foots” and “men” instead of “mans”).',
                                    'created_at' => '2023-08-28 08:48:58',
                                    'updated_at' => '2023-09-12 11:39:12',
                                    'question_number' => 12,
                                ),
                                255 => 
                                array (
                                    'id' => 256,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺘﺒﻊ اﻟﺘﻌﻠﻴﻤﺎت اﻟﺸﻔﻬﻴﺔ ﻟﻠﻮاﻟﺪﻳﻦ أو  ﻣﻘﺪم  اﻟﺮﻋﺎﻳﺔ ﻋﻨﺪ إﻛﻤﺎل اﻟﻤﻬﺎم  أو اﻟﻤﺸﺎرﻛﺔ ﻓﻲ اﻷﻧﺸﻄﺔ (ﻋﻠﻰ
ﺳﺒﻴﻞاﻟﻤﺜﺎل ، ﻋﻤﻞ ﻣﻨﺰﻟﻲ أو ﻟﻌﺒﺔ ﺟﺪﻳﺪة.)',
                                'name_en' => 'Follows parent’s or caregiver’s verbal instructions when completing tasks  or participating in activities (for example, a household chore or new game).',
                                    'created_at' => '2023-08-28 08:56:16',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 13,
                                ),
                                256 => 
                                array (
                                    'id' => 257,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻌﻄﻲ ﺗﻌﻠﻴﻤﺎت ﺷﻔﻬﻴﺔ ﻟﻶﺧﺮﻳﻦ ﺗﺘﻀﻤﻦ ﺧﻄﻮﺗﻴﻦ أو أﻛﺜﺮ ﻣﻦ اﻷﻧﺸﻄﺔ',
                                    'name_en' => 'Gives verbal instructions to others that involve two or more steps or  activities.',
                                    'created_at' => '2023-08-28 08:57:28',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 14,
                                ),
                                257 => 
                                array (
                                    'id' => 258,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺬﻛﺮ رﻗﻢ ﻫﺎﺗﻔﻪ',
                                    'name_en' => 'States his or her telephone number.',
                                    'created_at' => '2023-08-28 08:58:09',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 15,
                                ),
                                258 => 
                                array (
                                    'id' => 259,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺸﺎرك ﻓﻲ اﻟﻤﺤﺎدثات دون  اﻟﺘﺤﺪث ﻛﺜﻴﺮﺍ  أو  اﻟﻘﻠﻴﻞ ﺟﺪﺍ',
                                    'name_en' => 'Participates in conversations without talking too much or too little.',
                                    'created_at' => '2023-08-28 09:00:22',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 16,
                                ),
                                259 => 
                                array (
                                    'id' => 260,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺒﺪأ ﻣﺤﺎدثات ﺣﻮل ﻣﻮاﺿﻴﻊ ﺗﻬﻢ  اﻵﺧﺮﻳﻦ',
                                    'name_en' => 'Starts conversations on topics of interest to others.',
                                    'created_at' => '2023-08-28 09:01:46',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 17,
                                ),
                                260 => 
                                array (
                                    'id' => 261,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﻨﺎﻗﺶ ﻣﻮﺿﻮﻋﺎً ﻟﻤﺪة 3 دقائق ﻋﻠﻰ اﻷﻗﻞ.',
                                    'name_en' => 'Discusses a topic for at least 3 minutes',
                                    'created_at' => '2023-08-28 09:02:19',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 18,
                                ),
                                261 => 
                                array (
                                    'id' => 262,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'متنع عن تكرار ما يقوله و اعادة الكلام اكثر من مرة.',
                                    'name_en' => 'Refrains from repeating what he or she says over and over again.',
                                    'created_at' => '2023-08-28 09:03:28',
                                    'updated_at' => '2023-09-12 11:52:31',
                                    'question_number' => 19,
                                ),
                                262 => 
                                array (
                                    'id' => 263,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺬﻛﺮ ﻋﻨﻮان ﻣﻨﺰﻟﻪ',
                                    'name_en' => 'States his or her home address, including zip code.',
                                    'created_at' => '2023-08-28 09:03:58',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 20,
                                ),
                                263 => 
                                array (
                                    'id' => 264,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'يميز بين الكلام الصادق و الكلام المبالغ فيها من قبل الأصدقاء أو المتحدثين أو غيرهم.',
                                    'name_en' => 'Distinguishes truthful from exaggerated claims by friends, advertisers, or others.',
                                    'created_at' => '2023-08-28 09:20:50',
                                    'updated_at' => '2023-09-12 12:05:18',
                                    'question_number' => 21,
                                ),
                                264 => 
                                array (
                                    'id' => 265,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺘﺤﺪث ﻋﻦ أﻫﺪاف  ﺗﻌﻠﻴﻤﻴﺔ أو  ﻣﻬﻨﻴﺔ واﻗﻌﻴﺔ ﻓﻲ اﻟﻤﺴﺘﻘﺒﻞ',
                                    'name_en' => 'Talks about realistic future educational or career goals.',
                                    'created_at' => '2023-08-28 09:23:09',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 22,
                                ),
                                265 => 
                                array (
                                    'id' => 266,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ اﻷسئلة اﻟﻤﻌﻘﺪة اﻟﺘﻲ ﺗﺘﻄﻠﺐ ﺗﻔﻜﻴﺮﺍً دقيق (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، أﺳئلة
ﺣﻮل  اﻷﺣﺪاث اﻟﺠﺎرﻳﺔ.)',
                                'name_en' => 'Answers complex questions that require careful thought and opinion  (for example, questions about politics or current events).',
                                    'created_at' => '2023-08-28 09:33:00',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 23,
                                ),
                                266 => 
                                array (
                                    'id' => 267,
                                    'abas_sub_domain_id' => 11,
                                    'name' => 'ﻣﺤﺎدثات ﻣﻊ اﻵﺧﺮﻳﻦ ﺣﻮل ﻣﻮاﺿﻴﻊ ﻣﻌﻘﺪة ﻟﻤﺪة 10 دقائق ﻋﻠﻰ اﻷﻗﻞ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﺣﻮل
اﻷﺣﺪاث اﻟﺠﺎرﻳﺔ.)',
                                'name_en' => 'Talks with others about complex topics for at least 10 minutes (for example, about politics or current events)',
                                    'created_at' => '2023-08-28 09:34:44',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 24,
                                ),
                                267 => 
                                array (
                                    'id' => 268,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﻨﻈﺮ ﻓﻲ ﻛﻼ اﻻﺗﺠﺎﻫﻴﻦ ﻗﺒﻞ ﻋﺒﻮر  اﻟﺸﺎرع أو ﺳﺎﺣﺔ اﻧﺘﻈﺎﺭ اﻟﺴﻴﺎرات',
                                    'name_en' => 'Looks both ways before crossing a street or parking lot.',
                                    'created_at' => '2023-08-28 09:44:25',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 1,
                                ),
                                268 => 
                                array (
                                    'id' => 269,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻃﻠﺐ وﺟﺒﺎت اﻟﻄﻌﺎم اﻟﺨﺎﺻﺔ ﻋﻨﺪ ﺗﻨﺎول  اﻟﻄﻌﺎم ﺑﺎﻟﺨﺎرج',
                                    'name_en' => 'Orders own meals when eating out',
                                    'created_at' => '2023-08-28 09:45:28',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 2,
                                ),
                                269 => 
                                array (
                                    'id' => 270,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺠﺪ اﻟﻤﺮﺣﺎض  ﻓﻲ اﻷﻣﺎﻛﻦ اﻟﻌﺎﻣﺔ',
                                    'name_en' => '. Finds the restroom in public places',
                                    'created_at' => '2023-08-28 09:46:19',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 3,
                                ),
                                270 => 
                                array (
                                    'id' => 271,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺤﺰم ﻣﻼﺑﺴﻪ و احتياجاته  ﻟﻠﺮﺣﻼت اﻟﻠﻴﻠﻴﺔ',
                                    'name_en' => 'Packs his or her own clothing and supplies for overnight trips.',
                                    'created_at' => '2023-08-28 09:57:49',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 4,
                                ),
                                271 => 
                                array (
                                    'id' => 272,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺴﺘﺨﺪم  ﻣﻜﺘﺒﺔ اﻟﻤﺪرﺳﺔ أو  اﻟﻤﻜﺘﺒﺔ اﻟﻌﺎﻣﺔ أو  اﻹﻧﺘﺮﻧﺖ ﻟﻠﺤﺼﻮل ﻋﻠﻰ اﻟﻜﺘﺐ أو  اﻟﻤﻮاد  اﻟﻤﺮﺟﻌﻴﺔ.',
                                    'name_en' => 'Uses the school library, public library, or Internet to get books or reference   materials.',
                                    'created_at' => '2023-08-28 09:59:19',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 5,
                                ),
                                272 => 
                                array (
                                    'id' => 273,
                                    'abas_sub_domain_id' => 12,
                                'name' => 'ﻳﺤﻤﻞ ﻧﻘﻮداً ﻛﺎﻓﻴﺔ ﻹﺟﺮاء ﻋﻤﻠﻴﺎت ﺷﺮاء ﺻﻐﻴﺮة (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻣﺸﺮوب ﻏﺎزي.)',
                                'name_en' => 'Carries enough money to make small purchases (for example, a soft drink).',
                                    'created_at' => '2023-08-28 10:03:15',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 6,
                                ),
                                273 => 
                                array (
                                    'id' => 274,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'اﻟﺒﺤﺚ ﻋﻦ ﻣﻨﻄﻘﺔ ﻣﻌﻴﻨﺔ ﻓﻲ ﻣﺘﺠﺮ أو ﺷﺮﻛﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، ﻣﻤﺮ  اﻷﻟﺒﺎن ﻓﻲ ﻣﺘﺠﺮ أو
ﻗﺴﻢ ﺧﺪﻣﺔ اﻟﻌﻤﻼء ﻓﻲ أﺣﺪ اﻟﺒﻨﻮك.)',
                                'name_en' => 'Finds a specific area in a store or business (for example, dairy aisle in a   store or customer service department in a bank).',
                                    'created_at' => '2023-08-28 10:28:39',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 7,
                                ),
                                274 => 
                                array (
                                    'id' => 275,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺘﺒﻊ ﺗﻮﺟﻴﻬﺎت ﺷﺨﺺ ﺁﺧﺮ إﻟﻰ اﻷﻣﺎﻛﻦ اﻟﻤﺠﺎورة',
                                    'name_en' => 'Follows another person’s directions to nearby places',
                                    'created_at' => '2023-08-28 12:28:08',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 8,
                                ),
                                275 => 
                                array (
                                    'id' => 276,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﻤﺸﻲ ﺑﻤﻔﺮده إﻟﻰ ﻣﻨﺎزل أو  ﺷﻘﻖ اﻷﺻﺪﻗﺎء ﻓﻲ اﻟﺤﻲ',
                                    'name_en' => 'Walks alone to friends’ houses or apartments in the neighborhood',
                                    'created_at' => '2023-08-28 12:32:46',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 9,
                                ),
                                276 => 
                                array (
                                    'id' => 277,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'قبل شراء أي منتج من أحد المتاجر، يفكر مليًا في مدى الحاجة إليه وتكلفته',
                                    'name_en' => 'Before buying an item in a store, gives careful thought to the need for it and its cost',
                                    'created_at' => '2023-08-28 12:34:38',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 10,
                                ),
                                277 => 
                                array (
                                    'id' => 278,
                                    'abas_sub_domain_id' => 12,
                                'name' => 'يوضح العنوان العام لوجهة السفر (على سبيل المثال، "في عمان خلدا، بالقرب من إشارة البنك العربي").',
                                'name_en' => 'States general address of a travel destination (for example, “On  Washington Avenue, near Lake Street”).',
                                    'created_at' => '2023-08-28 12:36:17',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 11,
                                ),
                                278 => 
                                array (
                                    'id' => 279,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺘﻌﺮف ﻋﻨﺪﻣﺎ تكون منتجات او الادوات في  اﻟﻤﺘﺠﺮ سيئه اﻟﺼﻨﻊ أو باهظة الظمن',
                                    'name_en' => 'Recognizes when a store item is poorly made or too expensive.',
                                    'created_at' => '2023-08-28 12:42:25',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 12,
                                ),
                                279 => 
                                array (
                                    'id' => 280,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﺤﻤﻞ ﻫﻮﻳﺔ ﺷﺨﺼﻴﺔ ﻋﻨﺪ  التنقل إﻟﻰ أﻣﺎﻛﻦ ﻗﺮﻳﺒﺔ ﻓﻲ بلده.',
                                    'name_en' => 'Carries personal identification when traveling to nearby places in the community',
                                    'created_at' => '2023-08-28 12:44:22',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 13,
                                ),
                                280 => 
                                array (
                                    'id' => 281,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'ﻳﻌﺘﻤﺪ ﻋﻠﻰ ﻧﻔﺴﻪ ﻓﻲ التنقل  داﺧﻞ بلده ( ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﻤﺸﻲ أو اﺳﺘﺨﺪام  وﺳﺎئل
اﻟﻨﻘﻞ اﻟﻌﺎﻡ ، أو اﻟﺪراﺟﺔ الهوائية  ، أو  اﻟﺴﻴﺎﺭة)',
                                'name_en' => 'Relies on himself or herself for travel in the community (for example, walks  or uses public transportation, a bicycle, or a car).',
                                    'created_at' => '2023-08-28 12:46:20',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 14,
                                ),
                                281 => 
                                array (
                                    'id' => 282,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'يذهب للتسوق بدل عن  الأﺻﺪﻗﺎء أو  اﻟﻌﺎئلة  اﻟﺬﻳﻦ  لا ﻳﺘﻤﻜﻨﻮن ﻣﻦ  الذهاب للتسوق',
                                    'name_en' => 'Shops for friends or family who may be unable to shop.',
                                    'created_at' => '2023-08-28 12:49:16',
                                    'updated_at' => '2023-09-03 15:57:50',
                                    'question_number' => 15,
                                ),
                                282 => 
                                array (
                                    'id' => 283,
                                    'abas_sub_domain_id' => 12,
                                    'name' => 'اﺻﻄﺤﺎب أﺷﺨﺎص  ﺁﺧﺮﻳﻦ ﻓﻲ رﺣﻼت  إﻟﻰ أﻣﺎﻛﻦ ﻗﺮﻳﺒﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﺻﻄﺤﺎب
اﻵﺧﺮﻳﻦ ﻟﻠﺘﺴﻮق أو  اﺻﻄﺤﺎب ﻃﻔﻞ أﺻﻐﺮ ﺳﻨﺎً  إﻟﻰ اﻟﺤﺪﻳﻘﺔ.)',
                                    'name_en' => 'Takes other people on trips to nearby places (for example, takes others  shopping or takes a younger child to a par',
                                        'created_at' => '2023-08-28 12:51:08',
                                        'updated_at' => '2023-09-03 15:57:50',
                                        'question_number' => 16,
                                    ),
                                    283 => 
                                    array (
                                        'id' => 284,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺴﺘﺨﺪم  اﻟﻮرق أو  اﻟﺨﺮائط  اﻟﺮﻗﻤﻴﺔ ﻹﻳﺠﺎد ﻃﺮﻳﻘﻪ  إﻟﻰ اﻟﻤﻮاﻗﻊ  اﻟﻤﻄﻠﻮﺑﺔ.',
                                        'name_en' => 'Uses paper or digital maps to find his or her way to desired locations.',
                                        'created_at' => '2023-08-28 12:52:50',
                                        'updated_at' => '2023-09-03 15:57:50',
                                        'question_number' => 17,
                                    ),
                                    284 => 
                                    array (
                                        'id' => 285,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺴﺘﺨﺪم اﻟﻤﻮارد  اﻟﻤﻄﺒﻮﻋﺔ أو  اﻹﻧﺘﺮﻧﺖ ﻟﻠﺤﺼﻮل  ﻋﻠﻰ اﻟﻤﻌﻠﻮﻣﺎت ﻗﺒﻞ إﺟﺮاء ﻋﻤﻠﻴﺎت ﺷﺮاء
ﻛﺒﻴﺮة(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، اﻟﺴﻴﺎرات ، واﻷﺟﻬﺰة ، وأﺟﻬﺰة اﻟﻜﻤﺒﻴﻮﺗﺮ)',
                                    'name_en' => 'Uses printed or Internet resources to obtain information before making major purchases (for example, cars, appliances, computers)',
                                        'created_at' => '2023-08-28 13:09:33',
                                        'updated_at' => '2023-09-03 15:57:50',
                                        'question_number' => 18,
                                    ),
                                    285 => 
                                    array (
                                        'id' => 286,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺠﻌﻞ اﻟﻤﻮﺍﻋﻴﺪ ﻋﻦ ﻃﺮﻳﻖ اﻟﻬﺎﺗﻒ أو اﻟﺠﻬﺎز اﻟﻤﺤﻤﻮل أو اﻹﻧﺘﺮﻧﺖ',
                                        'name_en' => 'Makes appointments by telephone, mobile device, or Internet.',
                                        'created_at' => '2023-08-29 08:03:38',
                                        'updated_at' => '2023-09-03 15:57:50',
                                        'question_number' => 19,
                                    ),
                                    286 => 
                                    array (
                                        'id' => 287,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺤﺼﻞ ﻋﻠﻰ اﻟﻤﺎل ﻣﻦ ﺟﻬﺎز اﻟﺼﺮاف اﻵﻟﻲ',
                                        'name_en' => 'Obtains money from an ATM.',
                                        'created_at' => '2023-08-29 08:04:15',
                                        'updated_at' => '2023-09-03 15:57:50',
                                        'question_number' => 20,
                                    ),
                                    287 => 
                                    array (
                                        'id' => 288,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺴﺘﺨﺪم  ﺑﻄﺎﻗﺔ الائتمان أو  اﻟﺨﺼﻢ ﻹﺟﺮاء ﻋﻤﻠﻴﺎت اﻟﺸﺮاء',
                                        'name_en' => 'Uses a credit or debit card for making purchases.',
                                        'created_at' => '2023-08-29 08:05:49',
                                        'updated_at' => '2023-09-03 15:57:50',
                                        'question_number' => 21,
                                    ),
                                    288 => 
                                    array (
                                        'id' => 289,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻣﺴﺆول ﻋﻦ ﺷﺆوﻧﻪ اﻟﻤﺎﻟﻴﺔ اﻟﺸﺨﺼﻴﺔ ، ﻣﺜﻞ اﻟﺤﺴﺎب اﻟﻤﺼﺮﻓﻲ أو ﺑﻄﺎﻗﺔ الائتمان  أو ﻓﺎﺗﻮرة
اﻟﻤﺮاﻓﻖ',
                                        'name_en' => 'Is responsible for his or her personal finances, such as bank account, credit card, or utility bill.',
                                        'created_at' => '2023-08-29 08:07:30',
                                        'updated_at' => '2023-09-03 15:57:50',
                                        'question_number' => 22,
                                    ),
                                    289 => 
                                    array (
                                        'id' => 290,
                                        'abas_sub_domain_id' => 12,
                                        'name' => 'ﻳﺘﺼﻞ ﺑﻔﻨﻲ اﻹﺻﻼح ﻋﻨﺪ اﻟﺤﺎﺟﺔ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، إذا ﺗﻮﻗﻒ ﻣﻜﻴﻒ اﻟﻬﻮاء أو اﻟﺴﺨﺎن ﻋﻦ
اﻟﻌﻤﻞ).',
                                    'name_en' => 'Calls a repairperson when needed (for example, if the air conditioner or  heater stops working).',
                                        'created_at' => '2023-08-29 08:09:24',
                                        'updated_at' => '2023-09-03 15:57:50',
                                        'question_number' => 23,
                                    ),
                                    290 => 
                                    array (
                                        'id' => 291,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﻜﺘﺐ أو ﻳﻄﺒﻊ اﺳﻤﻪ اﻷول واﻷﺧﻴﺮ.',
                                        'name_en' => 'Writes or prints his or her first and last name.',
                                        'created_at' => '2023-08-29 08:19:13',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 1,
                                    ),
                                    291 => 
                                    array (
                                        'id' => 292,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﻘﺮﺃ اﺳﻤﻪ  ﻋﻨﺪ ﻃﺒﺎﻋﺘﻪ',
                                        'name_en' => 'Reads his or her name when printed.',
                                        'created_at' => '2023-08-29 08:20:02',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    292 => 
                                    array (
                                        'id' => 293,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يذكر أﻳﺎم  اﻷﺳﺒﻮع ﺑﺎﻟﺘﺮﺗﻴﺐ',
                                        'name_en' => 'States the days of the week in order.',
                                        'created_at' => '2023-08-29 08:21:46',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    293 => 
                                    array (
                                        'id' => 294,
                                        'abas_sub_domain_id' => 13,
                                    'name' => 'ﻳﻘﺮأ وﻳﻠﺘﺰم ﺑﺎﻟﻌﻼﻣﺎت اﻟﺸﺎئعة (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، لاﺗﺪﺧﻞ ، ﺧﺮوج ، ﺗﻮﻗﻒ)',
                                    'name_en' => 'Reads and obeys common signs (for example, Do Not Enter, Exit, Stop)',
                                        'created_at' => '2023-08-29 08:23:19',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    294 => 
                                    array (
                                        'id' => 295,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ أسئلة ﺑﺴﻴﻄﺔ ﺣﻮل ﻗﺼﺔ تقرأ ﻟﻪ',
                                        'name_en' => 'Answers simple questions about a story read to him or her.',
                                        'created_at' => '2023-08-29 08:24:26',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    295 => 
                                    array (
                                        'id' => 296,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﺤﺎﻓﻆ ﻋﻠﻰ اﻟﻨﺘﻴﺠﺔ ﺑﺸﻜﻞ ﺻﺤﻴﺢ ﻋﻨﺪ ﻣﻤﺎرﺳﺔ اﻷﻟﻌﺎب',
                                        'name_en' => 'Keeps score correctly when playing games',
                                        'created_at' => '2023-08-29 08:25:21',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
                                    ),
                                    296 => 
                                    array (
                                        'id' => 297,
                                        'abas_sub_domain_id' => 13,
                                    'name' => 'ﺗﺤﺪﻳﺪ اﻟﺘﻮارﻳﺦ اﻟﻤﻬﻤﺔ ﻓﻲ اﻟﺘﻘﻮﻳﻢ (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، أﻋﻴﺎد اﻟﻤﻴﻼد أو  اﻹﺟﺎزات)',
                                    'name_en' => 'Locates important dates on a calendar (for example, birthdays or holidays).',
                                        'created_at' => '2023-08-29 08:27:39',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    297 => 
                                    array (
                                        'id' => 298,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'ﻳﺤﻜﻲاﻟﻮﻗﺖ ﺑﺸﻜﻞ ﺻﺤﻴﺢ ، ﺑﺎﺳﺘﺨﺪام ﺳﺎﻋﺔ رقمية أو ﺳﺎﻋﺔ ﻣﻊ ﻋﻘﺎرب.',
                                        'name_en' => 'Tells time correctly, using a watch or a clock with hands.',
                                        'created_at' => '2023-08-29 08:28:45',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    298 => 
                                    array (
                                        'id' => 299,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يقرأ قوائم الطعام في المطاعم.',
                                        'name_en' => 'Reads menus at restaurants.',
                                        'created_at' => '2023-08-29 08:30:19',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    299 => 
                                    array (
                                        'id' => 300,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يكتب عنوانه، بما في ذلك الرمز البريدي',
                                        'name_en' => 'Writes his or her address, including zip code.',
                                        'created_at' => '2023-08-29 08:30:44',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    300 => 
                                    array (
                                        'id' => 301,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يقيس الطول والارتفاع',
                                        'name_en' => 'Measures length and height.',
                                        'created_at' => '2023-08-29 08:32:28',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    301 => 
                                    array (
                                        'id' => 302,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يعطي الموظف المبلغ اللازم من المال عند الشراء.',
                                        'name_en' => 'Gives a clerk the necessary amount of money when buying items.',
                                        'created_at' => '2023-08-29 08:35:11',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    302 => 
                                    array (
                                        'id' => 303,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يكتب ويرسل الرسائل أو الملاحظات الشخصية أو رسائل البريد الإلكتروني.',
                                        'name_en' => 'Writes and sends letters, personal notes, or emails.',
                                        'created_at' => '2023-08-29 08:35:40',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    303 => 
                                    array (
                                        'id' => 304,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يتابع شيء مهم او  مفضلاً أو حدثًا حاليًا من خلال القراءة عنه في الصحف أو الكتب أو المواد الأخرى أو على الإنترنت.',
                                        'name_en' => 'Follows a favorite interest or current event by reading about it in    newspapers, books, or other materials, or on the Internet.',
                                        'created_at' => '2023-08-29 08:36:42',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    304 => 
                                    array (
                                        'id' => 305,
                                        'abas_sub_domain_id' => 13,
                                    'name' => 'يستخدم الموارد المطبوعة أو عبر الإنترنت للعثور على المعلومات (على سبيل المثال، في القواميس والموسوعات)',
                                    'name_en' => 'Uses printed or Internet resources to find information (for example, in dictionaries and encyclopedias)',
                                        'created_at' => '2023-08-29 08:37:34',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    305 => 
                                    array (
                                        'id' => 306,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يستخدم القوائم والتذكيرات لتذكر الأشياء المهمة.',
                                        'name_en' => 'Uses lists and reminders to remember important things.',
                                        'created_at' => '2023-08-29 08:38:01',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    306 => 
                                    array (
                                        'id' => 307,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يسجل التواريخ والأوقات للمواعيد والمواعيد النهائية.',
                                        'name_en' => 'Records dates and times for appointments and deadlines.',
                                        'created_at' => '2023-08-29 08:38:25',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    307 => 
                                    array (
                                        'id' => 308,
                                        'abas_sub_domain_id' => 13,
                                        'name' => '. التحقق من التغيير الصحيح بعد شراء السلعة.',
                                        'name_en' => '. Checks for correct change after buying an item.',
                                        'created_at' => '2023-08-29 08:39:02',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    308 => 
                                    array (
                                        'id' => 309,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يقرأ ويتبع التعليمات لتجميع المشتريات الجديدة.',
                                        'name_en' => 'Reads and follows instructions for assembling new purchases.',
                                        'created_at' => '2023-08-29 08:39:36',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    309 => 
                                    array (
                                        'id' => 310,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يقرأ الملصقات قبل شراء المنتجات للحصول على معلومات مهمة حول الحجم والوزن واتجاهات الاستخدام.',
                                        'name_en' => 'Reads labels before purchasing products for important information about size, weight, and directions for use.',
                                        'created_at' => '2023-08-29 08:40:09',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    310 => 
                                    array (
                                        'id' => 311,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'التحقق من دقة الرسوم قبل دفع الفاتورة.',
                                        'name_en' => 'Checks the accuracy of charges before paying a bill.',
                                        'created_at' => '2023-08-29 08:41:22',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 21,
                                    ),
                                    311 => 
                                    array (
                                        'id' => 312,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'قم بتخصيص الأموال لتغطية النفقات لمدة أسبوع واحد على الأقل.',
                                        'name_en' => 'Budgets money to cover expenses for at least 1 week.',
                                        'created_at' => '2023-08-29 08:42:14',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 22,
                                    ),
                                    312 => 
                                    array (
                                        'id' => 313,
                                        'abas_sub_domain_id' => 13,
                                        'name' => 'يكمل النماذج المكتوبة للتقدم للوظائف.',
                                        'name_en' => 'Completes written forms to apply for jobs.',
                                        'created_at' => '2023-08-29 08:42:45',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 23,
                                    ),
                                    313 => 
                                    array (
                                        'id' => 314,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'مسح الماء او العصير الذي يسكب منه  في المنزل.',
                                        'name_en' => 'Wipes up spills at home.',
                                        'created_at' => '2023-08-29 08:43:39',
                                        'updated_at' => '2023-09-13 12:41:20',
                                        'question_number' => 1,
                                    ),
                                    314 => 
                                    array (
                                        'id' => 315,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يلتقط ويرمي القمامة أو الورق في المنزل.',
                                        'name_en' => 'Picks up and throws away trash or paper at home.',
                                        'created_at' => '2023-08-29 08:44:16',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    315 => 
                                    array (
                                        'id' => 316,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'وضع الملابس المتسخة في المكان المناسب (مثلاً الغسالة أو سلة ملابس).',
                                    'name_en' => 'Places dirty clothes in the proper place (for example, a hamper or clothes  basket).',
                                        'created_at' => '2023-08-29 08:44:57',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    316 => 
                                    array (
                                        'id' => 317,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يسكب السائل من وعاء أكبر في الكوب أو الزجاج الخاص به دون أن ينسكب',
                                        'name_en' => 'Pours liquid from a larger container into own cup or glass without spilling',
                                        'created_at' => '2023-08-29 08:45:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    317 => 
                                    array (
                                        'id' => 318,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'يُظهِر الاحترام عند استخدام ممتلكات الآخرين (على سبيل المثال، من خلال الحفاظ على نظافتها وإعادتها سليمة عند الطلب)',
                                    'name_en' => 'Shows respect when using others’ possessions (for example, by keeping   them clean and returning them undamaged when requested)',
                                        'created_at' => '2023-08-29 08:45:50',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    318 => 
                                    array (
                                        'id' => 319,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'يظهر احترامًا لخصوصية الآخرين (على سبيل المثال، يطرق الأبواب المغلقة قبل الدخول).',
                                    'name_en' => 'Shows respect for other people’s privacy (for example, knocks on closed   doors before entering).',
                                        'created_at' => '2023-08-29 08:46:13',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
                                    ),
                                    319 => 
                                    array (
                                        'id' => 320,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يحافظ على الألعاب  والممتلكات الأخرى مرتبة ونظيفة.',
                                        'name_en' => 'Keeps toys, games, and other belongings neat and clean.',
                                        'created_at' => '2023-08-29 08:46:32',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    320 => 
                                    array (
                                        'id' => 321,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'إعادة الأشياء إلى مكانها الصحيح بعد استخدامها.',
                                        'name_en' => 'Returns things to their proper place after using them.',
                                        'created_at' => '2023-08-29 08:46:47',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    321 => 
                                    array (
                                        'id' => 322,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'ينظف الطاولة تماماً بعد تناول الطعام.',
                                        'name_en' => 'Clears the table completely after a meal.',
                                        'created_at' => '2023-08-29 08:47:58',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    322 => 
                                    array (
                                        'id' => 323,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'ينظف غرفته أو أماكن معيشته بانتظام.',
                                        'name_en' => 'Cleans his or her room or living quarters regularly.',
                                        'created_at' => '2023-08-29 08:48:16',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    323 => 
                                    array (
                                        'id' => 324,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يرتب سريره.',
                                        'name_en' => '. Makes his or her bed.',
                                        'created_at' => '2023-08-29 08:48:35',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    324 => 
                                    array (
                                        'id' => 325,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'إعداد وجبات بسيطة لا تتطلب أي طهي (على سبيل المثال، السندويشات أو سلطة).',
                                    'name_en' => 'Makes simple meals that require no cooking (for example, sandwiches or  salads).',
                                        'created_at' => '2023-08-29 08:48:56',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    325 => 
                                    array (
                                        'id' => 326,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يشغل  الميكروويف.',
                                        'name_en' => 'Operates a microwave oven.',
                                        'created_at' => '2023-08-29 08:49:19',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    326 => 
                                    array (
                                        'id' => 327,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يمسح الأرضية.',
                                        'name_en' => 'Sweeps floor.',
                                        'created_at' => '2023-08-29 08:49:33',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    327 => 
                                    array (
                                        'id' => 328,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يطوي الملابس النظيفة.',
                                        'name_en' => 'Folds clean clothes.',
                                        'created_at' => '2023-08-29 08:49:46',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    328 => 
                                    array (
                                        'id' => 329,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يُغسل الأطباق إما يدويًا أو بغسالة الأطباق.',
                                        'name_en' => 'Washes dishes either by hand or with a dishwasher.',
                                        'created_at' => '2023-08-29 08:50:01',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    329 => 
                                    array (
                                        'id' => 330,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يقوم بإخراج القمامة عندما تكون العلبة ممتلئة.',
                                        'name_en' => 'Takes out trash when can is full.',
                                        'created_at' => '2023-08-29 08:50:16',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    330 => 
                                    array (
                                        'id' => 331,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'يستخدم الأجهزة الكهربائية الصغيرة (على سبيل المثال، فتاحة العلب أو الخلاط).',
                                    'name_en' => 'Uses small electrical appliances (for example, a can opener or blender).',
                                        'created_at' => '2023-08-29 08:50:37',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    331 => 
                                    array (
                                        'id' => 332,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'ينظم المهام في المنزل بحيث يتم الانتهاء من أهمها أولا.',
                                        'name_en' => 'Organizes tasks at home so that the most important are completed first.',
                                        'created_at' => '2023-08-29 08:50:52',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    332 => 
                                    array (
                                        'id' => 333,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يستخدم مجفف الملابس.',
                                        'name_en' => 'Uses a clothes dryer.',
                                        'created_at' => '2023-08-29 08:51:06',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    333 => 
                                    array (
                                        'id' => 334,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'ينظف الحمام بمستلزمات التنظيف المناسبة.',
                                        'name_en' => 'Cleans bathroom with proper cleaning supplies.',
                                        'created_at' => '2023-08-29 08:51:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 21,
                                    ),
                                    334 => 
                                    array (
                                        'id' => 335,
                                        'abas_sub_domain_id' => 14,
                                    'name' => '. إجراء إصلاحات بسيطة  على الممتلكات الشخصية (على سبيل المثال، الدراجات والألعاب والملابس).',
                                    'name_en' => '. Makes minor repairs to personal possessions (for example, bikes, toys,  clothes).',
                                        'created_at' => '2023-08-29 08:51:53',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 22,
                                    ),
                                    335 => 
                                    array (
                                        'id' => 336,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'يخلط ويطهى الأطعمة المعقدة إلى حد ما باستخدام الموقد أو الفرن (على سبيل المثال، الكعك أو كعك البراونيز).',
                                    'name_en' => 'Mixes and cooks fairly complex foods using a stove or oven (for example,  cake or brownies).',
                                        'created_at' => '2023-08-29 08:52:23',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 23,
                                    ),
                                    336 => 
                                    array (
                                        'id' => 337,
                                        'abas_sub_domain_id' => 14,
                                        'name' => 'يتسوق للحصول على أفضل الأسعار من خلال البحث عن المبيعات أو مقارنة المتاجر أو مواقع الإنترنت المختلفة',
                                        'name_en' => 'Shops for the best prices by looking for sales or comparing different stores   or Internet sites',
                                        'created_at' => '2023-08-29 08:52:52',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 24,
                                    ),
                                    337 => 
                                    array (
                                        'id' => 338,
                                        'abas_sub_domain_id' => 14,
                                    'name' => 'إجراء إصلاحات منزلية بسيطة (على سبيل المثال، إصلاح المغسلة المسدودة أو الصنبور المتسرب)',
                                    'name_en' => 'Performs minor household repairs (for example, fixes a clogged drain or   leaky faucet)',
                                        'created_at' => '2023-08-29 08:53:24',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 25,
                                    ),
                                    338 => 
                                    array (
                                        'id' => 339,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يتبع قواعد السلامه بالسياره ويضع حزام الامان.',
                                        'name_en' => 'Buckles own car seat or seat belt.',
                                        'created_at' => '2023-08-29 09:20:11',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 1,
                                    ),
                                    339 => 
                                    array (
                                        'id' => 340,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يظهر الحذر بشأن العناصر الساخنة أو الخطرة.',
                                        'name_en' => 'Shows caution around hot or dangerous items.',
                                        'created_at' => '2023-08-29 09:20:26',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    340 => 
                                    array (
                                        'id' => 341,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يحمل المقص بأمان.',
                                        'name_en' => 'Carries scissors safely.',
                                        'created_at' => '2023-08-29 09:20:43',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    341 => 
                                    array (
                                        'id' => 342,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يتبع قواعد السلامة العامة في المنزل.',
                                        'name_en' => 'Follows general safety rules at home.',
                                        'created_at' => '2023-08-29 09:21:01',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    342 => 
                                    array (
                                        'id' => 343,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يوضح السلوكيات الآمنة في الحدائق والملاعب وفي الحي',
                                        'name_en' => 'Displays safe behaviors at parks and playgrounds and in the neighborhood',
                                        'created_at' => '2023-08-29 09:22:11',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    343 => 
                                    array (
                                        'id' => 344,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يبتلع الأدوية السائلة حسب الحاجة، دون ضجة.',
                                        'name_en' => 'Swallows liquid medicines as needed, without fussing.',
                                        'created_at' => '2023-08-29 09:22:28',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
                                    ),
                                    344 => 
                                    array (
                                        'id' => 345,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يحمل الأشياء القابلة للكسر بأمان وحذر.',
                                        'name_en' => 'Carries breakable objects safely and carefully.',
                                        'created_at' => '2023-08-29 09:22:50',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    345 => 
                                    array (
                                        'id' => 346,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'اختبار الأطعمة الساخنة قبل تناولها.',
                                        'name_en' => 'Tests hot foods before eating them.',
                                        'created_at' => '2023-08-29 09:23:18',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    346 => 
                                    array (
                                        'id' => 347,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يدعو للمساعدة إذا أصيب شخص ما في المنزل.',
                                        'name_en' => 'Calls for help if someone is hurt at home.',
                                        'created_at' => '2023-08-29 09:24:00',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    347 => 
                                    array (
                                        'id' => 348,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يستخدم المنافذ الكهربائية أو المقابس بأمان.',
                                        'name_en' => 'Uses electrical outlets or sockets safely.',
                                        'created_at' => '2023-08-29 09:24:25',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    348 => 
                                    array (
                                        'id' => 349,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يطيع طلبات الآخرين فقط إذا كان يعرفهم ويثق بهم.',
                                        'name_en' => 'Obeys requests from other people only if he or she knows and trusts them.',
                                        'created_at' => '2023-08-29 09:24:50',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    349 => 
                                    array (
                                        'id' => 350,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يتبع قواعد السلامة للدراجات وألواح التزلج ومعدات اللعب الأخرى.',
                                        'name_en' => 'Follows safety rules for bikes, skateboards, and other play equipment.',
                                        'created_at' => '2023-08-29 09:25:06',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    350 => 
                                    array (
                                        'id' => 351,
                                        'abas_sub_domain_id' => 15,
                                    'name' => 'يهتم بإصاباته الطفيفة (على سبيل المثال، جروح، وخدوش الركبة، ونزيف الأنف).',
                                    'name_en' => 'Cares for own minor injuries (for example, paper cuts, knee scrapes, nosebleeds).',
                                        'created_at' => '2023-08-29 09:25:39',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    351 => 
                                    array (
                                        'id' => 352,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'بلع الحبوب أو الكبسولات مع الماء إذا لزم الأمر عندما يكون مريض.',
                                        'name_en' => 'Swallows pills or capsules with water if needed for illness.',
                                        'created_at' => '2023-08-29 09:26:13',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    352 => 
                                    array (
                                        'id' => 353,
                                        'abas_sub_domain_id' => 15,
                                    'name' => 'يتجنب الأشخاص الذين قد يستغلونه (على سبيل المثال، من أجل المال أو الجنس)',
                                    'name_en' => 'Avoids people who might take advantage of him or her (for example, for  money or sex)',
                                        'created_at' => '2023-08-29 09:26:35',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    353 => 
                                    array (
                                        'id' => 354,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'يستخدم الأدوات والمعدات بشكل آمن.',
                                        'name_en' => 'Uses tools and equipment safely.',
                                        'created_at' => '2023-08-29 09:26:59',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    354 => 
                                    array (
                                        'id' => 355,
                                        'abas_sub_domain_id' => 15,
                                        'name' => '. يطيع إشارات المرور عند ركوب الدراجة أو قيادة السيارة.',
                                        'name_en' => '. Obeys traffic signals when riding a bike or driving a car.',
                                        'created_at' => '2023-08-29 09:27:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    355 => 
                                    array (
                                        'id' => 356,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'قياس درجة الحرارة بميزان الحراره عند الشعور بالمرض',
                                        'name_en' => 'Takes temperature with a thermometer when feeling sick',
                                        'created_at' => '2023-08-29 09:28:53',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    356 => 
                                    array (
                                        'id' => 357,
                                        'abas_sub_domain_id' => 15,
                                        'name' => 'تناول الأدوية دون إشراف في الأيام والأوقات الموصوفة.',
                                        'name_en' => 'Takes medications without supervision on days and at times prescribed.',
                                        'created_at' => '2023-08-29 09:30:00',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    357 => 
                                    array (
                                        'id' => 358,
                                        'abas_sub_domain_id' => 15,
                                        'name' => '. يشتري الأدوية التي لا تستلزم وصفة طبية عند الحاجة إليها بسبب المرض.',
                                        'name_en' => '. Buys over-the-counter medications when needed for illness.',
                                        'created_at' => '2023-08-29 09:30:21',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    358 => 
                                    array (
                                        'id' => 359,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يلعب بالدمى أو الألعاب أو غيرها من الأشياء الممتعة مع الآخرين',
                                        'name_en' => 'Plays with toys, games, or other fun items with others',
                                        'created_at' => '2023-08-29 09:31:37',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 1,
                                    ),
                                    359 => 
                                    array (
                                        'id' => 360,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يحضر الأنشطة الترفيهية في منزل شخص آخر',
                                        'name_en' => 'Attends fun activities at another’s home',
                                        'created_at' => '2023-08-29 09:31:59',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    360 => 
                                    array (
                                        'id' => 361,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يشارك في مجموعة متنوعة من الأنشطة الترفيهية بدلاً من نشاط واحد أو اثنين فقط.',
                                        'name_en' => 'Engages in a variety of fun activities instead of only one or two.',
                                        'created_at' => '2023-08-29 09:32:47',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    361 => 
                                    array (
                                        'id' => 362,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يتبع القواعد في الألعاب والأنشطة الترفيهية الأخرى.',
                                        'name_en' => 'Follows the rules in games and other fun activities.',
                                        'created_at' => '2023-08-29 09:33:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    362 => 
                                    array (
                                        'id' => 363,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'ينتظر دوره في الألعاب والأنشطة الترفيهية الأخرى.',
                                        'name_en' => 'Waits for his or her turn in games and other fun activities.',
                                        'created_at' => '2023-08-29 09:33:48',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    363 => 
                                    array (
                                        'id' => 364,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'ينظر إلى الصور أو يقرأ الكتب أو المجلات أثناء وقت الفراغ',
                                        'name_en' => 'Looks at pictures or reads books or magazines during free time',
                                        'created_at' => '2023-08-29 09:34:17',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
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
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    365 => 
                                    array (
                                        'id' => 366,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يدعو الآخرين للانضمام إليه في ممارسة الألعاب والأنشطة الترفيهية الأخرى.',
                                        'name_en' => 'Invites others to join him or her in playing games and other fun activities.',
                                        'created_at' => '2023-08-29 09:37:34',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    366 => 
                                    array (
                                        'id' => 367,
                                        'abas_sub_domain_id' => 16,
                                    'name' => 'يختار برامج تلفزيونية أو يستخدم الإنترنت لمتابعة مجال اهتمامه (على سبيل المثال، الرياضة، الموسيقى، الطبيعة).',
                                    'name_en' => '. Selects television programs or uses the Internet to keep up with an area of   interest (for example, sports, music, nature).',
                                        'created_at' => '2023-08-29 09:38:24',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    367 => 
                                    array (
                                        'id' => 368,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يدعو الآخرين إلى المنزل للقيام بنشاط ممتع.',
                                        'name_en' => 'Invites others home for a fun activity.',
                                        'created_at' => '2023-08-29 09:39:11',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    368 => 
                                    array (
                                        'id' => 369,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يستمع إلى الموسيقى من أجل المتعة والاسترخاء.',
                                        'name_en' => 'Listens to music for fun and relaxation.',
                                        'created_at' => '2023-08-29 09:39:42',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    369 => 
                                    array (
                                        'id' => 370,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يبدأ الألعاب أو يختار البرامج التلفزيونية التي يحبها الأصدقاء أو أفراد الأسرة.',
                                        'name_en' => 'Initiates games or selects television programs liked by friends or family   members.',
                                        'created_at' => '2023-08-29 09:40:09',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    370 => 
                                    array (
                                        'id' => 371,
                                        'abas_sub_domain_id' => 16,
                                    'name' => 'يشارك في برنامج منظم لممارسة رياضة أو هواية (على سبيل المثال، ممارسة كرة السلة أو حضور دروس الموسيقى).',
                                    'name_en' => 'Participates in an organized program for a sport or hobby (for example,  practices basketball or takes a music class).',
                                        'created_at' => '2023-08-29 09:40:54',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    371 => 
                                    array (
                                        'id' => 372,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يدعو الآخرين ليكونوا أولًا في الألعاب أو اللعب أو الأنشطة الأخرى.',
                                        'name_en' => 'Invites others to go first in games, play, or other activities.',
                                        'created_at' => '2023-08-29 09:41:26',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    372 => 
                                    array (
                                        'id' => 373,
                                        'abas_sub_domain_id' => 16,
                                    'name' => 'يحضر أنشطة مجتمعية ممتعة مع الآخرين (على سبيل المثال، فيلم أو حفل موسيقي).',
                                    'name_en' => 'Attends fun community activities with others (for example, a movie or concert).',
                                        'created_at' => '2023-08-29 09:42:03',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    373 => 
                                    array (
                                        'id' => 374,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'يجرب نشاطًا جديدًا للتعرف على شيء جديد.',
                                        'name_en' => 'Tries a new activity to learn about something new.',
                                        'created_at' => '2023-08-29 09:42:54',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    374 => 
                                    array (
                                        'id' => 375,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'خطط مسبقًا للعب أو الأنشطة الترفيهية في الأيام المجانية أو بعد الظهر.',
                                        'name_en' => 'Plans ahead for play or fun activities on free days or afternoons.',
                                        'created_at' => '2023-08-29 09:44:00',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    375 => 
                                    array (
                                        'id' => 376,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'ينظم لعبة أو أي نشاط ممتع آخر لمجموعة من الأصدقاء دون مساعدة من الآخرين.',
                                        'name_en' => 'Organizes a game or other fun activity for a group of friends without help   from others.',
                                        'created_at' => '2023-08-29 09:44:44',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    376 => 
                                    array (
                                        'id' => 377,
                                        'abas_sub_domain_id' => 16,
                                        'name' => 'التخطيط المسبق للأنشطة الترفيهية أثناء فترات الراحة المدرسية أو الإجازات.',
                                        'name_en' => 'Plans ahead for leisure activities during school breaks or vacations.',
                                        'created_at' => '2023-08-29 09:45:04',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    377 => 
                                    array (
                                        'id' => 378,
                                        'abas_sub_domain_id' => 16,
                                    'name' => 'الانضمام إلى مجموعة منظمة دون مساعدة من شخص آخر (على سبيل المثال، نادٍ أو فريق رياضي أو مجموعة موسيقية)',
                                    'name_en' => 'Joins an organized group without help from another person (for example,  a club, sports team, or musical group)',
                                        'created_at' => '2023-08-29 09:45:38',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    378 => 
                                    array (
                                        'id' => 379,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يستخدم الشوكة في تناول الطعام الصلب',
                                        'name_en' => 'Uses a fork to eat solid food',
                                        'created_at' => '2023-08-29 10:07:29',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 1,
                                    ),
                                    379 => 
                                    array (
                                        'id' => 380,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يستخدم الحمام في المنزل دون مساعدة.',
                                        'name_en' => 'Uses restroom at home without help.',
                                        'created_at' => '2023-08-29 10:07:49',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    380 => 
                                    array (
                                        'id' => 381,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يغسل اليدين بالماء والصابون.',
                                        'name_en' => 'Washes hands with both soap and water.',
                                        'created_at' => '2023-08-29 10:08:05',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    381 => 
                                    array (
                                        'id' => 382,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يلبس لوحده',
                                        'name_en' => 'Dresses himself or herself.',
                                        'created_at' => '2023-08-29 10:09:21',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    382 => 
                                    array (
                                        'id' => 383,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يشرب السوائل دون انسكاب.',
                                        'name_en' => '. Drinks liquids without spilling',
                                        'created_at' => '2023-08-29 10:09:47',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    383 => 
                                    array (
                                        'id' => 384,
                                        'abas_sub_domain_id' => 17,
                                        'name' => '. يلبس الحذاء بشكل صحيح',
                                        'name_en' => '. Puts shoes on the correct feet',
                                        'created_at' => '2023-08-29 10:10:45',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
                                    ),
                                    384 => 
                                    array (
                                        'id' => 385,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يفرش أسنانه.',
                                        'name_en' => 'Brushes teeth',
                                        'created_at' => '2023-08-29 10:11:49',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    385 => 
                                    array (
                                        'id' => 386,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يزر أزرار الملابس',
                                        'name_en' => 'Buttons own clothing',
                                        'created_at' => '2023-08-29 10:12:40',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    386 => 
                                    array (
                                        'id' => 387,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'ينظف ويمسح الأنف بمنديل .',
                                        'name_en' => 'Blows and wipes nose with tissue or handkerchief.',
                                        'created_at' => '2023-08-29 10:13:27',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    387 => 
                                    array (
                                        'id' => 388,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يغلق ويقفل الباب قبل استخدام الحمامات العامة.',
                                        'name_en' => 'Closes and locks the door before using public restrooms.',
                                        'created_at' => '2023-08-29 10:13:52',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    388 => 
                                    array (
                                        'id' => 389,
                                        'abas_sub_domain_id' => 17,
                                        'name' => '. يستحم يوميا',
                                        'name_en' => '. Bathes daily',
                                        'created_at' => '2023-08-29 10:29:05',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    389 => 
                                    array (
                                        'id' => 390,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يعلق الملابس  قبل الخروج من الحمام.',
                                        'name_en' => 'Fastens and straightens clothing before leaving restroom.',
                                        'created_at' => '2023-08-29 12:08:28',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    390 => 
                                    array (
                                        'id' => 391,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'ينظف نفسه  إذا كان موحلاً أو متسخًا.',
                                        'name_en' => 'Cleans or brushes himself or herself off if muddy or dirty.',
                                        'created_at' => '2023-08-29 12:09:07',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    391 => 
                                    array (
                                        'id' => 392,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يربط حذائه بنفسه.',
                                        'name_en' => 'Ties his or her own shoes.',
                                        'created_at' => '2023-08-29 12:09:26',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    392 => 
                                    array (
                                        'id' => 393,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يرتدي مجموعة متنوعة من الملابس، بدلًا من نفس الملابس أو ملابس مشابهة في معظم الأيام.',
                                        'name_en' => 'Wears a variety of clothes, instead of the same or similar clothes  most days.',
                                        'created_at' => '2023-08-29 12:10:30',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    393 => 
                                    array (
                                        'id' => 394,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يتناول مجموعة متنوعة من الأطعمة بدلاً من تفضيل نوع واحد أو اثنين فقط.',
                                        'name_en' => 'Eats a variety of foods instead of preferring only one or two.',
                                        'created_at' => '2023-08-29 12:11:05',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    394 => 
                                    array (
                                        'id' => 395,
                                        'abas_sub_domain_id' => 17,
                                    'name' => 'التحقق من ملابسه ومظهره قبل مغادرة المنزل (على سبيل المثال، أن يكون شعره مرتبًا وأن حذائه مربوط).',
                                    'name_en' => 'Checks his or her clothing and appearance before leaving home (for  example, that hair is tidy and shoes are tied).',
                                        'created_at' => '2023-08-29 12:12:28',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    395 => 
                                    array (
                                        'id' => 396,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يستخدم الحمامات العامة بمفرده.',
                                        'name_en' => 'Uses public restroom alone.',
                                        'created_at' => '2023-08-29 12:12:49',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    396 => 
                                    array (
                                        'id' => 397,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يغسل شعره بنفسه.',
                                        'name_en' => 'Washes his or her own hair.',
                                        'created_at' => '2023-08-29 12:13:04',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    397 => 
                                    array (
                                        'id' => 398,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يوازن بين الماء الساخن والبارد للاستحمام أو الحمام.',
                                        'name_en' => 'Combines hot and cold water for a shower or bath.',
                                        'created_at' => '2023-08-29 12:14:18',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    398 => 
                                    array (
                                        'id' => 399,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يتناول الطعام أو  الوجبات الخفيفة  التي تعزز اتباع نظام غذائي صحي.',
                                        'name_en' => 'Eats meals and snacks that promote a healthy diet.',
                                        'created_at' => '2023-08-29 12:17:04',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 21,
                                    ),
                                    399 => 
                                    array (
                                        'id' => 400,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يخرج من السرير في الوقت المحدد بنفسه.',
                                        'name_en' => 'Gets out of bed on time by himself or herself.',
                                        'created_at' => '2023-08-29 12:17:48',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 22,
                                    ),
                                    400 => 
                                    array (
                                        'id' => 401,
                                        'abas_sub_domain_id' => 17,
                                        'name' => '. يقطع اللحوم أو الأطعمة الأخرى إلى قطع صغيرة الحجم بسكين.',
                                        'name_en' => '. Cuts meats or other foods into bite-size pieces with a knife.',
                                        'created_at' => '2023-08-29 12:18:19',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 23,
                                    ),
                                    401 => 
                                    array (
                                        'id' => 402,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'قص أوبرد أظافر يديه وأظافر قدميه بانتظام.',
                                        'name_en' => 'Cuts or files his or her own fingernails and toenails regularly.',
                                        'created_at' => '2023-08-29 12:20:21',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 24,
                                    ),
                                    402 => 
                                    array (
                                        'id' => 403,
                                        'abas_sub_domain_id' => 17,
                                        'name' => 'يحصل على قصات الشعر بانتظام من تلقاء نفسه.',
                                        'name_en' => 'Obtains haircuts regularly on his or her own.',
                                        'created_at' => '2023-08-29 12:20:58',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 25,
                                    ),
                                    403 => 
                                    array (
                                        'id' => 404,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يعمل بشكل مستقل ويطلب المساعدة فقط عند الضرورة.',
                                        'name_en' => 'Works independently and asks for help only when necessary.',
                                        'created_at' => '2023-08-31 07:48:45',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 1,
                                    ),
                                    404 => 
                                    array (
                                        'id' => 405,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يبقى ثابتًا عند الطلب منه ، دون العبث و التخريب  أو التحرك',
                                        'name_en' => 'Stands still when needed, without fidgeting or moving around',
                                        'created_at' => '2023-08-31 07:52:57',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    405 => 
                                    array (
                                        'id' => 406,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يعمل على نشاط منزلي أو مدرسي واحد لمدة 15 دقيقة على الأقل بدون تذكير.',
                                        'name_en' => 'Works on one home or school activity for at least 15 minutes without  reminders.',
                                        'created_at' => '2023-08-31 07:53:55',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    406 => 
                                    array (
                                        'id' => 407,
                                        'abas_sub_domain_id' => 18,
                                        'name' => '. يتحكم في أعصابه عند الاختلاف مع الأصدقاء.',
                                        'name_en' => '. Controls temper when disagreeing with friends',
                                        'created_at' => '2023-08-31 07:56:24',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    407 => 
                                    array (
                                        'id' => 408,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يمتنع عن الكذب هرباً من العقاب.',
                                        'name_en' => '. Refrains from telling a lie to escape punishment.',
                                        'created_at' => '2023-08-31 07:56:48',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    408 => 
                                    array (
                                        'id' => 409,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يكمل المهام التي يجب عليه  القيام بها، حتى المهام التي ليست ممتعة',
                                        'name_en' => 'Completes tasks that need to be done, even those that are not enjoyable',
                                        'created_at' => '2023-08-31 07:57:24',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
                                    ),
                                    409 => 
                                    array (
                                        'id' => 410,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يتحكم في خيبة الأمل عند إلغاء نشاط مفضل.',
                                        'name_en' => 'Controls disappointment when a favorite activity is canceled.',
                                        'created_at' => '2023-08-31 07:57:50',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    410 => 
                                    array (
                                        'id' => 411,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يوقف نشاطًا ممتعًا، دون شكوى، عندما تخبره بأن الوقت قد انتهى',
                                        'name_en' => 'Stops a fun activity, without complaining, when told that time is up',
                                        'created_at' => '2023-08-31 07:58:21',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    411 => 
                                    array (
                                        'id' => 412,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يسيطر على المشاعر عندما لا يحصل على ما يريده.',
                                        'name_en' => 'Controls feelings when not getting his or her own way.',
                                        'created_at' => '2023-08-31 07:58:42',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    412 => 
                                    array (
                                        'id' => 413,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يبدأ عملاً منزليًا على الفور عندما يُطلب منه ذلك.',
                                        'name_en' => 'Starts a household chore at once when told to do so.',
                                        'created_at' => '2023-08-31 08:00:59',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    413 => 
                                    array (
                                        'id' => 414,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يستمر في العمل على المهام الصعبة دون أن يصبح محبطًا أو يتوقف أو يحتاج إلى تذكيرات.',
                                        'name_en' => 'Keeps working on hard tasks without becoming discouraged, quitting, or needing reminders',
                                        'created_at' => '2023-08-31 08:01:35',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    414 => 
                                    array (
                                        'id' => 415,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يرفض عندما يطلب منه شخص آخر القيام بشيء أحمق أو سخيف',
                                        'name_en' => 'Refuses when another person asks him or her to do something foolish',
                                        'created_at' => '2023-08-31 08:02:25',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    415 => 
                                    array (
                                        'id' => 416,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يجعل الواجبات المدرسية أولوية على الأنشطة الترفيهية.',
                                        'name_en' => 'Makes schoolwork a priority over leisure activities.',
                                        'created_at' => '2023-08-31 08:03:31',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    416 => 
                                    array (
                                        'id' => 417,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يصل عادة إلى الأماكن في موعده.',
                                        'name_en' => 'Routinely arrives at places on time.',
                                        'created_at' => '2023-08-31 08:04:06',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    417 => 
                                    array (
                                        'id' => 418,
                                        'abas_sub_domain_id' => 18,
                                        'name' => '. يتجنب السلوك الذي قد يحرج أو يجلب العار لنفسه أو الأسرة.',
                                        'name_en' => '. Avoids behavior that could embarrass or bring shame to self or family.',
                                        'created_at' => '2023-08-31 08:04:52',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    418 => 
                                    array (
                                        'id' => 419,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يكمل الأعمال المنزلية أو المدرسية الكبيرة في الوقت المحدد.',
                                        'name_en' => 'Completes large home or school projects on time.',
                                        'created_at' => '2023-08-31 08:06:50',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    419 => 
                                    array (
                                        'id' => 420,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يعمل على نشاط منزلي أو مدرسي واحد لمدة ساعة واحدة على الأقل دون أن يتم تذكيره أو إعادة توجيه.',
                                        'name_en' => 'Works on one home or school activity for at least 1 hour without being  reminded or redirected.',
                                        'created_at' => '2023-08-31 08:07:31',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    420 => 
                                    array (
                                        'id' => 421,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يحد ويقلل  من الوقت الذي يقضيه في لعب ألعاب الكمبيوتر أو غيرها من الأنشطة غير المنتجة.',
                                        'name_en' => 'Limits time playing computer games or other nonproductive activities.',
                                        'created_at' => '2023-08-31 08:11:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    421 => 
                                    array (
                                        'id' => 422,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'عند مغادرة المنزل، يبلغ الآخرين بمكان ذهابه  ووقت عودته',
                                        'name_en' => 'When leaving home, informs others of destination and return time',
                                        'created_at' => '2023-08-31 08:13:28',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    422 => 
                                    array (
                                        'id' => 423,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يعود في الوقت المحدد عندما يُطلب منه العودة خلال ساعة واحدة',
                                        'name_en' => 'Returns on time when asked to be back in 1 hour',
                                        'created_at' => '2023-08-31 08:13:49',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    423 => 
                                    array (
                                        'id' => 424,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يجمع كل المعدات و الادوات  اللازمة قبل البدء في مشروع التنظيف أو الصيانة في المنزل.',
                                        'name_en' => 'Gathers all supplies needed before beginning a cleaning or maintenance  project at home.',
                                        'created_at' => '2023-08-31 08:14:26',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 21,
                                    ),
                                    424 => 
                                    array (
                                        'id' => 425,
                                        'abas_sub_domain_id' => 18,
                                    'name' => 'يتصل بعائلته أو الآخرين عندما يتأخر (على سبيل المثال، عند العودة إلى المنزل، أو حضور مناسبة اجتماعية، أو الوصول لتحديد موعد).',
                                    'name_en' => 'Calls family or others when he or she will be late (for example, in returning home, attending a social event, or arriving for an appointment).',
                                        'created_at' => '2023-08-31 08:15:50',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 22,
                                    ),
                                    425 => 
                                    array (
                                        'id' => 426,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'يضع خطط للمستقبل لإتاحة الوقت الكافي لإنجاز المشاريع الكبيرة.',
                                        'name_en' => 'Plans ahead to allow enough time to complete big projects.',
                                        'created_at' => '2023-08-31 08:16:17',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 23,
                                    ),
                                    426 => 
                                    array (
                                        'id' => 427,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'لا يتخذ قرارات مهمة إلا بعد دراسة متأنية، دون تسرع.',
                                        'name_en' => 'Makes important decisions only after careful consideration, without   rushing.',
                                        'created_at' => '2023-08-31 08:16:47',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 24,
                                    ),
                                    427 => 
                                    array (
                                        'id' => 428,
                                        'abas_sub_domain_id' => 18,
                                        'name' => 'تخطيط المشاريع المنزلية بخطوات منطقية.',
                                        'name_en' => 'Plans home projects in logical steps.',
                                        'created_at' => '2023-08-31 08:17:11',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 25,
                                    ),
                                    428 => 
                                    array (
                                        'id' => 429,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'لديه صديق أو أكثر.',
                                        'name_en' => 'Has one or more friends.',
                                        'created_at' => '2023-08-31 08:17:30',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 1,
                                    ),
                                    429 => 
                                    array (
                                        'id' => 430,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'لديه علاقات جيدة مع الوالدين وغيرهم من البالغين.',
                                        'name_en' => 'Has good relationships with parents and other adults.',
                                        'created_at' => '2023-08-31 08:17:49',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    430 => 
                                    array (
                                        'id' => 431,
                                        'abas_sub_domain_id' => 19,
                                        'name' => '- يضحك رداً على التعليقات أو النكات المضحكة.',
                                        'name_en' => 'Laughs in response to funny comments or jokes.',
                                        'created_at' => '2023-08-31 08:18:04',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    431 => 
                                    array (
                                        'id' => 432,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يقول "شكرًا لك" عند تقديم هدية.',
                                        'name_en' => 'ays “Thank you” when given a gift.',
                                        'created_at' => '2023-08-31 08:18:16',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    432 => 
                                    array (
                                        'id' => 433,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يحافظ على مجموعة ثابتة من الأصدقاء.',
                                        'name_en' => 'Keeps a stable group of friends.',
                                        'created_at' => '2023-08-31 08:19:27',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    433 => 
                                    array (
                                        'id' => 434,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يقول عندما يشعر بالسعادة أو الحزن أو الخوف أو الغضب.',
                                        'name_en' => 'Says when he or she feels happy, sad, scared, or angry.',
                                        'created_at' => '2023-08-31 08:21:42',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
                                    ),
                                    434 => 
                                    array (
                                        'id' => 435,
                                        'abas_sub_domain_id' => 19,
                                    'name' => 'يظهر الاحترام للأشخاص ذوي السلطة من خلال اتباع قواعدهم وتوجيهاتهم (على سبيل المثال، الآباء والمعلمين وضباط الشرطة)',
                                    'name_en' => 'Shows respect for persons in authority by following their rules and   directions (for example, parents, teachers, police officers)',
                                        'created_at' => '2023-08-31 08:22:28',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    435 => 
                                    array (
                                        'id' => 436,
                                        'abas_sub_domain_id' => 19,
                                    'name' => 'يقف على مسافة جيدة من الآخرين أثناء المحادثات (ليس قريبًا جدًا).',
                                    'name_en' => 'Stands a comfortable distance from others during conversations (not too close).',
                                        'created_at' => '2023-08-31 08:23:05',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    436 => 
                                    array (
                                        'id' => 437,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يظهر التعاطف مع الآخرين عندما يشعرون بالحزن أو الانزعاج.',
                                        'name_en' => 'Shows sympathy for others when they are sad or upset.',
                                        'created_at' => '2023-08-31 08:23:36',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    437 => 
                                    array (
                                        'id' => 438,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يقول "من فضلك" عندما يطلب شيئًا ما.',
                                        'name_en' => 'Says “Please” when asking for something.',
                                        'created_at' => '2023-08-31 08:23:59',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    438 => 
                                    array (
                                        'id' => 439,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'أن يكون محبوباً لدى الآخرين في مثل عمره.',
                                        'name_en' => 'Is well liked by others his or her age.',
                                        'created_at' => '2023-08-31 08:24:30',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    439 => 
                                    array (
                                        'id' => 440,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يعتذر إذا جرح مشاعر الآخرين.',
                                        'name_en' => 'Apologizes if he or she hurts the feelings of others.',
                                        'created_at' => '2023-08-31 08:24:51',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    440 => 
                                    array (
                                        'id' => 441,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يقدم المساعدة للآخرين.',
                                        'name_en' => 'Offers assistance to others.',
                                        'created_at' => '2023-08-31 08:25:10',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    441 => 
                                    array (
                                        'id' => 442,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يحاول إرضاء الآخرين من خلال القيام بشيء خاص أو مفاجأة لهم',
                                        'name_en' => 'Tries to please others by doing something special or giving them a surprise',
                                        'created_at' => '2023-08-31 08:25:30',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    442 => 
                                    array (
                                        'id' => 443,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يحافظ على الأصدقاء المقبولين لدى الوالدين.',
                                        'name_en' => 'Maintains friends who are acceptable to parents.',
                                        'created_at' => '2023-08-31 08:26:11',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    443 => 
                                    array (
                                        'id' => 444,
                                        'abas_sub_domain_id' => 19,
                                    'name' => 'يظهر آدابًا جيدة عند تناول الطعام (على سبيل المثال، باستخدام منديل والبقاء على المائدة حتى يتم السماح له بالمغادرة).',
                                    'name_en' => 'Displays good table manners (for example, by using a napkin and remaining  at the table until excused).',
                                        'created_at' => '2023-08-31 08:27:16',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    444 => 
                                    array (
                                        'id' => 445,
                                        'abas_sub_domain_id' => 19,
                                    'name' => 'تقديم عروض لإعارة الممتلكات للآخرين (على سبيل المثال، الملابس أو الأدوات).',
                                    'name_en' => 'Offers to lend belongings to others (for example, clothes or tools).',
                                        'created_at' => '2023-08-31 08:28:55',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    445 => 
                                    array (
                                        'id' => 446,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يختار اصدقائه بشكل جيد وحكيم',
                                        'name_en' => 'Shows good judgment in selecting friends.',
                                        'created_at' => '2023-08-31 08:30:54',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    446 => 
                                    array (
                                        'id' => 447,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يهنئ الآخرين عندما يحدث لهم شيء جيد.',
                                        'name_en' => 'Congratulates others when something good happens to them.',
                                        'created_at' => '2023-08-31 08:31:15',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    447 => 
                                    array (
                                        'id' => 448,
                                        'abas_sub_domain_id' => 19,
                                    'name' => 'يُظهر الاهتمام بالأطفال الأصغر سنًا (على سبيل المثال، التحدث معهم، أو مساعدتهم على تعلم مهام جديدة، أو مساعدتهم في تناول الطعام أو ارتداء الملابس).',
                                    'name_en' => 'Displays care toward younger children (for example, talks with them, helps  them learn new tasks, or assists them with eating or dressing).',
                                        'created_at' => '2023-08-31 08:31:45',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    448 => 
                                    array (
                                        'id' => 449,
                                        'abas_sub_domain_id' => 19,
                                    'name' => 'يفرض مطالب معقولة على الأصدقاء (على سبيل المثال، لا ينزعج عندما يلعب صديق مع صديق آخر).',
                                    'name_en' => 'Places reasonable demands on friends (for example, does not become  upset when a friend plays with another friend).',
                                        'created_at' => '2023-08-31 08:33:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 21,
                                    ),
                                    449 => 
                                    array (
                                        'id' => 450,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يمتنع عن قول أو فعل أشياء قد تحرج أو تؤذي الآخرين.',
                                        'name_en' => 'Refrains from saying or doing things that might embarrass or hurt others.',
                                        'created_at' => '2023-08-31 08:33:45',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 22,
                                    ),
                                    450 => 
                                    array (
                                        'id' => 451,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يتعرف على الطلبات غير المعقولة التي يطلبها شخص ما.',
                                        'name_en' => 'Recognizes when someone is making an unreasonable request.',
                                        'created_at' => '2023-08-31 08:35:10',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 23,
                                    ),
                                    451 => 
                                    array (
                                        'id' => 452,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يقوم شخصيًا بصنع أو شراء الهدايا لأفراد الأسرة في أعياد الميلاد أو الأعياد الكبرى',
                                        'name_en' => 'Personally makes or buys gifts for family members on birthdays or major holidays',
                                        'created_at' => '2023-08-31 08:36:24',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 24,
                                    ),
                                    452 => 
                                    array (
                                        'id' => 453,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يستمع إلى الأصدقاء أو أفراد الأسرة الذين يحتاجون إلى التحدث عن المشاكل',
                                        'name_en' => '. Listens to friends or family members who need to talk about problems',
                                        'created_at' => '2023-08-31 08:37:22',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 25,
                                    ),
                                    453 => 
                                    array (
                                        'id' => 454,
                                        'abas_sub_domain_id' => 19,
                                        'name' => 'يرسل ملاحظات شكر أو رسائل بريد إلكتروني بعد تلقي هدية أو مساعدة في مهمة مهمة.',
                                        'name_en' => 'Sends thank-you notes or emails after receiving a gift or help with an  important task.',
                                        'created_at' => '2023-08-31 08:37:55',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 26,
                                    ),
                                    454 => 
                                    array (
                                        'id' => 455,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يكمل مهام العمل ضمن الحدود الزمنية المطلوبة',
                                        'name_en' => 'Completes work assignments within required time limits',
                                        'created_at' => '2023-08-31 08:51:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 1,
                                    ),
                                    455 => 
                                    array (
                                        'id' => 456,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'تنظيف المكان بعد الانتهاء من العمل.',
                                        'name_en' => 'Cleans up area after completing work.',
                                        'created_at' => '2023-08-31 08:51:57',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    456 => 
                                    array (
                                        'id' => 457,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'إرجاع الأدوات والعناصر الأخرى المتعلقة بالعمل إلى مكانها الصحيح بعد استخدامها',
                                        'name_en' => 'Returns tools and other work-related items to their proper place after   using them',
                                        'created_at' => '2023-08-31 08:52:44',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    457 => 
                                    array (
                                        'id' => 458,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يُساعد العمال الآخرين في عملهم دون التدخّل في عمله الخاص.',
                                        'name_en' => 'Helps other workers with their work without interfering with his or her  own work.',
                                        'created_at' => '2023-08-31 08:53:58',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    458 => 
                                    array (
                                        'id' => 459,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يحافظ على العمل بكفاءة ودقة، حتى مع وجود ضوضاء عالية أو تشتيت الانتباه.',
                                        'name_en' => 'Keeps working efficiently and accurately, even with loud noises or   distractions.',
                                        'created_at' => '2023-08-31 08:55:03',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    459 => 
                                    array (
                                        'id' => 460,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يؤدي عملاً إضافيًا في الوظيفة عن برغبته',
                                        'name_en' => 'Performs extra work on the job willingly',
                                        'created_at' => '2023-08-31 08:55:58',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
                                    ),
                                    460 => 
                                    array (
                                        'id' => 461,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يطلب المساعدة من المشرف، حسب الحاجة، عند ظهور مشاكل أو أسئلة متعلقة بالعمل',
                                        'name_en' => 'Seeks help from supervisor, as needed, when work-related problems or  questions arise',
                                        'created_at' => '2023-08-31 08:56:25',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    461 => 
                                    array (
                                        'id' => 462,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يتاكد  من العمل الخاص لتحديد ما إذا كانت هناك حاجة إلى تحسينات.',
                                        'name_en' => 'Checks own work to determine if improvements are needed.',
                                        'created_at' => '2023-08-31 08:57:02',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    462 => 
                                    array (
                                        'id' => 463,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يظهر موقفا إيجابيا تجاه العمل',
                                        'name_en' => 'Shows a positive attitude toward job',
                                        'created_at' => '2023-08-31 08:57:40',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    463 => 
                                    array (
                                        'id' => 464,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يهز رأسه أو يقول "نعم" أو "لا" ردًا على سؤال بسيط (على سبيل المثال، "هل تريد أن تشرب شيئًا؟").',
                                    'name_en' => 'Shakes head or says “Yes” or “No” in response to a simple question (for  example, “Do you want something to drink?”).',
                                        'created_at' => '2023-08-31 08:58:04',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 1,
                                    ),
                                    464 => 
                                    array (
                                        'id' => 465,
                                        'abas_sub_domain_id' => 20,
                                        'name' => '- يعمل بهدوء دون إزعاج زملاء العمل.',
                                        'name_en' => 'Works quietly, without disturbing coworkers.',
                                        'created_at' => '2023-08-31 08:58:22',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    465 => 
                                    array (
                                        'id' => 466,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يسأل عن التوجيهات، حسب الحاجة، قبل بدء مهام العمل',
                                        'name_en' => 'Asks for directions, as needed, before beginning work tasks',
                                        'created_at' => '2023-08-31 09:01:27',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    466 => 
                                    array (
                                        'id' => 467,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يتبع تعليمات المشرف عند استكمال المهام أو الأنشطة.',
                                        'name_en' => 'Follows supervisor’s instructions when completing tasks or activities.',
                                        'created_at' => '2023-08-31 09:01:56',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    467 => 
                                    array (
                                        'id' => 468,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يذهب إلى العمل في الأوقات المحددة.',
                                        'name_en' => 'Goes to work at scheduled times.',
                                        'created_at' => '2023-08-31 09:02:17',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    468 => 
                                    array (
                                        'id' => 469,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'الانتقال و التغير  من مهمة مرتبطة بالوظيفة إلى أخرى دون تعليمات خاصة من المشرف.',
                                        'name_en' => 'Changes from one job-related task to another without special instructions   from supervisor.',
                                        'created_at' => '2023-08-31 09:10:19',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    469 => 
                                    array (
                                        'id' => 470,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يتبع جدول العمل اليومي دون تذكير من المشرف.',
                                        'name_en' => 'Follows daily work schedule without reminders from supervisor.',
                                        'created_at' => '2023-08-31 09:11:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    470 => 
                                    array (
                                        'id' => 471,
                                        'abas_sub_domain_id' => 20,
                                    'name' => 'يعمل بشكل أسرع في العمل حسب الحاجة (على سبيل المثال، للبقاء في الموعد المحدد أو الوفاء بالموعد النهائي).',
                                    'name_en' => 'Works faster on the job as needed (for example, to stay on schedule or  meet a deadline).',
                                        'created_at' => '2023-08-31 09:37:14',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    471 => 
                                    array (
                                        'id' => 472,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يتصرف بأمان في العمل حتى لا يتعرض أحد للأذى.',
                                        'name_en' => 'Behaves safely at work so that no one will be harmed.',
                                        'created_at' => '2023-08-31 09:37:41',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    472 => 
                                    array (
                                        'id' => 473,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يأخذ دروسًا أو يحصل على تدريب لتحسين مهارات العمل.',
                                        'name_en' => 'Takes classes or obtains training to improve work skills.',
                                        'created_at' => '2023-08-31 09:38:55',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    473 => 
                                    array (
                                        'id' => 474,
                                        'abas_sub_domain_id' => 20,
                                    'name' => 'تقديم اقتراحات للمشرفين (على سبيل المثال، كيفية الحصول على مكان عمل أكثر أمانًا وإنتاجية).',
                                    'name_en' => 'Makes suggestions to supervisors (for example, how to have a safer or more productive workplace).',
                                        'created_at' => '2023-08-31 09:39:38',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    474 => 
                                    array (
                                        'id' => 475,
                                        'abas_sub_domain_id' => 20,
                                        'name' => 'يدرب ويشرف على الآخرين في مكان العمل',
                                        'name_en' => 'Trains and supervises others in the workplace',
                                        'created_at' => '2023-08-31 09:40:18',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    475 => 
                                    array (
                                        'id' => 476,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'ينظر إلى الأعلى أو يبتسم عندما يقول شخص ما اسمه.',
                                        'name_en' => 'Looks up or smiles when someone says his or her name.',
                                        'created_at' => '2023-09-01 10:53:57',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 2,
                                    ),
                                    476 => 
                                    array (
                                        'id' => 477,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يقول كلمات مكونة من كلمتين على الأقل (على سبيل المثال، "كتابي").',
                                    'name_en' => 'Says phrases with at least two words (for example, “My book”).',
                                        'created_at' => '2023-09-01 10:54:31',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 3,
                                    ),
                                    477 => 
                                    array (
                                        'id' => 478,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يستخدم كلمة أو أكثر للحصول على شيء يريده، حتى لو لم يتم نطق الكلمة بشكل صحيح أو نطقها بشكل جيد.',
                                        'name_en' => 'Uses one or more words to get something he or she wants, even if the word   is not said correctly or pronounced well.',
                                        'created_at' => '2023-09-01 10:55:02',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 4,
                                    ),
                                    478 => 
                                    array (
                                        'id' => 479,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يشير إلى الاشياء الشائعة في الغرفة عندما يُطلب منك ذلك (على سبيل المثال، "أرني التلفزيون")',
                                    'name_en' => 'Points to common items in a room when asked (for example, “Show me   the TV”)',
                                        'created_at' => '2023-09-01 10:55:43',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 5,
                                    ),
                                    479 => 
                                    array (
                                        'id' => 480,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'ينظر إلى وجوه الآخرين عندما يتحدثون معه',
                                        'name_en' => 'Looks at other people’s faces when they are talking to him or her',
                                        'created_at' => '2023-09-01 10:56:07',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 6,
                                    ),
                                    480 => 
                                    array (
                                        'id' => 481,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يقول أسماء أشخاص آخرين (على سبيل المثال، أسماء المعلمين أو مقدمي الرعاية النهارية أو الأصدقاء).',
                                    'name_en' => 'Says the names of other people (for example, those of teachers, daycare providers, or friends).',
                                        'created_at' => '2023-09-01 10:56:41',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 7,
                                    ),
                                    481 => 
                                    array (
                                        'id' => 482,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يقول اسم الشيء بوضوح كافٍ حتى يتعرف عليه الآخرون (على سبيل المثال، "كرة"، "كلب"، "كوب").',
                                    'name_en' => 'Says the name of an object clearly enough that others recognize it (for  example, “ball,” “dog,” “cup”).',
                                        'created_at' => '2023-09-01 10:57:16',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 8,
                                    ),
                                    482 => 
                                    array (
                                        'id' => 483,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يضحك عندما يضحك شخص آخر.',
                                        'name_en' => 'Laughs when another person laughs.',
                                        'created_at' => '2023-09-01 10:57:50',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 9,
                                    ),
                                    483 => 
                                    array (
                                        'id' => 484,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يتبع الأوامر البسيطة (على سبيل المثال، "لا" أو "تعال هنا").',
                                    'name_en' => 'Follows simple commands (for example, “No” or “Come here”).',
                                        'created_at' => '2023-09-01 10:58:15',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 10,
                                    ),
                                    484 => 
                                    array (
                                        'id' => 485,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يسمي 20 شيئًا مألوفًا أو أكثر.',
                                        'name_en' => 'Names 20 or more familiar objects.',
                                        'created_at' => '2023-09-01 10:58:44',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 11,
                                    ),
                                    485 => 
                                    array (
                                        'id' => 486,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يتحدث بوضوح كافٍ حتى يتمكن الآخرون الذين لا يعرفونه من فهم معظم ما يقال.',
                                        'name_en' => 'Speaks clearly enough that others who do not know him or her can   understand most of what is said.',
                                        'created_at' => '2023-09-01 10:59:25',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 12,
                                    ),
                                    486 => 
                                    array (
                                        'id' => 487,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يتبع توجيهات بسيطة من خطوة واحدة تتضمن "فوق" أو "تحت" (على سبيل المثال، "ضع يديك فوق رأسك").',
                                    'name_en' => 'Follows simple, one-step directions that include “over” or “under” (for example, “Put your hands over your head”).',
                                        'created_at' => '2023-09-01 10:59:59',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 13,
                                    ),
                                    487 => 
                                    array (
                                        'id' => 488,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يستمع بشكل جيد لمدة دقيقة واحدة على الأقل عندما يتحدث الناس.',
                                        'name_en' => 'Listens closely for at least 1 minute when people talk.',
                                        'created_at' => '2023-09-01 11:01:07',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 14,
                                    ),
                                    488 => 
                                    array (
                                        'id' => 489,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'رفع وخفض الصوت للتعبير عن مشاعر أو احتياجات مختلفة.',
                                        'name_en' => 'Raises and lowers voice to express different feelings or needs.',
                                        'created_at' => '2023-09-01 11:01:37',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 15,
                                    ),
                                    489 => 
                                    array (
                                        'id' => 490,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يستخدم جمل بسيطة مع الاسم والفعل.',
                                        'name_en' => 'Uses simple sentences with a noun and verb.',
                                        'created_at' => '2023-09-01 11:02:02',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 16,
                                    ),
                                    490 => 
                                    array (
                                        'id' => 491,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يمتنع عن تكرار ما يقوله و اعادة الكلام اكثر من مرة.',
                                        'name_en' => 'Refrains from repeating what he or she says over and over again.',
                                        'created_at' => '2023-09-01 11:03:08',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 17,
                                    ),
                                    491 => 
                                    array (
                                        'id' => 492,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يغني اغنية بشكل كامل  أو جزء منها .',
                                        'name_en' => 'Sings all or part of the words to songs.',
                                        'created_at' => '2023-09-01 11:03:59',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 18,
                                    ),
                                    492 => 
                                    array (
                                        'id' => 493,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يقوم بجمع الكلمات  (على سبيل المثال، "أحذية"، "جوارب"، "كلاب").',
                                    'name_en' => 'Makes plurals of words by adding an -s (for example, “shoes,” “socks,” “dogs”).',
                                        'created_at' => '2023-09-01 11:04:36',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 19,
                                    ),
                                    493 => 
                                    array (
                                        'id' => 494,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يتحدث في جمل من ست كلمات أو أكثر.',
                                        'name_en' => 'Speaks in sentences of six or more words.',
                                        'created_at' => '2023-09-01 11:05:40',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 20,
                                    ),
                                    494 => 
                                    array (
                                        'id' => 495,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'يخبر المعلم أو مقدم الرعاية النهارية أو الأصدقاء أو غيرهم عن أنشطته المفضلة',
                                        'name_en' => 'Tells teacher, daycare provider, friends, or others about his or her favorite  activities',
                                        'created_at' => '2023-09-01 11:06:08',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 21,
                                    ),
                                    495 => 
                                    array (
                                        'id' => 496,
                                        'abas_sub_domain_id' => 21,
                                        'name' => '. يطرح أسئلة مثل "هل ستلعب معي؟"',
                                        'name_en' => '. Asks questions such as “Will you play with me?”',
                                        'created_at' => '2023-09-01 11:06:52',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 22,
                                    ),
                                    496 => 
                                    array (
                                        'id' => 497,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يستخدم زمن الماضي للحديث عن أحداث سابقة (على سبيل المثال، "بقيت في الداخل").',
                                    'name_en' => 'Uses past tense to talk about prior events (for example, “I stayed inside”).',
                                        'created_at' => '2023-09-01 11:07:20',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 23,
                                    ),
                                    497 => 
                                    array (
                                        'id' => 498,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'إجراء محادثة مع شخص آخر لمدة 3 دقائق على الأقل.',
                                        'name_en' => 'Has a conversation with another person for at least 3 minutes.',
                                        'created_at' => '2023-09-01 11:07:40',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 24,
                                    ),
                                    498 => 
                                    array (
                                        'id' => 499,
                                        'abas_sub_domain_id' => 21,
                                    'name' => 'يستخدم جمع التكسير الاسماء بشكل صحيح (قدم - أقدام و باب -أبواب جامع - جوامع)',
                                    'name_en' => 'Says irregular plural nouns correctly (for example, says “feet” instead of “foots” and “men” instead of “mans”).',
                                        'created_at' => '2023-09-01 11:13:56',
                                        'updated_at' => '2023-09-05 11:19:17',
                                        'question_number' => 25,
                                    ),
                                    499 => 
                                    array (
                                        'id' => 500,
                                        'abas_sub_domain_id' => 21,
                                        'name' => 'ينتظر حتى ينهي الآخرون ما يقولونه دون مقاطعة',
                                        'name_en' => 'Waits for others to finish what they are saying, without interrupting',
                                        'created_at' => '2023-09-01 11:14:24',
                                        'updated_at' => '2023-09-03 15:57:51',
                                        'question_number' => 26,
                                    ),
                                ));
        \DB::table('abas_questions')->insert(array (
            0 => 
            array (
                'id' => 501,
                'abas_sub_domain_id' => 22,
            'name' => 'يشير إلى جزء واحد على الأقل من الجسم عند سؤاله عنه (على سبيل المثال، "الرأس" أو "القدم").',
            'name_en' => 'Points to at least one body part when asked (for example, “head” or “leg”).',
                'created_at' => '2023-09-01 11:15:13',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 1,
            ),
            1 => 
            array (
                'id' => 502,
                'abas_sub_domain_id' => 22,
            'name' => 'يشير إلى الصور الموجودة في الكتب عند سؤاله (على سبيل المثال، يشير إلى حصان أو بقرة).',
            'name_en' => 'Points to pictures in books when asked (for example, points to a horse  or cow).',
                'created_at' => '2023-09-01 11:15:45',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 2,
            ),
            2 => 
            array (
                'id' => 503,
                'abas_sub_domain_id' => 22,
                'name' => 'يقلب صفحات الكتاب واحدة تلو الأخرى',
                'name_en' => 'Turns book pages one by one',
                'created_at' => '2023-09-01 11:16:19',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 3,
            ),
            3 => 
            array (
                'id' => 504,
                'abas_sub_domain_id' => 22,
                'name' => 'يذكر عمره بالسنوات عند سؤاله.',
                'name_en' => 'States his or her age in years when asked.',
                'created_at' => '2023-09-01 11:16:58',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 4,
            ),
            4 => 
            array (
                'id' => 505,
                'abas_sub_domain_id' => 22,
                'name' => '. يقوم بعد ثلاثة أشياء أو أكثر',
                'name_en' => '. Counts three or more objects',
                'created_at' => '2023-09-01 11:17:49',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 5,
            ),
            5 => 
            array (
                'id' => 506,
                'abas_sub_domain_id' => 22,
            'name' => 'محاولات تقليد الرسومات البسيطة (على سبيل المثال، نسخ خط أو دائرة).',
            'name_en' => 'Attempts to imitate simple drawings (for example, copying a line or circle).',
                'created_at' => '2023-09-01 11:18:28',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 6,
            ),
            6 => 
            array (
                'id' => 507,
                'abas_sub_domain_id' => 22,
                'name' => 'فرز ثلاثة اشياء أو أكثر حسب اللون',
                'name_en' => 'Sorts three or more objects by color',
                'created_at' => '2023-09-01 11:19:16',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 7,
            ),
            7 => 
            array (
                'id' => 508,
                'abas_sub_domain_id' => 22,
                'name' => 'يغني أغنية الأبجدية.',
                'name_en' => 'Sings the alphabet song.',
                'created_at' => '2023-09-01 11:19:32',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 8,
            ),
            8 => 
            array (
                'id' => 509,
                'abas_sub_domain_id' => 22,
                'name' => 'يذكر ستة ألوان أو أكثر، بما في ذلك الأحمر والأزرق والأصفر.',
                'name_en' => 'Names six or more colors, including red, blue, and yellow.',
                'created_at' => '2023-09-01 11:19:55',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 9,
            ),
            9 => 
            array (
                'id' => 510,
                'abas_sub_domain_id' => 22,
            'name' => 'تسمية أربعة أشكال أو أكثر (على سبيل المثال، دائرة، مربع، مستطيل، مثلث)',
            'name_en' => 'Names four or more shapes (for example, circle, square, rectangle,  triangle)',
                'created_at' => '2023-09-01 11:20:27',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 10,
            ),
            10 => 
            array (
                'id' => 511,
                'abas_sub_domain_id' => 22,
            'name' => 'فرز ثلاثة أشياء أو أكثر حسب الحجم (على سبيل المثال، من الأكبر إلى الأصغر)',
            'name_en' => 'Sorts three or more objects by size (for example, from largest to smallest)',
                'created_at' => '2023-09-01 11:20:58',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 11,
            ),
            11 => 
            array (
                'id' => 512,
                'abas_sub_domain_id' => 22,
                'name' => 'يسمي  حرفين على الأقل عندما يظهر اسمه.',
                'name_en' => 'Names at least two letters when shown his or her name.',
                'created_at' => '2023-09-01 11:21:45',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 12,
            ),
            12 => 
            array (
                'id' => 513,
                'abas_sub_domain_id' => 22,
                'name' => 'يقرأ أغاني الأطفال من الذاكرة',
                'name_en' => '. Recites nursery rhymes from memory',
                'created_at' => '2023-09-01 11:22:13',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 13,
            ),
            13 => 
            array (
                'id' => 514,
                'abas_sub_domain_id' => 22,
                'name' => 'يقرأ اسمه عند طباعته.',
                'name_en' => 'Reads his or her name when printed.',
                'created_at' => '2023-09-01 11:22:34',
                'updated_at' => '2023-09-05 11:21:46',
                'question_number' => 14,
            ),
            14 => 
            array (
                'id' => 515,
                'abas_sub_domain_id' => 22,
                'name' => 'يجيب على أسئلة بسيطة حول قصة مقروءة له.',
                'name_en' => 'Answers simple questions about a story read to him or her.',
                'created_at' => '2023-09-01 11:25:34',
                'updated_at' => '2023-09-05 11:21:58',
                'question_number' => 15,
            ),
            15 => 
            array (
                'id' => 516,
                'abas_sub_domain_id' => 22,
                'name' => 'يرسم وجهًا بشكل واضح يتضمن عينين وأنفًا وفمًا وشعرًا.',
                'name_en' => 'Draws a recognizable face that includes two eyes, a nose, a mouth, and hair.',
                'created_at' => '2023-09-01 11:26:12',
                'updated_at' => '2023-09-05 11:22:12',
                'question_number' => 16,
            ),
            16 => 
            array (
                'id' => 517,
                'abas_sub_domain_id' => 22,
                'name' => 'يكتب  حرفين على الأقل باسمه',
                'name_en' => 'Prints at least two letters in his or her name',
                'created_at' => '2023-09-01 11:26:33',
                'updated_at' => '2023-09-05 11:22:27',
                'question_number' => 17,
            ),
            17 => 
            array (
                'id' => 518,
                'abas_sub_domain_id' => 22,
                'name' => 'يعد 10 أشياء أو أكثر دون استخدام الأصابع.',
                'name_en' => 'Counts 10 or more objects without using fingers.',
                'created_at' => '2023-09-01 11:27:02',
                'updated_at' => '2023-09-05 11:22:38',
                'question_number' => 18,
            ),
            18 => 
            array (
                'id' => 519,
                'abas_sub_domain_id' => 22,
                'name' => '. يسمي معظم الحروف عندما تعرض عليه',
                'name_en' => '. Names most letters when shown the alphabet',
                'created_at' => '2023-09-01 11:27:33',
                'updated_at' => '2023-09-05 11:23:09',
                'question_number' => 19,
            ),
            19 => 
            array (
                'id' => 520,
                'abas_sub_domain_id' => 22,
                'name' => 'الأعداد من 1 إلى 20.',
                'name_en' => 'Counts from 1 to 20.',
                'created_at' => '2023-09-01 11:28:05',
                'updated_at' => '2023-09-05 11:23:23',
                'question_number' => 20,
            ),
            20 => 
            array (
                'id' => 521,
                'abas_sub_domain_id' => 22,
                'name' => 'يذكر أيام الأسبوع بالترتيب',
                'name_en' => 'States the days of the week in order',
                'created_at' => '2023-09-01 11:28:25',
                'updated_at' => '2023-09-05 11:23:42',
                'question_number' => 21,
            ),
            21 => 
            array (
                'id' => 522,
                'abas_sub_domain_id' => 22,
            'name' => 'يقرأ ويلتزم بالإشارات الشائعة (على سبيل المثال، عدم الدخول، الخروج، التوقف).',
            'name_en' => 'Reads and obeys common signs (for example, Do Not Enter, Exit, Stop).',
                'created_at' => '2023-09-01 11:28:47',
                'updated_at' => '2023-09-05 11:24:40',
                'question_number' => 22,
            ),
            22 => 
            array (
                'id' => 523,
                'abas_sub_domain_id' => 22,
            'name' => 'يوضح أي يوم يأتي قبل يوم آخر (على سبيل المثال، "الأربعاء يأتي قبل الخميس").',
            'name_en' => 'Tells which day comes before another (for example, “Wednesday comes  before Thursday”).',
                'created_at' => '2023-09-01 11:29:15',
                'updated_at' => '2023-09-05 11:24:28',
                'question_number' => 23,
            ),
            23 => 
            array (
                'id' => 524,
                'abas_sub_domain_id' => 22,
                'name' => 'يكتب الأرقام من 1 إلى 10 بشكل صحيح.',
                'name_en' => 'Writes numbers 1 through 10 correctly.',
                'created_at' => '2023-09-01 11:29:31',
                'updated_at' => '2023-09-05 11:24:16',
                'question_number' => 24,
            ),
            24 => 
            array (
                'id' => 525,
                'abas_sub_domain_id' => 22,
                'name' => 'يكتب أو يطبع اسمه الأول والأخير.',
                'name_en' => 'Writes or prints his or her first and last name.',
                'created_at' => '2023-09-01 11:29:49',
                'updated_at' => '2023-09-05 11:23:57',
                'question_number' => 25,
            ),
            25 => 
            array (
                'id' => 526,
                'abas_sub_domain_id' => 23,
                'name' => 'يختار ويستخدم لعبة أو كتابًا من أحد الأرفف في الحضانة أو الفصل الدراسي',
                'name_en' => 'Selects and uses a toy or book from a shelf in daycare or classroom',
                'created_at' => '2023-09-03 08:30:10',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 1,
            ),
            26 => 
            array (
                'id' => 527,
                'abas_sub_domain_id' => 23,
                'name' => 'يشير إلى المكان الذي يتم فيه تخزين أغراضه الشخصية في الفصل الدراسي أو الحضانة',
                'name_en' => 'Points to the place where his or her belongings are stored in the classroom  or daycare',
                'created_at' => '2023-09-03 08:31:33',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 2,
            ),
            27 => 
            array (
                'id' => 528,
                'abas_sub_domain_id' => 23,
                'name' => 'يخرج الاطعمة مثل  البسكويت  أو رقائق البطاطس أو غيرها  من الصندوق أو الحقيبة',
                'name_en' => 'Removes cookies, chips, or other food from a box or bag',
                'created_at' => '2023-09-03 08:34:41',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 3,
            ),
            28 => 
            array (
                'id' => 529,
                'abas_sub_domain_id' => 23,
            'name' => 'يُظهر القلق عندما يسكب شيئًا ما (على سبيل المثال، يقول "أوه لا" أو يخبر شخصًا بالغًا).',
            'name_en' => 'Shows concern when he or she spills something (for example, says “Oh no”   or tells an adult).',
                'created_at' => '2023-09-03 08:59:22',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 4,
            ),
            29 => 
            array (
                'id' => 530,
                'abas_sub_domain_id' => 23,
                'name' => 'يذهب إلى الكرسي أو المكان المخصص له في الغرفة عند وصوله إلى الحضانة أو المدرسة',
                'name_en' => 'Goes to his or her assigned chair or place in the room when arriving at  daycare or school',
                'created_at' => '2023-09-03 08:59:59',
                'updated_at' => '2023-09-03 15:57:51',
                'question_number' => 5,
            ),
            30 => 
            array (
                'id' => 531,
                'abas_sub_domain_id' => 23,
                'name' => 'يقوم بمهمة بسيطة عندما يُطلب منه ذلك (على سبيل المثال، ان يغلق باب الخرفة الصفية أو ان يحضر القلم عن الطاولة',
                'name_en' => 'Does a simple errand when asked (for example, runs to get a towel for a spill)',
                    'created_at' => '2023-09-03 09:02:23',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 6,
                ),
                31 => 
                array (
                    'id' => 532,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يمتنع عن كسر أو تمزيق الألعاب أو الكتب في الفصل الدراسي أو الحضانة.',
                    'name_en' => 'Refrains from breaking or tearing toys or books in the classroom or daycare.',
                    'created_at' => '2023-09-03 09:02:52',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 7,
                ),
                32 => 
                array (
                    'id' => 533,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يساعد الآخرين في وضع الألعاب والأشياء الأخرى جانبًا.',
                    'name_en' => 'Assists others with putting away toys, games, and other items.',
                    'created_at' => '2023-09-03 09:03:24',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 8,
                ),
                33 => 
                array (
                    'id' => 534,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يلتقط ويرمي القمامة.',
                    'name_en' => 'Picks up and throws away trash.',
                    'created_at' => '2023-09-03 09:03:54',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 9,
                ),
                34 => 
                array (
                    'id' => 535,
                    'abas_sub_domain_id' => 23,
                    'name' => '- الامتناع عن رمي الطعام أو الورق على الأرض.',
                    'name_en' => 'Refrains from throwing food or paper on the floor.',
                    'created_at' => '2023-09-03 09:04:15',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 10,
                ),
                35 => 
                array (
                    'id' => 536,
                    'abas_sub_domain_id' => 23,
                    'name' => 'غسل اليدين دون رش الماء على الأرض.',
                    'name_en' => 'Washes hands without splashing water on the floor.',
                    'created_at' => '2023-09-03 09:04:40',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 11,
                ),
                36 => 
                array (
                    'id' => 537,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يُعلق المعطف أو السترة في المكان المناسب.',
                    'name_en' => 'Hangs coat or sweater in the proper place.',
                    'created_at' => '2023-09-03 09:18:51',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 12,
                ),
                37 => 
                array (
                    'id' => 538,
                    'abas_sub_domain_id' => 23,
                    'name' => 'الانتقال بسهولة من نشاط مدرسي إلى آخر.',
                    'name_en' => 'Transitions easily from one school activity to the next.',
                    'created_at' => '2023-09-03 09:19:27',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 13,
                ),
                38 => 
                array (
                    'id' => 539,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يساعد في الحفاظ على نظافة الفصل الدراسي أو الرعاية النهارية.',
                    'name_en' => 'Helps keep classroom or daycare neat and clean.',
                    'created_at' => '2023-09-03 09:19:44',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 14,
                ),
                39 => 
                array (
                    'id' => 540,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يزيل الصينية أو الطبق والأشياء الأخرى  عند الانتهاء من تناول الطعام في المدرسة أو الحضانة.',
                    'name_en' => 'Removes tray or plate and other items from the table when finished eating at school or daycare.',
                    'created_at' => '2023-09-03 09:20:33',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 15,
                ),
                40 => 
                array (
                    'id' => 541,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يضع الأشياء في أماكنها الصحيحة عند الانتهاء من استخدامها.',
                    'name_en' => 'Puts things in their proper places when finished using them.',
                    'created_at' => '2023-09-03 09:20:53',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 16,
                ),
                41 => 
                array (
                    'id' => 542,
                    'abas_sub_domain_id' => 23,
                    'name' => 'ضع الصواني والأطباق والشوك وغيرها من العناصر المتسخة فيأماكنها  الصحيحة في غرفة الغداء بالمدرسة أو الرعاية النهارية.',
                    'name_en' => 'Places dirty trays, plates, forks, and other items in correct disposal bins in   the school or daycare lunchroom.',
                    'created_at' => '2023-09-03 09:21:37',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 17,
                ),
                42 => 
                array (
                    'id' => 543,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يساعد المعلم أو مقدم الرعاية النهارية في تحريك الكراسي أو توزيع الادوات و  المهام الأخرى عند الطلب.',
                    'name_en' => 'Assists teacher or daycare provider with moving chairs, distributing   supplies, or other tasks, when asked.',
                    'created_at' => '2023-09-03 09:26:54',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 18,
                ),
                43 => 
                array (
                    'id' => 544,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يحافظ على الألعاب  والممتلكات الأخرى مرتبة ونظيفة.',
                    'name_en' => 'Keeps toys, games, and other belongings neat and clean.',
                    'created_at' => '2023-09-03 09:27:30',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 19,
                ),
                44 => 
                array (
                    'id' => 545,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يمسح الماء او العصير الذي يسكب منه  في المدرسة أو الرعاية النهارية',
                    'name_en' => 'Wipes up spills at school or daycare',
                    'created_at' => '2023-09-03 09:33:46',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 20,
                ),
                45 => 
                array (
                    'id' => 546,
                    'abas_sub_domain_id' => 23,
                    'name' => 'إبلاغ المعلم أو أي شخص بالغ آخر إذا كان شخص ما يتنمر عليه أو يؤذيه أو يؤذي الآخرين.',
                    'name_en' => 'Informs a teacher or other adult if someone is bullying or hurting him or her  or others.',
                    'created_at' => '2023-09-03 09:34:30',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 21,
                ),
                46 => 
                array (
                    'id' => 547,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يعمل بهدوء داخل الفصل دون إزعاج الآخرين.',
                    'name_en' => 'Works quietly in the classroom without disturbing others.',
                    'created_at' => '2023-09-03 09:34:55',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 22,
                ),
                47 => 
                array (
                    'id' => 548,
                    'abas_sub_domain_id' => 23,
                    'name' => 'يحافظ على تركيزه وعمله، حتى في البيئات المدرسية الصاخبة.',
                    'name_en' => 'Remains focused and working, even in noisy school settings.',
                    'created_at' => '2023-09-03 09:35:16',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 23,
                ),
                48 => 
                array (
                    'id' => 549,
                    'abas_sub_domain_id' => 23,
                    'name' => 'إحضار الكتب و الأدوات اللازمة.',
                    'name_en' => 'Brings needed books and supplies.',
                    'created_at' => '2023-09-03 09:36:06',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 24,
                ),
                49 => 
                array (
                    'id' => 550,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يتجنب الاصطدام بالجدران أو الأشياء عند الزحف أو المشي.',
                    'name_en' => 'Avoids bumping into walls or objects when crawling or walking.',
                    'created_at' => '2023-09-03 09:48:58',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 1,
                ),
                50 => 
                array (
                    'id' => 551,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يُظهر أو يشير إلى أو يخبر شخصًا آخر عن جرح أو كدمة أو إصابة طفيفة أخرى.',
                    'name_en' => 'Shows, points to, or tells another person about a cut, bruise, or other minor injury.',
                    'created_at' => '2023-09-03 09:50:44',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 2,
                ),
                51 => 
                array (
                    'id' => 552,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يتصرف بالذهول أو الدهشة عندما يسمع صوتًا عاليًا جدًا.',
                    'name_en' => 'Acts startled or surprised when he or she hears a very loud sound.',
                    'created_at' => '2023-09-03 09:51:16',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 3,
                ),
                52 => 
                array (
                    'id' => 553,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يبكي أو يتذمر عندما لا يشعر بأنه على ما يرام أو عندما يتعرض لإصابة.',
                    'name_en' => 'Cries or whimpers when he or she does not feel well or is injured.',
                    'created_at' => '2023-09-03 09:51:42',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 4,
                ),
                53 => 
                array (
                    'id' => 554,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يشير إلى الجزء الذي يؤلمه عندما يكون مريضًا أو مصابًا.',
                    'name_en' => 'Points to the body part that hurts when he or she is sick or injured.',
                    'created_at' => '2023-09-03 09:52:41',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 5,
                ),
                54 => 
                array (
                    'id' => 555,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يتبع توجيهات شخص آخر "للتوقف" عند الاقتراب من خطر، مثل النار أو الزجاج المكسور.',
                    'name_en' => 'Follows another person’s direction to “stop” when near danger, such as fire or broken glass.',
                    'created_at' => '2023-09-03 09:54:33',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 6,
                ),
                55 => 
                array (
                    'id' => 556,
                    'abas_sub_domain_id' => 24,
                'name' => 'الامتناع عن وضع أشياء غير صالحة للأكل في الفم (مثل أقلام التلوين والاحجار  والرمل).',
                'name_en' => 'Refrains from putting non-edible objects in mouth (for example, crayons,  blocks, sand).',
                    'created_at' => '2023-09-03 10:04:41',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 7,
                ),
                56 => 
                array (
                    'id' => 557,
                    'abas_sub_domain_id' => 15,
                    'name' => 'يجلس بشكل ثابت على الكرسي العالي أو مقعد الاطفال أو الكرسي دون التسلق أو الانزلاق',
                    'name_en' => 'Sits still in high chair, booster seat, or chair without climbing or sliding off',
                    'created_at' => '2023-09-03 10:09:25',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 21,
                ),
                57 => 
                array (
                    'id' => 558,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يجلس بشكل ثابت على الكرسي العالي أو مقعد الاطفال أو الكرسي دون التسلق أو الانزلاق',
                    'name_en' => 'Sits still in high chair, booster seat, or chair without climbing or sliding off',
                    'created_at' => '2023-09-03 10:10:05',
                    'updated_at' => '2023-09-07 08:38:02',
                    'question_number' => 8,
                ),
                58 => 
                array (
                    'id' => 559,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يتصرف بشكل غير مقبول أو يثير ضجة عندما يكون الجو حارًا جدًا أو باردًا جدًا.',
                    'name_en' => 'Acts uncomfortable or fusses when too hot or too cold',
                    'created_at' => '2023-09-03 10:10:25',
                    'updated_at' => '2023-09-07 08:38:38',
                    'question_number' => 9,
                ),
                59 => 
                array (
                    'id' => 560,
                    'abas_sub_domain_id' => 15,
                    'name' => 'يخبر شخصًا بالغًا إذا كان يعاني من آلام في المعدة أو مرض آخر.',
                    'name_en' => 'Tells an adult if he or she has a stomachache or other illness.',
                    'created_at' => '2023-09-03 10:10:54',
                    'updated_at' => '2023-09-03 15:57:51',
                    'question_number' => 22,
                ),
                60 => 
                array (
                    'id' => 561,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يمتنع عن وضع الألعاب في فمه',
                    'name_en' => 'Refrains from putting toys in his or her mouth',
                    'created_at' => '2023-09-03 10:12:25',
                    'updated_at' => '2023-09-07 08:39:05',
                    'question_number' => 10,
                ),
                61 => 
                array (
                    'id' => 562,
                    'abas_sub_domain_id' => 24,
                'name' => 'يخبر شخصًا بالغًا إذا كان شخص آخر في مشكلة (على سبيل المثال، إذا سقط طفل آخر).',
                    'name_en' => 'Tells an adult if he or she has a stomachache or other illness.',
                    'created_at' => '2023-09-03 10:13:04',
                    'updated_at' => '2023-09-07 08:40:02',
                    'question_number' => 11,
                ),
                62 => 
                array (
                    'id' => 563,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يبقى على مرأى من المعلم أو مقدم الرعاية النهارية أو غيرهم من البالغين المألوفين في مكان عام دون التجول',
                    'name_en' => 'Stays within sight of teacher, daycare provider, or other familiar adults in a public place without wandering off.',
                    'created_at' => '2023-09-03 10:13:43',
                    'updated_at' => '2023-09-07 08:40:55',
                    'question_number' => 12,
                ),
                63 => 
                array (
                    'id' => 564,
                    'abas_sub_domain_id' => 24,
                'name' => 'يخبر شخصًا بالغًا إذا كان شخص آخر في مشكلة (على سبيل المثال، إذا سقط طفل آخر).',
                'name_en' => 'Tells an adult if someone else is in trouble (for example, if another child has fallen down).',
                    'created_at' => '2023-09-03 10:17:05',
                    'updated_at' => '2023-09-07 08:42:22',
                    'question_number' => 13,
                ),
                64 => 
                array (
                    'id' => 565,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يرتدي معطفًا أو سترة عندما يكون الجو باردًا',
                    'name_en' => 'Puts on a coat or sweater when cold',
                    'created_at' => '2023-09-03 10:17:29',
                    'updated_at' => '2023-09-07 08:47:47',
                    'question_number' => 14,
                ),
                65 => 
                array (
                    'id' => 566,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يتبع قواعد السلامة الخاصة بأجهزة إنذار الحريق في المدرسة أو الرعاية النهارية',
                    'name_en' => 'Follows safety rules for fire or weather alarms at school or daycare',
                    'created_at' => '2023-09-03 10:18:08',
                    'updated_at' => '2023-09-07 08:43:37',
                    'question_number' => 15,
                ),
                66 => 
                array (
                    'id' => 567,
                    'abas_sub_domain_id' => 11,
                    'name' => 'sfzsc cvdv',
                    'name_en' => 'gnvhghghghgjg',
                    'created_at' => '2023-09-03 13:12:01',
                    'updated_at' => '2023-09-03 15:57:50',
                    'question_number' => 25,
                ),
                67 => 
                array (
                    'id' => 568,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يتبع قواعد السلامة في الحديقة أو الملعب.',
                    'name_en' => 'Follows safety rules at a park or playground',
                    'created_at' => '2023-09-06 11:18:58',
                    'updated_at' => '2023-09-07 08:44:27',
                    'question_number' => 16,
                ),
                68 => 
                array (
                    'id' => 569,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يحمل الأشياء القابلة للكسر بأمان وحذر.',
                    'name_en' => 'Carries breakable objects safely and carefully.',
                    'created_at' => '2023-09-07 08:52:04',
                    'updated_at' => '2023-09-07 08:52:04',
                    'question_number' => 17,
                ),
                69 => 
                array (
                    'id' => 570,
                    'abas_sub_domain_id' => 24,
                'name' => 'يسأل المعلم أو مقدم الرعاية النهارية قبل الاقتراب من شيء قد يكون خطيرًا (على سبيل المثال، الحيوانات أو معدات الملعب).',
                'name_en' => 'Asks a teacher or daycare provider before going near something that might   be dangerous (for example, animals or playground equipment).',
                    'created_at' => '2023-09-07 08:52:40',
                    'updated_at' => '2023-09-07 08:52:40',
                    'question_number' => 18,
                ),
                70 => 
                array (
                    'id' => 571,
                    'abas_sub_domain_id' => 24,
                    'name' => 'يحمل المقص بأمان',
                    'name_en' => 'Carries scissors safely',
                    'created_at' => '2023-09-07 08:53:03',
                    'updated_at' => '2023-09-07 08:53:03',
                    'question_number' => 19,
                ),
                71 => 
                array (
                    'id' => 572,
                    'abas_sub_domain_id' => 24,
                'name' => 'يهتم بإصاباته الطفيفة (على سبيل المثال، جروح ، وخدوش الركبة، ونزيف الأنف).',
                'name_en' => 'Cares for own minor injuries (for example, paper cuts, knee scrapes,   nosebleeds).',
                    'created_at' => '2023-09-07 08:53:39',
                    'updated_at' => '2023-09-07 08:53:39',
                    'question_number' => 20,
                ),
                72 => 
                array (
                    'id' => 573,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يبتسم أو يظهر اهتمامًا عندما يرى لعبته المفضلة.',
                    'name_en' => 'Smiles or shows interest when he or she sees a favorite toy.',
                    'created_at' => '2023-09-07 08:54:12',
                    'updated_at' => '2023-09-07 08:54:12',
                    'question_number' => 1,
                ),
                73 => 
                array (
                    'id' => 574,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يُظهر الاهتمام بلعبة أو أي شيء آخر من خلال الإشارة إليه',
                    'name_en' => 'Shows interest in a toy or other object by pointing to it',
                    'created_at' => '2023-09-07 09:12:59',
                    'updated_at' => '2023-09-07 09:12:59',
                    'question_number' => 2,
                ),
                74 => 
                array (
                    'id' => 575,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يختار لعبة  أثناء وقت اللعب.',
                    'name_en' => 'Chooses a game or toy during playtime.',
                    'created_at' => '2023-09-07 09:13:30',
                    'updated_at' => '2023-09-07 09:13:30',
                    'question_number' => 3,
                ),
                75 => 
                array (
                    'id' => 576,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يزحف أو يمشي خلف كرة أو لعبة أخرى.',
                    'name_en' => 'Crawls or walks after a ball or other toy.',
                    'created_at' => '2023-09-07 09:14:11',
                    'updated_at' => '2023-09-07 09:14:11',
                    'question_number' => 4,
                ),
                76 => 
                array (
                    'id' => 577,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يلعب بلعبة  واحدة لمدة دقيقة واحدة على الأقل.',
                    'name_en' => 'Plays with a single toy or game for at least 1 minute.',
                    'created_at' => '2023-09-07 09:14:40',
                    'updated_at' => '2023-09-07 09:14:40',
                    'question_number' => 5,
                ),
                77 => 
                array (
                    'id' => 578,
                    'abas_sub_domain_id' => 25,
                    'name' => 'ينظر مع شخص بالغ إلى الصور الموجودة في الكتب أو المجلات.',
                    'name_en' => 'Looks with an adult at pictures in books or magazines.',
                    'created_at' => '2023-09-07 09:15:08',
                    'updated_at' => '2023-09-07 09:15:08',
                    'question_number' => 6,
                ),
                78 => 
                array (
                    'id' => 579,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يلعب بمجموعة متنوعة من الألعاب بدلاً من لعبة واحدة أو اثنتين فقط.',
                    'name_en' => 'Plays with a variety of toys instead of only one or two.',
                    'created_at' => '2023-09-07 09:15:44',
                    'updated_at' => '2023-09-07 09:15:44',
                    'question_number' => 7,
                ),
                79 => 
                array (
                    'id' => 580,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يلعب على ارضية المعلب  تحت إشراف الكبار.؟؟',
                    'name_en' => 'Plays on playground equipment with adult supervision.',
                    'created_at' => '2023-09-07 09:16:26',
                    'updated_at' => '2023-09-07 09:22:16',
                    'question_number' => 8,
                ),
                80 => 
                array (
                    'id' => 581,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يراقب لبضع دقائق بينما يلعب الناس بالألعاب',
                    'name_en' => 'Watches for a few minutes as people play with toys or games',
                    'created_at' => '2023-09-07 09:33:27',
                    'updated_at' => '2023-09-07 09:33:27',
                    'question_number' => 9,
                ),
                81 => 
                array (
                    'id' => 582,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يلعب بمفرده بالدمى والألعاب، أو يقوم بأنشطة ممتعة أخرى',
                    'name_en' => 'Plays alone with toys and games, or does other fun activities',
                    'created_at' => '2023-09-07 09:33:52',
                    'updated_at' => '2023-09-07 09:33:52',
                    'question_number' => 10,
                ),
                82 => 
                array (
                    'id' => 583,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يلعب بالدمى أو الألعاب أو غيرها من الأشياء المسلية مع الآخرين.',
                    'name_en' => 'Plays with toys, games, or other fun items with others.',
                    'created_at' => '2023-09-07 09:34:33',
                    'updated_at' => '2023-09-07 09:34:33',
                    'question_number' => 11,
                ),
                83 => 
                array (
                    'id' => 584,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يلعب ألعابًا بسيطة مثل "الغماية" أو دحرجة الكرة للآخرين.',
                    'name_en' => 'Plays simple games like “peek-a-boo” or rolls a ball to others.',
                    'created_at' => '2023-09-07 09:35:12',
                    'updated_at' => '2023-09-07 09:35:12',
                    'question_number' => 12,
                ),
                84 => 
                array (
                    'id' => 585,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يلعب بلعبة  واحدة لأكثر من 5 دقائق',
                    'name_en' => 'Plays with a single toy or game for more than 5 minutes',
                    'created_at' => '2023-09-07 09:38:56',
                    'updated_at' => '2023-09-07 09:38:56',
                    'question_number' => 13,
                ),
                85 => 
                array (
                    'id' => 586,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يندمج في اللعب التخيلي أو الخيالي مع الآخرين.',
                    'name_en' => 'Engages in imaginary or make-believe play with others.',
                    'created_at' => '2023-09-07 09:48:50',
                    'updated_at' => '2023-09-07 09:48:50',
                    'question_number' => 14,
                ),
                86 => 
                array (
                    'id' => 587,
                    'abas_sub_domain_id' => 25,
                    'name' => 'ينضم إلى مجموعة من الأطفال في الألعاب أو في الملعب عندما يشجعه شخص بالغ.',
                    'name_en' => 'Joins a group of children in games or on the playground when encouraged  by an adult.',
                    'created_at' => '2023-09-07 09:49:47',
                    'updated_at' => '2023-09-07 09:49:47',
                    'question_number' => 15,
                ),
                87 => 
                array (
                    'id' => 588,
                    'abas_sub_domain_id' => 25,
                'name' => 'يشارك بانتظام في نشاط ممتع محدد (على سبيل المثال، الاستماع إلى نوع معين من الموسيقى أو لعب لعبة كمبيوتر مفضلة).',
                'name_en' => 'Participates regularly in a specific fun activity (for example, listening to a   certain type of music or playing a favorite computer game).',
                    'created_at' => '2023-09-07 09:50:23',
                    'updated_at' => '2023-09-07 09:50:23',
                    'question_number' => 16,
                ),
                88 => 
                array (
                    'id' => 589,
                    'abas_sub_domain_id' => 25,
                'name' => 'يلعب ألعابًا جماعية بسيطة مع أطفال آخرين (على سبيل المثال،  "الغميضة")',
                'name_en' => 'Plays simple group games with other children (for example, “tag” or “hide- and-seek”)',
                    'created_at' => '2023-09-07 09:51:14',
                    'updated_at' => '2023-09-07 09:51:14',
                    'question_number' => 17,
                ),
                89 => 
                array (
                    'id' => 590,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يدعو الآخرين للانضمام إليه في ممارسة الألعاب والأنشطة الترفيهية الأخرى.',
                    'name_en' => 'Invites others to join him or her in playing games and other fun activities.',
                    'created_at' => '2023-09-07 09:51:46',
                    'updated_at' => '2023-09-07 09:51:46',
                    'question_number' => 18,
                ),
                90 => 
                array (
                    'id' => 591,
                    'abas_sub_domain_id' => 25,
                    'name' => 'ينتظر دوره في الألعاب والأنشطة الترفيهية الأخرى.',
                    'name_en' => 'Waits for his or her turn in games and other fun activities.',
                    'created_at' => '2023-09-07 09:52:11',
                    'updated_at' => '2023-09-07 09:52:11',
                    'question_number' => 19,
                ),
                91 => 
                array (
                    'id' => 592,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يتبع القواعد في الألعاب والأنشطة الترفيهية الأخرى.',
                    'name_en' => 'Follows the rules in games and other fun activities.',
                    'created_at' => '2023-09-07 09:52:38',
                    'updated_at' => '2023-09-07 09:52:38',
                    'question_number' => 20,
                ),
                92 => 
                array (
                    'id' => 593,
                    'abas_sub_domain_id' => 25,
                'name' => 'يسأل زملاء الدراسة عما يرغبون في القيام به أثناء وقت الفراغ في الحضانة أو المدرسة (على سبيل المثال، الألعاب أو الأنشطة).',
                'name_en' => 'Asks classmates what they would like to do during free time at daycare or school (for example, games or activities).',
                    'created_at' => '2023-09-07 09:53:19',
                    'updated_at' => '2023-09-07 09:53:19',
                    'question_number' => 21,
                ),
                93 => 
                array (
                    'id' => 594,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يلعب ألعاب لوحية بسيطة.',
                    'name_en' => 'Plays simple board games.',
                    'created_at' => '2023-09-07 09:54:03',
                    'updated_at' => '2023-09-07 09:54:03',
                    'question_number' => 22,
                ),
                94 => 
                array (
                    'id' => 595,
                    'abas_sub_domain_id' => 25,
                    'name' => 'يدعو الآخرين للمشاركةأولًا في الألعاب أو اللعب أو الأنشطة الأخرى.؟؟؟',
                    'name_en' => 'Invites others to go first in games, play, or other activities.',
                    'created_at' => '2023-09-07 09:56:31',
                    'updated_at' => '2023-09-07 09:56:31',
                    'question_number' => 23,
                ),
                95 => 
                array (
                    'id' => 596,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يبتلع السوائل دون صعوبة',
                    'name_en' => 'Swallows liquids without difficulty',
                    'created_at' => '2023-09-07 09:59:21',
                    'updated_at' => '2023-09-07 09:59:21',
                    'question_number' => 1,
                ),
                96 => 
                array (
                    'id' => 597,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يتقبل الالكل و المشروبات من الممرضات عن طيب خاطر، مع القليل من التشجيع.',
                    'name_en' => 'Nurses, drinks, or eats willingly, with little encouragement.',
                    'created_at' => '2023-09-10 10:45:47',
                    'updated_at' => '2023-09-10 13:32:55',
                    'question_number' => 2,
                ),
                97 => 
                array (
                    'id' => 598,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يفتح الفم عند تقديم الطعام بالملعقة.',
                    'name_en' => 'Opens mouth when offered food on a spoon.',
                    'created_at' => '2023-09-10 10:46:21',
                    'updated_at' => '2023-09-10 10:46:21',
                    'question_number' => 3,
                ),
                98 => 
                array (
                    'id' => 599,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يطعم نفسه البسكويت أو الكيك أو الحبوب الجافة أو غيرها من الأطعمة التي تؤكل باليد',
                    'name_en' => 'Feeds himself or herself crackers, cookies, dry cereal, or other finger foods',
                    'created_at' => '2023-09-10 10:47:08',
                    'updated_at' => '2023-09-10 10:47:08',
                    'question_number' => 4,
                ),
                99 => 
                array (
                    'id' => 600,
                    'abas_sub_domain_id' => 26,
                    'name' => 'مضغ الطعام شبه الصلب أو الصلب قبل بلعه.',
                    'name_en' => 'Chews semisolid or solid food before swallowing.',
                    'created_at' => '2023-09-10 10:47:52',
                    'updated_at' => '2023-09-10 10:47:52',
                    'question_number' => 5,
                ),
                100 => 
                array (
                    'id' => 601,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يشرب من كوب أو كأس، حتى لو كان يجب على شخص آخر أن يحمله.',
                    'name_en' => 'Drinks from a cup or glass, even if another person must hold it.',
                    'created_at' => '2023-09-10 10:48:19',
                    'updated_at' => '2023-09-10 10:48:19',
                    'question_number' => 6,
                ),
                101 => 
                array (
                    'id' => 602,
                    'abas_sub_domain_id' => 26,
                'name' => 'تناول الأطعمة الصلبة التي تتطلب المضغ  (مثل الخضار المطبوخة على البخار).',
                'name_en' => 'Eats firm foods that require biting and chewing (for example, steamed  vegetables).',
                    'created_at' => '2023-09-10 10:49:16',
                    'updated_at' => '2023-09-10 11:01:36',
                    'question_number' => 7,
                ),
                102 => 
                array (
                    'id' => 603,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يرفع ذراعيه حسب الحاجة عندما يقوم شخص آخر بإلباسه أو خلع ملابسه.',
                    'name_en' => 'Lifts arms as needed when another person is dressing or undressing him or her.',
                    'created_at' => '2023-09-10 10:49:51',
                    'updated_at' => '2023-09-10 10:49:51',
                    'question_number' => 8,
                ),
                103 => 
                array (
                    'id' => 604,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يحاول ان  يستخدام الملعقة في تناول الأطعمة اللينة أو الحساء.',
                    'name_en' => 'Attempts to use a spoon to eat soft food or soup.',
                    'created_at' => '2023-09-10 10:50:48',
                    'updated_at' => '2023-09-10 10:50:48',
                    'question_number' => 9,
                ),
                104 => 
                array (
                    'id' => 605,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يشير إلى الطعام أو يطلبه عند الجوع.',
                    'name_en' => 'Points to or asks for food when hungry.',
                    'created_at' => '2023-09-10 10:51:17',
                    'updated_at' => '2023-09-10 10:51:17',
                    'question_number' => 10,
                ),
                105 => 
                array (
                    'id' => 606,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يخلع الأحذية.',
                    'name_en' => 'Takes shoes off.',
                    'created_at' => '2023-09-10 10:51:57',
                    'updated_at' => '2023-09-10 10:51:57',
                    'question_number' => 11,
                ),
                106 => 
                array (
                    'id' => 607,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يظل هادئ بينما يقوم الشخص البالغ بمسح أو غسل يديه أو وجهه.',
                    'name_en' => 'Remains relatively still while an adult wipes or washes his or her hands   or face.',
                    'created_at' => '2023-09-10 10:52:48',
                    'updated_at' => '2023-09-10 10:52:48',
                    'question_number' => 12,
                ),
                107 => 
                array (
                    'id' => 608,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يحمل ويشرب من كوب وهو يحتسي.',
                    'name_en' => 'Holds and drinks from a sipping cup.',
                    'created_at' => '2023-09-10 10:54:33',
                    'updated_at' => '2023-09-11 12:54:05',
                    'question_number' => 13,
                ),
                108 => 
                array (
                    'id' => 609,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يطعم نفسه معظم الوجبة باستخدام الملعقة أو الشوكة، مع القليل من الانسكاب',
                    'name_en' => 'Feeds himself or herself for most of a meal, using a spoon or fork, with little spilling',
                    'created_at' => '2023-09-10 10:55:29',
                    'updated_at' => '2023-09-10 10:55:29',
                    'question_number' => 14,
                ),
                109 => 
                array (
                    'id' => 610,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يبقى جافًا ولا يبتل أو يتسخ الحفاضات أو الملابس الداخلية لمدة ساعة على الأقل.',
                    'name_en' => 'Stays dry and does not wet or soil diaper or underwear for at least 1 hour.',
                    'created_at' => '2023-09-10 10:59:18',
                    'updated_at' => '2023-09-10 10:59:18',
                    'question_number' => 15,
                ),
                110 => 
                array (
                    'id' => 611,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يغسل اليدين بالماء والصابون.',
                    'name_en' => 'Washes hands with both soap and water.',
                    'created_at' => '2023-09-10 10:59:48',
                    'updated_at' => '2023-09-10 11:01:55',
                    'question_number' => 16,
                ),
                111 => 
                array (
                    'id' => 612,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يجلس على المرحاض أو مقعد النونية دون أن يتم حمله',
                    'name_en' => 'Sits on the toilet or potty seat without being held',
                    'created_at' => '2023-09-10 11:00:32',
                    'updated_at' => '2023-09-11 12:54:26',
                    'question_number' => 17,
                ),
                112 => 
                array (
                    'id' => 613,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يجلس على المرحاض أو مقعد النونية دون أن يتم حمله',
                    'name_en' => 'Sits on the toilet or potty seat without being held.',
                    'created_at' => '2023-09-10 11:03:42',
                    'updated_at' => '2023-09-10 11:03:42',
                    'question_number' => 17,
                ),
                113 => 
                array (
                    'id' => 614,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يبقى جافًا دون أن يبتل طوال اليوم.',
                    'name_en' => 'Remains dry without wetting throughout the day.',
                    'created_at' => '2023-09-10 11:04:14',
                    'updated_at' => '2023-09-10 11:04:14',
                    'question_number' => 18,
                ),
                114 => 
                array (
                    'id' => 615,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يمسح وجهه عندما يعطيه شخص بالغ منشفة.',
                    'name_en' => 'Wipes his or her own face when given a washcloth by an adult.',
                    'created_at' => '2023-09-10 11:04:41',
                    'updated_at' => '2023-09-10 11:04:41',
                    'question_number' => 19,
                ),
                115 => 
                array (
                    'id' => 616,
                    'abas_sub_domain_id' => 17,
                    'name' => 'يتسلق و يصعد على المرحاض أو مقعد النونية.',
                    'name_en' => 'Climbs on the toilet or potty seat.',
                    'created_at' => '2023-09-10 11:05:13',
                    'updated_at' => '2023-09-10 11:05:13',
                    'question_number' => 20,
                ),
                116 => 
                array (
                    'id' => 617,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يخبر المعلم أو مقدم الرعاية النهارية أو أي شخص بالغ آخر عندما يحتاج إلى استخدام الحمام.',
                    'name_en' => 'Tells teacher, daycare provider, or other adult when he or she needs to use  the bathroom.',
                    'created_at' => '2023-09-10 12:48:34',
                    'updated_at' => '2023-09-10 12:48:34',
                    'question_number' => 21,
                ),
                117 => 
                array (
                    'id' => 618,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يستخدم الحمام دون مساعدة.',
                    'name_en' => 'Uses bathroom without help.',
                    'created_at' => '2023-09-10 12:48:57',
                    'updated_at' => '2023-09-10 12:48:57',
                    'question_number' => 22,
                ),
                118 => 
                array (
                    'id' => 619,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يعلق الملابس ويفردها قبل الخروج من الحمام.',
                    'name_en' => 'Fastens and straightens clothing before leaving restroom.',
                    'created_at' => '2023-09-10 12:49:29',
                    'updated_at' => '2023-09-10 12:49:29',
                    'question_number' => 23,
                ),
                119 => 
                array (
                    'id' => 620,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يزرر ازرار الملابس',
                    'name_en' => 'Buttons own clothing.',
                    'created_at' => '2023-09-10 12:50:01',
                    'updated_at' => '2023-09-10 12:50:01',
                    'question_number' => 24,
                ),
                120 => 
                array (
                    'id' => 621,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يربط حذائه بنفسه.',
                    'name_en' => 'Ties his or her own shoes.',
                    'created_at' => '2023-09-10 12:50:25',
                    'updated_at' => '2023-09-10 12:50:25',
                    'question_number' => 25,
                ),
                121 => 
                array (
                    'id' => 622,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يختار الطعام أو الوجبة الخفيفة التي يرغب في تناولها عندما يُتاح له الاختيار.',
                    'name_en' => 'Chooses the food or snack he or she wishes to eat when given a choice.',
                    'created_at' => '2023-09-11 08:25:30',
                    'updated_at' => '2023-09-11 12:55:06',
                    'question_number' => 1,
                ),
                122 => 
                array (
                    'id' => 623,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يجلس بهدوء لمدة دقيقة واحدة على الأقل دون أن يتطلب الاهتمام.',
                    'name_en' => 'Sits quietly for at least 1 minute without demanding attention.',
                    'created_at' => '2023-09-11 08:26:13',
                    'updated_at' => '2023-09-11 12:55:25',
                    'question_number' => 2,
                ),
                123 => 
                array (
                    'id' => 624,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يتوقف عن الانزعاج أو البكاء عندما يحمله أو يتحدث إليه المعلم أو مقدم الرعاية النهارية أو أي شخص بالغ آخر.',
                    'name_en' => 'Stops fussing or crying when picked up or spoken to by a teacher, daycare  provider, or other adult.',
                    'created_at' => '2023-09-11 08:27:58',
                    'updated_at' => '2023-09-11 08:27:58',
                    'question_number' => 3,
                ),
                124 => 
                array (
                    'id' => 625,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يجد شيئاً ليفعله لمدة 5 دقائق على الأقل دون أن يتطلب الاهتمام.',
                    'name_en' => 'Finds something to do for at least 5 minutes without demanding attention.',
                    'created_at' => '2023-09-11 08:28:46',
                    'updated_at' => '2023-09-11 08:28:46',
                    'question_number' => 4,
                ),
                125 => 
                array (
                    'id' => 626,
                    'abas_sub_domain_id' => 27,
                'name' => 'تجربة نشاط جديد، حتى لو كان غير مألوف (على سبيل المثال، استخدام معدات الملعب التي لم يستخدمها من قبل)',
                'name_en' => 'Tries a new activity, even if it is unfamiliar (for example, uses playground    equipment that he or she has not used before)',
                    'created_at' => '2023-09-11 11:53:05',
                    'updated_at' => '2023-09-11 11:53:05',
                    'question_number' => 5,
                ),
                126 => 
                array (
                    'id' => 627,
                    'abas_sub_domain_id' => 27,
                'name' => 'يحاول القيام بمعظم الأشياء بمفرده دون مساعدة شخص بالغ (على سبيل المثال، ارتداء الملابس أو إطعام نفسه)',
                'name_en' => 'Tries to do most things alone without an adult’s help (for example, dressing    or feeding self)',
                    'created_at' => '2023-09-11 11:53:47',
                    'updated_at' => '2023-09-11 11:53:47',
                    'question_number' => 6,
                ),
                127 => 
                array (
                    'id' => 628,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يتبع طلب شخص بالغ "بالهدوء" أو "التصرف".',
                    'name_en' => 'Follows an adult’s request to “quiet down” or “behave.”',
                    'created_at' => '2023-09-11 11:54:08',
                    'updated_at' => '2023-09-11 11:54:08',
                    'question_number' => 7,
                ),
                128 => 
                array (
                    'id' => 629,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يقاوم دفع أو ضرب طفل آخر عند الغضب أو الانزعاج.',
                    'name_en' => 'Resists pushing or hitting another child when angry or upset.',
                    'created_at' => '2023-09-11 11:54:33',
                    'updated_at' => '2023-09-11 11:54:33',
                    'question_number' => 8,
                ),
                129 => 
                array (
                    'id' => 630,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يختار نشاطًا مدرسيًا أو حضانة عندما يُتاح له الاختيار.',
                    'name_en' => 'Chooses a school or daycare activity when given a choice.',
                    'created_at' => '2023-09-11 11:55:12',
                    'updated_at' => '2023-09-11 11:55:12',
                    'question_number' => 9,
                ),
                130 => 
                array (
                    'id' => 631,
                    'abas_sub_domain_id' => 27,
                'name' => 'يبدأ النشاط على الفور تقريبًا عندما يُطلب منه ذلك (على سبيل المثال، وضع الألعاب أو الكتب جانبًا)',
                'name_en' => 'Starts an activity almost immediately when told to do so (for example, putting away toys or books)',
                    'created_at' => '2023-09-11 11:56:06',
                    'updated_at' => '2023-09-11 11:56:51',
                    'question_number' => 10,
                ),
                131 => 
                array (
                    'id' => 632,
                    'abas_sub_domain_id' => 27,
                'name' => 'يطلب الإذن من شخص بالغ عند الحاجة (على سبيل المثال، "هل يمكنني الخروج للعب؟").',
                'name_en' => 'Asks permission from an adult when needed (for example, “May I go   outside to play?”).',
                    'created_at' => '2023-09-11 11:57:36',
                    'updated_at' => '2023-09-11 11:57:36',
                    'question_number' => 11,
                ),
                132 => 
                array (
                    'id' => 633,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يعمل بشكل مستقل ويطلب المساعدة فقط عند الضرورة.',
                    'name_en' => 'Works independently and asks for help only when necessary.',
                    'created_at' => '2023-09-11 11:58:02',
                    'updated_at' => '2023-09-11 11:58:02',
                    'question_number' => 12,
                ),
                133 => 
                array (
                    'id' => 634,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يتحكم في مزاجه عندما يأخذ المعلم أو مقدم الرعاية النهارية لعبة أو شيئًا',
                    'name_en' => 'Controls temper when a teacher or daycare provider takes a toy or object 
away',
                    'created_at' => '2023-09-11 11:58:33',
                    'updated_at' => '2023-09-11 11:58:33',
                    'question_number' => 13,
                ),
                134 => 
                array (
                    'id' => 635,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يوقف نشاطًا ممتعًا، دون شكوى، عندما يخبره بأن الوقت قد انتهى',
                    'name_en' => 'Stops a fun activity, without complaining, when told that time is up',
                    'created_at' => '2023-09-11 11:59:05',
                    'updated_at' => '2023-09-11 11:59:05',
                    'question_number' => 14,
                ),
                135 => 
                array (
                    'id' => 636,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يبحث عن الألعاب المفقودة حتى يجدها.',
                    'name_en' => 'Looks for misplaced toys or games until he or she finds them.',
                    'created_at' => '2023-09-11 11:59:38',
                    'updated_at' => '2023-09-11 11:59:38',
                    'question_number' => 15,
                ),
                136 => 
                array (
                    'id' => 637,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يقف ساكنًا عند الحاجة، دون تململ أو تحرك.',
                    'name_en' => 'Stands still when needed, without fidgeting or moving around.',
                    'created_at' => '2023-09-11 12:00:08',
                    'updated_at' => '2023-09-11 12:00:08',
                    'question_number' => 16,
                ),
                137 => 
                array (
                    'id' => 638,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يتحكم في أعصابه عند الاختلاف مع زملاء الدراسة.',
                    'name_en' => 'Controls temper when disagreeing with classmates.',
                    'created_at' => '2023-09-11 12:00:39',
                    'updated_at' => '2023-09-11 12:00:39',
                    'question_number' => 17,
                ),
                138 => 
                array (
                    'id' => 639,
                    'abas_sub_domain_id' => 26,
                'name' => 'يتبع روتينًا دون أن يتم تذكيره (على سبيل المثال، تخزين الألعاب قبل الذهاب لتناول الغداء).',
                'name_en' => 'Follows a routine without being reminded (for example, putting away toys    before going to lunch).',
                    'created_at' => '2023-09-11 12:01:22',
                    'updated_at' => '2023-09-11 12:57:56',
                    'question_number' => 18,
                ),
                139 => 
                array (
                    'id' => 640,
                    'abas_sub_domain_id' => 26,
                    'name' => 'يمتنع عن أخذ على لعبة يحملها طفل آخر.',
                    'name_en' => 'Refrains from grabbing a toy held by another child.',
                    'created_at' => '2023-09-11 12:02:13',
                    'updated_at' => '2023-09-11 12:02:13',
                    'question_number' => 19,
                ),
                140 => 
                array (
                    'id' => 641,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يستمر في العمل على المهام الصعبة دون أن يشعر بالإحباط أو الاستقالة أو الحاجة إلى التذكير',
                    'name_en' => 'Keeps working on hard tasks without becoming discouraged, quitting, or    needing reminders',
                    'created_at' => '2023-09-11 12:03:34',
                    'updated_at' => '2023-09-11 12:03:34',
                    'question_number' => 20,
                ),
                141 => 
                array (
                    'id' => 642,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يعمل على نشاط مدرسي واحد لمدة لا تقل عن 15 دقيقة دون تذكير.',
                    'name_en' => 'Works on one school activity for at least 15 minutes without reminders.',
                    'created_at' => '2023-09-11 12:04:24',
                    'updated_at' => '2023-09-11 12:04:24',
                    'question_number' => 21,
                ),
                142 => 
                array (
                    'id' => 643,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يسأل عن التوجيهات، حسب الحاجة، قبل بدء مهام المدرسة أو الرعاية النهارية.',
                    'name_en' => 'Asks for directions, as needed, before beginning school or daycare tasks.',
                    'created_at' => '2023-09-11 12:04:45',
                    'updated_at' => '2023-09-11 12:04:45',
                    'question_number' => 22,
                ),
                143 => 
                array (
                    'id' => 644,
                    'abas_sub_domain_id' => 27,
                    'name' => 'يناقش طرق حل النزاعات مع الآخرين (على سبيل المثال، "يمكنك أن تفعل ذلك
هذا الآن إذا كان بإمكاني الحصول عليه لاحقًا ").',
                    'name_en' => 'Discusses ways to solve conflicts with others (for example, “You can have            
this now if I can have it later”).',
                    'created_at' => '2023-09-11 12:06:01',
                    'updated_at' => '2023-09-11 12:06:01',
                    'question_number' => 23,
                ),
                144 => 
                array (
                    'id' => 645,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يبتسم عندما يرى أحد الوالدين',
                    'name_en' => 'Smiles when he or she sees a parent',
                    'created_at' => '2023-09-12 09:03:56',
                    'updated_at' => '2023-09-12 09:03:56',
                    'question_number' => 1,
                ),
                145 => 
                array (
                    'id' => 646,
                    'abas_sub_domain_id' => 28,
                'name' => 'يظهر القرب من أحد الوالدين (على سبيل المثال، يشعر بالسعادة عندما يصل الوالد إلى المدرسة أو الحضانة).',
                'name_en' => 'Displays closeness to a parent (for example, is happy when parent arrives  at school or daycare).',
                    'created_at' => '2023-09-12 09:04:35',
                    'updated_at' => '2023-09-12 09:04:35',
                    'question_number' => 2,
                ),
                146 => 
                array (
                    'id' => 647,
                    'abas_sub_domain_id' => 28,
                'name' => 'يذهب إلى فرد معين من أفراد الأسرة أو شخص آخر عندما يُطلب منه القيام بذلك (على سبيل المثال، "اذهب إلى الأخ" أو "اذهب إلى المعلم").',
                'name_en' => 'Goes to a specific family member or other person when directed to do so   (for example, “Go to brother” or “Go to teacher”).',
                    'created_at' => '2023-09-12 09:05:18',
                    'updated_at' => '2023-09-12 09:05:18',
                    'question_number' => 3,
                ),
                147 => 
                array (
                    'id' => 648,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يبتسم ويضحك عندما يكون سعيدًا أو مسرورًا.',
                    'name_en' => 'Squeals or laughs when happy or delighted.',
                    'created_at' => '2023-09-12 09:07:47',
                    'updated_at' => '2023-09-12 09:07:47',
                    'question_number' => 4,
                ),
                148 => 
                array (
                    'id' => 649,
                    'abas_sub_domain_id' => 28,
                'name' => 'يظهر روح الدعابة (على سبيل المثال، يضحك عندما يتصرف شخص ما بطريقة مرحه).',
                'name_en' => 'Shows a sense of humor (for example, laughs when someone acts silly).',
                    'created_at' => '2023-09-12 09:08:37',
                    'updated_at' => '2023-09-12 09:08:37',
                    'question_number' => 5,
                ),
                149 => 
                array (
                    'id' => 650,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يبتسم عندما يرى معلمًا أو مقدم رعاية نهارية.',
                    'name_en' => 'Smiles when he or she sees a teacher or daycare provider.',
                    'created_at' => '2023-09-12 09:09:25',
                    'updated_at' => '2023-09-12 09:26:25',
                    'question_number' => 6,
                ),
                150 => 
                array (
                    'id' => 651,
                    'abas_sub_domain_id' => 28,
                'name' => 'يستجيب بشكل مختلف للأشخاص المألوفين وغير المألوفين (على سبيل المثال، يكون أقل ود و استجابة لشخص غير مألوف).',
                    'name_en' => 'Responds differently to familiar and unfamiliar persons (for example, is less  
warm to an unfamiliar person).',
                    'created_at' => '2023-09-12 09:10:39',
                    'updated_at' => '2023-09-12 09:10:39',
                    'question_number' => 7,
                ),
                151 => 
                array (
                    'id' => 652,
                    'abas_sub_domain_id' => 28,
                'name' => 'يبدأ التفاعل مع البالغين ويحافظ عليه (على سبيل المثال، يبدأ ويلعب لعبة الاستغماء).',
                'name_en' => 'Initiates and maintains interaction with adults (for example, initiates and  plays peek-a-boo).',
                    'created_at' => '2023-09-12 09:11:26',
                    'updated_at' => '2023-09-12 09:11:26',
                    'question_number' => 8,
                ),
                152 => 
                array (
                    'id' => 653,
                    'abas_sub_domain_id' => 28,
                'name' => 'يقلد تصرفات البالغين (على سبيل المثال، التظاهر بتنظيف المنزل أو قيادة السيارة)',
                'name_en' => 'Imitates actions of adults (for example, pretends to clean house or drive  a car)',
                    'created_at' => '2023-09-12 09:12:18',
                    'updated_at' => '2023-09-12 09:12:18',
                    'question_number' => 9,
                ),
                153 => 
                array (
                    'id' => 654,
                    'abas_sub_domain_id' => 28,
                'name' => 'يظهر الاحترام للأشخاص ذوي السلطة من خلال اتباع قواعدهم وتوجيهاتهم (على سبيل المثال، الآباء والمعلمين وضباط الشرطة).',
                'name_en' => 'Shows respect for persons in authority by following their rules and    directions (for example, parents, teachers, police officers).',
                    'created_at' => '2023-09-12 09:13:14',
                    'updated_at' => '2023-09-12 09:13:14',
                    'question_number' => 10,
                ),
                154 => 
                array (
                    'id' => 655,
                    'abas_sub_domain_id' => 28,
                'name' => 'يحيي الأطفال الآخرين (على سبيل المثال، يقول "مرحبًا")',
                'name_en' => 'Greets other children (for example, says “Hi”)',
                    'created_at' => '2023-09-12 09:14:12',
                    'updated_at' => '2023-09-12 09:14:12',
                    'question_number' => 11,
                ),
                155 => 
                array (
                    'id' => 656,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يبحث عن الصداقة مع الآخرين في فئته العمرية.',
                    'name_en' => 'Seeks friendship with others in his or her age group.',
                    'created_at' => '2023-09-12 09:15:18',
                    'updated_at' => '2023-09-12 09:15:18',
                    'question_number' => 12,
                ),
                156 => 
                array (
                    'id' => 657,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يقول "شكرًا" عندما يُعطى هدية.',
                    'name_en' => 'Says “Thank you” when given a gift.',
                    'created_at' => '2023-09-12 09:16:07',
                    'updated_at' => '2023-09-12 09:16:07',
                    'question_number' => 13,
                ),
                157 => 
                array (
                    'id' => 658,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يظهر التعاطف مع الآخرين عندما يشعرون بالحزن أو الانزعاج',
                    'name_en' => 'Shows sympathy for others when they are sad or upset',
                    'created_at' => '2023-09-12 09:16:54',
                    'updated_at' => '2023-09-12 09:16:54',
                    'question_number' => 14,
                ),
                158 => 
                array (
                    'id' => 659,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يشارك الألعاب عن طيب خاطر مع الآخرين.',
                    'name_en' => 'Shares toys willingly with others.',
                    'created_at' => '2023-09-12 09:17:22',
                    'updated_at' => '2023-09-12 09:17:22',
                    'question_number' => 15,
                ),
                159 => 
                array (
                    'id' => 660,
                    'abas_sub_domain_id' => 28,
                'name' => 'يظهر آداب المائدة الجيدة (على سبيل المثال، استخدام منديل والبقاء على الطاولة حتى يسمح له بالمغادرة).',
                'name_en' => 'Displays good table manners (for example, by using a napkin and    remaining at the table until excused).',
                    'created_at' => '2023-09-12 09:18:42',
                    'updated_at' => '2023-09-12 09:18:42',
                    'question_number' => 16,
                ),
                160 => 
                array (
                    'id' => 661,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يقول "من فضلك" عندما يطلب شيئًا ما.',
                    'name_en' => 'Says “Please” when asking for something.',
                    'created_at' => '2023-09-12 09:19:22',
                    'updated_at' => '2023-09-12 09:19:22',
                    'question_number' => 17,
                ),
                161 => 
                array (
                    'id' => 662,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يقول عندما يشعر بالسعادة أو الحزن أو الخوف أو الغضب.',
                    'name_en' => 'Says when he or she feels happy, sad, scared, or angry.',
                    'created_at' => '2023-09-12 09:20:12',
                    'updated_at' => '2023-09-12 09:20:12',
                    'question_number' => 18,
                ),
                162 => 
                array (
                    'id' => 663,
                    'abas_sub_domain_id' => 28,
                    'name' => '- يبتعد عن طريق شخص آخر دون أن يطلب منه ذلك',
                    'name_en' => 'Moves out of another person’s way without being asked',
                    'created_at' => '2023-09-12 09:21:21',
                    'updated_at' => '2023-09-12 09:21:21',
                    'question_number' => 19,
                ),
                163 => 
                array (
                    'id' => 664,
                    'abas_sub_domain_id' => 28,
                'name' => 'يعرض المساعدة للآخرين (على سبيل المثال، يعرض حمل الطرود أو تخزين الطعام).',
                'name_en' => 'Offers assistance to others (for example, offers to carry packages or put   away food).',
                    'created_at' => '2023-09-12 09:23:34',
                    'updated_at' => '2023-09-12 09:23:34',
                    'question_number' => 20,
                ),
                164 => 
                array (
                    'id' => 665,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يعتذر إذا جرح مشاعر الآخرين',
                    'name_en' => 'Apologizes if he or she hurts the feelings of others',
                    'created_at' => '2023-09-12 09:24:18',
                    'updated_at' => '2023-09-12 09:24:18',
                    'question_number' => 21,
                ),
                165 => 
                array (
                    'id' => 666,
                    'abas_sub_domain_id' => 28,
                'name' => 'يفرض مطالب معقولة على الأصدقاء (على سبيل المثال، لا ينزعج عندما يلعب صديق مع صديق آخر).',
                'name_en' => 'Places reasonable demands on friends (for example, does not become   upset when a friend plays with another friend).',
                    'created_at' => '2023-09-12 09:24:47',
                    'updated_at' => '2023-09-12 09:24:47',
                    'question_number' => 22,
                ),
                166 => 
                array (
                    'id' => 667,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يمتنع عن قول أو فعل أشياء قد تحرج أو تؤذي الآخرين.',
                    'name_en' => 'Refrains from saying or doing things that might embarrass or hurt others.',
                    'created_at' => '2023-09-12 09:25:28',
                    'updated_at' => '2023-09-12 09:25:28',
                    'question_number' => 23,
                ),
                167 => 
                array (
                    'id' => 668,
                    'abas_sub_domain_id' => 28,
                    'name' => 'يحاول إرضاء الآخرين من خلال القيام بشيء خاص أو مفاجأة لهم.',
                    'name_en' => 'Tries to please others by doing something special or giving them a surprise.',
                    'created_at' => '2023-09-12 09:26:00',
                    'updated_at' => '2023-09-12 09:26:00',
                    'question_number' => 24,
                ),
                168 => 
                array (
                    'id' => 669,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يرفع رأسه لينظر حوله',
                    'name_en' => 'Lifts head to look around',
                    'created_at' => '2023-09-12 10:58:29',
                    'updated_at' => '2023-09-12 10:58:29',
                    'question_number' => 1,
                ),
                169 => 
                array (
                    'id' => 670,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يصل إلى أشياء مثل علبة أو اللعبة.',
                    'name_en' => 'Reaches for objects such as a bottle or toy.',
                    'created_at' => '2023-09-12 10:59:57',
                    'updated_at' => '2023-09-12 10:59:57',
                    'question_number' => 2,
                ),
                170 => 
                array (
                    'id' => 671,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يتبع جسمًا متحركًا عن طريق تحريك الراس بشكل دائري',
                    'name_en' => 'Follows a moving object by turning head.',
                    'created_at' => '2023-09-12 11:02:11',
                    'updated_at' => '2023-09-12 11:02:11',
                    'question_number' => 3,
                ),
                171 => 
                array (
                    'id' => 672,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يهز الخرخيشة أو غيرها من الألعاب.',
                    'name_en' => 'Shakes rattle or other toys.',
                    'created_at' => '2023-09-12 11:02:47',
                    'updated_at' => '2023-09-12 11:02:47',
                    'question_number' => 4,
                ),
                172 => 
                array (
                    'id' => 673,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يتدحرج من المعدة إلى الجانب.؟؟؟',
                    'name_en' => 'Rolls from stomach to side.',
                    'created_at' => '2023-09-12 11:03:18',
                    'updated_at' => '2023-09-12 11:03:18',
                    'question_number' => 5,
                ),
                173 => 
                array (
                    'id' => 674,
                    'abas_sub_domain_id' => 29,
                    'name' => 'ينقل الأشياء من يد إلى أخرى.',
                    'name_en' => 'Transfers objects from one hand to the other.',
                    'created_at' => '2023-09-12 11:03:37',
                    'updated_at' => '2023-09-12 11:03:37',
                    'question_number' => 6,
                ),
                174 => 
                array (
                    'id' => 675,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يبقى متوازنًا لمدة 30 ثانية أو أكثر دون دعم',
                    'name_en' => 'Sits balanced for 30 seconds or more without support',
                    'created_at' => '2023-09-12 11:03:58',
                    'updated_at' => '2023-09-12 11:03:58',
                    'question_number' => 7,
                ),
                175 => 
                array (
                    'id' => 676,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يتحرك إلى وضعية الجلوس، حتى لو كان التوازن غير مستقر.',
                    'name_en' => 'Moves to a sitting position, even if balance is unsteady.',
                    'created_at' => '2023-09-12 11:04:20',
                    'updated_at' => '2023-09-12 11:04:20',
                    'question_number' => 8,
                ),
                176 => 
                array (
                    'id' => 677,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يزحف لمسافة 10 أقدام تقريبًا دون أن يسقط.',
                    'name_en' => 'Crawls for about 10 feet without falling over.',
                    'created_at' => '2023-09-12 11:04:51',
                    'updated_at' => '2023-09-12 11:04:51',
                    'question_number' => 9,
                ),
                177 => 
                array (
                    'id' => 678,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يدحرج الكرة للآخرين.',
                    'name_en' => 'Rolls ball to others.',
                    'created_at' => '2023-09-12 11:05:17',
                    'updated_at' => '2023-09-12 11:05:17',
                    'question_number' => 10,
                ),
                178 => 
                array (
                    'id' => 679,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يقف من وضعية الجلوس.',
                    'name_en' => 'Stands up from a sitting position.',
                    'created_at' => '2023-09-12 11:05:50',
                    'updated_at' => '2023-09-12 11:05:50',
                    'question_number' => 11,
                ),
                179 => 
                array (
                    'id' => 680,
                    'abas_sub_domain_id' => 29,
                    'name' => 'عند الوقوف، ينحني لالتقاط الأشياء من الأرض.',
                    'name_en' => 'When standing, bends over to pick up items from the floor.',
                    'created_at' => '2023-09-12 11:06:21',
                    'updated_at' => '2023-09-12 11:06:21',
                    'question_number' => 12,
                ),
                180 => 
                array (
                    'id' => 681,
                    'abas_sub_domain_id' => 29,
                'name' => 'يلتقط أشياء مسطحة صغيرة من الطاولة (على سبيل المثال، العملات المعدنية أو الأزرار).',
                'name_en' => 'Picks up small flat objects from a table (for example, coins or buttons).',
                    'created_at' => '2023-09-12 11:06:54',
                    'updated_at' => '2023-09-12 11:06:54',
                    'question_number' => 13,
                ),
                181 => 
                array (
                    'id' => 682,
                    'abas_sub_domain_id' => 29,
                'name' => 'يمشي ما لا يقل عن خمس إلى ست درجات دون السقوط (ويمكن استخدام الدرابزين).',
                'name_en' => 'Walks up at least five to six steps without falling (may use handrail).',
                    'created_at' => '2023-09-12 11:07:36',
                    'updated_at' => '2023-09-12 11:07:36',
                    'question_number' => 14,
                ),
                182 => 
                array (
                    'id' => 683,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يمشي دون مساعدة.',
                    'name_en' => 'Walks without help.',
                    'created_at' => '2023-09-12 11:08:21',
                    'updated_at' => '2023-09-12 11:08:21',
                    'question_number' => 15,
                ),
                183 => 
                array (
                    'id' => 684,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يركض دون أن يسقط.',
                    'name_en' => 'Runs without falling.',
                    'created_at' => '2023-09-12 11:09:21',
                    'updated_at' => '2023-09-12 11:09:21',
                    'question_number' => 16,
                ),
                184 => 
                array (
                    'id' => 685,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يرمي كرة صغيرة من أعلى',
                    'name_en' => 'Throws a small ball overhand',
                    'created_at' => '2023-09-12 11:10:11',
                    'updated_at' => '2023-09-12 11:10:11',
                    'question_number' => 17,
                ),
                185 => 
                array (
                    'id' => 686,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يركل الكرة دون أن يسقط',
                    'name_en' => 'Kicks a ball without falling',
                    'created_at' => '2023-09-12 11:10:49',
                    'updated_at' => '2023-09-12 11:10:49',
                    'question_number' => 18,
                ),
                186 => 
                array (
                    'id' => 687,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يوازن على قدم واحدة لمدة 4 ثواني أو أكثر.',
                    'name_en' => 'Balances on one foot for 4 or more seconds.',
                    'created_at' => '2023-09-12 11:11:28',
                    'updated_at' => '2023-09-12 11:11:28',
                    'question_number' => 19,
                ),
                187 => 
                array (
                    'id' => 688,
                    'abas_sub_domain_id' => 29,
                    'name' => '- يقفز على قدم واحدة أربع قفزات أو أكثر.',
                    'name_en' => 'Hops on one foot for four or more hops.',
                    'created_at' => '2023-09-12 11:12:45',
                    'updated_at' => '2023-09-12 11:12:45',
                    'question_number' => 20,
                ),
                188 => 
                array (
                    'id' => 689,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يرسم خطوطًا مستقيمة على قطعة من الورق.',
                    'name_en' => 'Draws straight lines across a piece of paper.',
                    'created_at' => '2023-09-12 11:13:23',
                    'updated_at' => '2023-09-12 11:13:23',
                    'question_number' => 21,
                ),
                189 => 
                array (
                    'id' => 690,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يركل الكرة لعدة ثواني.',
                    'name_en' => 'Bounces a ball for several seconds.',
                    'created_at' => '2023-09-12 11:15:09',
                    'updated_at' => '2023-09-12 11:15:09',
                    'question_number' => 22,
                ),
                190 => 
                array (
                    'id' => 691,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يمسك الكرة المرميه اليه  من مسافة 5 إلى 10 أقدام',
                    'name_en' => 'Catches a ball tossed from 5 to 10 feet away',
                    'created_at' => '2023-09-12 11:16:52',
                    'updated_at' => '2023-09-12 11:16:52',
                    'question_number' => 23,
                ),
                191 => 
                array (
                    'id' => 692,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يلون  ضمن سطور الرسم أو في كتاب التلوين.',
                    'name_en' => 'Colors within the lines of a drawing or in a coloring book.',
                    'created_at' => '2023-09-12 11:17:45',
                    'updated_at' => '2023-09-12 11:17:45',
                    'question_number' => 24,
                ),
                192 => 
                array (
                    'id' => 693,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يستخدم المقص للقطع على خط مستقيم',
                    'name_en' => 'Uses scissors to cut along a straight line',
                    'created_at' => '2023-09-12 11:20:05',
                    'updated_at' => '2023-09-12 11:20:05',
                    'question_number' => 25,
                ),
                193 => 
                array (
                    'id' => 694,
                    'abas_sub_domain_id' => 29,
                    'name' => 'يستخدم المقص لقص الأشكال ذات الخطوط المنحنية.',
                    'name_en' => 'Uses scissors to cut shapes with curved lines.',
                    'created_at' => '2023-09-12 11:21:21',
                    'updated_at' => '2023-09-12 11:21:21',
                    'question_number' => 26,
                ),
                194 => 
                array (
                    'id' => 695,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يسمي 20 شيئًا مألوفًا أو أكثر.',
                    'name_en' => 'Names 20 or more familiar objects.',
                    'created_at' => '2023-09-12 11:30:28',
                    'updated_at' => '2023-09-12 11:30:28',
                    'question_number' => 1,
                ),
                195 => 
                array (
                    'id' => 696,
                    'abas_sub_domain_id' => 30,
                'name' => 'يهز رأسه أو يقول "نعم" أو "لا" ردًا على سؤال بسيط (على سبيل المثال، "هل تريد أن تشرب شيئًا؟").',
                'name_en' => 'Shakes head or says “Yes” or “No” in response to a simple question (for   example, “Do you want something to drink?”).',
                    'created_at' => '2023-09-12 11:31:17',
                    'updated_at' => '2023-09-12 11:31:17',
                    'question_number' => 2,
                ),
                196 => 
                array (
                    'id' => 697,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يقول "مرحبًا" و"وداعًا" للآخرين',
                    'name_en' => 'Says “Hello” and “Good-bye” to others',
                    'created_at' => '2023-09-12 11:31:47',
                    'updated_at' => '2023-09-12 11:31:47',
                    'question_number' => 3,
                ),
                197 => 
                array (
                    'id' => 698,
                    'abas_sub_domain_id' => 30,
                    'name' => '. يستخدم الجمل مع الاسم والفعل.',
                    'name_en' => '. Uses sentences with a noun and verb.',
                    'created_at' => '2023-09-12 11:32:12',
                    'updated_at' => '2023-09-12 11:32:12',
                    'question_number' => 4,
                ),
                198 => 
                array (
                    'id' => 699,
                    'abas_sub_domain_id' => 30,
                    'name' => 'ينظر إلى وجوه الآخرين عندما يتحدثون معه.',
                    'name_en' => 'Looks at other people’s faces when they are talking to him or her.',
                    'created_at' => '2023-09-12 11:32:37',
                    'updated_at' => '2023-09-12 11:32:37',
                    'question_number' => 5,
                ),
                199 => 
                array (
                    'id' => 700,
                    'abas_sub_domain_id' => 30,
                    'name' => '. يتحدث بوضوح وبشكل واضح.',
                    'name_en' => '. Speaks clearly and distinctly.',
                    'created_at' => '2023-09-12 11:33:11',
                    'updated_at' => '2023-09-12 11:33:11',
                    'question_number' => 6,
                ),
                200 => 
                array (
                    'id' => 701,
                    'abas_sub_domain_id' => 30,
                'name' => 'يتبع تعليمات المعلم الشفهية حسب الحاجة عند القيام بالمهام أو الأنشطة (على سبيل المثال، مشروع الفصل الدراسي أو لعبة جديدة).',
                'name_en' => 'Follows teacher’s verbal instructions as needed when undertaking tasks or   activities (for example, a classroom project or a new game).',
                    'created_at' => '2023-09-12 11:35:11',
                    'updated_at' => '2023-09-12 11:35:11',
                    'question_number' => 7,
                ),
                201 => 
                array (
                    'id' => 702,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يستمع عن كثب لمدة 5 دقائق على الأقل عندما يتحدث المعلم.',
                    'name_en' => 'Listens closely for at least 5 minutes when the teacher talks.',
                    'created_at' => '2023-09-12 11:36:47',
                    'updated_at' => '2023-09-12 11:36:47',
                    'question_number' => 8,
                ),
                202 => 
                array (
                    'id' => 703,
                    'abas_sub_domain_id' => 30,
                'name' => 'يستخدم جمع التكسير الاسماء بشكل صحيح (قدم - أقدام و باب -أبواب جامع - جوامع)',
                'name_en' => 'Says irregular plural nouns correctly (for example, says “feet” instead of  “foots” and “men” instead of “mans”).',
                    'created_at' => '2023-09-12 11:39:57',
                    'updated_at' => '2023-09-12 11:39:57',
                    'question_number' => 9,
                ),
                203 => 
                array (
                    'id' => 704,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يبتسم ويصدر ايماءات لتشجيع الآخرين عندما يتحدثون.',
                    'name_en' => 'Nods or smiles to encourage others when they are talking.',
                    'created_at' => '2023-09-12 11:49:28',
                    'updated_at' => '2023-09-12 11:49:28',
                    'question_number' => 10,
                ),
                204 => 
                array (
                    'id' => 705,
                    'abas_sub_domain_id' => 30,
                    'name' => 'ينتبه خلال المناقشات الصفية لأطول فترة ممكنة.',
                    'name_en' => 'Pays attention during classroom discussions for as long as needed.',
                    'created_at' => '2023-09-12 11:50:02',
                    'updated_at' => '2023-09-12 11:50:02',
                    'question_number' => 11,
                ),
                205 => 
                array (
                    'id' => 706,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يشارك في المحادثات دون التحدث بشكل كثيرًا أو قليلًا جدًا.',
                    'name_en' => 'Participates in conversations without talking too much or too little.',
                    'created_at' => '2023-09-12 11:50:55',
                    'updated_at' => '2023-09-12 11:50:55',
                    'question_number' => 12,
                ),
                206 => 
                array (
                    'id' => 707,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يعطي تعليمات شفهية للآخرين تتضمن خطوتين أو نشاطين أو أكثر.',
                    'name_en' => 'Gives verbal instructions to others that involve two or more steps or  activities.',
                    'created_at' => '2023-09-12 11:51:26',
                    'updated_at' => '2023-09-12 11:51:26',
                    'question_number' => 13,
                ),
                207 => 
                array (
                    'id' => 708,
                    'abas_sub_domain_id' => 30,
                    'name' => 'متنع عن تكرار ما يقوله و اعادة الكلام اكثر من مرة.',
                    'name_en' => 'Refrains from repeating what he or she says over and over again.',
                    'created_at' => '2023-09-12 11:52:12',
                    'updated_at' => '2023-09-12 11:52:58',
                    'question_number' => 14,
                ),
                208 => 
                array (
                    'id' => 709,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يبدأ المحادثات حول المواضيع التي تهم الآخرين.',
                    'name_en' => 'Starts conversations on topics of interest to others.',
                    'created_at' => '2023-09-12 11:53:25',
                    'updated_at' => '2023-09-12 11:53:25',
                    'question_number' => 15,
                ),
                209 => 
                array (
                    'id' => 710,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يناقش موضوعًا لمدة 3 دقائق على الأقل.',
                    'name_en' => 'Discusses a topic for at least 3 minutes.',
                    'created_at' => '2023-09-12 11:53:50',
                    'updated_at' => '2023-09-12 11:53:50',
                    'question_number' => 16,
                ),
                210 => 
                array (
                    'id' => 711,
                    'abas_sub_domain_id' => 30,
                'name' => 'إنهاء المحادثات بشكل مناسب (على سبيل المثال، بقول "تشرفت بالحديث معك" أو "أراك لاحقًا").',
                'name_en' => 'Ends conversations appropriately (for example, by saying “Nice talking to  you” or “See you later”).',
                    'created_at' => '2023-09-12 11:55:53',
                    'updated_at' => '2023-09-12 11:55:53',
                    'question_number' => 17,
                ),
                211 => 
                array (
                    'id' => 712,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يتحدث عن أهداف تعليمية أو مهنية مستقبلية واقعية.',
                    'name_en' => 'Talks about realistic future educational or career goals.',
                    'created_at' => '2023-09-12 11:56:20',
                    'updated_at' => '2023-09-12 11:56:20',
                    'question_number' => 18,
                ),
                212 => 
                array (
                    'id' => 713,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يميز بين الكلام الصادق و الكلام المبالغ فيها من قبل الأصدقاء أو المتحدثين أو غيرهم.',
                    'name_en' => 'Distinguishes truthful from exaggerated claims by friends, advertisers, or others.',
                    'created_at' => '2023-09-12 11:56:56',
                    'updated_at' => '2023-09-12 12:04:41',
                    'question_number' => 19,
                ),
                213 => 
                array (
                    'id' => 714,
                    'abas_sub_domain_id' => 30,
                    'name' => 'يستخدم معلومات جديدة لمناقشة الأحداث الجارية.',
                    'name_en' => 'Uses up-to-date information to discuss current events.',
                    'created_at' => '2023-09-12 12:06:11',
                    'updated_at' => '2023-09-12 12:06:11',
                    'question_number' => 20,
                ),
                214 => 
                array (
                    'id' => 715,
                    'abas_sub_domain_id' => 30,
                'name' => 'ﻳﺠﻴﺐ ﻋﻠﻰ اﻷسئلة اﻟﻤﻌﻘﺪة اﻟﺘﻲ ﺗﺘﻄﻠﺐ ﺗﻔﻜﻴﺮﺍً دقيق (ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ، أﺳئلة ﺣﻮل اﻷﺣﺪاث اﻟﺠﺎرﻳﺔ.)',
                'name_en' => 'Answers complex questions that require careful thought and opinion  (for example, questions about politics or current events).',
                    'created_at' => '2023-09-12 12:06:55',
                    'updated_at' => '2023-09-12 12:07:19',
                    'question_number' => 21,
                ),
                215 => 
                array (
                    'id' => 716,
                    'abas_sub_domain_id' => 30,
                'name' => 'التحدث مع الآخرين حول مواضيع معقدة لمدة 10 دقائق على الأقل (على سبيل المثال، حول  الأحداث الجارية).',
                'name_en' => 'Talks with others about complex topics for at least 10 minutes (for example,  about politics or current events).',
                    'created_at' => '2023-09-12 12:08:07',
                    'updated_at' => '2023-09-12 12:08:07',
                    'question_number' => 22,
                ),
                216 => 
                array (
                    'id' => 717,
                    'abas_sub_domain_id' => 31,
                    'name' => 'يجد الحمام في المدرسة بنفسه.',
                    'name_en' => 'Finds the restroom at school by himself or herself.',
                    'created_at' => '2023-09-13 08:55:36',
                    'updated_at' => '2023-09-13 08:55:36',
                    'question_number' => 1,
                ),
                217 => 
                array (
                    'id' => 718,
                    'abas_sub_domain_id' => 31,
                'name' => 'يظهر الاحترام للمدرسة أو الممتلكات العامة (على سبيل المثال، رمي القمامة في صناديق، عدم إتلاف معدات الملعب).',
                'name_en' => 'Shows respect for school or public property (for example, throws trash in    cans, does not damage playground equipment).',
                    'created_at' => '2023-09-13 08:57:09',
                    'updated_at' => '2023-09-13 08:57:09',
                    'question_number' => 2,
                ),
                218 => 
                array (
                    'id' => 719,
                    'abas_sub_domain_id' => 31,
                    'name' => 'يحدد و يسمي المستشفى ومحطة الوقود وإدارة الإطفاء وخدمات المجتمع الأخرى أثناء المناقشات الصفية.',
                    'name_en' => 'Identifies hospital, gas station, fire department, and other community    services during class discussions.',
                    'created_at' => '2023-09-13 08:59:43',
                    'updated_at' => '2023-09-13 08:59:43',
                    'question_number' => 3,
                ),
                219 => 
                array (
                    'id' => 720,
                    'abas_sub_domain_id' => 31,
                'name' => 'ﻳﻈُﻬﺮ اﻻﺣﺘﺮام للكبار ذوي السلطة ﻣﻦ ﺧﻼل اﺗﺒﺎع ﻗﻮاﻋﺪﻫﻢ وﺗﻮﺟﻴﻬﺎﺗﻬﻢ(ﻋﻠﻰ ﺳﺒﻴﻞ اﻟﻤﺜﺎل ،اﻵﺑﺎء و اﻤﻌﻠﻤﻴﻦ و ﺿﺒﺎط اﻟﺸﺮﻃﺔ)',
                'name_en' => 'Shows respect for persons in authority by following their rules and  directions (for example, parents, teachers, police officers).',
                    'created_at' => '2023-09-13 09:00:35',
                    'updated_at' => '2023-09-13 09:00:57',
                    'question_number' => 4,
                ),
                220 => 
                array (
                    'id' => 721,
                    'abas_sub_domain_id' => 31,
                    'name' => 'ينظر في كلا الاتجاهين قبل عبور ممر المدرسة أو موقف السيارات الخاص بالمدرسة',
                    'name_en' => 'Looks both ways before crossing a school driveway or school parking lot',
                    'created_at' => '2023-09-13 09:03:15',
                    'updated_at' => '2023-09-13 09:03:15',
                    'question_number' => 5,
                ),
                221 => 
                array (
                    'id' => 722,
                    'abas_sub_domain_id' => 31,
                'name' => 'يحدد الخدمات المقدمة من قبل المتخصصين في المجتمع أثناء المناقشات الصفية (على سبيل المثال، الموظفين الأطباء أو موظفي القانون).',
                'name_en' => 'Identifies services provided by professionals in the community during class  discussions (for example, medical or law enforcement personnel).',
                    'created_at' => '2023-09-13 09:04:10',
                    'updated_at' => '2023-09-13 09:04:10',
                    'question_number' => 6,
                ),
                222 => 
                array (
                    'id' => 723,
                    'abas_sub_domain_id' => 31,
                    'name' => 'يدير المهمات و الأعمال إلى مواقع مختلفة في مبنى المدرسة.',
                    'name_en' => 'Runs errands to various locations in the school building.',
                    'created_at' => '2023-09-13 09:05:36',
                    'updated_at' => '2023-09-13 09:05:36',
                    'question_number' => 7,
                ),
                223 => 
                array (
                    'id' => 724,
                    'abas_sub_domain_id' => 31,
                    'name' => 'يوضح إجراءات الاتصال بخدمات المجتمع في حالة الطوارئ',
                    'name_en' => 'Describes the procedures for contacting community services in case of  emergency',
                    'created_at' => '2023-09-13 09:07:46',
                    'updated_at' => '2023-09-13 09:07:46',
                    'question_number' => 8,
                ),
                224 => 
                array (
                    'id' => 725,
                    'abas_sub_domain_id' => 31,
                    'name' => 'يستخدم مكتبة المدرسة أو المكتبة العامة أو الإنترنت للحصول على الكتب أو المواد المرجعية.',
                    'name_en' => 'Uses the school library, public library, or Internet to get books or reference   materials.',
                    'created_at' => '2023-09-13 09:09:39',
                    'updated_at' => '2023-09-13 09:09:39',
                    'question_number' => 9,
                ),
                225 => 
                array (
                    'id' => 726,
                    'abas_sub_domain_id' => 31,
                'name' => 'يحمل ما يكفي من المال للقيام بمشتريات صغيرة (على سبيل المثال، مشروب غازي).',
                'name_en' => 'Carries enough money to make small purchases (for example, a soft drink).',
                    'created_at' => '2023-09-13 09:10:37',
                    'updated_at' => '2023-09-13 09:10:37',
                    'question_number' => 10,
                ),
                226 => 
                array (
                    'id' => 727,
                    'abas_sub_domain_id' => 31,
                'name' => 'يوضح العنوان العام لوجهة السفر (على سبيل المثال، "في عمان خلدا، بالقرب من إشارة البنك العربي").',
                'name_en' => 'States general address of a travel destination (for example, “On   Washington Avenue, near Lake Street”)',
                    'created_at' => '2023-09-13 09:11:27',
                    'updated_at' => '2023-09-13 09:12:00',
                    'question_number' => 11,
                ),
                227 => 
                array (
                    'id' => 728,
                    'abas_sub_domain_id' => 31,
                'name' => 'يخبر الآخرين عن ساعات عمل المتجر (على سبيل المثال، "10 صباحًا إلى 9 مساءً").',
                'name_en' => 'Tells others about a store’s hours of operation (for example, “10 a.m. to  9 p.m.”).',
                    'created_at' => '2023-09-13 09:12:56',
                    'updated_at' => '2023-09-13 09:12:56',
                    'question_number' => 12,
                ),
                228 => 
                array (
                    'id' => 729,
                    'abas_sub_domain_id' => 31,
                    'name' => 'يستطيع التعرف على منتجات  المتجر سيئ الصنع أو باهظ الثمن.',
                    'name_en' => 'Recognizes when a store item is poorly made or too expensive.',
                    'created_at' => '2023-09-13 09:23:42',
                    'updated_at' => '2023-09-13 09:23:42',
                    'question_number' => 13,
                ),
                229 => 
                array (
                    'id' => 730,
                    'abas_sub_domain_id' => 31,
                'name' => 'يعتمد على نفسه في التنقل في المجتمع (على سبيل المثال، المشي أو استخدام وسائل النقل العام أو الدراجة أو السيارة).',
                'name_en' => 'Relies on himself or herself for travel in the community (for example, walks  or uses public transportation, a bicycle, or a car).',
                    'created_at' => '2023-09-13 09:24:21',
                    'updated_at' => '2023-09-13 09:24:21',
                    'question_number' => 14,
                ),
                230 => 
                array (
                    'id' => 731,
                    'abas_sub_domain_id' => 31,
                    'name' => 'يستخدم الخرائط الورقية أو الرقمية للعثور على طريقه إلى المواقع المطلوبة',
                    'name_en' => 'Uses paper or digital maps to find his or her way to desired locations',
                    'created_at' => '2023-09-13 09:26:59',
                    'updated_at' => '2023-09-13 09:26:59',
                    'question_number' => 15,
                ),
                231 => 
                array (
                    'id' => 732,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يقرأ اسمه عند طباعته',
                    'name_en' => 'Reads his or her name when printed',
                    'created_at' => '2023-09-13 09:28:14',
                    'updated_at' => '2023-09-13 09:28:14',
                    'question_number' => 1,
                ),
                232 => 
                array (
                    'id' => 733,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يكتب أو يطبع اسمه الأول والأخير',
                    'name_en' => 'Writes or prints his or her first and last name',
                    'created_at' => '2023-09-13 09:28:36',
                    'updated_at' => '2023-09-13 09:28:36',
                    'question_number' => 2,
                ),
                233 => 
                array (
                    'id' => 734,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يذكر أيام الأسبوع بالترتيب.',
                    'name_en' => 'States the days of the week in order.',
                    'created_at' => '2023-09-13 09:29:10',
                    'updated_at' => '2023-09-13 09:29:10',
                    'question_number' => 3,
                ),
                234 => 
                array (
                    'id' => 735,
                    'abas_sub_domain_id' => 32,
                'name' => 'يقرأ ويلتزم بالإشارات الشائعة (على سبيل المثال، عدم الدخول، الخروج، التوقف).',
                'name_en' => 'Reads and obeys common signs (for example, Do Not Enter, Exit, Stop).',
                    'created_at' => '2023-09-13 09:30:45',
                    'updated_at' => '2023-09-13 09:30:45',
                    'question_number' => 4,
                ),
                235 => 
                array (
                    'id' => 736,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يجيب على أسئلة بسيطة حول قصة مقروءة له .',
                    'name_en' => 'Answers simple questions about a story read to him or her.',
                    'created_at' => '2023-09-13 09:33:00',
                    'updated_at' => '2023-09-13 09:33:00',
                    'question_number' => 5,
                ),
                236 => 
                array (
                    'id' => 737,
                    'abas_sub_domain_id' => 32,
                'name' => 'يحدد التواريخ المهمة في التقويم (على سبيل المثال، أعياد الميلاد أو العطلات).',
                'name_en' => 'Locates important dates on a calendar (for example, birthdays or holidays).',
                    'created_at' => '2023-09-13 09:49:36',
                    'updated_at' => '2023-09-13 11:28:17',
                    'question_number' => 6,
                ),
                237 => 
                array (
                    'id' => 738,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يقرأ ويتبع التعليمات لاستكمال أعمال أو أنشطة الفصل الدراسي',
                    'name_en' => 'Reads and follows instructions for completing classroom projects or   activities',
                    'created_at' => '2023-09-13 09:50:17',
                    'updated_at' => '2023-09-13 09:50:17',
                    'question_number' => 7,
                ),
                238 => 
                array (
                    'id' => 739,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يقرأ قوائم الغداء المدرسية.',
                    'name_en' => 'Reads school lunch menus.',
                    'created_at' => '2023-09-13 09:50:45',
                    'updated_at' => '2023-09-13 09:50:45',
                    'question_number' => 8,
                ),
                239 => 
                array (
                    'id' => 740,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يخبر الوقت بشكل صحيح باستخدام الساعة أو ساعة اليد.',
                    'name_en' => 'Tells time correctly, using a watch or a clock with hands.',
                    'created_at' => '2023-09-13 09:51:11',
                    'updated_at' => '2023-09-13 09:51:11',
                    'question_number' => 9,
                ),
                240 => 
                array (
                    'id' => 741,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يكتب عنوانه، بما في ذلك الرمز البريدي',
                    'name_en' => 'Writes his or her address, including zip code',
                    'created_at' => '2023-09-13 09:51:31',
                    'updated_at' => '2023-09-13 09:51:31',
                    'question_number' => 10,
                ),
                241 => 
                array (
                    'id' => 742,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يقيس الطول والارتفاع.',
                    'name_en' => 'Measures length and height.',
                    'created_at' => '2023-09-13 09:51:54',
                    'updated_at' => '2023-09-13 11:28:54',
                    'question_number' => 11,
                ),
                242 => 
                array (
                    'id' => 743,
                    'abas_sub_domain_id' => 32,
                    'name' => '. يستخدم الميزان لوزن الأشياء.',
                    'name_en' => '. Uses a scale to weigh objects.',
                    'created_at' => '2023-09-13 09:52:15',
                    'updated_at' => '2023-09-13 09:52:15',
                    'question_number' => 12,
                ),
                243 => 
                array (
                    'id' => 744,
                    'abas_sub_domain_id' => 32,
                'name' => 'يجمع العملات المعدنية لإنتاج المبلغ الصحيح من المال (على سبيل المثال، ربع زائد عشرة قروش يساوي 35 قرش).',
                'name_en' => 'Combines coins to produce the correct amount of money (for example, a quarter plus a dime equals 35 cents).',
                    'created_at' => '2023-09-13 09:53:09',
                    'updated_at' => '2023-09-13 09:53:09',
                    'question_number' => 13,
                ),
                244 => 
                array (
                    'id' => 745,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يقرأ ويتبع الفصل الدراسي اليومي أو جدول العمل، دون الحاجة إلى تذكيره من قبل شخص آخر.',
                    'name_en' => 'Reads and follows a daily classroom or work schedule, without needing to   be reminded by another person.',
                    'created_at' => '2023-09-13 09:53:44',
                    'updated_at' => '2023-09-13 09:53:44',
                    'question_number' => 14,
                ),
                245 => 
                array (
                    'id' => 746,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يكتب ويرسل الرسائل أو الملاحظات الشخصية أو رسائل البريد الإلكتروني.',
                    'name_en' => 'Writes and sends letters, personal notes, or emails.',
                    'created_at' => '2023-09-13 09:54:56',
                    'updated_at' => '2023-09-13 09:54:56',
                    'question_number' => 15,
                ),
                246 => 
                array (
                    'id' => 747,
                    'abas_sub_domain_id' => 32,
                'name' => 'يستخدم الموارد المطبوعة أو الإنترنت للعثور على المعلومات (على سبيل المثال، في القواميس والموسوعات).',
                'name_en' => 'Uses printed or Internet resources to find information (for example, in  dictionaries and encyclopedias).',
                    'created_at' => '2023-09-13 09:55:45',
                    'updated_at' => '2023-09-13 09:55:45',
                    'question_number' => 16,
                ),
                247 => 
                array (
                    'id' => 748,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يتابع اهتمامًا مفضلاً أو حدثًا حاليًا من خلال القراءة عنه في الصحف أو الكتب أو المواد الأخرى أو على الإنترنت.',
                    'name_en' => 'Follows a favorite interest or current event by reading about it in  newspapers, books, or other materials, or on the Internet.',
                    'created_at' => '2023-09-13 09:57:13',
                    'updated_at' => '2023-09-13 09:57:13',
                    'question_number' => 17,
                ),
                248 => 
                array (
                    'id' => 749,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يستخدم الفهرس الموجود في الكتاب لتحديد المواضيع المطلوبة.',
                    'name_en' => 'Uses the index in a book to locate desired topics.',
                    'created_at' => '2023-09-13 09:57:37',
                    'updated_at' => '2023-09-13 09:57:37',
                    'question_number' => 18,
                ),
                249 => 
                array (
                    'id' => 750,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يدون الملاحظات أثناء الفصل.',
                    'name_en' => 'Takes notes during class.',
                    'created_at' => '2023-09-13 09:58:05',
                    'updated_at' => '2023-09-13 09:58:05',
                    'question_number' => 19,
                ),
                250 => 
                array (
                    'id' => 751,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يكتب قائمة باللوازم المدرسية أو الواجبات.',
                    'name_en' => 'Writes a list of school supplies or assignments.',
                    'created_at' => '2023-09-13 09:58:26',
                    'updated_at' => '2023-09-13 09:58:26',
                    'question_number' => 20,
                ),
                251 => 
                array (
                    'id' => 752,
                    'abas_sub_domain_id' => 32,
                'name' => '. يقرأ معلومات مهمة (على سبيل المثال، التسجيل في الفصل والإعلانات أو سياسات السلوك المدرسي).',
                'name_en' => '. Reads important information (for example, class registration and    announcements or school conduct policies).',
                    'created_at' => '2023-09-13 09:58:56',
                    'updated_at' => '2023-09-13 09:58:56',
                    'question_number' => 21,
                ),
                252 => 
                array (
                    'id' => 753,
                    'abas_sub_domain_id' => 32,
                    'name' => 'يكمل النماذج المكتوبة للتقدم للوظائف.',
                    'name_en' => 'Completes written forms to apply for jobs.',
                    'created_at' => '2023-09-13 11:27:12',
                    'updated_at' => '2023-09-13 11:27:12',
                    'question_number' => 22,
                ),
                253 => 
                array (
                    'id' => 754,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يضع الصواني والأطباق والشوك وغيرها من العناصر المتسخة في أماكنها المخصصة في غرفة الغداء بالمدرسة.',
                    'name_en' => 'Places dirty trays, plates, forks, and other items in correct disposal bins in  the school lunchroom.',
                    'created_at' => '2023-09-13 12:34:58',
                    'updated_at' => '2023-09-13 12:34:58',
                    'question_number' => 1,
                ),
                254 => 
                array (
                    'id' => 755,
                    'abas_sub_domain_id' => 33,
                'name' => 'لا يضع  اللوازم و الأدوات  المدرسية في فمه (مثل الورق والكتب وأقلام الرصاص).',
                'name_en' => 'Refrains from putting school supplies in mouth (for example, paper, books, pencils).',
                    'created_at' => '2023-09-13 12:36:48',
                    'updated_at' => '2023-09-13 12:36:48',
                    'question_number' => 2,
                ),
                255 => 
                array (
                    'id' => 756,
                    'abas_sub_domain_id' => 33,
                    'name' => 'مسح الماء او العصير الذي يسكب منه  في الفصل الدراسي.',
                    'name_en' => 'Wipes up his or her spills in the classroom.',
                    'created_at' => '2023-09-13 12:37:15',
                    'updated_at' => '2023-09-13 12:42:14',
                    'question_number' => 3,
                ),
                256 => 
                array (
                    'id' => 757,
                    'abas_sub_domain_id' => 33,
                    'name' => '. يظهر احترامًا لممتلكات وحقوق زملاء الدراسة والمعلمين الآخرين.',
                    'name_en' => '. Shows respect for the property and rights of other classmates and  teachers.',
                    'created_at' => '2023-09-13 14:18:55',
                    'updated_at' => '2023-09-13 14:18:55',
                    'question_number' => 4,
                ),
                257 => 
                array (
                    'id' => 758,
                    'abas_sub_domain_id' => 33,
                    'name' => 'وضع الكتب واللوازم في أماكنها الصحيحة عند الانتهاء من استخدامها.',
                    'name_en' => 'Puts books and supplies in their proper places when finished using them.',
                    'created_at' => '2023-09-15 17:11:34',
                    'updated_at' => '2023-09-15 17:11:34',
                    'question_number' => 5,
                ),
                258 => 
                array (
                    'id' => 759,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يساعد على إبقاء الفصل الدراسي مرتب ونظيف.',
                    'name_en' => 'Helps keep classroom neat and clean.',
                    'created_at' => '2023-09-15 17:12:15',
                    'updated_at' => '2023-09-15 17:12:15',
                    'question_number' => 6,
                ),
                259 => 
                array (
                    'id' => 760,
                    'abas_sub_domain_id' => 33,
                    'name' => 'إرجاع الكتب واللوازم المستعارة.',
                    'name_en' => 'Returns borrowed books and supplies.',
                    'created_at' => '2023-09-15 17:12:35',
                    'updated_at' => '2023-09-15 17:12:35',
                    'question_number' => 7,
                ),
                260 => 
                array (
                    'id' => 761,
                    'abas_sub_domain_id' => 33,
                'name' => 'يظهر الاحترام عند استخدام ممتلكات الآخرين (على سبيل المثال، من خلال الحفاظ على نظافتها وإعادتها سليمة عند الطلب).',
                'name_en' => 'Shows respect when using others’ possessions (for example, by keeping  them clean and returning them undamaged when requested).',
                    'created_at' => '2023-09-15 17:13:56',
                    'updated_at' => '2023-09-15 17:13:56',
                    'question_number' => 8,
                ),
                261 => 
                array (
                    'id' => 762,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يلتقط ويرمي القمامة أو الورق في الفصل الدراسي وفي ممرات المدرسة وفي ساحات المدرسة.',
                    'name_en' => '. Picks up and throws away trash or paper in the classroom, in school                       hallways, and on school grounds.',
                    'created_at' => '2023-09-15 17:17:22',
                    'updated_at' => '2023-09-15 17:17:22',
                    'question_number' => 9,
                ),
                262 => 
                array (
                    'id' => 763,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يحافظ على الكتب مرتبة ونظيفة.',
                    'name_en' => 'Keeps books neat and clean.',
                    'created_at' => '2023-09-15 17:17:50',
                    'updated_at' => '2023-09-15 17:17:50',
                    'question_number' => 10,
                ),
                263 => 
                array (
                    'id' => 764,
                    'abas_sub_domain_id' => 33,
                'name' => 'يخبر المعلم إذا كانت هناك حاجة إلى إصلاحات في الفصل الدراسي (على سبيل المثال، إذا كان هناك شيء مكسور).',
                'name_en' => 'Tells teacher if repairs are needed in the classroom (for example,                            if something is broken).',
                    'created_at' => '2023-09-15 17:18:21',
                    'updated_at' => '2023-09-15 17:18:21',
                    'question_number' => 11,
                ),
                264 => 
                array (
                    'id' => 765,
                    'abas_sub_domain_id' => 33,
                    'name' => '. الانتقال بسهولة من نشاط مدرسي إلى آخر',
                    'name_en' => '. Transitions easily from one school activity to the next',
                    'created_at' => '2023-09-15 17:18:53',
                    'updated_at' => '2023-09-15 17:18:53',
                    'question_number' => 12,
                ),
                265 => 
                array (
                    'id' => 766,
                    'abas_sub_domain_id' => 33,
                'name' => 'يأتي إلى الفصل مستعدًا (على سبيل المثال، بالكتب والواجبات المنزلية والمواد الضرورية الأخرى).',
                'name_en' => 'Comes to class prepared (for example, with books, homework, and other  necessary materials).',
                    'created_at' => '2023-09-15 17:19:34',
                    'updated_at' => '2023-09-15 17:19:34',
                    'question_number' => 13,
                ),
                266 => 
                array (
                    'id' => 767,
                    'abas_sub_domain_id' => 33,
                    'name' => '. إبلاغ المعلم أو أي شخص بالغ آخر إذا كان شخص ما يتنمر عليه أو يؤذيه أو يؤذي الآخرين.',
                    'name_en' => '. Informs a teacher or other adult if someone is bullying or hurting him or her   or others.',
                    'created_at' => '2023-09-15 17:20:04',
                    'updated_at' => '2023-09-15 17:20:04',
                    'question_number' => 14,
                ),
                267 => 
                array (
                    'id' => 768,
                    'abas_sub_domain_id' => 33,
                    'name' => '. يعمل بهدوء داخل الفصل دون إزعاج الآخرين.',
                    'name_en' => '. Works quietly in the classroom without disturbing others.',
                    'created_at' => '2023-09-15 17:20:25',
                    'updated_at' => '2023-09-15 17:20:25',
                    'question_number' => 15,
                ),
                268 => 
                array (
                    'id' => 769,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يكون منتج و متعاون  كجزء من مجموعات أو فرق.',
                    'name_en' => '. Is productive and cooperative as part of groups or teams.',
                    'created_at' => '2023-09-15 17:21:17',
                    'updated_at' => '2023-09-15 17:21:17',
                    'question_number' => 16,
                ),
                269 => 
                array (
                    'id' => 770,
                    'abas_sub_domain_id' => 33,
                    'name' => 'ينظف مكتبه أو مساحة عمله أو خزانته بانتظام.',
                    'name_en' => 'Cleans his or her own desk, workspace, or locker regularly.',
                    'created_at' => '2023-09-15 17:21:44',
                    'updated_at' => '2023-09-15 17:21:44',
                    'question_number' => 17,
                ),
                270 => 
                array (
                    'id' => 771,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يأخذ الكتب واللوازم الصحيحة إلى المنزل لأداء الواجبات المنزلية.',
                    'name_en' => 'Takes correct books and supplies home for homework.',
                    'created_at' => '2023-09-15 17:22:10',
                    'updated_at' => '2023-09-15 17:22:10',
                    'question_number' => 18,
                ),
                271 => 
                array (
                    'id' => 772,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يأخذ الوقت اللازم لإنجاز الواجبات المدرسية بشكل جيد، دون تسرع.',
                    'name_en' => 'Takes the time needed to do school work well, without rushing.',
                    'created_at' => '2023-09-15 17:22:35',
                    'updated_at' => '2023-09-15 17:22:35',
                    'question_number' => 19,
                ),
                272 => 
                array (
                    'id' => 773,
                    'abas_sub_domain_id' => 33,
                    'name' => 'ينظم الواجبات المدرسية بحيث يتم إنجاز المهام الأكثر أهمية أولاً',
                    'name_en' => 'Organizes school assignments so that the most important tasks are completed first',
                    'created_at' => '2023-09-15 17:23:17',
                    'updated_at' => '2023-09-15 17:23:17',
                    'question_number' => 20,
                ),
                273 => 
                array (
                    'id' => 774,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يساعد الطلاب الآخرين في واجباتهم المدرسية',
                    'name_en' => 'Helps other students with their schoolwork or homework',
                    'created_at' => '2023-09-15 17:24:09',
                    'updated_at' => '2023-09-15 17:24:09',
                    'question_number' => 21,
                ),
                274 => 
                array (
                    'id' => 775,
                    'abas_sub_domain_id' => 33,
                    'name' => 'يقترح على المعلمين لوازم مدرسية جديدة أو معدات قد تكون مفيدة في الفصل الدراسي.',
                    'name_en' => 'Suggests to teachers new school supplies or equipment that would be helpful in the classroom.',
                    'created_at' => '2023-09-15 17:24:42',
                    'updated_at' => '2023-09-15 17:24:42',
                    'question_number' => 22,
                ),
                275 => 
                array (
                    'id' => 776,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يتبع قواعد السلامة الخاصة بأجهزة إنذار الحريق أو  في المدرسة.',
                    'name_en' => 'Follows safety rules for fire or weather alarms at school.',
                    'created_at' => '2023-09-15 18:51:50',
                    'updated_at' => '2023-09-15 18:51:50',
                    'question_number' => 1,
                ),
                276 => 
                array (
                    'id' => 777,
                    'abas_sub_domain_id' => 34,
                'name' => 'يستخدم المواد المدرسية دون إيذاء الآخرين (على سبيل المثال، لا يؤذي الآخرين بقلم رصاص أو يضرب الآخرين بكتاب).',
                'name_en' => 'Uses school materials without injuring others (for example, does not stab   others with a pencil or hit others with a book).',
                    'created_at' => '2023-09-15 18:52:37',
                    'updated_at' => '2023-09-15 18:52:37',
                    'question_number' => 2,
                ),
                277 => 
                array (
                    'id' => 778,
                    'abas_sub_domain_id' => 34,
                    'name' => '. البقاء مع الفصل أثناء الرحلات الميدانية دون التجول بعيدًا',
                    'name_en' => '. Stays with class during field trips without wandering away',
                    'created_at' => '2023-09-15 18:52:59',
                    'updated_at' => '2023-09-15 18:52:59',
                    'question_number' => 3,
                ),
                278 => 
                array (
                    'id' => 779,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يدعو للمساعدة إذا أصيب شخص ما في المدرسة.',
                    'name_en' => 'Calls for help if someone is hurt at school.',
                    'created_at' => '2023-09-15 18:53:17',
                    'updated_at' => '2023-09-15 18:53:17',
                    'question_number' => 4,
                ),
                279 => 
                array (
                    'id' => 780,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يحمل المقص بأمان.',
                    'name_en' => 'Carries scissors safely.',
                    'created_at' => '2023-09-15 18:53:37',
                    'updated_at' => '2023-09-15 18:53:37',
                    'question_number' => 5,
                ),
                280 => 
                array (
                    'id' => 781,
                    'abas_sub_domain_id' => 34,
                    'name' => '. يتبع قواعد السلامة في ملعب المدرسة أو في صالة الألعاب الرياضية.',
                    'name_en' => '. Follows safety rules on the school playground or in the gym.',
                    'created_at' => '2023-09-15 18:53:56',
                    'updated_at' => '2023-09-15 18:53:56',
                    'question_number' => 6,
                ),
                281 => 
                array (
                    'id' => 782,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يتبع لوائح السلامة العامة في المدرسة.',
                    'name_en' => 'Follows general safety regulations at school.',
                    'created_at' => '2023-09-15 18:54:16',
                    'updated_at' => '2023-09-15 18:54:16',
                    'question_number' => 7,
                ),
                282 => 
                array (
                    'id' => 783,
                    'abas_sub_domain_id' => 34,
                    'name' => 'اتباع قواعد السلامة عند الوصول إلى المدرسة والخروج منها.',
                    'name_en' => '. Follows safety rules for arriving at and departing from school.',
                    'created_at' => '2023-09-15 18:54:40',
                    'updated_at' => '2023-09-15 18:54:40',
                    'question_number' => 8,
                ),
                283 => 
                array (
                    'id' => 784,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يتبع قواعد السلامة عند ركوب الحافلة المدرسية أو السفر في رحلة ميدانية',
                    'name_en' => 'Follows safety rules when on the school bus or traveling on a field trip',
                    'created_at' => '2023-09-15 18:55:09',
                    'updated_at' => '2023-09-15 18:55:09',
                    'question_number' => 9,
                ),
                284 => 
                array (
                    'id' => 785,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يحمل الأشياء القابلة للكسر بأمان وحذر.',
                    'name_en' => 'Carries breakable objects safely and carefully.',
                    'created_at' => '2023-09-15 18:55:27',
                    'updated_at' => '2023-09-15 18:55:27',
                    'question_number' => 10,
                ),
                285 => 
                array (
                    'id' => 786,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يطلب رؤية ممرضة المدرسة أو أي مسؤول آخر في المدرسة عند المرض أو الإصابة.',
                    'name_en' => 'Asks to see the school nurse or another school official when ill or hurt.',
                    'created_at' => '2023-09-15 18:55:50',
                    'updated_at' => '2023-09-15 18:55:50',
                    'question_number' => 11,
                ),
                286 => 
                array (
                    'id' => 787,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يجيب طلبات الآخرين فقط إذا كان يعرفهم ويثق بهم.',
                    'name_en' => 'Obeys requests from other people only if he or she knows and trusts them.',
                    'created_at' => '2023-09-15 18:56:20',
                    'updated_at' => '2023-09-15 18:56:20',
                    'question_number' => 12,
                ),
                287 => 
                array (
                    'id' => 788,
                    'abas_sub_domain_id' => 34,
                    'name' => 'يستخدم الأدوات والمعدات بشكل آمن.',
                    'name_en' => 'Uses tools and equipment safely.',
                    'created_at' => '2023-09-15 18:56:45',
                    'updated_at' => '2023-09-15 18:56:45',
                    'question_number' => 13,
                ),
                288 => 
                array (
                    'id' => 789,
                    'abas_sub_domain_id' => 34,
                'name' => 'يتجنب الأشخاص الذين قد يستغلونه (على سبيل المثال، من أجل المال أو الجنس).',
                'name_en' => 'Avoids people who might take advantage of him or her (for example, for  money or sex).',
                    'created_at' => '2023-09-15 18:57:19',
                    'updated_at' => '2023-09-15 18:58:46',
                    'question_number' => 14,
                ),
                289 => 
                array (
                    'id' => 790,
                    'abas_sub_domain_id' => 34,
                'name' => 'يهتم بإصاباته الطفيفة في المدرسة (على سبيل المثال، جروح البسيطة ، وخدوش الركبة، ونزيف الأنف)',
                'name_en' => 'Cares for own minor injuries at school (for example, paper cuts, knee  scrapes, nosebleeds)',
                    'created_at' => '2023-09-15 18:58:05',
                    'updated_at' => '2023-09-15 18:58:05',
                    'question_number' => 15,
                ),
                290 => 
                array (
                    'id' => 791,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يلعب بالدمى أو الألعاب أو غيرها من الأشياء الممتعة مع الآخرين.',
                    'name_en' => 'Plays with toys, games, or other fun items with others.',
                    'created_at' => '2023-09-15 18:59:54',
                    'updated_at' => '2023-09-15 18:59:54',
                    'question_number' => 1,
                ),
                291 => 
                array (
                    'id' => 792,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يختار أنشطة وقت الفراغ للقيام بها بمفرده في الفصل الدراسي دون أن يطلب من المعلم اختيارها.',
                    'name_en' => 'Selects free-time activities to do alone in the classroom without asking the  teacher to choose them.',
                    'created_at' => '2023-09-15 19:00:31',
                    'updated_at' => '2023-09-15 19:01:07',
                    'question_number' => 2,
                ),
                292 => 
                array (
                    'id' => 793,
                    'abas_sub_domain_id' => 35,
                    'name' => 'ينظر إلى الصور أو يقرأ الكتب أو المجلات أثناء وقت الفصل الدراسي المجاني.',
                    'name_en' => 'Looks at pictures or reads books or magazines during free class time.',
                    'created_at' => '2023-09-15 19:01:29',
                    'updated_at' => '2023-09-15 19:01:29',
                    'question_number' => 3,
                ),
                293 => 
                array (
                    'id' => 794,
                    'abas_sub_domain_id' => 35,
                    'name' => 'ينتظر دوره في الألعاب والأنشطة الصفية الأخرى.',
                    'name_en' => 'Waits for his or her turn in games and other classroom activities.',
                    'created_at' => '2023-09-15 19:01:53',
                    'updated_at' => '2023-09-15 19:01:53',
                    'question_number' => 4,
                ),
                294 => 
                array (
                    'id' => 795,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يتبع القواعد في الألعاب والأنشطة الصفية الأخرى.',
                    'name_en' => 'Follows the rules in games and other classroom activities.',
                    'created_at' => '2023-09-15 19:02:15',
                    'updated_at' => '2023-09-15 19:02:15',
                    'question_number' => 5,
                ),
                295 => 
                array (
                    'id' => 796,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يشارك في مجموعة متنوعة من الأنشطة الترفيهية بدلاً من نشاط واحد أو اثنين فقط.',
                    'name_en' => 'Engages in a variety of fun activities instead of only one or two.',
                    'created_at' => '2023-09-15 19:02:37',
                    'updated_at' => '2023-09-15 19:02:37',
                    'question_number' => 6,
                ),
                296 => 
                array (
                    'id' => 797,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يشارك مع الآخرين في لعبة أو نشاط آخر دون الحاجة إلى التشجيع',
                    'name_en' => 'Participates with others in a game or other activity without needing  encouragement',
                    'created_at' => '2023-09-15 19:03:24',
                    'updated_at' => '2023-09-15 19:03:24',
                    'question_number' => 7,
                ),
                297 => 
                array (
                    'id' => 798,
                    'abas_sub_domain_id' => 35,
                'name' => 'يشارك بانتظام في نشاط ممتع محدد (على سبيل المثال، الاستماع إلى نوع معين من الموسيقى أو لعب لعبة كمبيوتر مفضلة)',
                'name_en' => 'Participates regularly in a specific fun activity (for example, listening to a   certain type of music or playing a favorite computer game)',
                    'created_at' => '2023-09-15 19:04:00',
                    'updated_at' => '2023-09-15 19:04:00',
                    'question_number' => 8,
                ),
                298 => 
                array (
                    'id' => 799,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يدعو الآخرين للانضمام إليه في ممارسة الألعاب والأنشطة الترفيهية الأخرى.',
                    'name_en' => 'Invites others to join him or her in playing games and other fun activities.',
                    'created_at' => '2023-09-15 19:04:23',
                    'updated_at' => '2023-09-15 19:04:23',
                    'question_number' => 9,
                ),
                299 => 
                array (
                    'id' => 800,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يستغل وقت الفراغ خلال اليوم الدراسي بشكل منتج و صحيح

.',
                    'name_en' => 'Uses free time during the school day productively.',
                    'created_at' => '2023-09-15 19:04:55',
                    'updated_at' => '2023-09-15 19:04:55',
                    'question_number' => 10,
                ),
                300 => 
                array (
                    'id' => 801,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يجرب نشاطًا جديدًا للتعرف على شيء جديد.',
                    'name_en' => '. Tries a new activity to learn about something new.',
                    'created_at' => '2023-09-15 19:05:22',
                    'updated_at' => '2023-09-15 19:05:22',
                    'question_number' => 11,
                ),
                301 => 
                array (
                    'id' => 802,
                    'abas_sub_domain_id' => 35,
                'name' => 'يسأل زملاء الدراسة عما يرغبون في القيام به أثناء وقت الفراغ في المدرسة (على سبيل المثال، الألعاب أو الأنشطة)',
                'name_en' => 'Asks classmates what they would like to do during free time at school (for example, games or activities)',
                    'created_at' => '2023-09-15 19:06:07',
                    'updated_at' => '2023-09-15 19:06:07',
                    'question_number' => 12,
                ),
                302 => 
                array (
                    'id' => 803,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يشارك في نادٍ، أو في فريق رياضي، أو في نشاط جماعي منظم، حتى عندما يتم الترتيب له من قبل المعلم أو أحد الوالدين',
                    'name_en' => 'Participates in a club, on a sports team, or in an organized group activity,   even when arranged by a teacher or parent',
                    'created_at' => '2023-09-15 19:06:57',
                    'updated_at' => '2023-09-15 19:06:57',
                    'question_number' => 13,
                ),
                303 => 
                array (
                    'id' => 804,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يدعو الآخرين ليكونوا أولًا في الألعاب أو اللعب أو الأنشطة الأخرى',
                    'name_en' => 'Invites others to go first in games, play, or other activities',
                    'created_at' => '2023-09-15 19:07:40',
                    'updated_at' => '2023-09-15 19:07:40',
                    'question_number' => 14,
                ),
                304 => 
                array (
                    'id' => 805,
                    'abas_sub_domain_id' => 35,
                    'name' => 'يتذكر اللعبة أو النشاط الذي يحبه زميله ويعرض المشاركة فيه',
                    'name_en' => 'Remembers the game or activity a classmate likes and offers to participate',
                    'created_at' => '2023-09-15 19:08:04',
                    'updated_at' => '2023-09-15 19:08:04',
                    'question_number' => 15,
                ),
                305 => 
                array (
                    'id' => 806,
                    'abas_sub_domain_id' => 35,
                    'name' => 'ينظم لعبة أو أي نشاط آخر في المدرسة لمجموعة من زملاء الدراسة دون مساعدة من الآخرين',
                    'name_en' => 'Organizes a game or other activity at school for a group of classmates    without help from others',
                    'created_at' => '2023-09-15 19:08:52',
                    'updated_at' => '2023-09-15 19:08:52',
                    'question_number' => 16,
                ),
                306 => 
                array (
                    'id' => 807,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يستخدم مرحاض المدرسة دون مساعدة.',
                    'name_en' => 'Uses school restroom without help.',
                    'created_at' => '2023-09-15 20:05:17',
                    'updated_at' => '2023-09-15 20:05:17',
                    'question_number' => 1,
                ),
                307 => 
                array (
                    'id' => 808,
                    'abas_sub_domain_id' => 36,
                    'name' => 'لديه شعر نظيف في المدرسة.',
                    'name_en' => 'Has clean hair at school.',
                    'created_at' => '2023-09-15 20:20:37',
                    'updated_at' => '2023-09-15 20:20:37',
                    'question_number' => 2,
                ),
                308 => 
                array (
                    'id' => 809,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يكون نظيفًا عند وصوله إلى المدرسة.',
                    'name_en' => 'Is clean when he or she arrives at school',
                    'created_at' => '2023-09-16 15:15:24',
                    'updated_at' => '2023-09-16 15:15:24',
                    'question_number' => 3,
                ),
                309 => 
                array (
                    'id' => 810,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يستخدم الشوكة في تناول الطعام الصلب.',
                    'name_en' => 'Uses a fork to eat solid food.',
                    'created_at' => '2023-09-16 15:15:57',
                    'updated_at' => '2023-09-16 15:15:57',
                    'question_number' => 4,
                ),
                310 => 
                array (
                    'id' => 811,
                    'abas_sub_domain_id' => 36,
                    'name' => 'ينفخ ويمسح الأنف بمنديل أو منديل.',
                    'name_en' => '. Blows and wipes nose with tissue or handkerchief.',
                    'created_at' => '2023-09-16 15:16:19',
                    'updated_at' => '2023-09-16 15:16:19',
                    'question_number' => 5,
                ),
                311 => 
                array (
                    'id' => 812,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يرتدي الملابس المناسبة للأيام الباردة أو الدافئة',
                    'name_en' => 'Wears correct clothes for cold or warm days',
                    'created_at' => '2023-09-16 15:16:59',
                    'updated_at' => '2023-09-16 15:16:59',
                    'question_number' => 6,
                ),
                312 => 
                array (
                    'id' => 813,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يزرر أزرار الملابس الخاصة.',
                    'name_en' => 'Buttons own clothing.',
                    'created_at' => '2023-09-16 15:17:31',
                    'updated_at' => '2023-09-16 15:17:31',
                    'question_number' => 7,
                ),
                313 => 
                array (
                    'id' => 814,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يغسل اليدين بالماء والصابون.',
                    'name_en' => 'Washes hands with both soap and water.',
                    'created_at' => '2023-09-16 15:17:50',
                    'updated_at' => '2023-09-16 15:17:50',
                    'question_number' => 8,
                ),
                314 => 
                array (
                    'id' => 815,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يمضغ الطعام والفم مغلق.',
                    'name_en' => 'Chews food with mouth closed.',
                    'created_at' => '2023-09-16 15:18:14',
                    'updated_at' => '2023-09-16 15:18:14',
                    'question_number' => 9,
                ),
                315 => 
                array (
                    'id' => 816,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يشرب السوائل دون انسكاب.',
                    'name_en' => 'Drinks liquids without spilling.',
                    'created_at' => '2023-09-16 15:18:36',
                    'updated_at' => '2023-09-16 15:18:36',
                    'question_number' => 10,
                ),
                316 => 
                array (
                    'id' => 817,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يعلق الملابس ويفردها قبل الخروج من الحمام.',
                    'name_en' => 'Fastens and straightens clothing before leaving restroom.',
                    'created_at' => '2023-09-16 15:20:38',
                    'updated_at' => '2023-09-16 15:20:38',
                    'question_number' => 11,
                ),
                317 => 
                array (
                    'id' => 818,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يفتح علبة ذات علامة تبويب مثل الببسي، أو علبة حليب، أو زجاجة ذات غطاء لولبي علبه عصير .',
                    'name_en' => 'Opens a tab-top can, milk carton, or screw-top bottle.',
                    'created_at' => '2023-09-16 15:25:52',
                    'updated_at' => '2023-09-16 15:25:52',
                    'question_number' => 12,
                ),
                318 => 
                array (
                    'id' => 819,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يغطي الفم عند العطس أو السعال أو التثاؤب',
                    'name_en' => 'Covers mouth when sneezing, coughing, or yawning',
                    'created_at' => '2023-09-16 15:26:16',
                    'updated_at' => '2023-09-16 15:26:16',
                    'question_number' => 13,
                ),
                319 => 
                array (
                    'id' => 820,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يرتدي مجموعة متنوعة من الملابس بدلاً من نفس الملابس أو ملابس مشابهة في معظم الأيام',
                    'name_en' => 'Wears a variety of clothes instead of the same or similar clothes most days',
                    'created_at' => '2023-09-16 15:26:48',
                    'updated_at' => '2023-09-16 15:26:48',
                    'question_number' => 14,
                ),
                320 => 
                array (
                    'id' => 821,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يربط حذائه بنفسه',
                    'name_en' => 'Ties his or her own shoes',
                    'created_at' => '2023-09-16 15:27:16',
                    'updated_at' => '2023-09-16 15:27:16',
                    'question_number' => 15,
                ),
                321 => 
                array (
                    'id' => 822,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يحافظ على أظافر نظيفة في المدرسة.',
                    'name_en' => 'Maintains clean fingernails at school.',
                    'created_at' => '2023-09-16 15:27:51',
                    'updated_at' => '2023-09-16 15:27:51',
                    'question_number' => 16,
                ),
                322 => 
                array (
                    'id' => 823,
                    'abas_sub_domain_id' => 36,
                    'name' => '- تناول مجموعة متنوعة من الأطعمة بدلاً من تفضيل نوع واحد أو اثنين فقط.',
                    'name_en' => 'Eats a variety of foods instead of preferring only one or two.',
                    'created_at' => '2023-09-16 15:28:16',
                    'updated_at' => '2023-09-16 15:28:16',
                    'question_number' => 17,
                ),
                323 => 
                array (
                    'id' => 824,
                    'abas_sub_domain_id' => 36,
                    'name' => 'يحافظ على نظافة الشعر خلال اليوم الدراسي عن طريق تمشيطه.',
                    'name_en' => 'Keeps hair neat during the school day by brushing or combing.',
                    'created_at' => '2023-09-16 15:29:35',
                    'updated_at' => '2023-09-16 15:29:35',
                    'question_number' => 18,
                ),
                324 => 
                array (
                    'id' => 825,
                    'abas_sub_domain_id' => 36,
                    'name' => 'تناول الوجبات الخفيفة التي تعزز اتباع نظام غذائي صحي.',
                    'name_en' => 'Eats meals and snacks that promote a healthy diet.',
                    'created_at' => '2023-09-16 15:30:07',
                    'updated_at' => '2023-09-16 15:30:07',
                    'question_number' => 19,
                ),
                325 => 
                array (
                    'id' => 826,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يصل إلى المدرسة أو الفصل في الوقت المحدد',
                    'name_en' => 'Arrives at school or class on time',
                    'created_at' => '2023-09-16 15:34:38',
                    'updated_at' => '2023-09-16 15:34:38',
                    'question_number' => 1,
                ),
                326 => 
                array (
                    'id' => 827,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يطلب المساعدة من المعلمين أو الشخصيات ذات السلطة عند ظهور مشاكل صعبة',
                    'name_en' => 'Asks for help from teachers or authority figures when difficult problems come up',
                    'created_at' => '2023-09-16 15:35:18',
                    'updated_at' => '2023-09-16 15:35:18',
                    'question_number' => 2,
                ),
                327 => 
                array (
                    'id' => 828,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يكمل مهام الفصل الدراسي الروتينية خلال فترة زمنية معقولة.',
                    'name_en' => 'Completes routine classroom tasks within a reasonable amount of time.',
                    'created_at' => '2023-09-16 15:35:45',
                    'updated_at' => '2023-09-16 15:35:45',
                    'question_number' => 3,
                ),
                328 => 
                array (
                    'id' => 829,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يعمل بشكل مستقل ويطلب المساعدة فقط عند الضرورة.',
                    'name_en' => 'Works independently and asks for help only when necessary.',
                    'created_at' => '2023-09-16 15:36:54',
                    'updated_at' => '2023-09-16 15:36:54',
                    'question_number' => 4,
                ),
                329 => 
                array (
                    'id' => 830,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يتجنب المواقف في المدرسة التي من المحتمل أن تؤدي إلى مشاكل',
                    'name_en' => 'Avoids situations at school that are likely to result in trouble',
                    'created_at' => '2023-09-16 15:37:48',
                    'updated_at' => '2023-09-16 15:37:48',
                    'question_number' => 5,
                ),
                330 => 
                array (
                    'id' => 831,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يعمل على نشاط مدرسي واحد لمدة لا تقل عن 15 دقيقة دون تذكير.',
                    'name_en' => 'Works on one school activity for at least 15 minutes without reminders.',
                    'created_at' => '2023-09-16 15:38:18',
                    'updated_at' => '2023-09-16 15:38:18',
                    'question_number' => 6,
                ),
                331 => 
                array (
                    'id' => 832,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يقف ساكنًا عند الحاجة، دون تململ أو تحرك.',
                    'name_en' => 'Stands still when needed, without fidgeting or moving around.',
                    'created_at' => '2023-09-16 15:38:55',
                    'updated_at' => '2023-09-16 15:38:55',
                    'question_number' => 7,
                ),
                332 => 
                array (
                    'id' => 833,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يوقف نشاطًا ممتعًا، دون شكوى، عندما يخبره بأن الوقت قد انتهى.',
                    'name_en' => 'Stops a fun activity, without complaining, when told that time is up.',
                    'created_at' => '2023-09-16 15:39:18',
                    'updated_at' => '2023-09-16 15:39:18',
                    'question_number' => 8,
                ),
                333 => 
                array (
                    'id' => 834,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يتحكم في أعصابه عند الاختلاف مع زملاء الدراسة.',
                    'name_en' => 'Controls temper when disagreeing with classmates.',
                    'created_at' => '2023-09-16 15:39:52',
                    'updated_at' => '2023-09-16 15:39:52',
                    'question_number' => 9,
                ),
                334 => 
                array (
                    'id' => 835,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يسأل عن التوجيهات، حسب الحاجة، قبل بدء المهام المدرسية',
                    'name_en' => 'Asks for directions, as needed, before beginning school tasks',
                    'created_at' => '2023-09-16 15:40:23',
                    'updated_at' => '2023-09-16 15:40:23',
                    'question_number' => 10,
                ),
                335 => 
                array (
                    'id' => 836,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يبدأ مهمة أكاديمية على الفور عندما يُطلب منه ذلك.',
                    'name_en' => 'Starts an academic assignment at once when told to do so.',
                    'created_at' => '2023-09-16 15:40:52',
                    'updated_at' => '2023-09-16 15:40:52',
                    'question_number' => 11,
                ),
                336 => 
                array (
                    'id' => 837,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يكمل المهام التي يجب القيام بها، حتى لو كانت غير ممتعة.',
                    'name_en' => 'Completes tasks that need to be done, even those that are not enjoyable.',
                    'created_at' => '2023-09-16 15:41:39',
                    'updated_at' => '2023-09-16 15:41:39',
                    'question_number' => 12,
                ),
                337 => 
                array (
                    'id' => 838,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يرفض عندما يطلب منه شخص آخر القيام بشيء أحمق.',
                    'name_en' => 'Refuses when another person asks him or her to do something foolish.',
                    'created_at' => '2023-09-16 15:42:14',
                    'updated_at' => '2023-09-16 15:42:14',
                    'question_number' => 13,
                ),
                338 => 
                array (
                    'id' => 839,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يسيطر على المشاعر عندما لا يحصل على ما يريده.',
                    'name_en' => 'Controls feelings when not getting his or her own way.',
                    'created_at' => '2023-09-16 15:42:45',
                    'updated_at' => '2023-09-16 15:42:45',
                    'question_number' => 14,
                ),
                339 => 
                array (
                    'id' => 840,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يستمر في العمل على المهام الصعبة دون أن يشعر بالإحباط  أو الحاجة إلى التذكير',
                    'name_en' => 'Keeps working on hard assignments without becoming discouraged,   quitting, or needing reminders',
                    'created_at' => '2023-09-16 15:43:57',
                    'updated_at' => '2023-09-16 15:43:57',
                    'question_number' => 15,
                ),
                340 => 
                array (
                    'id' => 841,
                    'abas_sub_domain_id' => 37,
                    'name' => 'التحقق من أداء واجباته المدرسية بشكل صحيح',
                    'name_en' => 'Checks whether his or her schoolwork is done correctly',
                    'created_at' => '2023-09-16 15:44:27',
                    'updated_at' => '2023-09-16 15:44:27',
                    'question_number' => 16,
                ),
                341 => 
                array (
                    'id' => 842,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يعمل على نشاط مدرسي واحد طوال فترة الفصل الدراسي دون أن يتم تذكيرك أو إعادة توجيهك',
                    'name_en' => 'Works on one school activity for the entire class period without being  reminded or redirected',
                    'created_at' => '2023-09-16 15:45:02',
                    'updated_at' => '2023-09-16 15:45:02',
                    'question_number' => 17,
                ),
                342 => 
                array (
                    'id' => 843,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يكمل المشاريع المدرسية الكبيرة في الوقت المحدد.',
                    'name_en' => 'Completes large school projects on time.',
                    'created_at' => '2023-09-16 15:45:32',
                    'updated_at' => '2023-09-16 15:45:32',
                    'question_number' => 18,
                ),
                343 => 
                array (
                    'id' => 844,
                    'abas_sub_domain_id' => 37,
                    'name' => '- يحصل على واجبات من المعلم أو من مصدر آخر مثل اصدقائه  بعد غيابه عن المدرسة.',
                    'name_en' => 'Gets missed assignments from the teacher or another source after   absence from school.',
                    'created_at' => '2023-09-16 15:46:34',
                    'updated_at' => '2023-09-16 15:46:34',
                    'question_number' => 19,
                ),
                344 => 
                array (
                    'id' => 845,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يخطط للمستقبل لإتاحة الوقت الكافي لإكمال المهام الكبيرة.',
                    'name_en' => 'Plans ahead to allow enough time to complete big assignments.',
                    'created_at' => '2023-09-16 15:47:05',
                    'updated_at' => '2023-09-16 15:47:05',
                    'question_number' => 20,
                ),
                345 => 
                array (
                    'id' => 846,
                    'abas_sub_domain_id' => 37,
                    'name' => 'لا يتخذ قرارات مهمة إلا بعد دراسة متأنية، دون تسرع.',
                    'name_en' => 'Makes important decisions only after careful consideration, without rushing.',
                    'created_at' => '2023-09-16 15:47:36',
                    'updated_at' => '2023-09-16 15:47:36',
                    'question_number' => 21,
                ),
                346 => 
                array (
                    'id' => 847,
                    'abas_sub_domain_id' => 38,
                    'name' => 'لديه صديق أو أكثر.',
                    'name_en' => 'Has one or more friends.',
                    'created_at' => '2023-09-17 08:08:32',
                    'updated_at' => '2023-09-17 08:08:32',
                    'question_number' => 1,
                ),
                347 => 
                array (
                    'id' => 848,
                    'abas_sub_domain_id' => 38,
                    'name' => 'لديه علاقات جيدة مع المعلمين وغيرهم من البالغين.',
                    'name_en' => 'Has good relationships with teachers and other adults.',
                    'created_at' => '2023-09-17 08:08:59',
                    'updated_at' => '2023-09-17 08:08:59',
                    'question_number' => 2,
                ),
                348 => 
                array (
                    'id' => 849,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يضحك رداً على التعليقات أو النكات المضحكة',
                    'name_en' => 'Laughs in response to funny comments or jokes',
                    'created_at' => '2023-09-17 08:09:30',
                    'updated_at' => '2023-09-17 08:09:30',
                    'question_number' => 3,
                ),
                349 => 
                array (
                    'id' => 850,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يبحث عن صداقات مع الآخرين في فئته العمرية.',
                    'name_en' => 'Seeks friendships with others in his or her age group.',
                    'created_at' => '2023-09-17 08:09:59',
                    'updated_at' => '2023-09-17 08:09:59',
                    'question_number' => 4,
                ),
                350 => 
                array (
                    'id' => 851,
                    'abas_sub_domain_id' => 38,
                    'name' => 'ينتظر في الطابور في المدرسة.',
                    'name_en' => 'Waits in line at school.',
                    'created_at' => '2023-09-17 08:10:26',
                    'updated_at' => '2023-09-17 08:10:26',
                    'question_number' => 5,
                ),
                351 => 
                array (
                    'id' => 852,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يقول "شكرًا" عندما يُعطى هدية.',
                    'name_en' => 'Says “Thank you” when given a gift.',
                    'created_at' => '2023-09-17 08:11:08',
                    'updated_at' => '2023-09-17 08:11:08',
                    'question_number' => 6,
                ),
                352 => 
                array (
                    'id' => 853,
                    'abas_sub_domain_id' => 38,
                'name' => 'يقف على مسافة مريحة من الآخرين أثناء المحادثات (ليس قريبًا جدًا)',
                'name_en' => 'Stands a comfortable distance from others during conversations (not too close)',
                    'created_at' => '2023-09-17 08:12:22',
                    'updated_at' => '2023-09-17 08:12:22',
                    'question_number' => 7,
                ),
                353 => 
                array (
                    'id' => 854,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يقول عندما يشعر بالسعادة أو الحزن أو الخوف أو الغضب.',
                    'name_en' => 'Says when he or she feels happy, sad, scared, or angry.',
                    'created_at' => '2023-09-17 08:12:46',
                    'updated_at' => '2023-09-17 08:12:46',
                    'question_number' => 8,
                ),
                354 => 
                array (
                    'id' => 855,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يحافظ على مجموعة مستقرة من الأصدقاء.',
                    'name_en' => 'Keeps a stable group of friends.',
                    'created_at' => '2023-09-17 08:13:31',
                    'updated_at' => '2023-09-17 08:13:31',
                    'question_number' => 9,
                ),
                355 => 
                array (
                    'id' => 856,
                    'abas_sub_domain_id' => 37,
                    'name' => 'يقول "من فضلك" عندما يطلب شيئًا ما.',
                    'name_en' => 'Says “Please” when asking for something.',
                    'created_at' => '2023-09-17 08:13:45',
                    'updated_at' => '2023-09-17 08:13:45',
                    'question_number' => 10,
                ),
                356 => 
                array (
                    'id' => 857,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يتحرك بعيدًا عن طريق الآخرين حسب الحاجة على الأرصفة أو في الممرات.',
                    'name_en' => 'Moves out of the way of other people as needed on sidewalks or in hallways.',
                    'created_at' => '2023-09-17 08:14:13',
                    'updated_at' => '2023-09-17 08:14:13',
                    'question_number' => 11,
                ),
                357 => 
                array (
                    'id' => 858,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يكون محبوباً لدى الآخرين في مثل عمره.',
                    'name_en' => 'Is well liked by others his or her age.',
                    'created_at' => '2023-09-17 08:14:38',
                    'updated_at' => '2023-09-17 08:14:38',
                    'question_number' => 12,
                ),
                358 => 
                array (
                    'id' => 859,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يظهر التعاطف مع الآخرين عندما يشعرون بالحزن أو الانزعاج.',
                    'name_en' => 'Shows sympathy for others when they are sad or upset.',
                    'created_at' => '2023-09-17 08:14:56',
                    'updated_at' => '2023-09-17 08:14:56',
                    'question_number' => 13,
                ),
                359 => 
                array (
                    'id' => 860,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يقدم المساعدة لزملاء الدراسة أو المعلمين.',
                    'name_en' => 'Offers assistance to classmates or teachers.',
                    'created_at' => '2023-09-17 08:15:16',
                    'updated_at' => '2023-09-17 08:15:16',
                    'question_number' => 14,
                ),
                360 => 
                array (
                    'id' => 861,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يعتذر إذا جرح مشاعر الآخرين.',
                    'name_en' => 'Apologizes if he or she hurts the feelings of others.',
                    'created_at' => '2023-09-17 08:15:34',
                    'updated_at' => '2023-09-17 08:15:34',
                    'question_number' => 15,
                ),
                361 => 
                array (
                    'id' => 862,
                    'abas_sub_domain_id' => 38,
                'name' => 'يفرض مطالب معقولة على الأصدقاء (على سبيل المثال، لا ينزعج عندما يلعب صديق مع صديق آخر).',
                'name_en' => 'Places reasonable demands on friends (for example, does not become upset when a friend plays with another friend).',
                    'created_at' => '2023-09-17 08:16:09',
                    'updated_at' => '2023-09-17 08:16:09',
                    'question_number' => 16,
                ),
                362 => 
                array (
                    'id' => 863,
                    'abas_sub_domain_id' => 38,
                    'name' => 'ينظر إليه على أنه "مناسب" من قبل الآخرين في نفس العمر',
                    'name_en' => 'Is viewed as “fitting in” by others the same age',
                    'created_at' => '2023-09-17 08:16:36',
                    'updated_at' => '2023-09-17 08:16:36',
                    'question_number' => 17,
                ),
                363 => 
                array (
                    'id' => 864,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يمتنع عن قول أو فعل أشياء قد تحرج أو تؤذي الآخرين.',
                    'name_en' => 'Refrains from saying or doing things that might embarrass or hurt others.',
                    'created_at' => '2023-09-17 08:17:05',
                    'updated_at' => '2023-09-17 08:17:05',
                    'question_number' => 18,
                ),
                364 => 
                array (
                    'id' => 865,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يختار الأصدقاء بشكل حكيم و جيد',
                    'name_en' => 'Shows good judgment in selecting friends.',
                    'created_at' => '2023-09-17 08:18:08',
                    'updated_at' => '2023-09-17 08:18:08',
                    'question_number' => 19,
                ),
                365 => 
                array (
                    'id' => 866,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يهنئ الآخرين عندما يحدث لهم شيء جيد.',
                    'name_en' => 'Congratulates others when something good happens to them.',
                    'created_at' => '2023-09-17 08:18:26',
                    'updated_at' => '2023-09-17 08:18:26',
                    'question_number' => 20,
                ),
                366 => 
                array (
                    'id' => 867,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يدرك عندما يقوم شخص ما بتقديم طلب غير معقول.',
                    'name_en' => 'Recognizes when someone is making an unreasonable request.',
                    'created_at' => '2023-09-17 08:19:40',
                    'updated_at' => '2023-09-17 08:19:40',
                    'question_number' => 21,
                ),
                367 => 
                array (
                    'id' => 868,
                    'abas_sub_domain_id' => 38,
                'name' => 'يمدح الآخرين على الأعمال أو السلوك الجيد (على سبيل المثال، الصدق أو اللطف).',
                'name_en' => 'Compliments others for good deeds or behavior (for example, honesty or kindness).',
                    'created_at' => '2023-09-17 08:20:15',
                    'updated_at' => '2023-09-17 08:20:15',
                    'question_number' => 22,
                ),
                368 => 
                array (
                    'id' => 869,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يتصرف بأمان في العمل حتى لا يتعرض أحد للأذى.',
                    'name_en' => 'Behaves safely at work so that no one will be harmed.',
                    'created_at' => '2023-09-17 08:25:44',
                    'updated_at' => '2023-09-17 08:25:44',
                    'question_number' => 1,
                ),
                369 => 
                array (
                    'id' => 870,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يحترم ملكية وحقوق العمال الآخرين.',
                    'name_en' => 'Respects the property and rights of other workers.',
                    'created_at' => '2023-09-17 08:26:10',
                    'updated_at' => '2023-09-17 08:26:10',
                    'question_number' => 2,
                ),
                370 => 
                array (
                    'id' => 871,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يظهر موقفا إيجابيا تجاه الوظيفة.',
                    'name_en' => 'Shows a positive attitude toward job.',
                    'created_at' => '2023-09-17 08:28:37',
                    'updated_at' => '2023-09-17 08:28:37',
                    'question_number' => 3,
                ),
                371 => 
                array (
                    'id' => 872,
                    'abas_sub_domain_id' => 38,
                    'name' => 'يهتم بشكل صحيح بمستلزمات ومعدات العمل',
                    'name_en' => 'Cares properly for work supplies and equipment',
                    'created_at' => '2023-09-17 08:29:07',
                    'updated_at' => '2023-09-17 08:29:07',
                    'question_number' => 4,
                ),
                372 => 
                array (
                    'id' => 873,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يساعد العاملين الآخرين في عملهم دون التدخل في عمله.',
                    'name_en' => 'Helps other workers with their work without interfering with his or her own work.',
                    'created_at' => '2023-09-17 08:30:02',
                    'updated_at' => '2023-09-17 08:30:02',
                    'question_number' => 5,
                ),
                373 => 
                array (
                    'id' => 874,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يتبع تعليمات المشرف عند استكمال المهام أو الأنشطة',
                    'name_en' => 'Follows supervisor’s instructions when completing tasks or activities',
                    'created_at' => '2023-09-17 08:30:43',
                    'updated_at' => '2023-09-17 08:30:43',
                    'question_number' => 6,
                ),
                374 => 
                array (
                    'id' => 875,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يكمل مهام العمل ضمن الوقت المطلوب.',
                    'name_en' => 'Completes work assignments within required time limits.',
                    'created_at' => '2023-09-17 08:31:19',
                    'updated_at' => '2023-09-17 08:31:19',
                    'question_number' => 7,
                ),
                375 => 
                array (
                    'id' => 876,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يطلب المساعدة من المشرف، حسب الحاجة، عند ظهور مشاكل أو أسئلة متعلقة بالعمل.',
                    'name_en' => 'Seeks help from supervisor, as needed, when work-related problems or questions arise.',
                    'created_at' => '2023-09-17 08:31:59',
                    'updated_at' => '2023-09-17 08:31:59',
                    'question_number' => 8,
                ),
                376 => 
                array (
                    'id' => 877,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يرجاع الأدوات والعناصر الأخرى المتعلقة بالعمل إلى مكانها الصحيح بعد استخدامها.',
                    'name_en' => 'Returns tools and other work-related items to their proper place after   using them.',
                    'created_at' => '2023-09-17 08:32:43',
                    'updated_at' => '2023-09-17 08:32:43',
                    'question_number' => 9,
                ),
                377 => 
                array (
                    'id' => 878,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يرفض عندما يشجعه زميله في العمل على القيام بعمل رديء أو غير آمن.',
                    'name_en' => 'Refuses when a coworker encourages him or her to do shoddy or unsafe  work.',
                    'created_at' => '2023-09-17 08:34:05',
                    'updated_at' => '2023-09-17 08:34:05',
                    'question_number' => 10,
                ),
                378 => 
                array (
                    'id' => 879,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يتبع جدول العمل اليومي دون تذكير من المشرف.',
                    'name_en' => 'Follows daily work schedule without reminders from supervisor.',
                    'created_at' => '2023-09-17 08:34:25',
                    'updated_at' => '2023-09-17 08:34:25',
                    'question_number' => 11,
                ),
                379 => 
                array (
                    'id' => 880,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يعمل بهدوء دون إزعاج زملاء العمل.',
                    'name_en' => 'Works quietly, without disturbing coworkers.',
                    'created_at' => '2023-09-17 08:34:49',
                    'updated_at' => '2023-09-17 08:34:49',
                    'question_number' => 12,
                ),
                380 => 
                array (
                    'id' => 881,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يسأل عن التوجيهات، حسب الحاجة، قبل بدء مهام العمل.',
                    'name_en' => 'Asks for directions, as needed, before beginning work tasks.',
                    'created_at' => '2023-09-17 08:35:34',
                    'updated_at' => '2023-09-17 08:35:34',
                    'question_number' => 13,
                ),
                381 => 
                array (
                    'id' => 882,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يتحقق من العمل  لتحديد إذا كان هناك حاجة إلى تحسينات.',
                    'name_en' => 'Checks own work to determine if improvements are needed.',
                    'created_at' => '2023-09-17 08:36:17',
                    'updated_at' => '2023-09-17 08:36:17',
                    'question_number' => 14,
                ),
                382 => 
                array (
                    'id' => 883,
                    'abas_sub_domain_id' => 39,
                    'name' => 'التحقق من الراتب للتأكد من حصوله على المبلغ المناسب.',
                    'name_en' => 'Verifies wages to ensure that he or she is receiving the proper amount.',
                    'created_at' => '2023-09-17 08:37:43',
                    'updated_at' => '2023-09-17 08:37:43',
                    'question_number' => 15,
                ),
                383 => 
                array (
                    'id' => 884,
                    'abas_sub_domain_id' => 39,
                'name' => 'العمل بشكل أسرع حسب الحاجة (على سبيل المثال، الالتزام بالجدول الزمني أو الالتزام بالموعد النهائي لتسليم العمل)',
                'name_en' => 'Works faster on the job as needed (for example, to stay on schedule or meet a deadline)',
                    'created_at' => '2023-09-17 08:38:21',
                    'updated_at' => '2023-09-17 08:38:21',
                    'question_number' => 16,
                ),
                384 => 
                array (
                    'id' => 885,
                    'abas_sub_domain_id' => 39,
                'name' => 'تقديم اقتراحات للمشرفين (على سبيل المثال، كيفية الحصول على مكان عمل أكثر أمانًا وإنتاجية).',
                'name_en' => 'Makes suggestions to supervisors (for example, how to have a safer or  more productive workplace).',
                    'created_at' => '2023-09-17 08:39:01',
                    'updated_at' => '2023-09-17 08:39:01',
                    'question_number' => 17,
                ),
                385 => 
                array (
                    'id' => 886,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يأخذ دروسًا أو يحصل على تدريب لتحسين مهارات العمل.',
                    'name_en' => 'Takes classes or obtains training to improve work skills.',
                    'created_at' => '2023-09-17 08:39:26',
                    'updated_at' => '2023-09-17 08:39:26',
                    'question_number' => 18,
                ),
                386 => 
                array (
                    'id' => 887,
                    'abas_sub_domain_id' => 39,
                    'name' => 'يدرب ويشرف على الآخرين في مكان العمل.',
                    'name_en' => 'Trains and supervises others in the workplace.',
                    'created_at' => '2023-09-17 08:39:48',
                    'updated_at' => '2023-09-17 08:39:48',
                    'question_number' => 19,
                ),
            ));
        
        
    }
}