<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use App\Services\CountryService;
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
    public array $state;
    public array $countries;
    public string $phoneCode;

    ## Services
    private ProductService $productService;
    private CountryService $countryService;

    public function boot()
    {
        $this->productService = new ProductService;
        $this->countryService = new CountryService;
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

        $this->state = $this->getStateDefault();

        $this->countries = $this->countryService->getCountries();
    }

    private function getStateDefault(): array
    {
        return [
            'name' => '',
            'email' => '',
            'country_id' => '',
            'phone' => '',
            'product_id' => '',
            'message' => '',
        ];
    }


    /**
     * When the country_id is updated, get the phone code
     *
     * @param int $countryId
     */
    public function updatedStateCountryId($countryId)
    {
        // Call the getPhoneCode function and pass the selected countryId
        $this->phoneCode = $this->countryService->getPhoneCode($countryId);
    }

    


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        $this->dataList = collect($this->productService->getStaticModels(limit: $this->limit))->pluck('title', 'id')->toArray();

        // $this->countries = $this->countryService->getCountries();

        // $this->phoneCode = $this->countryService->getPhoneCode();

        return view('livewire.frontend.components.request-demo-section');
    }
}
