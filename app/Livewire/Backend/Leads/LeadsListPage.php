<?php

namespace App\Livewire\Backend\Leads;

use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use App\Services\LeadService;
use App\Services\CountryService;
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
    public string $metaTitle = 'leads list';
    public string $module;
    public string $activeItem;

    ## Filter properties
    #[Url(as: 'query', except: '', history: true)]
    public ?string $search = '';
    public array $filter = [];


    # Services
    private LeadService $leadService;
    private CountryService $countryService;

    /**
     * Create a new component instance
     *
     * @return void
     */
    public function boot(): void
    {
        $this->leadService = new leadService();
        $this->countryService = new CountryService();
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
     * Swap order between two model
     *
     * @param integer $modelId
     * @param string $type
     * @return void
     */
    public function swapOrder(int $modelId, string $type): void
    {
        $this->filter = [
            ...$this->filter,
            'orderBy' => 'order',
            'orderDirection' => 'asc',
        ];
        $this->leadService->swapOrder(modelId: $modelId, type: $type);
    }


    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Leads List')]
    public function render()
    {
        // Correctly calling the method using the instance
        $leads = $this->leadService->getAll();

        $models = $this->leadService->getFilteredModels(
            [...$this->filter, 'searchText' => $this->search]
        );
        $countModel = $this->leadService->countAllModel();
        $lowerOrderModel = $this->leadService->getOnlyModelByOrderDirection('asc');
        $highestOrderModel = $this->leadService->getOnlyModelByOrderDirection('desc');

        // $viewData = [];
        // foreach ($models as $key => $model) {
        //     $viewData[] = [
        //         'country_id' => $model->id,
        //     ];
        // }

        // $countries = $this->countryService->getCountryNameById($this->viewData);
        // dd($viewData);


        $viewData = [];
        foreach ($models as $key => $model) {
            $viewData[] = [
                'country_id' => $model->country_id,
                'country_name' => $this->countryService->getCountryNameById($model->country_id)
            ];
        }

        $countryName = $viewData[0]['country_name'];

        // dd($countryName);

        return view('livewire.backend.leads.leads-list-page', compact('leads', 'models', 'countryName', 'countModel', 'lowerOrderModel', 'highestOrderModel'));
    }
}
