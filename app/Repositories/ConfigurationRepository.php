<?php

namespace App\Repositories;

use App\Models\Configuration;
use Illuminate\Support\Facades\Cache;

class ConfigurationRepository
{
    public function getAll()
    {
        return Configuration::with('items')->all();
    }

    public function getById(int $id)
    {
        return Configuration::with('items')->find($id);
    }

    public function getTopPopular(int $limit)
    {
        $cacheKey = "top_popular_configurations_{$limit}";

        return Cache::remember($cacheKey, now()->addHours(12), function () use ($limit) {
            return Configuration::with('items')
                ->select('id', 'name', 'type', 'rating', 'total_price', 'total_discount_price', 'tags')
                ->orderBy('rating', 'desc')
                ->limit($limit)
                ->get();
        });
    }
}
