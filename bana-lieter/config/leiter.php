<?php

return [
    'vs' => [
        /**
         * 2 - 5 years
         */
        [
            'nviq_nvm' => 7.87,
            'nviq_ps' => 9.55,
            'nvm_ps' => 10.29
        ],
        /**
         * 6 - 54 years
         */
        [
            'nviq_nvm' => 9.02,
            'nviq_ps' => 11.66,
            'nvm_ps' => 11.87
        ],
        /**
         * 55 +
         */
        [
            'nviq_nvm' => 9.07,
            'nviq_ps' => 10.16,
            'nvm_ps' => 11.62
        ]
    ],
    'scores_text' => [
        'composite_nonverbal_memory' => 'The results indicate that the examinee obtains a composite score of %d in the non-verbal memory tests, which places him in the %s category',
        'composite_processing_speed' => 'The results indicate that  the examinee obtains a copmstive score of %d in the nonverbal processing speed tests, which places him in the %s category',
        'nonverbal_iq' => 'The results indicated that the examinee had a standardized non-verbal intelligence score of %d, which puts him in the %s category',
    ],
    'iq' => [
        [
            'subtest_score' => '---',
            'iq_composite_score' => '30 - 39',
            'label' =>  "Severe Delay",
        ],
        [
            'subtest_score' => '0',
            'iq_composite_score' => '40 - 54',
            'label' =>  "Modetate Delay",
        ],
        [
            'subtest_score' => '1 - 3',
            'iq_composite_score' => '55 - 69',
            'label' =>  "Very Low and Mild Delay",
        ],
        [
            'subtest_score' => '4 - 5',
            'iq_composite_score' => '70 - 79',
            'label' =>  "Low",
        ],
        [
            'subtest_score' => '6 - 7',
            'iq_composite_score' => '80 - 89',
            'label' =>  "Below Avarage",
        ],
        [
            'subtest_score' => '8 - 12',
            'iq_composite_score' => '90 - 109',
            'label' =>  "Avarage",
        ],
        [
            'subtest_score' => '13 - 14',
            'iq_composite_score' => '110 - 119',
            'label' =>  "Above Avarage",
        ],
        [
            'subtest_score' => '15 - 16',
            'iq_composite_score' => '120 - 129',
            'label' =>  "High",
        ],
        [
            'subtest_score' => '17 - 19',
            'iq_composite_score' => '130 - 149',
            'label' =>  "Very High/Gifted",
        ],
        [
            'subtest_score' => '20',
            'iq_composite_score' => '150 - 170',
            'label' =>  "Extremely High/Gifted",
        ],
    ]
];
