<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Модель элемента сборки
 *
 * @property int $id
 * @property int $configuration_id
 * @property int $product_id
 * @property float $price
 * @property float $discount_price
 * @property string $category
 * @property string $image
 */
class ConfigurationItem extends Model
{
    protected $connection = 'mysql';
    protected $table = 'configuration_items';

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'sku')
            ->select([
                'sku',
                'price',
                'name',
                'discount_price',
            ]);
    }

    public function configuration(): BelongsTo
    {
        return $this->belongsTo(Configuration::class);
    }
}
