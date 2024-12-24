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
     * @return \array
     */
    public function getStaticModels(string $slug = '', int $limit = 5)
    {
        $dataList = [
            [
                'title' => "Custom CRM Software Development Services by iHelpKL",
                'slug' => "javascript:void(0)",                
                'img_featured' => Vite::imageWeb('custom-website-benefits.png'),
                'img_thumb' => Vite::imageWeb('custom-website-benefits.png'),
                'author' => 'Mamunur',
                'date' => Carbon::now()->format('d M Y'),
                'category' => 'web design',
                'tags' => 'website, crm, custom website, website development, crm customization'


            ],
            [
                'title' => 'Key Skills and Insights - Comprehensive Guide to Web Development',
                'slug' => "javascript:void(0)",                
                'img_featured' => Vite::imageWeb('what-is-web-dev.png'),
                'img_thumb' => Vite::imageWeb('what-is-web-dev.png'),
                'author' => 'Khalid',
                'date' => Carbon::now()->subDays(2)->format('d M Y'),
                'category' => 'web development',
                'tags' => 'website, crm, custom website, website development, crm customization'


            ],


        ];

        if (!empty($slug)) {
            $filteredProducts = array_filter($dataList, function ($product) use ($slug) {
                return $product['slug'] == $slug;
            });
            $firstProduct = reset($filteredProducts);
            return $firstProduct !== false ? $firstProduct : [];
        }

        return collect($dataList)->take($limit)->toArray();
    }
}
