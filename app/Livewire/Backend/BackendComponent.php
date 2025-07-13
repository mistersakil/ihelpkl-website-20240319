<?php

namespace App\Livewire\Backend;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BackendComponent extends Component
{
    public int $authId;

    /**
     * Component instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->authId = Auth::check() ? Auth::id() : 0;
    }


    /**
     * Component full page loader
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function placeholder(): View
    {
        return view('livewire.backend.addons.full-page-loader');
    }
}
