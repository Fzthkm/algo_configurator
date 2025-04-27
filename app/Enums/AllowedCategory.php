<?php

namespace App\Enums;

enum AllowedCategory: string
{
    case CPU = 'cpu';
    case GPU = 'gpu';
    case MONITORS = 'monitors';
    case MOTHERBOARDS = 'motherboards';
    case VIDEOCARD = 'videocard';
    case HDD = 'hdd';
    case RAM = 'ram';
    case COOLERS = 'coolers';
    case ACOUSTICS = 'acoustics';
    case HEADPHONES = 'headphones';
    case SSD = 'ssd';
    case CHASSIS = 'chassis';
    case POWERSUPPLY = 'powersupply';
    case KEYBOARDS = 'keyboards';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function systemUnitCategories(): array
    {
        return array_column([
            self::CPU,
            self::GPU,
            self::MOTHERBOARDS,
            self::VIDEOCARD,
            self::HDD,
            self::RAM,
            self::COOLERS,
            self::SSD,
            self::CHASSIS,
            self::POWERSUPPLY,
        ], 'value');
    }
}
