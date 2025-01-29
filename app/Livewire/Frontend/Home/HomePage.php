<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomePage extends Component
{
    ## Meta props
    public string $metaTitle = "Custom CRM, Web Development & Application Integration";
    public string $metaDescription = " For Malaysia's business, iHelpKL offers custom CRM, web development, and application integration solutions to enhance your business efficiency and growth";

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.home.home-page');
    }
}
