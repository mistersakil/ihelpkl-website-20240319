<?php

namespace App\Services;

use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SolutionService
{
    /**
     * Get static models
     * @return \array
     */
    public function getStaticModels(string $slug = '', int $limit = 5)
    {
        $dataList = [
            [
                'meta_title' => 'Best CRM Software in Malaysia: Top Solutions for Your Business',
                'meta_description' => ' Discover the best CRM software in Malaysia to boost your business. Explore tailored CRM solutions with powerful features for enhanced customer management',
                'title' => 'Custom CRM Development',
                'subTitle' => 'Discover the Best CRM Software in Malaysia: Tailored Solutions for Your Business',
                'slug' => route('web.solutions.details', ['slug' => 'best-crm-software-malaysia']),
                'body' => "Discover the Power of CRM Platform",
                'short_details' => "In today's competitive business environment, choosing the right CRM system is crucial for enhancing customer relationships and driving growth. Whether you're a small startup or a large enterprise, the right CRM solution can streamline your processes, improve customer service, and boost sales efficiency.",
                'img_featured' => Vite::imageWeb('blog-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [
                ],

                'projects' => [
                    'title' => 'Projects',
                    'subTitle' => 'Our recent projects',
                    'items' => [
                        [
                            'heading' => '',
                            'body' => 'Boost Your Business with IHELP CRM.',
                            'img' =>  Vite::imageWeb('project-style1.jpg'),
                        ],
                        [
                            'heading' => '',
                            'body' => 'Experience smarter customer relationship management across multiple chains with our CRM system, delivering real-time insights for informed business decisions and personalized customer interactions.',
                            'img' =>  Vite::imageWeb('project-style2.jpg'),
                        ],
                        [
                            'heading' => '',
                            'body' => "Simplify your operations with our IHELP CRM. Centralize data, automate tasks, and uncover customer trends for efficient, sustainable growth. ",
                            'img' =>  Vite::imageWeb('project-style3.jpg'),
                        ]
                    ]
                ],
                'characteristics' => [
                    'title' => 'How we feel',
                    'subTitle' => 'Unified Success',
                    'items' => [
                        [
                            'heading' => 'Integrated Data Management',
                            'body' => 'IHELP CRM centralizes customer data across business chains, offering a unified view for personalized engagement and data-driven decisions.',
                            'icon' =>  _icons('database_gear'),
                        ],
                        [
                            'heading' => 'Real-Time Integration',
                            'body' => 'Real-time integration allows seamless data flow across branches, providing an up-to-date view of customer activity. This empowers businesses to respond quickly to customer needs and market changes.',
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Data Security and Compliances',
                            'body' => 'Secure your data across all chains. Protect customer information with robust security. Build trust through data compliance. Prioritize security in your multi-chain CRM',
                            'icon' =>  _icons('database_lock'),
                        ]
                    ]
                ],
                'faqs' => [
                    'title' => 'FAQ',
                    'subTitle' => "Learn more",
                    'items' => [
                        [
                            'heading' => 'Integrated Data Management',
                            'body' => 'IHELP CRM centralizes customer data across business chains, offering a unified view for personalized engagement and data-driven decisions.',
                        ],
                        [
                            'heading' => 'Real-Time Integration',
                            'body' => 'Real-time integration allows seamless data flow across branches, providing an up-to-date view of customer activity. This empowers businesses to respond quickly to customer needs and market changes.',
                        ],
                        [
                            'heading' => 'Data Security and Compliances',
                            'body' => 'Secure your data across all chains. Protect customer information with robust security. Build trust through data compliance. Prioritize security in your multi-chain CRM',
                        ],
                        [
                            'heading' => 'Data Security and Compliances two',
                            'body' => 'Secure your data across all chains. Protect customer information with robust security. Build trust through data compliance. Prioritize security in your multi-chain CRM',
                        ]
                    ]
                ],
                'articles' => [
                    [
                        'title' => 'CRM Benefits',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img4.jpg'),
                        'items' => [

                            'Boost sales and customer satisfaction',
                            'Streamline operations, cut costs',
                            'Make data-driven decisions.',
                            'Improve team collaboration.',

                        ]
                    ],
                    [
                        'title' => 'Cloud CRM Advantages',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img5.jpg'),
                        'items' => [

                            'Boost sales and customer satisfaction',
                            'Streamline operations, cut costs',
                            'Make data-driven decisions.',
                            'Improve team collaboration.',

                        ]
                    ]
                ]

            ],

            [
                'title' => 'Web Development',
                'subTitle' => 'Top Custom Web Development Solutions',
                'slug' => route('web.solutions.details', ['slug' => 'web-development']),
                'body' => "IHELP delivers innovative web applications for global leaders and startups. With a proven track record in enterprise development, we are committed to excellence and high-quality outcomes",
                'img_featured' => Vite::imageWeb('blog-img2.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [
                    'Industry Expertise',
                    'Cutting-Edge Technology',
                    'Client-Centric Approach',
                ],

                'services2' => [
                    'title' => 'Grow your business',
                    'subTitle' => 'How can we help you?',
                    'items' => [
                        [
                            'heading' => 'Responsive Design',
                            'body' => 'Ensure the website is mobile-friendly and adapts seamlessly to various screen sizes.',
                            'icon' =>  _icons('laptop'),
                        ],
                        [
                            'heading' => 'User-Friendly Navigation',
                            'body' => 'Implement intuitive navigation to enhance user experience and accessibility.',
                            'icon' =>  _icons('tracking'),
                        ],
                        [
                            'heading' => 'SEO Optimization',
                            'body' => 'Integrate SEO best practices to improve visibility on search engines and attract organic traffic.',
                            'icon' =>  _icons('search'),
                        ],
                        [
                            'heading' => 'Content Management System (CMS)',
                            'body' => 'Provide a robust CMS for easy content updates and management without technical expertise.',
                            'icon' =>  _icons('collection'),
                        ],
                        [
                            'heading' => 'E-commerce Functionality',
                            'body' => 'Include secure payment gateways, shopping carts, and inventory management for online stores.',
                            'icon' =>  _icons('cart'),
                        ],
                        [
                            'heading' => 'Analytics and Reporting Tools',
                            'body' => 'Incorporate tools for tracking user behavior and website performance for data-driven decision-making.',
                            'icon' =>  _icons('reports'),
                        ],
                        [
                            'heading' => 'Fast Loading Speed',
                            'body' => 'Optimize website performance to ensure quick loading times, enhancing user satisfaction.',
                            'icon' =>  _icons('speedometer'),
                        ],
                        [
                            'heading' => 'Security Features',
                            'body' => 'Implement SSL certificates, data encryption, and regular security updates to protect user data.',
                            'icon' =>  _icons('lock'),
                        ],
                        [
                            'heading' => 'Customizable Templates',
                            'body' => "Offer customizable design templates to reflect the brand's identity and meet specific business needs.",
                            'icon' =>  _icons('sidebar'),
                        ],
                        [
                            'heading' => 'Integration with Third-Party Services',
                            'body' => "Facilitate integration with various APIs and services, such as CRM, email marketing, and social media platforms.",
                            'icon' =>  _icons('website'),
                        ]

                    ],
                    'characteristics' => [],
                ],

                'articles' => [
                    [
                        'title' => 'Web Solutions We Build',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img4.jpg'),
                        'items' => [
                            'Corporate Website',
                            'Portfolio Website ',
                            'Membership Website',
                            'E-commerce',
                            'Member Database',
                        ]
                    ],
                    [
                        'title' => 'More On Web Solutions',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img5.jpg'),
                        'items' => [
                            'Reward Points',
                            'Payment Gateway',
                            'Web Design & development',
                            'Web application Design & development',
                        ]
                    ]
                ],


            ],

            [
                'title' => 'Application integration',
                'subTitle' => 'Effortless application integration to Boost your business',
                'slug' => route('web.solutions.details', ['slug' => 'application-integration']),
                'body' => "",
                'img_featured' => Vite::imageWeb('blog-img3.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),

                'keyPoints' => [
                    "Showcase Professionalism: Instill trust with a quality design",
                    "Unique Online Presence: Differentiate yourself from competitors",
                    "Lasting Impressions: Create memorable visuals and content",
                    "Transform Ideas: Develop tailored web solutions for your vision",
                    "Drive Business Growth: Implement SEO strategies for visibility",
                    "Analytics Insights: Use data to improve engagement",
                    "Enhance Online Presence: Integrate social media for broader reach",
                    "Responsive Design: Ensure accessibility on all devices",

                ],
                'services2' => [
                    'title' => 'Integration Services',
                    'subTitle' => 'What  Services Included?',
                    'items' => [
                        [
                            'heading' => 'API Integration',
                            'body' => 'API integration streamlines processes, reduces costs, enhances security, improves customer experience, and fosters collaboration. Embrace it to unlock opportunities and drive innovation for your business success.',
                            'icon' =>  _icons('api'),
                        ],
                        [
                            'heading' => 'Data Integration',
                            'body' => 'Centralize data from diverse sources for better connectivity and consolidation. Data integration ensures accurate and accessible information for informed decisions in inventory management, marketing, and financial reporting in retail.',
                            'icon' =>  _icons('database'),
                        ],
                        [
                            'heading' => 'Cloud Integration',
                            'body' => 'Cloud integration services offer secure document storage, ensuring universal access for all employees and enabling seamless data transfer between local and cloud environments for optimized efficiency.',
                            'icon' =>  _icons('upload'),
                        ],
                        [
                            'heading' => 'E-commerce Integration',
                            'body' => 'Integrating e-commerce platforms with inventory, payroll, and CRM systems enhances online shopping and backend operations, streamlining processes and improving efficiency.',
                            'icon' =>  _icons('cart'),
                        ],
                    ]
                ],
                'articles' => [],
                'faqs' => [],
                'projects' => [],
                'characteristics' => [
                    'title' => 'We Feel Your Need',
                    'subTitle' => 'Seamless Integration Solutions',
                    'items' => [
                        [
                            'heading' => 'Boost Efficiency',
                            'body' => 'Simplify and automate intricate tasks within your business, reducing the time and effort needed for manual data entry and system switching. This frees up valuable time for your team to concentrate on strategic tasks.',
                            'icon' =>  _icons('boost'),
                        ],
                        [
                            'heading' => 'Efficient IT Management',
                            'body' => 'Benefit from a centralized control center for easier management of interconnected systems, leading to fewer technical issues, quicker problem resolution, and cost savings through streamlined operations.',
                            'icon' =>  _icons('services'),
                        ],
                        [
                            'heading' => 'Real-Time Insights',
                            'body' => 'Access real-time data and analytics from integrated systems for a comprehensive view of business operations, including sales tracking, inventory monitoring, and customer insights.',
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Scalability',
                            'body' => 'Easily accommodate higher data volumes, more users, and increased demands without major disruptions Empowers your business to evolve and meet future needs.',
                            'icon' =>  _icons('layers'),
                        ],
                        [
                            'heading' => 'Data Accuracy',
                            'body' => 'Effortlessly handle larger data volumes, more users, and growing demands with minimal disruptions. Empower your business to adapt and fulfill future requirements seamlessly.',
                            'icon' =>  _icons('database_lock'),
                        ],
                    ]
                ],
            ],
        ];

        if (!empty($slug)) {
            $filteredItems = array_filter($dataList, function ($item) use ($slug) {
                return $item['slug'] == $slug;
            });
            $firstItem = reset($filteredItems);
            return $firstItem !== false ? $firstItem : [];
        }
        return collect($dataList)->take($limit)->toArray();
    }
}
