<?php

namespace App\Enums;

class ExamineeInformationSourceEnum
{
    const FATHER = 'father';
    const MOTHER = 'mother';
    const CAREGIVER = 'caregiver';
    const EXAMINEE_HIMSELF = 'examinee_himself';
    const PSYCHOLOGY_SPECIALIST = 'psychology_specialist';

    public static function getAllFields(): array
    {
        return [
            self::FATHER,
            self::MOTHER,
            self::CAREGIVER,
            self::EXAMINEE_HIMSELF,
            self::PSYCHOLOGY_SPECIALIST
        ];
    }
}
