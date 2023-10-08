<?php

namespace App\Enums;

class AbasExamTypesEnum
{
    const PARENT_CAREGIVER_0_5 = 'parent_caregiver_0_71';
    const PARENT_5_21 = 'parent_60_263';
    const TEACHER_CAREGIVER_2_5 = 'teacher_caregiver_24_71';
    const TEACHER_5_21 = 'teacher_60_263';
    const ADULT_16_90 = 'adult_192_1091';

    public static function getAllFields(): array
    {
        return [
            self::PARENT_CAREGIVER_0_5,
            self::PARENT_5_21,
            self::TEACHER_CAREGIVER_2_5,
            self::TEACHER_5_21,
            self::ADULT_16_90
        ];
    }

    public static function getForWho($category)
    {
        switch ($category) {
            case self::PARENT_CAREGIVER_0_5:
            case self::PARENT_5_21:
                return 'parent';
            case self::TEACHER_CAREGIVER_2_5:
                return 'teacher_caregiver';
            case self::TEACHER_5_21:
                return 'teacher';
            case self::ADULT_16_90:
                return 'adult';
            default:
                return null;
        }
    }
}
