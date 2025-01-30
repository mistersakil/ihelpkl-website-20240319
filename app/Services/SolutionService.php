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
                'subTitle' => 'Tailored Solutions for Your Business',
                'slug' => route('web.solutions.details', ['slug' => 'best-crm-software-malaysia']),
                'body' => "Discover the Power of CRM Platform",
                'short_details' => "In today's competitive business environment, choosing the right CRM system is crucial for enhancing customer relationships and driving growth. Whether you're a small startup or a large enterprise, the right CRM solution can streamline your processes, improve customer service, and boost sales efficiency.",
                'img_featured' => Vite::imageWeb('blog-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [],

                'characteristics' => [
                    'title' => 'What to Look for When Choosing',
                    'subTitle' => 'Best CRM System',
                    'shortDetails' => 'Here are some important factors to consider when choosing a CRM solution for your company',
                    'items' => [
                        [
                            'heading' => 'Customer Support',
                            'body' => 'Ensure that your CRM provider offers 24/7 support to address any issues promptly.',
                            'icon' =>  _icons('agent'),
                        ],
                        [
                            'heading' => 'Pricing',
                            'body' => 'Compare prices to find a CRM system that offers the best value for your business.',
                            'icon' =>  _icons('money'),
                        ],
                        [
                            'heading' => 'Security',
                            'body' => 'Secure your data across all chains. Protect customer information with robust security. Build trust through data compliance. Prioritize security in your multi-chain CRM',
                            'icon' =>  _icons('lock'),
                        ]
                    ]
                ],
                'services2' => [
                    'title' => 'The Best CRM Solutions in Malaysia',
                    'subTitle' => 'Features that Set Them Apart',
                    'shortDetails' => 'When considering the best CRM system for your business, look for a solution that offers',
                    'items' => [
                        [
                            'heading' => 'Customizable Features',
                            'body' => 'A CRM application that adapts to your business needs ensures you can tailor it for maximum efficiency.',
                            'icon' =>  _icons('database_gear'),
                        ],
                        [
                            'heading' => 'User-friendly Interface',
                            'body' => 'Simplicity is key in any CRM platform, ensuring that your team can easily access and manage customer data.',
                            'icon' =>  _icons('display'),
                        ],
                        [
                            'heading' => 'Automation Tools',
                            'body' => 'From lead management to follow-up reminders, a great CRM solution automates routine tasks, freeing up time for your team to focus on building relationships.',
                            'icon' =>  _icons('setting'),
                        ],
                        [
                            'heading' => 'Scalability',
                            'body' => 'As your business grows, your CRM should grow with it, accommodating more contacts and complex workflows.',
                            'icon' =>  _icons('api'),
                        ],
                    ]
                ],
                'choose2' => [
                    'title' => 'Versatile CRM Solutions',
                    'subTitle' => 'Why CRM Solutions in Malaysia Stand Out',
                    'shortDetails' => "Many businesses in Malaysia are turning to CRM tools to stay competitive in the global marketplace. The best CRM systems available are not only tailored to local business needs but also offer global integrations, ensuring smooth communication with customers around the world. Whether you need an example of a CRM tool for managing sales pipelines or are looking to evaluate different CRM solutions, there's a system for every business size and type.",
                    'imgFeatured' => Vite::imageWeb('choose-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),
            

                ],
                'imageOne' => [
                    'title' => 'Effective sales strategies',
                    'subTitle' => 'Get Started with the Best CRM Solutions in Malaysia',
                    'shortDetails' => "Investing in a CRM solution will help you track customer interactions, improve sales strategies, and enhance overall business performance. Take the time to explore different options available and find the right CRM system that suits your needs.",
                    'imgFeatured' => Vite::imageWeb('testimonial-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),
            

                ],
                'faqs' => [
                    'title' => 'Ready to take your business to the next level with CRM software in Malaysia?',
                    'subTitle' => "Learn more",
                    'items' => [
                        [
                            'heading' => 'What is the best CRM software for small businesses in Malaysia?',
                            'body' => 'The best CRM solution for small businesses in Malaysia depends on features like ease of use, automation capabilities, and scalability. Many solutions allow businesses to optimize customer interactions and sales processes, making them ideal for smaller teams looking to improve efficiency.
',
                        ],
                        [
                            'heading' => 'How can CRM systems help improve customer service in Malaysia?',
                            'body' => 'CRM systems improve customer service by centralizing customer data and interactions, allowing businesses to resolve queries faster, personalize responses, and build stronger relationships with customers. ',
                        ],
                        [
                            'heading' => 'Can you provide an example of a CRM tool used in Malaysia?',
                            'body' => 'A popular CRM tool in Malaysia integrates with local business systems, allowing companies to manage sales leads, track customer communications, and automate follow-ups. ',
                        ],
                        [
                            'heading' => 'What are the key features of a good CRM solution in Malaysia?',
                            'body' => 'A good CRM solution in Malaysia should offer customization options, an intuitive interface, automation features, and scalability. These features make it easier for businesses to track customer interactions, enhance engagement, and improve sales efficiency.',
                        ],
                        [
                            'heading' => 'Why is it important to choose the right CRM system for your business in Malaysia?',
                            'body' => 'Selecting the right CRM system helps businesses manage customer relationships effectively, improve lead tracking, and enhance sales strategies.',
                        ],
                        [
                            'heading' => 'How can CRM software samples assist in making the right choice?',
                            'body' => 'Exploring CRM software samples allows businesses to assess different features, interfaces, and pricing structures before committing to a system. ',
                        ],
                        [
                            'heading' => 'What sets CRM solutions in Malaysia apart from others?',
                            'body' => 'CRM solutions in Malaysia are designed to cater to local business needs, offering integration with regional tools and compliance with local regulations. These solutions are also scalable, ensuring they can grow alongside your business without requiring major system changes.',
                        ],
                        [
                            'heading' => 'How does a CRM system boost sales efficiency in Malaysia?',
                            'body' => 'The system enhances sales efficiency by automating tasks such as lead follow-ups and customer reminders. With real-time data and efficient workflows, sales teams can focus more on building relationships and closing deals effectively.',
                        ],
                        [
                            'heading' => 'How does CRM software improve customer data management in Malaysia?',
                            'body' => 'This software centralizes all customer data, making it easier for businesses in Malaysia to track interactions, gain insights into customer behavior, and personalize communication. This results in better decision-making and stronger customer relationships.',
                        ],
                        [
                            'heading' => 'Can CRM applications help manage social media interactions in Malaysia?',
                            'body' => 'Yes, many CRM applications in Malaysia integrate with social media platforms, allowing businesses to track and respond to customer inquiries and feedback directly through these channels. This feature improves engagement and strengthens the brand’s relationship with customers.',
                        ]
                    ]
                ],
       

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
