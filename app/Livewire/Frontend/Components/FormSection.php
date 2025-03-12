<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Lead;
use App\Models\Query;
use App\Models\LeadProduct;
use Livewire\Component;
use App\Services\CountryService;
use App\Services\ProductService;
use Livewire\Attributes\Validate;
use App\Services\ValidationService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class FormSection extends Component
{
    ## Component props
    public int $limit;
    public array $state;
    public array $dataList;
    public string $sectionTitle;
    public string $sectionSubTitle;
    public string $isShowSectionHeader;
    public $showProductInput, $showSubjectInput, $showRequestDemoButton, $showSendMessageButton, $showTermsConditionCheck;

    #[Validate]
    public string $name = '';
    #[Validate]
    public string $email = '';
    #[Validate]
    public string $phone = '';
    #[Validate]
    public string $country_id = '';
    #[Validate]
    public string $product_id = '';
    #[Validate]
    public string $message = '';
    #[Validate]
    public string $subject = '';
    public string $phoneCode = '***';
    public bool $termsAccepted = false;

    public array $countries;
    public array $result;
    public array $resultWithCollection;

    ## Services
    private ProductService $productService;
    private CountryService $countryService;
    private ValidationService $ValidationService;

    public function boot()
    {
        $this->productService = new ProductService;
        $this->countryService = new CountryService;
        $this->ValidationService = new ValidationService;
    }

    /**
     * Create a new component instance.
     * @param string $sectionTitle `Title of the section`
     * @param string $sectionSubTitle `Sub title of the section`
     * @param int $limit `Number of items to display in the section`
     * @return void
     */
    public function mount(string $sectionTitle = '', string $sectionSubTitle = '', int $limit = 6, $showProductInput = true, $showSubjectInput = true, $showRequestDemoButton = true, $showSendMessageButton = true, $showTermsConditionCheck = true): void
    {
        $this->limit = $limit;
        $this->showProductInput = $showProductInput;
        $this->showSubjectInput = $showSubjectInput;
        $this->showRequestDemoButton = $showRequestDemoButton;
        $this->showSendMessageButton = $showSendMessageButton;
        $this->showTermsConditionCheck = $showTermsConditionCheck;

        $this->sectionTitle = $sectionTitle ? __($sectionTitle) : "";
        $this->sectionSubTitle = $sectionSubTitle ? __($sectionSubTitle) : "";

        $this->isShowSectionHeader = (!empty($this->sectionTitle) || !empty($this->sectionSubTitle)) ? true : false;

        $this->countries = $this->countryService->getCountries();
    }

    /**
     * Set state props default value
     *
     * @return array
     */
    private function resetStateValues(): void
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->country_id = '';
        $this->product_id = '';
        $this->phoneCode = '';
        $this->message = '';
        $this->subject = '';
        $this->termsAccepted = '';
    }


    /**
     * When the country_id is updated, get the phone code
     *
     * @param int $countryId
     */
    public function updatedCountryId($countryId)
    {
        $this->phoneCode = $this->countryService->getPhoneCode($countryId);
    }


    /**
     * Validation rules of the component
     *
     * @return array
     */
    public function rules(): array
    {
        return $this->ValidationService->validationRules([
            'showProductInput' => $this->showProductInput,
            'showSubjectInput' => $this->showSubjectInput,
            'showTermsConditionCheck' => $this->showTermsConditionCheck,
        ]);
    }

    /**
     * Validation error messages for state properties of the component
     * @return array
     */
    public function messages(): array
    {
        return $this->ValidationService->validationErrorMessages();
    }


    /**
     * Alias of state attributes
     * @return array
     */
    public function validationAttributes()
    {
        return $this->ValidationService->validationAttributesSurname();
    }

    /**
     * Validate attribute on update
     *
     * @param [type] $propertyName
     * @return void
     */
    public function updating($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    /**
     * Retrieves the title of the selected product based on the product ID.
     * If the product is not found, a default title is returned.
     *
     * @return string The title of the selected product or a default title.
     */
    public function getProductTitle()
    {
        $product = collect($this->productService->getStaticModels())->firstWhere('id', $this->product_id);

        if ($product) {
            $title = $product['title'];
        } else {
            $title = $this->subject;
        }

        return $title;
    }

    /**
     * Handle form submission.
     */
    public function submitForm()
    {
        $this->validate();

        $lead = Lead::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile_number' => $this->phoneCode . $this->phone,
            'country_id' => $this->country_id,
            'message' => $this->message,
        ]);

        if (!$this->showSendMessageButton) {
            $Lead_products = LeadProduct::create([
                'lead_id' => $lead->id,
                'product_id' => $this->product_id ?: null,
            ]);
        }

        if ($this->showSendMessageButton) {
            $query = Query::create([
                'lead_id' => $lead->id,
                'subject' => $this->subject,
            ]);
        }

        $this->resetStateValues();

        ## Dispatch events
        $this->dispatch('toastAlert', message: __('your query has been submitted successfully'), type: 'success');
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        $this->dataList = collect($this->productService->getStaticModels())->pluck('title', 'id')->toArray();

        return view('livewire.frontend.components.form-section');
    }
}
