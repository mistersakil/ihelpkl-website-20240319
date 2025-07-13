<?php

namespace App\Livewire\Frontend\Partials;

use App\Models\Slider;
use App\Services\SliderService;
use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomeHeroSection extends Component
{
    ## Component props
    public string $heroImg = '';

    /**
     * Initialize on component every render
     *
     * @return void
     */
    public function boot(): void
    {
        $this->sliderService = new SliderService();
    }

    /**
     * Component instance
     *
     * @return void
     */
    public function mount(): void
    {
            $this->heroImg = _getPublicImg('homeHeroImg');
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.partials.home-hero-section');
    }
}
