<?php

namespace App\Models;

use App\Enums\ConfigurationType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Модель сборки
 *
 * @property int $id
 * @property string $name
 * @property ConfigurationType $type
 * @property float $total_price итоговая цена сборки (в бел. рублях)
 * @property float $total_discount_price итоговая цена сборки до скидки (в бел. рублях)
 * @property float $rating
 */
class Configuration extends Model
{
    protected $table = 'configurations';

    protected $casts = [
        'type' => ConfigurationType::class,
        'total_price' => 'float',
        'total_discount_price' => 'float',
        'rating' => 'float',
    ];

    protected $guarded = [];

    public function items(): HasMany
    {
        return $this->hasMany(ConfigurationItem::class)
            ->select([
                'id',
                'configuration_id',
                'product_id',
                'price',
                'discount_price',
                'category',
                'image',
            ]);
    }
}
