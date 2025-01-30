<?php

namespace App\Livewire\Frontend\Solutions;

use App\Services\SolutionService;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class SolutionDetailsPage extends Component
{
    ## Meta data
    public string $metaTitle;
    public string $metaDescription;
    public string $metaKeywords;
    public string $module = 'solutions';

    ## Route params
    public string $slug;

    ## Component props
    public array $itemDetails;
    public array $solutionList = [];

    ## Services
    private SolutionService $solutionService;

    public function boot()
    {
        $this->solutionService = new SolutionService;
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(string $slug): void
    {
        $this->metaTitle = 'blog details';
        $this->metaDescription = __('meta description');

        $this->slug = $slug;
        $slugString = route('web.solutions.details', ['slug' => $slug]);
        $this->itemDetails = $this->solutionService->getStaticModels($slugString);
        $this->solutionList = $this->solutionService->getStaticModels();

        if ($this->itemDetails && isset($this->itemDetails['meta_title'])) {
            $this->metaTitle = $this->itemDetails['meta_title'];
        }
        if ($this->itemDetails && isset($this->itemDetails['meta_description'])) {
            $this->metaDescription = $this->itemDetails['meta_description'];
        }
        if ($this->itemDetails && isset($this->itemDetails['meta_keywords'])) {
            $this->metaKeywords = $this->itemDetails['meta_keywords'];
        }
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.solutions.solution-details-page');
    }
}
