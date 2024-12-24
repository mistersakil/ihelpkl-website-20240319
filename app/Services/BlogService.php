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
                'tags' => 'website, crm, custom website, website development, crm customization',
                'details' => '
                <p>
                    Customer relationship management (CRM) is all about building and nurturing strong relationships with your customers. A central hub that stores all your customer interactions, tracks potential sales leads.
                </p>
                <p>
                    Though there are many pre-built CRM software options available, custom CRM development will allow you to fashion the system based on your business specific needs. It can capture every detail about your leads, customers, and interactions, and will provide a 360-degree view of your customer base. And the data you can use to  improve  sales, marketing, and customer service efforts.
                </p>
                ',

                'article_content' => [
                    'title' => 'Custom CRM Software Regulate with Your Goals',
                    'details' => '
                       <p>
                            Custom CRM development is a key strategic asset for businesses, helping to manage and automate customer interactions. By streamlining tasks and tracking customer data, CRM systems reduce time and effort in customer management, optimize sales cycles, and uncover upselling opportunities.
                        </p>
                        <br/>
                        <p>
                            iHelpKL Software specializes in helping global companies develop, migrate, and adopt custom CRM solutions. Our services enable businesses to maximize the use of customer data, enhance customer retention, and graceful internal communication—all through a unified interface.
                        </p>     
                    '
                ],
                'benefit_content' => [
                    'title' => 'Our CRM Development Services',
                    'details' => "iHelpKL Software is a comprehensive CRM development company focused on providing top-tier client management solutions. Their expertise ensures that businesses receive high-quality CRM systems designed to deliver substantial value and drive growth.",
                    'items' => [
                        [
                            'title' => 'Expert CRM Advisory Services',
                            'details' => 'iHelpKL Software offers expert guidance throughout the CRM adoption process, including platform selection, system development, and performance optimization. Their consultants analyze your business ecosystem and workflows to develop a tailored, actionable strategy that addresses your specific needs and limitations.',
                        ],
                        [
                            'title' => 'Comprehensive End-to-End CRM Development',
                            'details' => 'iHelpKL Software manages the entire CRM system development process, focusing on your business priorities and challenges. Their developers create and deploy feature-rich CRM platforms that offer robust capabilities and seamless integration, ensuring effective data interoperability and enhanced communication.',
                        ],
                        [
                            'title' => 'Smooth CRM Implementation Service',
                            'details' => 'iHelpKL Software ensures a seamless transition to new CRM systems by aiding your team in adopting new workflows. Their experts provide workshops, manage data reserves, and refine the CRM solution to align with your internal processes, maximizing the effectiveness of the new system.',
                        ],
                        [
                            'title' => 'Mobile Client Management Solutions',
                            'details' => 'iHelpKL Software offers mobile client management solutions that keep critical data accessible on the go. Their portable CRM platforms enable real-time knowledge sharing and collaboration, allowing team members to access client data via smartphones, tablets, and other mobile devices, ensuring a comprehensive CRM experience anywhere.',
                        ],
                        [
                            'title' => 'CRM Integration for Enhanced Business Efficiency',
                            'details' => 'iHelpKL Software maximizes your CRM system’s potential by integrating it with other business applications. They transform data silos into a cohesive solution through automatic data synchronization and updates. Whether integrating with ERM systems or marketing automation tools, these integrations promote a streamlined sales funnel and ensure data consistency.',
                        ],
                        [
                            'title' => 'CRM Migration Services',
                            'details' => 'iHelpKL Software facilitates a smooth transition to new CRM systems by replacing outdated, high-maintenance software with advanced solutions. Their team manages the entire migration process, including risk assessment, data import strategy, and system testing, ensuring a seamless upgrade and enhanced client experience.',
                        ],
                        [
                            'title' => 'Tailored CRM Customization Services',
                            'details' => 'iHelpKL Software aligns your CRM tools with your business strategy by customizing existing solutions to fit your specific objectives. Their team enhances the value of your digital assets through personalized data collection, reporting, dashboards, workflows, and other critical elements, optimizing your marketing and sales efforts.',
                        ],
                        [
                            'title' => 'Comprehensive CRM Support and Maintenance',
                            'details' => 'iHelpKL Software’s support team ensures your CRM solution operates efficiently with a full range of maintenance services. This includes performance optimization, data backups, system monitoring, and more. They guarantee the reliability and continuous availability of all CRM components, enhancing overall system performance and value.',
                        ]


                    ]
                ]

            ],
            [
                'title' => 'The Comprehensive Guide to Web Development: Crafting Exceptional Digital Experiences',
                'meta_description' => "Explore web development basics, including front-end, back-end, e-commerce, SEO, and tools. Learn how to create responsive and secure online platforms. Web development blends front-end interfaces, back-end logic, and responsive design to create engaging digital experiences. Tools like CMS platforms, frameworks, and SEO strategies boost visibility and business growth. Key processes include planning, coding, testing, and maintaining, with specialized areas like e-commerce, mobile apps, and security driving demand. Collaboration and learning thrive in developer communities.
",
                'slug' => route('web.blogs.details', ['slug' => 'key-skills-and-insights-comprehensive-guid-to-web-development']),
                'img_featured' => Vite::imageWeb('what-is-web-dev.png'),
                'img_thumb' => Vite::imageWeb('what-is-web-dev.png'),
                'author' => 'Khalid',
                'date' => Carbon::now()->subDays(2)->format('d M Y'),
                'category' => 'web development',
                'tags' => 'website, crm, custom website, website development, crm customization',
                'details' => '<p>In the fast-paced digital era, web development is the backbone of creating engaging and functional online platforms. It combines creativity with technical expertise, offering limitless opportunities to build digital experiences that captivate users and drive business success.
                </p>',
                'article_content' => [
                    'title' => 'Why Web Development Matters',
                    'details' => '
                       <p>
                          With more than half of the global population online, web development is critical for communication, education, commerce, and entertainment. This thriving field is set to grow significantly, with rising demand for developers skilled in creating seamless digital ecosystems.

                        </p>   
                    ',
                ],

                'benefit_content' => [
                    'title' => 'Core Areas of Web Development',
                    'details' => "",
                    'items' => [
                        [
                            'title' => 'Front-End Development',
                            'details' => 'Focused on the user-facing elements like layout, navigation, and interactivity. Key technologies include:
                                <ul>
                                    <li><strong>HTML</strong> for structuring content.</li>
                                    <li><strong>CSS</strong> for styling and responsive design.</li>
                                    <li><strong>JavaScript</strong> for dynamic features.</li>
                                </ul>
                            ',
                        ],
                        [
                            'title' => 'Back-End Development',
                            'details' => 'Manages server-side operations, databases, and APIs. Popular languages include Python, PHP, and Node.js.',
                        ],
                        [
                            'title' => 'Full-Stack Development',
                            'details' => 'Combines front-end and back-end expertise, enabling holistic application development.',
                        ],
                    ]
                ]


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
