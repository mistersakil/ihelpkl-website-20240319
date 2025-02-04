<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class RequestDemoSection extends Component
{
    ## Component props
    public array $dataList;
    public string $sectionTitle;
    public string $sectionSubTitle;
    public string $isShowSectionHeader;
    public int $limit;

    ## Services
    private ProductService $productService;

    public function boot()
    {
        $this->productService = new ProductService;
    }

    /**
     * Create a new component instance.
     * @param string $sectionTitle `Title of the section`
     * @param string $sectionSubTitle `Sub title of the section`
     * @param int $limit `Number of items to display in the section`
     * @return void
     */
    public function mount(string $sectionTitle = '', string $sectionSubTitle = '', int $limit = 6): void
    {
        $this->sectionTitle = $sectionTitle ? __($sectionTitle) : "";
        $this->sectionSubTitle = $sectionSubTitle ? __($sectionSubTitle) : "";

        $this->isShowSectionHeader = (!empty($this->sectionTitle) || !empty($this->sectionSubTitle)) ? true : false;

        $this->limit = $limit;
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        $this->dataList = $this->productService->getStaticModels(limit: $this->limit);
        return view('livewire.frontend.components.request-demo-section');
    }
}
