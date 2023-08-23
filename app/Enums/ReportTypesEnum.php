<?php

namespace App\Enums;

class ReportTypesEnum
{
    const LEITER = 'leiter';
    const ABAS = 'abas';
    const MPR = 'mpr';
    const CASD = 'casd';

    public static function getAllFields(): array
    {
        return [
            self::LEITER,
            self::ABAS,
            self::MPR,
            self::CASD
        ];
    }
}
