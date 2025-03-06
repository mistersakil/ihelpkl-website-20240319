<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class RequestDemoSection extends Component
{

        ## Component props
    public string $sectionTitle;
    public string $sectionSubTitle;
    public string $isShowSectionHeader;
    public $showProductInput;
    public int $limit;

    // /**
    //  * Create a new component instance.
    //  * @param string $sectionTitle `Title of the section`
    //  * @param string $sectionSubTitle `Sub title of the section`
    //  * @param int $limit `Number of items to display in the section`
    //  * @return void
    //  */
    // public function mount(string $sectionTitle = '', string $sectionSubTitle = '', int $limit = 6, $showProductInput = true): void
    // {
    //     $this->showProductInput = $showProductInput;
    //     $this->sectionTitle = $sectionTitle ? __($sectionTitle) : "";
    //     $this->sectionSubTitle = $sectionSubTitle ? __($sectionSubTitle) : "";

    //     $this->isShowSectionHeader = (!empty($this->sectionTitle) || !empty($this->sectionSubTitle)) ? true : false;

    //     $this->limit = $limit;
    // }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.request-demo-section');
    }
}
