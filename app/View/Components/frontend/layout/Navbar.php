<?php

namespace App\View\Components\Frontend\Layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

class Navbar extends Component
{
    ## Component props
    public string $logo = '';
    public array $navItems = [];


    /**
     * Create new component instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->logo = Vite::asset('resources/images/logo-dark.svg');
        $this->navItems = $this->getNavItems();
    }

    /**
     * Get nav items
     *
     * @return array $list
     */
    public function getNavItems(): array
    {
        $list = [
            [
                'title' => __('home'),
                'link' => route('web.home'),
                'isActive' => _parse_url('web.home') ? 'active' : '',
            ],

            [
                'title' => __('products'),
                'link' => route('web.products'),
                'isActive' => _parse_url('web.products') ? 'active' : '',
            ],

            [
                'title' => __('solutions'),
                'link' => route('web.solutions'),
                'isActive' => _parse_url('web.solutions') ? 'active' : '',
            ],

            [
                'title' => __('company'),
                'link' => "javascript:void(0)",
                'isActive' => _parse_url('web.about') || _parse_url('web.contact') ? 'active' : '',
                'children' => [
                    [
                        'title' => __('about'),
                        'link' => route('web.about'),
                        'isActive' => _parse_url('web.about') ? 'active' : '',

                    ],
                    [
                        'title' => __('contact'),
                        'link' => route('web.contact'),
                        'isActive' => _parse_url('web.contact') ? 'active' : '',

                    ],
                ]
            ],

            [
                'title' => __('learning'),
                'link' => "javascript:void(0)",
                'isActive' => _parse_url('web.blogs') || _parse_url('web.blogs.details') ? 'active' : '',
                'children' => [
                    [
                        'title' => __('blog'),
                        'link' => route('web.blogs'),
                        'isActive' => _parse_url('web.blogs') || _parse_url('web.blogs.details')  ? 'active' : '',

                    ],
                ]
            ],


        ];

        return $list;
    }
    /**
     * Get the view / contents that represent the component.
     * 
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.layout.navbar');
    }
}
