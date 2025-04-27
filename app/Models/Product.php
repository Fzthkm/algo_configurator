<?php

namespace App\Models;

use App\Enums\AllowedCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Модель товара
 *
 * @property int $sku id товара
 * @property int $price цена товара (до конвертации по курсу)
 * @property int $price_onliner цена аналогичного товара на онлайнере
 * @property string $name
 * @property string $short_description краткое описание товара
 * @property string|null $description описание товара
 * @property string|null $comment комментарий
 * @property int $is_in_stock наличие на складе
 * @property int $enabled доступность
 * //TODO: разобраться в оставшихся свойствах, отсеять ненужное
 */
class Product extends Model
{
    protected $connection = 'remote_mysql';
    protected $table = 'products';
    protected $primaryKey = 'sku';

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            ProductCategory::class,
            'products_categories',
            'sku',
            'id_category',
            'sku',
            'id_category',
        )->select([
            'categories_new.url_key',
        ])->whereIn('categories_new.url_key', AllowedCategory::values());
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'sku', 'sku')
            ->select([
                'sku',
                'image',
            ])
            ->where('main', 1);
    }

    public function configuration_items(): HasMany
    {
        return $this->hasMany(ConfigurationItem::class, 'product_id', 'sku');
    }
}
