<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ImageComponentOne extends Component
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
     * @param string $sectionTitle `Title of the section`
     * @param string $sectionSubTitle `Sub title of the section`
     * @param int $limit `Number of items to display in the section`
     * @return void
     */
    public function mount(array $item = []): void
    {
        if (!isset($item['imageOne']) || empty($item['imageOne'])) {
            $this->isDisplaySection =  false;
        } else {
            $model = $item['imageOne'];
        }
        $this->title = isset($model['title']) ? __($model['title']) : '';
        $this->subTitle = isset($model['subTitle']) ? __($model['subTitle']) : '';
        $this->shortDetails = isset($model['shortDetails']) ? __($model['shortDetails']) : '';
        $this->items = isset($model['items']) ? $model['items'] : [];
        $this->imgFeatured = isset($model['imgFeatured']) ? $model['imgFeatured'] : '';
        $this->imgThumb = isset($model['imgThumb']) ? $model['imgThumb'] : '';
        $this->imgFrame = isset($model['imgFrame']) ? $model['imgFrame'] : '';
        $this->list = isset($model['list']) ? $model['list'] : [];
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.image-component-one');
    }
}
