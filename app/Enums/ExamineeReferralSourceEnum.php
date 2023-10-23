<?php

namespace App\Enums;

class ExamineeReferralSourceEnum
{
    const PARENT = 'parent';
    const SCHOOL = 'school';
    const PSYCHOLOGY_SPECIALIST = 'psychology_specialist';
    const PSYCHOLOGIST = 'psychologist';
    const CAREGIVER = 'caregiver';
    const CENTER = 'center';
    const SPEECH_PSYCHOLOGIST = 'speech_psychologist';
    const SPECIAL_EDUCATION_SPECIALIST = 'special_education_specialist';
    const PSYCHIATRIC_CLINIC = 'psychiatric_clinic';
    const HOSPITAL = 'hospital';
    const EXAMINEE_HIMSELF = 'examinee_himself';

    public static function getAllFields(): array
    {
        return [
            self::PARENT,
            self::SCHOOL,
            self::PSYCHOLOGY_SPECIALIST,
            self::PSYCHOLOGIST,
            self::CAREGIVER,
            self::CENTER,
            self::SPEECH_PSYCHOLOGIST,
            self::SPECIAL_EDUCATION_SPECIALIST,
            self::PSYCHIATRIC_CLINIC,
            self::HOSPITAL,
            self::EXAMINEE_HIMSELF
        ];
    }
}
