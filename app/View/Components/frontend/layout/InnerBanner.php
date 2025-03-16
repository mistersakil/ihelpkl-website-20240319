<?php

namespace App\View\Components\Frontend\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Vite;

/**
 * InnerBanner Component
 *
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class InnerBanner extends Component
{
    public $imageUrl;

    /**
     * Create a new component instance.
     */
    public function __construct($imageUrl)
    {
        // Set the image URL passed from the view
        $this->imageUrl = Vite::imageWeb($imageUrl);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.layout.inner-banner', [
            'imageUrl' => $this->imageUrl
        ]);
    }
}
