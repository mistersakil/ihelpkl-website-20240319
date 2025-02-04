<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;
use Livewire\Attributes\Title;

use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ProductListPage extends Component
{
    ## Component props
    public string $metaTitle = 'our products';
    public string $module = 'products';


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Products')]
    public function render(): View
    {
        return view('livewire.frontend.products.product-list-page');
    }
}
