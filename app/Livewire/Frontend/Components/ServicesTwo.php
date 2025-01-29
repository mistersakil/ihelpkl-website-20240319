<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ServicesTwo extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public string $shortDetails;
    public array $items;
    public string $img;
    public string $img2;
    public bool $isDisplaySection = true;

    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $item = []): void
    {
        if (!isset($item['services2']) || empty($item['services2'])) {
            $this->isDisplaySection =  false;
        } else {
            $model = $item['services2'];
        }
        $this->title = isset($model['title']) ? __($model['title']) : '';
        $this->subTitle = isset($model['subTitle']) ? __($model['subTitle']) : '';
        $this->shortDetails = isset($model['shortDetails']) ? __($model['shortDetails']) : '';
        $this->items = isset($model['items']) ? $model['items'] : [];
        $this->img = Vite::imageWeb('services-top.png') ;
        $this->img2 = Vite::imageWeb('services-top2.png') ;
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.services-two');
    }
}