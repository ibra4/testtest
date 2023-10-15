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
        ]
    ]
];
