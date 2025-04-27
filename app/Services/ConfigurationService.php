<?php

namespace App\Services;

use App\Http\Resources\ConfigurationResource;
use App\Repositories\ConfigurationRepository;

class ConfigurationService
{
    public function __construct(
        private ConfigurationRepository $configurationRepository,
    ) {
    }

    public function getTopConfigurations(int $limit)
    {
        $configurations = $this->configurationRepository->getTopPopular($limit);
        return ConfigurationResource::collection($configurations);
    }
}
