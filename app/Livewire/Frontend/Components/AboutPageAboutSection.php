<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class AboutPageAboutSection extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public string $body;
    public array $items;
    public string $img;
    public bool $isDisplaySection = true;

    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $item = []): void
    {
        if (!isset($item['about']) || empty($item['about'])) {
            $this->isDisplaySection =  false;
        } else {
            $model = $item['about'];
        }
        $this->title = isset($model['title']) ? __($model['title']) : '';
        $this->body = isset($model['body']) ? $model['body'] : '';
        $this->subTitle = isset($model['subTitle']) ? __($model['subTitle']) : '';
        $this->items = isset($model['items']) ? $model['items'] : [];
        $this->img = isset($model['img']) ? $model['img'] : '';
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.about-page-about-section');
    }
}
