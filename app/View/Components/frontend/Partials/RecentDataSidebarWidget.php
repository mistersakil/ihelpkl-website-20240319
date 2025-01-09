<?php

namespace App\View\Components\Frontend\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * RecentDataSidebarWidget Component
 * 
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class RecentDataSidebarWidget extends Component
{
    ## Component props
    public $title;
    public array $dataList;


    /**
     * Create a new component instance.
     */
    public function __construct(array $dataList = [], string $title = '')
    {
        $this->title = !empty($title) ? __($title) : __('default');
        $this->dataList = $dataList;        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.partials.recent-data-sidebar-widget');
    }
}
