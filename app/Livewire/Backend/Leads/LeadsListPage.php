<?php

namespace App\Livewire\Backend\Leads;

use Livewire\Attributes\Url;
use App\Services\LeadService;
use Livewire\Attributes\Layout;
use App\Traits\BackendFilterTrait;
use Illuminate\Contracts\View\View;
use App\Traits\BackendPaginationTrait;
use App\Livewire\Backend\BackendComponent;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class LeadsListPage extends BackendComponent
{
    use BackendPaginationTrait;
    use BackendFilterTrait;

    # Module Props
    public string $metaTitle = 'lead list';
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


    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    public function render(): View
    {
        $models = $this->leadService->getFilteredModels(
            [...$this->filter, 'searchText' => $this->search, 'with' => ['country']]
        );
        $countModel = $models->count();

        return view('livewire.backend.leads.leads-list-page', compact('models', 'countModel'));
    }
}
