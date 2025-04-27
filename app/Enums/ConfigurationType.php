<?php

namespace App\Enums;

enum ConfigurationType: string
{
    case Home = 'home';
    case Office = 'office';
    case Gamer = 'gamer';
    case Developer = 'developer';
    case Designer = 'designer';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

