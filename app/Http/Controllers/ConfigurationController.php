<?php

namespace App\Http\Controllers;

use App\Enums\AllowedCategory;
use App\Models\Configuration;
use App\Models\Product;
use App\Services\ConfigurationService;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function __construct(
        private ConfigurationService $configurationService,
    ) {
    }

    public function index(Request $request)
    {
        $type = $request->get('type');

        $query = Configuration::query();

        if ($type) {
            $query->where('type', $type);
        }

        $configurations = $query->get();

        return view('catalog', compact('configurations'));
    }

    public function getTopPopular()
    {
        return response()->json($this->configurationService->getTopConfigurations(6));
    }

    public function personalConfigurations()
    {
        $configuration = session()->get('configuration');

//        dd($configuration);
        return view('configurator.index');
    }

    public function addToConfig(int $id)
    {
        $product = Product::with('categories')->find($id);

        if (!$product) {
            return redirect()->route('configurator.personalConfigurations');
        }

        $categories = $product->categories;
        var_dump('categories: ' . $categories);

        foreach ($categories as $category) {
            if (in_array($category->url_key, AllowedCategory::values())) {
                $configKey = 'configuration.' . $category->url_key;
                var_dump('configuration key: ' . $configKey);
                $existingConfig = session()->get($configKey, []);

                $existingConfig[] = $id;

                session()->put($configKey, $existingConfig);
            }
        }

        // Выводим сессию для отладки
        dd(session()->get('configuration'));
    }


}
