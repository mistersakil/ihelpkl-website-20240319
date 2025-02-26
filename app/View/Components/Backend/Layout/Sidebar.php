<?php

namespace App\View\Components\Backend\Layout;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

class Sidebar extends Component
{

    public string $logo;
    public string $icon_circle;
    public array $nav_links;

    /**
     * Set initial value for once
     * @return void
     */
    public function __construct()
    {
        $this->logo = Vite::imageRoot('logo.png');
        $this->nav_links = $this->get_nav_links();
        $this->icon_circle = _icons("circle");
    }

    /**
     * get_nav_links method return necessary nav links
     * @return array 
     */
    private function get_nav_links(): array
    {
        return [
            [
                'nav_url' => route('admin.dashboard'),
                'nav_icon' => _icons('dashboard'),
                'nav_title' => __('dashboard'),
                'nav_is_readonly' => false,
                'nav_has_children' => false,
                'nav_children' => false
            ],
            [
                'nav_url' => route('admin.sliders.list'),
                'nav_icon' => _icons('sliders'),
                'nav_title' => __('sliders'),
                'nav_is_readonly' => false,
                'nav_has_children' => false,
                'nav_children' => false
            ],
            [
                'nav_url' => route('admin.leads.list'),
                'nav_icon' => _icons('leads'),
                'nav_title' => __('leads'),
                'nav_is_readonly' => false,
                'nav_has_children' => false,
                'nav_children' => false
            ],


            // [
            //     'nav_url' => false,
            //     'nav_icon' => _icons('about'),
            //     'nav_title' => __('about'),
            //     'nav_is_readonly' => false,
            //     'nav_has_children' => true,
            //     'nav_children' => [
            //         [
            //             'title' => 'biography',
            //             'url' => route('admin.home.create')
            //         ],
            //         [
            //             'title' => 'technical skills',
            //             'url' => route('admin.home.create')
            //         ],
            //         [
            //             'title' => 'professions',
            //             'url' => route('admin.home.create')
            //         ],
            //         [
            //             'title' => 'educations',
            //             'url' => route('admin.home.create')
            //         ],

            //     ]
            // ],


        ];
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.backend.layout.sidebar');
    }
}
