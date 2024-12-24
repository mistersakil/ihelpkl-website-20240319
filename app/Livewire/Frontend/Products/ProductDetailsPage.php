<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;

class ProductDetailsPage extends Component
{
    ## Component props
    public string $metaTitle = 'product details';
    public string $module = 'products';
    public string $slug;
    public array $itemDetails;
    private ProductService $productService;


    /**
     * Boot on every request
     *
     * @return void
     */
    public function boot()
    {
        $this->productService = new ProductService;
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(string $slug): void
    {
        $this->slug = $slug;
        $generateModelUrl = route('web.products.details', ['slug' => $slug]);
        $this->itemDetails = $this->productService->getStaticModels($generateModelUrl);
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Product Details')]
    public function render(): View
    {
        return view('livewire.frontend.products.product-details-page');
    }
}
