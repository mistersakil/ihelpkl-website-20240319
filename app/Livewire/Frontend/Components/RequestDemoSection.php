<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class RequestDemoSection extends Component
{

    ## Component props
    public string $sectionTitle;
    public string $sectionSubTitle;
    public string $isShowSectionHeader;
    public $showProductInput;
    public int $limit;

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.request-demo-section');
    }
}
