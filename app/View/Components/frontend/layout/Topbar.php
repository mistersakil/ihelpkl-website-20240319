<?php

namespace App\View\Components\Frontend\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Topbar Component
 * 
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class Topbar extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.layout.topbar');
    }
}
