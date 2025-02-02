<?php

namespace App\Livewire\Frontend\About;

use Livewire\Component;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class AboutPage extends Component
{
    public string $metaTitle = 'about us';
    public string $metaDescription = 'about us';
    public string $module = 'about';

    public array $data = [];

    /**
     * Create a new component instance.     
     * @return void
     */
    public function mount(): void
    {
        $this->staticData();
    }


    /**
     * About page about us section static data
     *
     * @return void
     */
    public function staticData(): void
    {
        $this->data['about'] = [
            'title' => 'Who Are We?',
            'subTitle' => 'About iHelpKL',
            'body' => 'iHelpKL, with over 12 years of experience through our parent company iHelpBD in Bangladesh, is introducing cutting-edge products and solutions in Malaysia. Our offerings include POS software, CRM systems, task and complaint management solutions, custom CRM development, web development, application integration, and AI-powered services.',
            'imgThumb' => Vite::imageWeb('about-img1.jpg'),
            'items' => [
            ]
        ];

        $this->data['projects'] = [
            'title' => 'Ambitions',
            'subTitle' => 'Our Goals',
            'items' => [
                [
                    'title' => 'Vision',
                    'body' => 'To be the leading provider of technology-driven business solutions in Malaysia, helping companies succeed in an increasingly digital world.',
                    'img' =>  Vite::imageWeb('about_mission.jpg'),
                ],
                [
                    'title' => 'Mission',
                    'body' => "To empower businesses by delivering innovative, tailored software solutions that Simplify operations and enhance customer experiences.",
                    'img' =>  Vite::imageWeb('about_vision.jpg'),
                ],

            ]
        ];
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.about.about-page');
    }
}
