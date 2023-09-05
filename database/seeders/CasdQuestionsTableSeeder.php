<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CasdQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('casd_questions')->delete();
        
        \DB::table('casd_questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'casd_sub_domain_id' => NULL,
                'name' => 'العزلة الاجتماعية',
                'name_en' => NULL,
            'description' => '<ul><li>منسحب، منعزل، يتجنب التواصل مع الآخرين، أو يفضل اللعب لوحده أكثر من اللعب مع الأقران</li><li>يمارس اللعب المتوازي (جنباً إلى جنب، لكن بدون التفاعل مع الأقران)</li><li>يعاني من صعوبات في تكوين الصداقات</li></ul>',
                'description_en' => NULL,
                'question_number' => 1,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            1 => 
            array (
                'id' => 2,
                'casd_sub_domain_id' => NULL,
                'name' => 'محدودية التفاعل التبادلي',
                'name_en' => NULL,
            'description' => '<ul><li>محدودية في الابتسامات الاجتماعية أو التواصل البصري: (ينظر بعيداً، ينظر خلال الأشخاص، ينظر إلى فم الشخص المتحدث، يحتاج إلى التشجيع كي يقوم بعملية التواصل البصري، غير قادر على القيام بالتواصل البصري أثناء عملية المحادثة)</li><li>محدودية في العرض والمشاركة (مثل: غير قادر على عرض اللعبة على البالغين، لا يحب الظهور، لا يشارك خبراته أو إنجازاته مع الآخرين)</li><li>لديه جمود عالي أثناء لعبه مع الأقران (يقوم بفرض اللعب طبقاً لقواعده واهتماماته التي تتناسب مع ميوله الشاذة والمتكررة)</li><li>يستمتع باللعب الجسدي واللعب الحسي مع الآخرين (مثل: الدغدغة، المطاردة) لكن تفاعله التبادلي الاجتماعي محدود (مثل: لا يقوم بالمشاركة في الألعاب الاجتماعية أو الألعاب التي تتطلب لعب الأدوار أو الحديث)</li></ul>',
                'description_en' => NULL,
                'question_number' => 2,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            2 => 
            array (
                'id' => 3,
                'casd_sub_domain_id' => NULL,
                'name' => 'الانشغال بالذات',
                'name_en' => NULL,
            'description' => '<ul><li>مستغرق بالانشغال بذاته أو بعالمه الخاص (مثل: الانشغال بسلوكات الاستثارة الذاتية، يتحدث إلى ذاته، أو منشغل جداً بخيالات عن الأشياء كالأفلام أو مسلسلات الكرتون)</li><li>غير مدرك وغير واعي لحضور الاخرين أو لا يستجيب للمبادرات الاجتماعية من قبل الآخرين</li></ul>',
                'description_en' => NULL,
                'question_number' => 3,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            3 => 
            array (
                'id' => 4,
                'casd_sub_domain_id' => NULL,
                'name' => 'السلوك الاجتماعي العشوائي غير المناسب للموقف',
                'name_en' => NULL,
            'description' => '<ul><li>يقوم بالحديث والعناق للغرباء بطريقة غير مناسبة</li><li>ينتهك المساحات الخاصة للآخرين (يقترب كثيراً أو يلمس الآخرين)</li><li>ليس لديه قلق من الغرباء أو الانفصال عن الآخرين عندما يكون صغيراً (لا يكترث لوجود الغرباء أو لا يشعر بالانزعاج عندما ينفصل عن الوالدين)</li><li>يستخدم سلوكات وملاحظات غير مناسبة اجتماعيا أو غير مواكبة لمشاعر الآخرين (مثل: يقوم بوضع إصبعه في أنفه أمام العامة، يقوم بطرح أسئلة شخصية)</li></ul>',
                'description_en' => NULL,
                'question_number' => 4,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            4 => 
            array (
                'id' => 5,
                'casd_sub_domain_id' => NULL,
                'name' => 'مشكلات في المهارات الاجتماعية',
                'name_en' => NULL,
            'description' => '<ul><li>غير قادر على المبادرة أو المحافظة على التفاعل مع الأقران بشكل مناسب على الرغم بأنه يتفاعل بشكل جيد مع البالغين</li><li>ضعف الاستدلال الاجتماعي (صعوبة في إدراك الإشارات والتلميحات والتعليقات الاجتماعية، تعبيرات الوجه، لغة الجسد)</li><li>يرغب بتكوين صداقات، لكنه غير قادر على معرفة الطريقة لتكوين أصدقاء</li></ul>',
                'description_en' => NULL,
                'question_number' => 5,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            5 => 
            array (
                'id' => 6,
                'casd_sub_domain_id' => NULL,
                'name' => 'مجال غير اعتيادي "ضحل" من الاهتمام واللعب السلوكي',
                'name_en' => NULL,
            'description' => '<ul><li>لديه سلوك قهري بالتعلق في الأشياء، يتعلق بصورة كبيرة في الأشياء: كفيلم محدد أو برنامج تلفزيوني: (يقوم بإعادة التمثيل أو يشاهد نفس الفيلم بشكل مكرر)، ألعاب الكمبيوتر، الحروف، الأشكال، الأرقام، العد، الأشياء والمواضيع (مثل: القطارات، الديناصورات، لعبة سباق السيارات، الخرائط، الطائرات، الأدوات الكهربائية، يوغي يو، الشخصيات الكرتونية، وغيرها)</li><li>تعلق غير طبيعي وتمسك واحتفاظ بالأشياء (مثل: الأشياء الصغيرة، السلاسل</li><></ul>',
                'description_en' => NULL,
                'question_number' => 6,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            6 => 
            array (
                'id' => 7,
                'casd_sub_domain_id' => NULL,
                'name' => 'اللعب النمطي والتكراري',
                'name_en' => NULL,
            'description' => '<ul><li>لعب تكراري (يرتب الأشياء أو الألعاب، أو يفرزها، أو يدورها، أو يرميها بشكل مبالغ فيه؛ يقوم بفتح الأشياء وإغلاقها بشكل متكرر، يلعب بنفس الألعاب بدون تنويع؛ يرسم نفس الصورة بشكل متكرر</li><li>لديه ضعف في اللعب التخيلي المتنوع.</li><li>انشغالات غير طبيعية بأجزاء الأشياء (مثل: القيام بتدوير عجلات اللعبة بشكل متكرر)</li></ul>',
                'description_en' => NULL,
                'question_number' => 7,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            7 => 
            array (
                'id' => 8,
                'casd_sub_domain_id' => NULL,
                'name' => 'الانزعاج من التغيير',
                'name_en' => NULL,
            'description' => '<ul><li>ينزعج من التغيير (مثل: عند التغيير في الروتين أو الجدول اليومي، عندما يأخذ الوالدان طريقاً مختلفاً عن الطريق المؤدي إلى المنزل أو إلى المدرسة، عند تحريك أثاث البيت أو ألعابه، التغيرات الموسمية للملابس</li><li>صعوبات في الانتقال (مثل: الانتقال من نشاط إلى نشاط آخر)</li><li>حاجة ملحة لإنهاء ما بدأ/ بدأت به</li><li>أنماط وطقوس خاصة (مثل: يشرب من كأس محدد، يرتدي ملابس محددة، يصر على أن الطعام يجب أن يكون مرتب بطريقة محددة في الصحن</li><li>يصر على أن تكون الأشياء في موقع محدد أو طريقة معينة، (مثل: الباب يجب أن يكون مغلقاً، سحاب المعطف، وغيرها)</li><li>يصر على القيام بالأشياء بنفس الطريقة في كل مرة</li><li>مفرط في الدقة وغير مرن، ينزعج إذا قام أحدهم "بكسر القاعدة" جامد وصارم في تفكيره</li></ul>',
                'description_en' => NULL,
                'question_number' => 8,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            8 => 
            array (
                'id' => 9,
                'casd_sub_domain_id' => NULL,
            'name' => 'النمطية (حركات نمطية تكرارية كالرفرفة باليدين عندما يكون متحمس، مشي على رؤوس الأصابع، اهتزاز الجسم، هز الرأس، شد الجسم عند الاستيقاظ، صرير الأسنان، طحن الأسنان عند الاستيقاظ، تحريك الأصابع، تكشير الوجه، يركض إلى الأمام والخلف بشكل متكرر،اللف والدوران، الجري غير الهادف، يلعب في لعابه، نتف الجلد)',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 9,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            9 => 
            array (
                'id' => 10,
                'casd_sub_domain_id' => NULL,
                'name' => 'حاجة غير طبيعية ومفرطة لحب: الدوران، الدغدغة، القفز ، الهز ، الأرجحة، التسلق، الوثب',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 10,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            10 => 
            array (
                'id' => 11,
                'casd_sub_domain_id' => NULL,
            'name' => 'لا يستجيب في الوقت المحدد للتعليمات اللفظية (مثل: لا يقوم برد فعل عندما يتم المناداة على اسمه أو التحدث إليه أو يجيب الأسئلة التي يسمعها)',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 11,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            11 => 
            array (
                'id' => 12,
                'casd_sub_domain_id' => NULL,
                'name' => 'الحساسية المفرطة',
                'name_en' => NULL,
            'description' => '<ul><li>حساسية مفرطة غير اعتيادية لبعض الأصوات (مثل: ينزعج أو يقوم بتغطية أذنيه كاستجابة للصوت العالي، المحركات، المكنسة الكهربائي، مجفف الشعر، بكاء الأطفال، صفارات الإنذار، التصفيق، المنبه، سيفون الحمام، غناء الناس)</li><li>حساسية مفرطة غير عادية للروائح، الأضواء أو الحرارة</li></ul>',
                'description_en' => NULL,
                'question_number' => 12,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            12 => 
            array (
                'id' => 13,
                'casd_sub_domain_id' => NULL,
            'name' => 'ينزعج من التجمعات والازدحامات (لا يرتاح أو يشعر بالقلق في التجمعات الكبيرة، المسارح، كافتيريا، الحفلات)',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 13,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            13 => 
            array (
                'id' => 14,
                'casd_sub_domain_id' => NULL,
            'name' => 'ينبهر للغاية بالدوران أو الحركات التكرارية (مثل: المراوح الدوارة، عجلة الحظ، المياه الجارية)، الأنماط الخطية (مثل: مؤشرات تلفزيونية،ستائر النوافذ)، التفاصيل الدقيقة، الأضواء الأسطح المشعة',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 14,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            14 => 
            array (
                'id' => 15,
                'casd_sub_domain_id' => NULL,
                'name' => 'التفحص الحسي غير العادي',
                'name_en' => NULL,
                'description' => '<ul><li>يشم بإفراط، يتذوق بإفراط، يمضغ بإفراط، يلعق بإفراط، أو يفرك الأشياء الجامدة على الأسطح</li><li>يتفحص الأشياء بصريا بشكل متكرر أو يحرك إصبعه بالقرب من عينيه</li><li>يضع أذنه على الأشياء التي تهتز أو تدمدم أو يقوم بضغط الأشياء نحو الوجه لدرجة غير اعتيادية</li></ul>',
                'description_en' => NULL,
                'question_number' => 15,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            15 => 
            array (
                'id' => 16,
                'casd_sub_domain_id' => NULL,
                'name' => 'الدفاعية اللمسية أو الكراهية المفرطة لـ',
                'name_en' => NULL,
                'description' => '<ul><li>إذا تم لمسه أو حضنه</li><li>ملامسة أشياء محددة  أو أن تتسخ يده أو أن تكون لزجه</li><li>وجود المياه عليه أو على ملابسه</li><li>أن يقوم بغسل وجهه، تنظيف أسنانه، تمشيط شعره، أو قص أظافره</li><li>أن يمشي حافي القدمين</li><li>أن تكون الملابس ضيقة، تشابه في الملابس، خامة محددة من الملابس</li></ul>',
                'description_en' => NULL,
                'question_number' => 16,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            16 => 
            array (
                'id' => 17,
                'casd_sub_domain_id' => NULL,
            'name' => 'قدرة عالية على تحمل الألم (مثل: لا يبكي عندما يتألم أو لا يستجيب بشكل عادي لمحفزات الألم)',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 17,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            17 => 
            array (
                'id' => 18,
                'casd_sub_domain_id' => NULL,
            'name' => 'خلل في النوم (مثل: صعوبة الاستغراق في النوم، استيقاظ أثناء الليل، استيقاظ مبكر في الصباح)',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 18,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            18 => 
            array (
                'id' => 19,
                'casd_sub_domain_id' => NULL,
                'name' => 'مشاكل الطعام',
                'name_en' => NULL,
            'description' => '<ul><li>انتقائي في الأكل، ولديه محدودية في الأطعمة المفضلة، أو يصر على تناول قلة من الأطعمة</li><li>حساسية مفرطة للأكل المخلوط (مثل: اللحم في الطعام)</li><li>يبقي الطعام في فمه بدون بلع</li><li>يأكل المواد غير صالحة للأكل</li><li>أنماط خاصة للأكل (مثل: يأكل نوع واحد أو علامة تجارية محددة من الطعام، لون، شكل طعام</li></ul>',
                'description_en' => NULL,
                'question_number' => 19,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            19 => 
            array (
                'id' => 20,
                'casd_sub_domain_id' => NULL,
            'name' => 'نكوص لغوي أو تأخر بمقدار سنة إلى سنتين من العمر (مثل: يتحدث كلمات بسيطة في عمر السنة ولكن بعد ذلك يفقد النمو الطبيعي للغة)',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 20,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            20 => 
            array (
                'id' => 21,
                'casd_sub_domain_id' => NULL,
            'name' => 'المهارات البصرية الحركية (مثل: تجميع لعبة التركيب، بناء المجسمات، تشغيل القرص المدمج)، يكون أعلى بكثير من المهارات اللغوية أثناء مرحلة ما قبل المدرسة أو يقوم بالمشي بشكل مبكر أكثر من الحديث',
                'name_en' => NULL,
                'description' => NULL,
                'description_en' => NULL,
                'question_number' => 21,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            21 => 
            array (
                'id' => 22,
                'casd_sub_domain_id' => NULL,
                'name' => 'اضطراب في التواصل',
                'name_en' => NULL,
            'description' => '<ul><li>غياب أو محدودية التواصل بالكلام لكن يتواصل بالإيماءات (مثل: يسحب الشخص البالغ من يده ليوجهه إلى ما يريده، يعطي شيء للشخص البالغ للمساعدة، يحضر كأس للشخص كي يشرب)</li><li>يتواصل لفظياً مع الآخرين فقط عندما يتوتر أو يحتاج شيء ما فقط</li><li>صعوبة في المحادثة اللفظية المتبادلة (البدء بالمحادثة والمحافظة عليها، الاستماع والاستجابة إلى ما يقوله الآخرين)، يتحدث مع الأشخاص، أو محادثات من جهة واحدة بمواضيع مهمة له</li></ul>',
                'description_en' => NULL,
                'question_number' => 22,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            22 => 
            array (
                'id' => 23,
                'casd_sub_domain_id' => NULL,
                'name' => 'تفوهات أو كلام غير مألوف',
                'name_en' => NULL,
            'description' => '<ul><li>طبيعة صوت غريبة (مثل: حدة صوت مرتفعة، صوت ذو نغمة واحدة، غياب في التنغيم، وغيرها)</li><li>يصرخ أو يصدر تفوهات مزعجة (مثل: يهمهم أو يدندن، وغيرها)</li><li>تفوهات غير مألوفة مكررة</li><li>ثرثرة غير مألوفة وكأنه يتكلم بلغته الخاصة</li><li>مصاداة (تقليد غير ملائم لما يقوله الآخرين  كأن يعيد السؤال بدلاً من الإجابة عليه)</li><li>كلام متفرق (يقول كلمة أو جملة مرة ونادراً ما يكررها أو لا يكررها أبداً)</li><li>يتقمص أو يقلد بمبالغة أو يقتبس بمبالغة من الأفلام، الكرتون، الدعايات، وغيرها</li><li>يستخدم شبه جمل محفوظة بعيدة عن النص، غير مرتبطة بالسياق</li><li>يقوم باستبدال الضمائر (مثل: يقول "أنت" عندما يقصد "أنا")</li><li>يفرط في استخدام الكلام الزائد</li><li>كلام أو أفكار غير مألوفة (مثل: يصنع كلمات، كلام لا معنى له، وجهات نظر فريدة)</li></ul>',
                'description_en' => NULL,
                'question_number' => 23,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            23 => 
            array (
                'id' => 24,
                'casd_sub_domain_id' => NULL,
                'name' => 'قدرات خاصة تعد اعلى من غيرها من القدرات',
                'name_en' => NULL,
            'description' => '<ul><li>ذاكرة حفظ فريدة من نوعها (مثل: في عمر صغير جداً وبشكل غير مألوف يتعرف على الأرقام، الأحرف، الأشكال، العلامات التجارية، والألوان، يغني أو يهمهم نغمات، يحفظ الطرق التي تسير بها السيارة، يعد الأرقام، يميز الأحرف الأبجدية، يقرأ، يتهجأ، وغيرها)</li><li>مفردات غير مألوفة أو القدرة على حفظ الأفلام، الكتب، أو الحقائق</li><li>قدرة عالية على تقليد الأفلام أو الشخصيات الكرتونية</li><li>مهارات بصرية - حركية مميزة (مثل: في عمر صغير جداً، يركّب الألعاب، يطابق الأشكال، يشغل جهاز الحاسوب، يشغل القرص المدمج، يعرف كيفية عمل الأشياء، يركب قطع المركبات لإنتاج أشكال معقدة) </li><li>لديه موهبة فنية أو موسيقية مميزة</li><li>زيادة وتطور المهارات الحركية لديه مرتفع مع تأخر في التطور لمجالات أخرى (بالمقارنة مع الأطفال المشخصين باضطراب طيف التوحد من ذوي المهارات المرتفعة والذين يواجهون مشاكل في الكتابة أو في التنسيق الحركي).</li></ul>',
                'description_en' => NULL,
                'question_number' => 24,
                'created_at' => '2023-09-04 20:23:08',
                'updated_at' => '2023-09-04 20:23:08',
            ),
            24 => 
            array (
                'id' => 25,
                'casd_sub_domain_id' => NULL,
                'name' => 'رد فعل مفرط، تهيج، إحباط، ضغف القدرة على تحمل الإحباط، مثار، نوبة الغضب، الانهيار، الانفجار ، العنف، سلوكات إيذاء الذات (ينزعج من الأحداث الصغيرة، أو حوادث معظم الأطفال قادرين على تحملها كالتطفل، مقاطعة النشاطات، التقارب، التواجد ضمن حيز مكاني معين، المتطلبات الأدائية، مهارات الكتابة، عندما لا تكون الأشياء كما يريدها الطفل',
                    'name_en' => NULL,
                    'description' => NULL,
                    'description_en' => NULL,
                    'question_number' => 25,
                    'created_at' => '2023-09-04 20:23:08',
                    'updated_at' => '2023-09-04 20:23:08',
                ),
                25 => 
                array (
                    'id' => 26,
                    'casd_sub_domain_id' => NULL,
                'name' => 'مزاجي "نكد"، متقلب المزاج (السبب في تغير المزاج ربما لا يكون واضحاً دائماً، كأن يقوم بالضحك أو الانزعاج دون سبب واضح)',
                    'name_en' => NULL,
                    'description' => NULL,
                    'description_en' => NULL,
                    'question_number' => 26,
                    'created_at' => '2023-09-04 20:23:08',
                    'updated_at' => '2023-09-04 20:23:08',
                ),
                26 => 
                array (
                    'id' => 27,
                    'casd_sub_domain_id' => NULL,
                'name' => 'صعوبة في إظهار أو تفهم المشاعر، لا يعطي ردود فعل عاطفية في بعض المواقف، لديه نقص في التعاطف أو تبادل المشاعر (مثل: لا يستجيب بشكل مناسب أو يشعر بالراحة عندما يؤذى شخص آخر أو يكون الشخص حزيناً)، أو يسيء تفسير مشاعره أو استجابات الآخرين',
                    'name_en' => NULL,
                    'description' => NULL,
                    'description_en' => NULL,
                    'question_number' => 27,
                    'created_at' => '2023-09-04 20:23:08',
                    'updated_at' => '2023-09-04 20:23:08',
                ),
                27 => 
                array (
                    'id' => 28,
                    'casd_sub_domain_id' => NULL,
                    'name' => 'خوف غير عادي، كالخوف من المصاعد، الدّرَج، الحمام، البالونات، المكانس، الأعاصير',
                    'name_en' => NULL,
                    'description' => NULL,
                    'description_en' => NULL,
                    'question_number' => 28,
                    'created_at' => '2023-09-04 20:23:08',
                    'updated_at' => '2023-09-04 20:23:08',
                ),
                28 => 
                array (
                    'id' => 29,
                    'casd_sub_domain_id' => NULL,
                'name' => 'انتباه انتقائي، قادر على التركيز الزائد على النشاطات الأشياء أو المواضيع التي تهمه (مثل: ترتيب الألعاب أو الأشياء بصف واحد، تدوير العجلات، مشاهدة نفس الفيلم، تركيب الأحاجي، بناء المجسمات، أو رسم الصور لفترة طويلة من الوقت)، لكن يكون شارد الذهن، مندفع، متململ في أوقات أخرى.',
                    'name_en' => NULL,
                    'description' => NULL,
                    'description_en' => NULL,
                    'question_number' => 29,
                    'created_at' => '2023-09-04 20:23:08',
                    'updated_at' => '2023-09-04 20:23:08',
                ),
                29 => 
                array (
                    'id' => 30,
                    'casd_sub_domain_id' => NULL,
                    'name' => 'لديه وعي محدود بالسلامة ولا يعرف الخوف، غير مدرك للخطر (مثل: يتسلق بطريقة غير آمنه، يتجول في المنزل ليلاً، يركض حول نفسه، يذهب إلى الازدحامات المرورية أو تجمعات المياه، يذهب مع الغرباء.',
                        'name_en' => NULL,
                        'description' => NULL,
                        'description_en' => NULL,
                        'question_number' => 30,
                        'created_at' => '2023-09-04 20:23:08',
                        'updated_at' => '2023-09-04 20:23:08',
                    ),
                ));
        
        
    }
}