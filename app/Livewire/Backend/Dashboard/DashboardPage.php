<?php

namespace App\Livewire\Backend\Dashboard;

use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;
use App\Livewire\Backend\BackendComponent;
use Livewire\Attributes\Lazy;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
#[Lazy]
class DashboardPage extends BackendComponent
{

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    public function render(): View
    {
        sleep(2);
        return view('livewire.backend.dashboard.dashboard-page');
    }
}
