<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use App\Services\SliderService;
use Livewire\Attributes\Layout;
use App\Traits\BackendFilterTrait;
use Illuminate\Contracts\View\View;
use App\Traits\BackendPaginationTrait;
use App\Livewire\Backend\BackendComponent;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderListPage extends BackendComponent
{
    use BackendPaginationTrait;
    use BackendFilterTrait;

    ## Module props
    public string $module;
    public string $activeItem;

    ## Filter properties
    #[Url(as: 'query', except: '', history: true)]
    public ?string $search = '';
    public array $filter = [];

    # Services 
    private SliderService $sliderService;

    /**
     * Create a new component instance
     *
     * @return void
     */
    public function boot(): void
    {
        $this->sliderService = new SliderService();
    }


    /**
     * Create a new component instance.
     * @return void
     */
    public function  mount(): void
    {
        $this->module = __('sliders');
        $this->activeItem = __('list');
        $this->filter = $this->filterDefaultValues();
    }

    /**
     * Delete model from database
     * @return void
     */
    public function  deleteModel($modelId): void
    {
        try {
            $this->sliderService->deleteModel($modelId);
            ## Dispatch events
            $this->dispatch('toastAlert', message: __('action successful'), type: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('toastAlert', message: $th->getMessage(), type: 'error');
        }
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
        $this->sliderService->swapOrder(modelId: $modelId, type: $type);
    }


    /**
     * Reset page on search text update
     *
     * @return void
     */
    function updatingSearch(): void
    {
        $this->resetPage();
    }
    

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders List')]
    public function render(): View
    {
        $models = $this->sliderService->getFilteredModels(
            [...$this->filter, 'searchText' => $this->search]
        );
        $countModel = $this->sliderService->countAllModel();
        $lowerOrderModel = $this->sliderService->getOnlyModelByOrderDirection('asc');
        $highestOrderModel = $this->sliderService->getOnlyModelByOrderDirection('desc');

        return view('livewire.backend.sliders.slider-list-page', compact('models', 'countModel', 'lowerOrderModel', 'highestOrderModel'));
    }
}
