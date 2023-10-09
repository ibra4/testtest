<?php

namespace App\Enums;

class AbasExamTypesEnum
{
    const PARENT_CAREGIVER = 'parent_caregiver';
    const PARENT = 'parent';
    const TEACHER_CAREGIVER = 'teacher_caregiver';
    const TEACHER = 'teacher';
    const ADULT_BY_SELF = 'adult_by_self';
    const ADULT_BY_OTHERS = 'adult_by_others';

    public static function getAllFields(): array
    {
        return [
            self::PARENT_CAREGIVER,
            self::PARENT,
            self::TEACHER_CAREGIVER,
            self::TEACHER,
            self::ADULT_BY_SELF,
            self::ADULT_BY_OTHERS
        ];
    }
}
