<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    protected $connection = 'remote_mysql';
    protected $table = 'products_images';

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'sku', 'sku');
    }
}
