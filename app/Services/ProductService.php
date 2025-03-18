<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ProductService
{

    private string $modelClass = Product::class;

    /**
     * Collections of model with search and filter
     * @param array $filterOptions
     * @return mixed
     */
    public function getFilteredModels(array $filterOptions = []): mixed
    {
        @['perPage' => $perPage, 'select' => $select, 'orderBy' => $orderBy, 'orderDirection' => $orderDirection, 'searchText' => $searchText] = $filterOptions;

        return $this->modelClass::when(isset($searchText), function ($query) use ($searchText) {
            $searchText = "%$searchText%";
            return $query->where('slider_title', 'like', $searchText)
                ->orWhere('slider_body', 'like', $searchText)
                ->orWhere('slider_link', 'like', $searchText)
                ->orWhere('slider_link_text', 'like', $searchText);
        })
            ->when(isset($select), function ($query) use ($select) {
                return $query->select($select);
            })
            ->when(isset($orderBy) && isset($orderDirection), function ($query) use ($orderBy, $orderDirection) {
                return $query->orderBy($orderBy, $orderDirection);
            }, function ($query) {
                return $query->orderBy('id', 'asc');
            })
            ->when(isset($perPage), function ($query) use ($perPage) {
                return  $query->paginate($perPage);
            }, function ($query) {
                return $query->paginate(10);
            });
    }


    /**
     * Get static models
     * @return \array
     */
    public function getStaticModels(string $slug = '', int $limit = 5)
    {
        $dataList = [
            [
                'id' => 1,
                'meta_title' => 'POS System for Retail, Restaurants & SMEs in Malaysia',
                'meta_description' => 'iHelpKL offers a cloud-based POS system for Malaysian businesses. Manage sales, expenses, and inventory effortlessly. Perfect for retail stores and restaurants',
                'title' => 'Point Of Sale',
                'subTitle' => 'Optimize your business operations with iHelpKL’s cloud-based POS software',
                'slug' => route('web.products.details', ['slug' => 'cloud-pos-system-malaysia']),
                'short_details' => "Designed for Malaysian businesses, iHelpKL helps you manage sales, expenses, customers, and inventory effortlessly. Whether you run a kedai runcit, restaurant, or small enterprise, iHelpKL is the ultimate solution for your business needs.",
                'img_featured' => Vite::imageWeb('pos.png'),
                'img_thumb' => Vite::imageWeb('pos.png'),
                'keyPoints' => [
                    'Control user access and permissions for better security.',
                    'Set up workflows based on category, subcategory, and status.',
                    'Manage products, customers, sales, and expenses in one place.',
                    'Generate detailed reports to make data-driven decisions.',
                ],
                'choose1' => [
                    'title' => 'Why Choose?',
                    'subTitle' => 'Why Choose Our Omni-Channel Solution?',
                    'shortDetails' => "In today's fast-paced digital world, customers expect consistent experiences across every channel, whether they're shopping online, visiting your store, or reaching out via social media. Our omni-channel platform is designed to help you meet these expectations and stay ahead of the competition.",
                    'imgFeatured' => 'choose-img1.png',
                    'items' => [
                        [
                            'heading' => 'Unified Customer Experience',
                            'body' => 'Deliver consistent messaging and service across all touch points.',
                            'icon' =>  _icons('customer'),
                        ],
                        [
                            'heading' => 'Boost Customer Loyalty',
                            'body' => 'Create personalized interactions that keep customers coming back.',
                            'icon' =>  _icons('boost'),
                        ],
                        [
                            'heading' => 'Increase Sales',
                            'body' => "Convert more leads by meeting customers where they are.",
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Optimize Operations',
                            'body' => 'Manage all channels from one centralized platform. With our solution, you can transform your business into a holistic retail powerhouse, ensuring every customer feels valued and understood.',
                            'icon' =>  _icons('cog'),
                        ],

                    ]
                ],

                'services2' => [
                    'title' => 'Key Features',
                    'subTitle' => 'Free Key Features to Get You Started',
                    'shortDetails' => 'Our omni-channel platform offers powerful free features to help you kickstart your journey toward effortless customer engagement. These features are just the beginning. Upgrade to unlock even more advanced tools designed to take your business to the next level.',
                    'items' => [
                        [
                            'heading' => 'Multi-Channel Integration',
                            'body' => 'Connect your website, social media, and email campaigns effortlessly.',
                            'icon' =>  _icons('database'),
                        ],
                        [
                            'heading' => "Real-Time Analytics",
                            'body' => "Track customer interactions and gain actionable insights.",
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Basic CRM Tools',
                            'body' => 'Manage customer data and interactions in one place.',
                            'icon' =>  _icons('database_gear'),
                        ],
                        [
                            'heading' => '24/7 Customer Support',
                            'body' => 'Get assistance whenever you need it.',
                            'icon' =>  _icons('headset'),
                        ],

                    ]
                ],

                'characteristics' => [
                    'title' => 'Paid Key Features',
                    'subTitle' => 'Unlock Advanced Capabilities with Paid Features',
                    'shortDetails' => 'Ready to supercharge your omni-channel strategy? Our paid features are designed for businesses that want to go above and beyond. With these tools, you can create a holistic retail experience that delights customers and drives growth.',
                    'items' => [
                        [
                            'heading' => 'Omni-Channel CRM',
                            'body' => ' Gain a 360-degree view of your customers for hyper-personalized experiences.',
                            'icon' =>  _icons('clients'),
                        ],
                        [
                            'heading' => 'Cross-Channel Campaigns',
                            'body' => 'Launch synchronized marketing campaigns across all platforms.',
                            'icon' =>  _icons('business'),
                        ],
                        [
                            'heading' => 'Advanced Analytics',
                            'body' => 'Dive deeper into customer behavior and preferences.',
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Unified Commerce',
                            'body' => 'Integrate your POS, inventory, and e-commerce systems for smooth operations.',
                            'icon' =>  _icons('cart'),
                        ],
                        [
                            'heading' => 'Omni-Channel Call Center',
                            'body' => 'Provide consistent support across phone, email, chat, and social media.',
                            'icon' =>  _icons('agent'),
                        ],
                    ]
                ],

                'imageOne' => [
                    'title' => 'Why Need Omni-Channel?',
                    'subTitle' => 'Why Your Business Needs an Omni-Channel Strategy',
                    'shortDetails' => "In a world where customers interact with brands through multiple channels, an omni-channel approach is no longer optional it's essential. From multi-channel retail software to unified commerce platforms, our solution empowers you to meet these needs and thrive in today's market.",
                    'imgFeatured' => Vite::imageWeb('testimonial-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),

                ],

                'faqs' => [
                    'title' => 'FAQ',
                    'subTitle' => "Frequently Asked Questions About Omni-Channel Solutions",
                    'items' => [
                        [
                            'heading' => 'What is omni-channel marketing?',
                            'body' => 'A: Omni-channel marketing is a strategy that provides a smooth and integrated customer experience across all channels, including online, offline, and social media.',
                        ],
                        [
                            'heading' => 'How is omni-channel different from multi-channel?',
                            'body' => 'While multi-channel uses multiple platforms independently, omni-channel integrates all channels into a unified system for a consistent customer experience',
                        ],
                        [
                            'heading' => 'Can small businesses benefit from omni-channel solutions?',
                            'body' => 'Absolutely! Our platform is scalable and designed to meet the needs of businesses of all sizes.',
                        ],
                        [
                            'heading' => 'What is unified commerce?',
                            'body' => 'Unified commerce refers to the integration of all systems (e.g., POS, inventory, CRM) to provide a frictionless customer experience.',
                        ],
                        [
                            'heading' => 'How does omni-channel improve customer service?',
                            'body' => 'By integrating all communication channels (phone, email, chat, social media), you can provide consistent and efficient support, enhancing customer satisfaction.',
                        ],
                        [
                            'heading' => 'Is there a free trial available?',
                            'body' => 'Yes, you can start with our free features and upgrade to paid plans as your business grows.',
                        ],
                    ]
                ],
            ],


            [
                'id' => 2,
                'meta_title' => 'Omni-Channel Solution: Better Customer Experience for Your Business',
                'meta_description' => 'Transform your business with our omni-channel platform. Unify customer experiences, boost sales, and smooth operations. Explore free & paid features today',
                'title' => 'Omni-channel Contact Center',
                'subTitle' => 'Effortlessly Connect Every Customer Touchpoint for a Unified Experience',
                'slug' => route('web.products.details', ['slug' => 'omni-channel-marketing-platform']),
                'short_details' => "Transform your business with our omni-channel platform. Unify customer experiences, boost sales, and smooth operations. Explore free & paid features today",
                'img_featured' => Vite::imageWeb('omni-contact.jpg'),
                'img_thumb' => Vite::imageWeb('omni-contact-2.jpg'),

                'choose1' => [
                    'title' => 'Why Choose?',
                    'subTitle' => 'Why Choose Our Omni-Channel Solution?',
                    'shortDetails' => "In today's fast-paced digital world, customers expect consistent experiences across every channel, whether they're shopping online, visiting your store, or reaching out via social media. Our omni-channel platform is designed to help you meet these expectations and stay ahead of the competition.",
                    'imgFeatured' => 'choose-img1.png',
                    'items' => [
                        [
                            'heading' => 'Unified Customer Experience',
                            'body' => 'Deliver consistent messaging and service across all touch points.',
                            'icon' =>  _icons('customer'),
                        ],
                        [
                            'heading' => 'Boost Customer Loyalty',
                            'body' => 'Create personalized interactions that keep customers coming back.',
                            'icon' =>  _icons('boost'),
                        ],
                        [
                            'heading' => 'Increase Sales',
                            'body' => "Convert more leads by meeting customers where they are.",
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Optimize Operations',
                            'body' => 'Manage all channels from one centralized platform. With our solution, you can transform your business into a holistic retail powerhouse, ensuring every customer feels valued and understood.',
                            'icon' =>  _icons('cog'),
                        ],

                    ]
                ],

                'services2' => [
                    'title' => 'Key Features',
                    'subTitle' => 'Free Key Features to Get You Started',
                    'shortDetails' => 'Our omni-channel platform offers powerful free features to help you kickstart your journey toward effortless customer engagement. These features are just the beginning. Upgrade to unlock even more advanced tools designed to take your business to the next level.',
                    'items' => [
                        [
                            'heading' => 'Multi-Channel Integration',
                            'body' => 'Connect your website, social media, and email campaigns effortlessly.',
                            'icon' =>  _icons('database'),
                        ],
                        [
                            'heading' => "Real-Time Analytics",
                            'body' => "Track customer interactions and gain actionable insights.",
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Basic CRM Tools',
                            'body' => 'Manage customer data and interactions in one place.',
                            'icon' =>  _icons('database_gear'),
                        ],
                        [
                            'heading' => '24/7 Customer Support',
                            'body' => 'Get assistance whenever you need it.',
                            'icon' =>  _icons('headset'),
                        ],

                    ]
                ],

                'characteristics' => [
                    'title' => 'Paid Key Features',
                    'subTitle' => 'Unlock Advanced Capabilities with Paid Features',
                    'shortDetails' => 'Ready to supercharge your omni-channel strategy? Our paid features are designed for businesses that want to go above and beyond. With these tools, you can create a holistic retail experience that delights customers and drives growth.',
                    'items' => [
                        [
                            'heading' => 'Omni-Channel CRM',
                            'body' => ' Gain a 360-degree view of your customers for hyper-personalized experiences.',
                            'icon' =>  _icons('clients'),
                        ],
                        [
                            'heading' => 'Cross-Channel Campaigns',
                            'body' => 'Launch synchronized marketing campaigns across all platforms.',
                            'icon' =>  _icons('business'),
                        ],
                        [
                            'heading' => 'Advanced Analytics',
                            'body' => 'Dive deeper into customer behavior and preferences.',
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Unified Commerce',
                            'body' => 'Integrate your POS, inventory, and e-commerce systems for smooth operations.',
                            'icon' =>  _icons('cart'),
                        ],
                        [
                            'heading' => 'Omni-Channel Call Center',
                            'body' => 'Provide consistent support across phone, email, chat, and social media.',
                            'icon' =>  _icons('agent'),
                        ],
                    ]
                ],

                'imageOne' => [
                    'title' => 'Why Need Omni-Channel?',
                    'subTitle' => 'Why Your Business Needs an Omni-Channel Strategy',
                    'shortDetails' => "In a world where customers interact with brands through multiple channels, an omni-channel approach is no longer optional it's essential. From multi-channel retail software to unified commerce platforms, our solution empowers you to meet these needs and thrive in today's market.",
                    'imgFeatured' => Vite::imageWeb('testimonial-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),

                ],

                'faqs' => [
                    'title' => 'FAQ',
                    'subTitle' => "Frequently Asked Questions About Omni-Channel Solutions",
                    'items' => [
                        [
                            'heading' => 'What is omni-channel marketing?',
                            'body' => 'A: Omni-channel marketing is a strategy that provides a smooth and integrated customer experience across all channels, including online, offline, and social media.',
                        ],
                        [
                            'heading' => 'How is omni-channel different from multi-channel?',
                            'body' => 'While multi-channel uses multiple platforms independently, omni-channel integrates all channels into a unified system for a consistent customer experience',
                        ],
                        [
                            'heading' => 'Can small businesses benefit from omni-channel solutions?',
                            'body' => 'Absolutely! Our platform is scalable and designed to meet the needs of businesses of all sizes.',
                        ],
                        [
                            'heading' => 'What is unified commerce?',
                            'body' => 'Unified commerce refers to the integration of all systems (e.g., POS, inventory, CRM) to provide a frictionless customer experience.',
                        ],
                        [
                            'heading' => 'How does omni-channel improve customer service?',
                            'body' => 'By integrating all communication channels (phone, email, chat, social media), you can provide consistent and efficient support, enhancing customer satisfaction.',
                        ],
                        [
                            'heading' => 'Is there a free trial available?',
                            'body' => 'Yes, you can start with our free features and upgrade to paid plans as your business grows.',
                        ],
                    ]
                ],

            ],


            [
                'id' => 3,
                'meta_title' => 'Task Management',
                'meta_description' => 'The ultimate solution for task refinement and process improvement',
                'title' => 'Task Management',
                'subTitle' => 'The ultimate solution for task refinement and process improvement',
                'slug' => route('web.products.details', ['slug' => 'task-management']),
                'body' => "",
                'img_featured' => Vite::imageWeb('task-management.png'),
                'img_thumb' => Vite::imageWeb('task-management.png'),
                'keyPoints' => [
                    'Align work with company objectives',
                    'Automate processes across all departments',
                    'Track progress and eliminate bottlenecks',
                    'Enhance and regulate work order processes',
                    'Automatically schedule job reminders and alerts',
                    'Gather performance insights and reports',
                ],

                'projects' => [
                    'title' => 'Projects',
                    'subTitle' => 'Our recent projects',
                    'items' => [
                        [
                            'heading' => '',
                            'body' => 'AI-driven automated service management (AISM) capabilities allow for quicker, more accurate, and efficient delivery of service innovations',
                            'img' =>  Vite::imageWeb('task-management-thumb-1.png'),
                        ],
                        [
                            'heading' => '',
                            'body' => 'Incoming calls, emails, and tickets can be automatically managed from a single platform',
                            'img' =>  Vite::imageWeb('task-management-thumb-2.png'),
                        ],
                        [
                            'heading' => '',
                            'body' => 'Simplify priorities with clear project alignment to strategic goals, manage multiple projects efficiently, and speed up progress with enhanced stakeholder visibility',
                            'img' =>  Vite::imageWeb('task-management-thumb-3.png'),
                        ]
                    ]
                ],

                'characteristics' => [
                    'title' => 'Unified Success',
                    'subTitle' => 'Key Features',
                    'items' => [
                        [
                            'heading' => 'Plan',
                            'body' => 'organize, and collaborate on any company objective using customizable task management tools tailored to meet diverse needs at every level',
                            'icon' =>  _icons('plan'),
                        ],
                        [
                            'heading' => 'Docs',
                            'body' => 'Outline business cases, define project scope, and document requirements to ensure everyone has the necessary information to keep work progressing smoothly',
                            'icon' =>  _icons('docs'),
                        ],
                        [
                            'heading' => 'Relationships',
                            'body' => 'Connect tasks, documents, integrations, and more to access related resources and tasks in a centralized location',
                            'icon' =>  _icons('relationship'),
                        ],
                        [
                            'heading' => 'In-Depth Report Generation',
                            'body' => 'Effortlessly generate reports on ticket progress, team performance, and issues using the reporting feature',
                            'icon' =>  _icons('reports'),
                        ],
                        [
                            'heading' => 'More focused on accountability',
                            'body' => 'Monitor changes to ensure transparency and accountability',
                            'icon' =>  _icons('focus'),
                        ],
                        [
                            'heading' => 'Team Management & Assignment',
                            'body' => 'Save time and skip meetings with digital job scheduling, ensuring each job includes all the necessary information',
                            'icon' =>  _icons('users'),
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
                        'title' => 'Benefits',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img4.jpg'),
                        'items' => [
                            'Adjusting Timeliness',
                            'Breaking down project ',
                            'Track dependencies',
                            'Archiving complete task',
                            'Seeing history across all changes',
                            'Custom filters',
                        ]
                    ],
                    [
                        'title' => 'Advantages',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img5.jpg'),
                        'items' => [
                            'Manage team',
                            'Auto-scheduling',
                            'Auto Notification',
                            'Easily get access to your customers history and job records',
                            'Client relationship maintaining via email, sms notification',
                            'Lead Management',


                        ]
                    ]
                ]

            ],

            [
                'id' => 4,
                'meta_title' => 'Complain Management System',
                'meta_description' => 'All-in-one solution for help desk and customer service operation',
                'title' => 'Complain Management System',
                'subTitle' => 'All-in-one solution for help desk and customer service operations',
                'slug' => route('web.products.details', ['slug' => 'complain-management']),
                'body' => "",
                'img_featured' => Vite::imageWeb('ticket.png'),
                'img_thumb' => Vite::imageWeb('ticket.png'),
                'keyPoints' => [
                    'Unified platform for managing all customer support interactions',
                    'Streamlined workflows to enhance efficiency and response times',
                    'Centralized knowledge base for easy information access',
                    'Automated ticketing system to track and prioritize customer inquiries',
                    'Integrations with other business tools for seamless workflows',
                    'Reporting and analytics to measure performance and identify trends',
                    'Scalable solution to meet growing customer needs',
                    'Customer satisfaction metrics to assess customer happiness',
                    '24/7 support for technical assistance and troubleshooting',
                    'Customization options to tailor the software to specific requirements',
                ],

                'projects' => [
                    'title' => 'Projects',
                    'subTitle' => 'Our recent projects',
                    'items' => [
                        [
                            'heading' => 'Simplified SLA Oversight',
                            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magni, Lorem ipsum dolor, Lorem ipsum dolor',
                            'img' =>  Vite::imageWeb('ticket-thumb-1.png'),
                        ],
                        [
                            'heading' => 'Automated Task Assignment',
                            'body' => 'Let the system automatically delegate customer tickets to your team. Enhance efficiency with full end-to-end visibility',
                            'img' =>  Vite::imageWeb('ticket-thumb-2.png'),
                        ],
                        [
                            'heading' => 'Automated Ticket Notifications',
                            'body' => 'Receive instant alerts for active, unresponsive, or automatically completed tickets',
                            'img' =>  Vite::imageWeb('ticket-thumb-3.png'),
                        ]
                    ]
                ],
                'characteristics' => [
                    'title' => 'How we feel',
                    'subTitle' => 'Unified Success',
                    'items' => [
                        [
                            'heading' => 'Ticket Tracking and Prioritization',
                            'body' => 'Assess the urgency of each ticket to determine its priority, and assign it to the appropriate agents for efficient resolution',
                            'icon' =>  _icons('tracking'),
                        ],
                        [
                            'heading' => 'Email and Phone Management',
                            'body' => 'Record each customers email and phone number on the ticket for real-time tracking and efficient communication',
                            'icon' =>  _icons('email'),
                        ],
                        [
                            'heading' => 'Agent and Team Management',
                            'body' => 'Clearly define the responsibilities of each team and agent to ensure that incoming tickets are directed to the appropriate agent for prompt resolution',
                            'icon' =>  _icons('users'),
                        ],
                        [
                            'heading' => 'Ticket Portal',
                            'body' => 'Simplify the ticket submission process for your customers and enable them to track the progress of their tickets effortlessly',
                            'icon' =>  _icons('portal'),
                        ],
                        [
                            'heading' => 'Live Chat Support',
                            'body' => 'Deliver exceptional customer service through direct interactions between the admin and the customer, ensuring immediate assistance and support',
                            'icon' =>  _icons('live_chat'),
                        ],
                        [
                            'heading' => 'In-Depth Report Generation',
                            'body' => 'Effortlessly generate reports on ticket progress, team performance, and issues using the reporting feature',
                            'icon' =>  _icons('reports'),
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
                        'title' => 'Benefits',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img4.jpg'),
                        'items' => [
                            'Automated Ticket Assignment: Automatically route tickets to the appropriate agent or team',
                            'Priority Levels: Assign priority to tickets based on urgency and importance',
                            'SLA Management: Monitor and enforce service level agreements for timely resolution',
                            'Real-Time Notifications: Receive alerts for new, overdue, or resolved tickets',
                            'Customizable Workflows: Tailor ticket workflows to match your business processes',
                            'Multi-Channel Support: Handle tickets from various channels like email, phone, and chat',
                            'Knowledge Base Integration: Access and link relevant articles directly within tickets',
                            'Reporting & Analytics: Track performance metrics, resolution times, and trends',

                        ]
                    ],
                    [
                        'title' => 'Advantages',
                        'subTitle' => "Learn more",
                        'img' => Vite::imageWeb('project-img5.jpg'),
                        'items' => [

                            'Collaborative Tools: Enable team collaboration on complex tickets with internal notes and comments',
                            'Customer Portal: Allow customers to submit and track tickets through a dedicated portal',
                            'Ticket Status Tracking: Monitor the progress and current status of each ticket',
                            'Historical Records: Maintain a log of all interactions and actions taken on each ticket',
                            'Custom Fields: Add specific fields to capture relevant information unique to your organization',
                            'Escalation Rules: Automatically escalate tickets that are unresolved within a certain time frame',
                            'Integrations: Connect with other tools like CRM, project management, or communication platforms',

                        ]
                    ]
                ]

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
