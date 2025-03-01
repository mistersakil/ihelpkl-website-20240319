<?php

namespace App\Livewire\Backend\Leads;

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

    # Module Props
    public string $module;
    public string $activeItem;

    ## Filter properties
    #[Url(as: 'query', except: '', history: true)]
    public ?string $search = '';
    public array $filter = [];


    # Services
    private LeadService $leadService;

    /**
     * Create a new component instance
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->sliderService = new SliderService();
        $this->leadService = new leadService();
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount()
    {
        $this->module = __('leads');
        $this->activeItem = __('list');
        $this->filter = $this->filterDefaultValues();
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
