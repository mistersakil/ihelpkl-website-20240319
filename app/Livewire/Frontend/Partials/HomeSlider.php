<?php

namespace App\Livewire\Frontend\Partials;

use App\Models\Slider;
use App\Services\SliderService;
use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomeSlider extends Component
{
    ## Component props
    private SliderService $sliderService;
    public array $sliders;

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
        $this->sliders = Slider::where('is_active', 1)->orderBy('id', 'desc')->limit(2)->get()->toArray();
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.partials.home-slider');
    }
}
