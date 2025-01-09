<?php

namespace App\View\Components\Frontend\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * InnerBanner Component
 * 
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class InnerBanner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.layout.inner-banner');
    }
}
