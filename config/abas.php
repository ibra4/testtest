<?php

use App\Enums\AbasExamTypesEnum;

return [
    'additional_domains' => [
        AbasExamTypesEnum::TEACHER => [
            [
                'code' => 'GAC',
                'name' => 'المركب التكيفي العام (GAC)',
                'sum_of' => ['com', 'cu', 'fa', 'sl', 'hs', 'ls', 'sc', 'sd', 'soc', 'wk'],
            ]
        ],
        AbasExamTypesEnum::TEACHER_CAREGIVER => [
            [
                'code' => 'GAC',
                'name' => 'المركب التكيفي العام (GAC)',
                'sum_of' => ['com', 'fa', 'sl', 'hs', 'ls', 'sc', 'sd', 'soc', 'mo'],
            ]
        ],
        AbasExamTypesEnum::PARENT => [
            [
                'code' => 'GAC',
                'name' => 'المركب التكيفي العام (GAC)',
                'sum_of' => ['com', 'cu', 'fa', 'hl', 'ls', 'ls', 'sc', 'sd', 'soc', 'wk'],
            ]
        ],
        AbasExamTypesEnum::PARENT_CAREGIVER => [
            [
                'code' => 'GAC',
                'name' => 'المركب التكيفي العام (GAC)',
                'sum_of' => ['com', 'cu', 'fa', 'hl', 'hs', 'ls', 'sc', 'sd', 'soc', 'mo'],
            ]
        ],
        AbasExamTypesEnum::ADULT_BY_OTHERS => [
            [
                'code' => 'GAC',
                'name' => 'المركب التكيفي العام (GAC)',
                'sum_of' => [],
            ]
        ],
        AbasExamTypesEnum::ADULT_BY_SELF => [
            [
                'code' => 'GAC',
                'name' => 'المركب التكيفي العام (GAC)',
                'sum_of' => [],
            ]
        ]
    ]
];
