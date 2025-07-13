<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class WhyChooseUsSection extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public string $shortDetails;
    public array $items;
    public string $img;
    public bool $isDisplaySection = true;
    public string $imgFeatured;
    public string $imgThumb;
    public string $imgFrame;
    public array $list = [];


    /**
     * Create a new component instance.
     *
     * @param string $item array of values     
     * @return void
     */
    public function mount(array $item = []): void
    {
        if (!isset($item['choose1']) || empty($item['choose1'])) {
            $this->isDisplaySection =  false;
        } else {
            $model = $item['choose1'];
        }
        $this->title = isset($model['title']) ? __($model['title']) : '';
        $this->subTitle = isset($model['subTitle']) ? __($model['subTitle']) : '';
        $this->shortDetails = isset($model['shortDetails']) ? __($model['shortDetails']) : '';
        $this->imgFeatured = isset($model['imgFeatured']) ? Vite::imageWeb($model['imgFeatured']) : Vite::imageWeb('choose-img1.png');
        $this->items = isset($model['items']) ? $model['items'] : [];

    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.why-choose-us-section');
    }
}
