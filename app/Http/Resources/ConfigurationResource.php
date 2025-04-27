<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Enums\AllowedCategory;

class ConfigurationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'rating' => $this->rating,
            'total_price' => $this->total_price,
            'total_discount_price' => $this->total_discount_price,
            'items' => $this->groupedItems(),
        ];
    }

    protected function groupedItems()
    {
        return $this->items
            ->filter(function ($item) {
                return in_array($item->category, AllowedCategory::values());
            })
            ->groupBy('category')
            ->map(function ($items) {
                return $items->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'configuration_id' => $item->configuration_id,
                        'product_id' => $item->product_id,
                        'price' => $item->price,
                        'discount_price' => $item->discount_price,
                        'image' => $item->image,
                        'category' => $item->category,
                    ];
                });
            });
    }
}
