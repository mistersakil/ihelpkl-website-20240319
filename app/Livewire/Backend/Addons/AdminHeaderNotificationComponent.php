<?php

namespace App\Livewire\Backend\Addons;

use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class AdminHeaderNotificationComponent extends Component
{
    ## Component props
    public int $unreadQueryCount = 0;

    /**
     * Render view
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.backend.addons.admin-header-notification-component');
    }
}
