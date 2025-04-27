<?php

use App\Enums\AllowedCategory;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ConfigurationController;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::group(['prefix' => 'products'], function () {
    Route::get('/type/{typeId}', 'ProductController@allByType')
        ->where(['id' => '[0-9]+'])
        ->name('indexByType');
});

Route::group(['prefix' => 'configurations'], function () {
    Route::get('/', [ConfigurationController::class, 'index'])
        ->name('catalog');
    Route::post('/store', [ConfigurationController::class, 'store'])
        ->name('store');
    Route::get('/popular', [ConfigurationController::class, 'getTopPopular'])
        ->name('popular');
});

Route::group(['prefix' => 'reviews'], function () {
    Route::get('/all', [ConfigurationController::class, 'all'])
        ->name('all');
    Route::get('/pending', [ConfigurationController::class, 'getPendingReviews'])
        ->name('pending');
    Route::post('/store', [ConfigurationController::class, 'store'])
        ->name('store');
});

Route::group(['prefix' => 'personalConfigurations'], function () {
    Route::get('/', [ConfigurationController::class, 'personalConfigurations'])
        ->name('personalConfigurations');
    Route::post('/clear/{type}', [ConfigurationController::class, 'clearType'])
        ->where('type', implode('|', AllowedCategory::values()))
        ->name('clearType');
    Route::post('/{id}', [ConfigurationController::class, 'addToConfig'])
        ->where(['id' => '[0-9]+'])
        ->name('addToConfig');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CartController::class, 'cart'])
        ->name('cart');
    Route::post('/{id}', [CartController::class, 'addToCart'])
        ->where(['id' => '[0-9]+'])
        ->name('addToCart');
    Route::post('/remove/{id}', [CartController::class, 'removeFromCart'])
        ->where(['id' => '[0-9]+'])
        ->name('removeFromCart');
    Route::post('/clear', [CartController::class, 'clearCart'])
        ->name('clearCart');
});

Route::get('/image-proxy', function (Request $request) {
    $path = $request->query('path');
    $type = $request->query('type');
    $url = env('BASE_IMAGE_URL') . $path;

    $cacheKey = 'image_proxy_' . md5($url);

    $cached = Cache::remember($cacheKey, now()->addDay(), function () use ($url) {
        try {
            $response = Http::withoutVerifying()->get($url);

            if ($response->successful()) {
                return [
                    'body' => $response->body(),
                    'content_type' => $response->header('Content-Type', 'image/jpeg'),
                ];
            }
        } catch (\Exception $e) {
            // Логировать ошибку при желании
        }

        return null;
    });

    if (!$cached) {
        abort(404);
    }

    return response($cached['body'], 200)->header('Content-Type', $cached['content_type']);
})->name('image-proxy');
