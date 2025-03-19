<?php

namespace App\Livewire\Frontend\Partials;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomeAboutSection extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public string $shortDetails;
    public array $items;
    public string $img;
    public string $imgAlt;

    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $item = []): void
    {
        $item =  isset($item['about']) && array_key_exists('about', $item) ? ($item['about']) : $item;

        $this->title = isset($item['title']) ? __($item['title']) : '';
        $this->subTitle = isset($item['subTitle']) ? __($item['subTitle']) : '';
        $this->shortDetails = isset($item['short_details']) ? ($item['short_details']) : '';
        $this->items = isset($item['keyPoints']) ? $item['keyPoints'] : [];
        $this->img = isset($item['img_featured']) ? $item['img_featured'] : '';
        $this->imgAlt = isset($item['img_featured_alt']) ? $item['img_featured_alt'] : 'img_featured_alt';
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.partials.home-about-section');
    }
}
