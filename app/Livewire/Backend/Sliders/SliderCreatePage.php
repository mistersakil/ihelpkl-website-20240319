<?php

namespace App\Livewire\Backend\Sliders;

use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use App\Services\SliderService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Services\FileUploadService;
use Illuminate\Contracts\View\View;
use App\Livewire\Backend\BackendComponent;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderCreatePage extends BackendComponent
{
    use WithFileUploads;

    public string $module;
    public string $activeItem;
    public bool $displayTmpUploadedImage = false;
    public array $supportedImgTypes;
    public int $maxFileUploadSize;
    public int $imgMinHeight;
    public int $imgMinWidth;
    public string $isActiveText;

    # Services 
    private SliderService $sliderService;
    private FileUploadService $fileUploadService;

    ## State properties
    public int $user_id;
    #[Validate]
    public string $slider_title = '';
    #[Validate]
    public string $slider_body = '';
    #[Validate]
    public string $slider_link_text = '';
    #[Validate]
    public string $slider_link = '';
    #[Validate]
    public $slider_image = '';
    public int $order = 0;
    public bool $is_active = true;

    /**
     * Create a new component instance
     *
     * @return void
     */
    public function boot(): void
    {
        $this->sliderService = new SliderService();
        $this->fileUploadService = new FileUploadService();
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(): void
    {
        $this->module = __('sliders');
        $this->activeItem = __('create');

        $this->user_id = $this->authId;
        $this->imgMinHeight = $this->sliderService->imgResizeOptions['height'];
        $this->imgMinWidth = $this->sliderService->imgResizeOptions['width'];
        $this->maxFileUploadSize = $this->sliderService->maxFileUploadSize;
        $this->supportedImgTypes = $this->sliderService->supportedImgTypes;
        $this->isActiveText = __('active');
    }

    /**
     * Validation rules of the component
     * 
     * @return array
     */
    public function rules()
    {
        return $this->sliderService->validationRules();
    }


    /**
     * Validation error messages for state properties of the component
     * 
     * @return array
     */
    public function messages()
    {
        return $this->sliderService->validationErrorMessages();
    }

    /**
     * Alias of state attributes
     * 
     * @return array
     */
    public function validationAttributes()
    {
        return $this->sliderService->validationAttributesSurname();
    }

    /**
     * Save new record
     * @return void
     */
    public function save(): void
    {
        $validated = $this->validate();
        try {
            $validated['user_id'] = $this->authId;
            $validated['order'] = $this->sliderService->generateLastOrderNo();
            $this->sliderService->createModel($validated);
            $this->resetStateProps();

            ## Dispatch events
            $this->dispatch('toastAlert', message: __('action successful'), type: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('toastAlert', message: $th->getMessage(), type: 'error');
        }
    }

    /**
     * Called before updating a component property (lifecycle hook)
     *
     * @param $property [Dirty state property]
     * @param $value [Dirty state property value]
     * @return void
     */
    public function updating($property, $value): void
    {
        if ($property == 'slider_image') {
            $uploadedFileExtension = $this->fileUploadService->getTmpUploadedFileExtension($value);
            if (in_array($uploadedFileExtension, $this->supportedImgTypes)) {
                $this->displayTmpUploadedImage = true;
            }
        }

        if ($property == 'is_active') {
            $this->isActiveText = $value ? __('active') : __('inactive');
        }
    }

    /**
     * Delete temporary uploaded image
     *
     * @param \Livewire\Features\SupportFileUploads\TemporaryUploadedFile $file
     * @return string
     */
    public function deleteTmpUploadedImg(): void
    {
        $this->reset('slider_image');
        $this->resetValidation('slider_image');
        $this->displayTmpUploadedImage = false;
    }

    /**
     * Resets component all state properties
     * @return void
     */
    public function resetStateProps(): void
    {
        $this->resetValidation();
        $this->reset(
            'slider_title',
            'slider_body',
            'slider_link',
            'slider_link_text',
            'slider_image',
            'order',
            'is_active'
        );
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('components.backend.layout.backend-layout')]
    #[Title('Sliders Create')]
    public function render(): View
    {
        return view('livewire.backend.sliders.slider-create-page');
    }
}
