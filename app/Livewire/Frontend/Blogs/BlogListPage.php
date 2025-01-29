<?php

namespace App\Livewire\Frontend\Blogs;

use Livewire\Component;
use App\Services\BlogService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BlogListPage extends Component
{
    ## Component props
    public string $metaTitle = 'blog list';
    public string $module = 'blogs';
    public array $dataList = [];
    private BlogService $blogService;

    /**
     * Boot component on every render
     * 
     * @return void
     */
    public function boot(): void
    {
        $this->blogService = new BlogService;
    }

    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(): void
    {
        $this->dataList = $this->blogService->getStaticModels();

     
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.blogs.blog-list-page');
    }
}
