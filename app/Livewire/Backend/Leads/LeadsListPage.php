<?php

namespace App\Livewire\Backend\Leads;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use App\Services\LeadService;
use Livewire\Attributes\Layout;
use App\Traits\BackendFilterTrait;
use Illuminate\Contracts\View\View;
use App\Traits\BackendPaginationTrait;
use App\Livewire\Backend\BackendComponent;

class LeadsListPage extends BackendComponent
{
    use BackendPaginationTrait;
    use BackendFilterTrait;

    // Services
    private LeadService $leadService;

    // Mount method to initialize leadService
    public function mount(LeadService $leadService)
    {
        $this->leadService = $leadService;
    }

    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Leads List')]
    public function render()
    {
        // Correctly calling the method using the instance
        $leads = $this->leadService->getAll();

        return view('livewire.backend.leads.leads-list-page', compact('leads'));
    }
}
