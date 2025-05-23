<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConfigurationCard extends Component
{
    public $configuration;
    /**
     * Create a new component instance.
     */
    public function __construct($configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.configuration-card');
    }
}
