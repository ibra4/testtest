<?php

namespace App\Enums;

class AbasExamTypesEnum
{
    const PARENT_0_5 = 'parent_0_71';
    const PARENT_6_21 = 'parent_72_263';
    const TEACHER_CAREGIVER_2_5 = 'teacher_caregiver_24_71';
    const TEACHER_5_21 = 'teacher_60_263';
    const ADULT_16_90 = 'adult_192_1091';

    public static function getAllFields(): array
    {
        return [
            self::PARENT_0_5,
            self::PARENT_6_21,
            self::TEACHER_CAREGIVER_2_5,
            self::TEACHER_5_21,
            self::ADULT_16_90
        ];
    }
}
