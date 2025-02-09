<?php

namespace App\Livewire\Frontend\Others;

use Livewire\Component;

use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class PriceQuotationPage extends Component
{
    ## Component props
    public string $metaTitle = 'get price quotation';
    public string $module = 'quotation';


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.others.price-quotation-page');
    }
}
