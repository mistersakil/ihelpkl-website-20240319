<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BackendComponent extends Component
{
    public int $authId;

    public function __construct()
    {
        $this->authId = Auth::check() ? Auth::id() : 0;
    }

    public function placeholder()
    {
        return view('livewire.backend.addons.full-page-loader');
    }
}
