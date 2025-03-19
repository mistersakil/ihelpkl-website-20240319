<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomePage extends Component
{
    ## Meta props
    public string $metaTitle = "Custom CRM, Web Development & Application Integration";
    public string $metaDescription = "For Malaysia's business, iHelpKL offers custom CRM, web development, and application integration solutions to enhance your business efficiency and growth";

    ## Component props
    public array $data = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->data['choose1'] = $this->whyChooseUs();
    }

    /**
     * Why choose us data
     *
     * @return array
     */
    private function whyChooseUs(): array
    {
        return [
            "title" => "why choose us",
            "subTitle" => "why you will give us priority",
            "shortDetails" => "",
            "imgFeatured" => "choose-img1.png",
            "items" => [
                [
                    "heading" => "Your Budget, Your Way",
                    "body" => "Our collaboration models have been refined to deliver customized, cost-effective solutions.",
                    "icon" => _icons('money'),
                ],
                [
                    "heading" => "Dedicated Teams",
                    "body" => "We excel in delivering dedicated development teams by centering our efforts on your unique business.",
                    "icon" => _icons('teams'),
                ],
                [
                    "heading" => "Long-Term Partnerships",
                    "body" => "Our focus on nurturing long-term business relationships is evident in our consistently high client retention rate.",
                    "icon" => _icons('partnership'),
                ],
                [
                    "heading" => "Innovation Driven Results",
                    "body" => "Each of our dedicated development teams is committed to crafting innovative solutions.",
                    "icon" => _icons('attributes'),
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
        return view('livewire.frontend.home.home-page');
    }
}
