<?php

namespace App\Livewire\Backend\Addons;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class NoDataFoundComponent extends Component
{
    public string $goBackRoute;

    /**
     * Create a new component instance.
     * 
     * @return void
     */
    public function mount($goBackRoute = 'web.home'): void
    {
        $this->goBackRoute = route($goBackRoute);
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.backend.addons.no-data-found-component');
    }
}
