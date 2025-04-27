<?php

namespace App\View\Components;

use App\Services\ConfigurationService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularConfigurations extends Component
{
    public $configurations;
    /**
     * Create a new component instance.
     */
    public function __construct(private ConfigurationService $configurationService)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->configurations = $this->configurationService->getTopConfigurations(6);
        return view('components.popular-configurations');
    }
}
