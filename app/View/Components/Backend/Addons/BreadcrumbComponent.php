<?php

namespace App\View\Components\Backend\Addons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * CardComponent Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

class BreadcrumbComponent extends Component
{
    public string $title;
    public string $active_item;
    public array $icons;

    /**
     * Create a new component instance.     
     */
    public function __construct(string $title = '', string $activeItem = '')
    {
        $this->title = $title ? __($title) : __('dashboard');
        $this->active_item = $activeItem;
        $this->icons = _icons(true, true);
    }

    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\Contracts\View\View 
     */
    public function render(): View|string
    {
        return view('components.backend.addons.breadcrumb-component');
    }
}
