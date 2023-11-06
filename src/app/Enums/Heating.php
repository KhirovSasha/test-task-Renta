<?php

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

final class Heating extends Enum
{
    const Centralized =  'Централізоване';
    const Autonomous = 'Автономне';
    const SolidFuelBoiler =  'Твердопаливний котел';

    public static function values(): array
    {
        return [
            self::Centralized,
            self::Autonomous,
            self::SolidFuelBoiler,
        ];
    }
}

