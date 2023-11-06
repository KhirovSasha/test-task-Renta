<?php

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

final class WallType extends Enum
{
    const Brick = 'Цегла';
    const Blocks = 'Блоки';
    const Panel = 'Панель';

    public static function values(): array
    {
        return [
            self::Brick,
            self::Blocks,
            self::Panel,
        ];
    }
}

