<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;

class ProductDetailsPage extends Component
{
    ## Meta data
    public string $metaTitle;
    public string $metaDescription;
    public string $metaKeywords;
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
        $this->metaTitle = __('product details');
        $this->metaDescription = __('meta description');
        $this->slug = $slug;
        $generateModelUrl = route('web.products.details', ['slug' => $slug]);
        $this->itemDetails = $this->productService->getStaticModels($generateModelUrl);


        if ($this->itemDetails && isset($this->itemDetails['meta_title'])) {
            $this->metaTitle = $this->itemDetails['meta_title'];
        }
        if ($this->itemDetails && isset($this->itemDetails['meta_description'])) {
            $this->metaDescription = $this->itemDetails['meta_description'];
        }
        if ($this->itemDetails && isset($this->itemDetails['meta_keywords'])) {
            $this->metaKeywords = $this->itemDetails['meta_keywords'];
        }
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
