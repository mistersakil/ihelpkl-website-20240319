<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use App\Events\VisitorsQueryEvent;
use App\Services\CountryService;
use App\Services\ProductService;
use Livewire\Attributes\Validate;
use App\Services\ValidationService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use App\Livewire\Backend\Addons\CountNotification;
use App\Models\Country;
use App\Models\Lead;
use App\Models\Notification;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class VisitorsQueryFormSection extends Component
{
    ## Component props
    public array $dataList;
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
     *
     * @return void
     */
    public function mount($showProductInput = true, $showSubjectInput = true, $showRequestDemoButton = true, $showSendMessageButton = true, $showTermsConditionCheck = true): void
    {
        $this->showProductInput = $showProductInput;
        $this->showSubjectInput = $showSubjectInput;
        $this->showRequestDemoButton = $showRequestDemoButton;
        $this->showSendMessageButton = $showSendMessageButton;
        $this->showTermsConditionCheck = $showTermsConditionCheck;
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
     * Save new record
     * @return void
     */
    public function save(): void
    {
        $this->validate();

        // $this->sendEvent();
        try {
            $this->dispatch('sweetAlert', title: __('thank you'), message: __("we've received your request. please check your email for further information"), type: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('sweetAlert', title: __('thank you'), message: $th->getMessage(), type: 'error');
        }
    }


    /**
     * Handle form submission.
     */
    public function submitForm()
    {
        $this->validate();

        // VisitorsQueryEvent::dispatch();
        // $this->dispatch('submitted');

        // $this->dispatch('form-submitted')->to(CountNotification::class);
        // dd('form submitted');

        $lead = Lead::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile_number' => $this->phoneCode . $this->phone,
            'country_id' => $this->country_id,
            'message' => $this->message,
        ]);

        $countryName = Country::find($lead->country_id)?->name ?? 'no country name';

        $notification = Notification::create([
            'body' => "New query received from <b>{$lead->name}</b> (<em>{$lead->email}</em>
                            ), based in <b>{$countryName}</b>"
        ]);


        VisitorsQueryEvent::dispatch($lead);

        // if (!$this->showSendMessageButton) {
        //     $Lead_products = LeadProduct::create([
        //         'lead_id' => $lead->id,
        //         'product_id' => $this->product_id ?: null,
        //     ]);
        // }

        // if ($this->showSendMessageButton) {
        //     $query = Query::create([
        //         'lead_id' => $lead->id,
        //         'subject' => $this->subject,
        //     ]);
        // }

        // Mail::to($this->email)->send(new WelcomeMail($this->name));

        // broadcast(new VisitorsQueryEvent());

        // $this->dispatch('form-submitted');

        // $this->resetStateValues();
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        $this->dataList = collect($this->productService->getStaticModels())->pluck('title', 'id')->toArray();

        return view('livewire.frontend.components.visitors-query-form-section');
    }
}
