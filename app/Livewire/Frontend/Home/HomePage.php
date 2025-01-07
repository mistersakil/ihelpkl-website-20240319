<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomePage extends Component
{
    ## Meta props
    public string $metaTitle = 'home';


    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(): void
    {
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title("Home")]
    public function render(): View
    {
        return view('livewire.frontend.home.home-page');
    }
}
