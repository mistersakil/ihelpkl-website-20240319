<?php

namespace App\Livewire\Backend\Dashboard;

use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;
use App\Livewire\Backend\BackendComponent;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
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
        return view('livewire.backend.dashboard.dashboard-page');
    }
}
