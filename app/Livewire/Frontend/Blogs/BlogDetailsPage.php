<?php

namespace App\Livewire\Frontend\Blogs;

use Livewire\Component;
use App\Services\BlogService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BlogDetailsPage extends Component
{
    ## Component props
    public string $module = 'blogs';    
    public string $metaTitle;
    public string $metaDescription;
    public string $slug;
    public array $itemDetails;
    private BlogService $blogService;

    /**
     * Boot on every request
     *
     * @return void
     */
    public function boot()
    {
        $this->blogService = new BlogService;
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(string $slug): void
    {
        $this->metaTitle = 'blog details';
        $this->metaDescription = __('meta description');
        $this->slug = $slug;
        $generateModelUrl = route('web.blogs.details', ['slug' => $slug]);
        $model = $this->blogService->getStaticModels($generateModelUrl);
        $this->itemDetails = $model ?? [];
        if($model && isset($model['title'])){
            $this->metaTitle = $model['title'];
        }
        if($model && isset($model['meta_description'])){
            $this->metaDescription = $model['meta_description'];
        }
     
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.blogs.blog-details-page');
    }
}
