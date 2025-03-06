<?php

namespace App\View\Components\Frontend\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Footer Component
 * 
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class Footer extends Component
{
    ## Component props
    public string $logoDark = '';
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->logoDark = _getPublicImg('logoDark');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.layout.footer');
    }
}
