<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BlogService
{

    /**
     * Get static models
     * 
     * @param string $slug
     * @param int $limit
     * @return array
     */
    public function getStaticModels(string $slug = '', int $limit = 5)
    {

        $dataList = [
            [
                'title' => "Custom CRM Software Development Services by iHelpKL",
                'meta_description' => "Tailored iHelpKLs CRM solutions and optimize sales, enhance customer service, and smooth operations with custom CRM software designed for your business",
                'slug' => route('web.blogs.details', ['slug' => 'custom-crm-software-development-services']),                
                'img_featured' => Vite::imageWeb('custom-website-benefits---featured.png'),
                'img_thumb' => Vite::imageWeb('custom-website-benefits.png'),
                'author' => 'Mamunur',
                'date' => Carbon::now()->format('d M Y'),
                'category' => 'web design',
                'tags' => 'website, crm, custom website, website development, crm customization'


            ],
            [
                'title' => 'Key Skills and Insights - Comprehensive Guide to Web Development',
                'meta_description' => "Explore web development basics, including front-end, back-end, e-commerce, SEO, and tools. Learn how to create responsive and secure online platforms",
                'slug' => route('web.blogs.details', ['slug' => 'key-skills-and-insights-comprehensive-guid-to-web-development']),                           
                'img_featured' => Vite::imageWeb('what-is-web-dev.png'),
                'img_thumb' => Vite::imageWeb('what-is-web-dev.png'),
                'author' => 'Khalid',
                'date' => Carbon::now()->subDays(2)->format('d M Y'),
                'category' => 'web development',
                'tags' => 'website, crm, custom website, website development, crm customization'


            ],


        ];

        if (!empty($slug)) {
            $filteredItems = array_filter($dataList, function ($model) use ($slug) {
                return $model['slug'] == $slug;
            });
            $firstModel = reset($filteredItems);
            return $firstModel !== false ? $firstModel : [];
        }

        return collect($dataList)->take($limit)->toArray();
    }
}
