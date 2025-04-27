<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public static function convertPrice($price)
    {
        $currencyRate = CoreConfigData::select('value')
            ->where('attribute', 'currency_rate');
        $convertedPrice = ceil(($price * $currencyRate / 100) / 100);

        return number_format($convertedPrice, 2, ',', '');
    }

    public static function defaultChassisImage(): string
    {
        return asset('assets/images/card-1.png');
    }

    public static function defaultCpuImage(): string
    {
        return asset('assets/images/card-2.png');
    }

    public static function defaultVideocardImage(): string
    {
        return asset('assets/images/card-3.png');
    }
}
