<?php

namespace App\Livewire\Frontend\Solutions;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SolutionListPage extends Component
{
    ## Component props
    public string $metaTitle = 'solution we provide';
    public string $module = 'solutions';

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.solutions.solution-list-page');
    }
}
