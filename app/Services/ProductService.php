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
                'subTitle' => "Optimize your business operations with iHelpKL's cloud-based POS software",
                'slug' => route('web.products.details', ['slug' => 'cloud-pos-system-malaysia']),
                'short_details' => "Designed for Malaysian businesses, iHelpKL helps you manage sales, expenses, customers, and inventory effortlessly. Whether you run a kedai runcit, restaurant, or small enterprise, iHelpKL is the ultimate solution for your business needs.",
                'img_featured' => Vite::imageWeb('pos.png'),
                'img_featured_alt' => "",

                'keyPoints' => [
                    'Control user access and permissions for better security.',
                    'Set up workflows based on category, subcategory, and status.',
                    'Manage products, customers, sales, and expenses in one place.',
                    'Generate detailed reports to make data-driven decisions.',
                ],
                'choose1' => [
                    'title' => 'Grow & Succeed!',
                    'subTitle' => 'Benefits of iHelpKL',
                    'shortDetails' => "",
                    'imgFeatured' => 'choose-img1.png',
                    'items' => [
                        [
                            'heading' => 'Boost Efficiency',
                            'body' => "Automate your sales, inventory, and expense management with iHelpKL's cloud-based POS system. Save time and focus on growing your business.",
                            'icon' =>  _icons('boost'),
                        ],
                        [
                            'heading' => 'Enhance Customer Experience',
                            'body' => "Use iHelpKL's customer management tools to build stronger relationships and improve customer satisfaction.",
                            'icon' =>  _icons('customer'),
                        ],
                        [
                            'heading' => 'Make Smarter Decisions',
                            'body' => "With advanced reporting tools, gain valuable insights into your business performance and make data-driven decisions.",
                            'icon' =>  _icons('robot'),
                        ],
                        [
                            'heading' => 'Stay Competitive',
                            'body' => 'From payment terminal integration to self-service kiosks, iHelpKL equips your business with the latest technology to stay ahead of the competition.',
                            'icon' =>  _icons('car'),
                        ],

                    ]
                ],

                'services2' => [
                    'title' => 'Key Features',
                    'subTitle' => "Get Started with iHelpKL's Free Features",
                    'shortDetails' => '',
                    'items' => [
                        [
                            'heading' => 'Basic POS System',
                            'body' => 'Add, edit, and manage your products easily. Perfect for kedai runcit and small businesses.',
                            'icon' =>  _icons('database'),
                        ],
                        [
                            'heading' => "Customer Management",
                            'body' => "Store and manage customer information for better engagement.",
                            'icon' =>  _icons('customer2'),
                        ],
                        [
                            'heading' => 'Sales Tracking',
                            'body' => 'Track your sales and monitor performance in real-time.',
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Expense Management',
                            'body' => 'Keep track of your business expenses effortlessly.',
                            'icon' =>  _icons('money'),
                        ],
                        [
                            'heading' => 'Basic Reporting',
                            'body' => 'Generate simple reports to understand your business performance.',
                            'icon' =>  _icons('reports'),
                        ],
                        [
                            'heading' => 'Cloud-Based Access',
                            'body' => 'Use iHelpKL from anywhere, anytime, with our cloud-based system.',
                            'icon' =>  _icons('upload'),
                        ],

                    ]
                ],

                'characteristics' => [
                    'title' => 'Paid Key Features',
                    'subTitle' => 'Unlock the Full Potential of iHelpKL Paid Features',
                    'shortDetails' => '',
                    'items' => [
                        [
                            'heading' => "Cloud-Based POS System",
                            'body' => "Real-time sales tracking and inventory management for retail stores and restaurants.",
                            'icon' =>  _icons('clients'),
                        ],
                        [
                            'heading' => "Payment Terminal Integration",
                            'body' => "Accept payments securely with integrated payment terminals.",
                            'icon' =>  _icons('business'),
                        ],
                        [
                            'heading' => "Self-Service Kiosk Support",
                            'body' => "Enable self-service options for faster customer transactions.",
                            'icon' =>  _icons('business'),
                        ],
                        [
                            'heading' => "Advanced Access Role Permission",
                            'body' => "Assign specific roles and permissions to your team for better control.",
                            'icon' =>  _icons('business'),
                        ],
                        [
                            'heading' => "Custom Business Logic",
                            'body' => "Set up workflows based on category, subcategory, and status to match your business needs.",
                            'icon' =>  _icons('business'),
                        ],
                        [
                            'heading' => "Detailed Reporting Tools",
                            'body' => "Access advanced reports for sales, expenses, and customer insights.",
                            'icon' =>  _icons('business'),
                        ],
                    ]
                ],

                'imageOne' => [
                    'title' => 'Why iHelpKL?',
                    'subTitle' => 'Why Choose iHelpKL?',
                    'shortDetails' => "<p><strong>Tailored for Malaysian Businesses:</strong> iHelpKL is designed specifically for Malaysian SMEs, retail stores, and restaurants. Whether you run a kedai runcit or a restaurant, iHelpKL adapts to your unique business needs.</p>" . "<p><strong>Affordable and Scalable:</strong>  Start with our free plan and upgrade as your business grows. iHelpKL offers flexible pricing to suit businesses of all sizes.</p>" . "<p><strong>User-Friendly and Reliable: </strong> With an intuitive interface and cloud-based technology, iHelpKL is easy to use and accessible from anywhere. Plus, our dedicated support team is always here to help.</p>",
                    'imgFeatured' => Vite::imageWeb('testimonial-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),

                ],

                'faqs' => [
                    'title' => 'FAQ',
                    'subTitle' => "Frequently Asked Questions About Omni-Channel Solutions",
                    'items' => [
                        [
                            'heading' => "What is iHelpKL?",
                            'body' => "iHelpKL is a cloud-based POS and business management system designed for Malaysian businesses, including retail stores, restaurants, and SMEs. It simplifies sales, expense tracking, and customer management.",
                        ],
                        [
                            'heading' => "Can I use iHelpKL for my kedai runcit (retail store)?",
                            'body' => "Yes! iHelpKL is perfect for retail stores, restaurants, and small businesses. It supports product management, sales tracking, and expense management tailored to your needs.",
                        ],
                        [
                            'heading' => "Does iHelpKL support online payments?",
                            'body' => "Yes, iHelpKL integrates with payment terminals and supports secure payment processing for effortless transactions.",
                        ],
                        [
                            'heading' => "Is there a free version of iHelpKL?",
                            'body' => "Yes, iHelpKL offers a free plan with basic features. For advanced functionality, you can upgrade to a paid plan.",
                        ],
                        [
                            'heading' => "Can I use iHelpKL as an online POS system for my restaurant?",
                            'body' => "Absolutely! iHelpKL supports online POS systems for restaurants and retail stores, making it easy to manage orders and payments.",
                        ],
                        [
                            'heading' => "Does iHelpKL work for self-service kiosks?",
                            'body' => "Yes, iHelpKL supports self-service kiosks, enabling faster and more efficient customer transactions.",
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
                'img_featured' => Vite::imageWeb('omni-contact.png'),
                'img_featured_alt' => "",

                'choose1' => [
                    'title' => 'Why Choose?',
                    'subTitle' => 'Why Choose Our Omni-Channel Solution?',
                    'shortDetails' => "In today's fast-paced digital world, customers expect consistent experiences across every channel, whether they're shopping online, visiting your store, or reaching out via social media. Our omni-channel platform is designed to help you meet these expectations and stay ahead of the competition.",
                    'imgFeatured' => 'omni-contact-why-choose.png',
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
                    'serviceAreaBgDynamic' => 'omni-contact-key-features.jpg',
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
                    'shortDetails' => "<p>In a world where customers interact with brands through multiple channels, an omni-channel approach is no longer optional it's essential. Here's why:</p>" . "<p><strong>Customer Expectations:</strong> Modern shoppers demand frictionless experiences, whether they're online or in-store.</p>" . "<p><strong>Competitive Edge:</strong>  Stand out by offering a unified, personalized journey across all touchpoints.</p>" . "<p><strong>Increased Revenue:</strong>  Businesses with strong omni-channel strategies see higher customer retention and sales.</p>" . "<p><strong>Efficient Operations:</strong>  Simplify your processes with integrated tools that save time and resources.</p>",
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
                'meta_title' => 'Project & Task Management Software for Malaysian Businesses',
                'meta_description' => "Optimize workflows with iHelpKL's Project and Task Management Software. Kanban Boards, Gantt Charts, Collaboration Tools & more for Malaysian Teams!",
                'title' => "Task Management",
                'subTitle' => 'Best Project Management Software in Malaysia | iHelpKL',
                'slug' => route('web.products.details', ['slug' => 'project-task-management-software']),
                'short_details' => "Struggling to keep up with tasks, deadlines, projects, and team collaboration? iHelpKL is here to transform the way you work. As Malaysia's leading Project Management Software, we offer a suite of tools designed to simplify task management, enhance team collaboration, and boost productivity. From Kanban Boards to Gantt Charts, iHelpKL has everything you need to stay organized and efficient",
                'img_featured' => Vite::imageWeb('task-management.png'),
                'img_featured_alt' => "Kanban Boards in iHelpKL Project Management Software Malaysia",

                'keyPoints' => [],

                'choose1' => [
                    'title' => 'Why Choose?',
                    'subTitle' => 'Why Choose iHelpKL?',
                    'shortDetails' => "iHelpKL isn't just another Task Management Software—it's a complete solution designed for Malaysian businesses. Here's why we stand out",
                    'imgFeatured' => 'choose-img1.png',
                    'items' => [
                        [
                            'heading' => 'All-in-One Platform',
                            'body' => 'Combines Kanban Boards, Gantt Charts, and Collaboration Tools in one place.',
                            'icon' =>  _icons('tools'),
                        ],
                        [
                            'heading' => 'User-Friendly Interface',
                            'body' => 'Easy to use, even for non-tech-savvy users.',
                            'icon' =>  _icons('tv'),
                        ],
                        [
                            'heading' => 'Customizable Workflows',
                            'body' => "Adapt the system to fit your unique needs.",
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Localized Support',
                            'body' => 'Dedicated customer service for Malaysian users.',
                            'icon' =>  _icons('flag'),
                        ],

                    ]
                ],

                'services2' => [
                    'title' => 'Key Features',
                    'subTitle' => 'Organize Your Workflow with Free Tools',
                    'shortDetails' => '',
                    'items' => [
                        [
                            'heading' => "Kanban Boards",
                            'body' => "Visualize and manage tasks effortlessly for better project tracking.",
                            'icon' =>  _icons('products'),
                        ],
                        [
                            'heading' => "To-Do List Apps",
                            'body' => "Track customer interactions and gain actionable insights.",
                            'icon' =>  _icons('list'),
                        ],
                        [
                            'heading' => "Basic Collaboration Tools",
                            'body' => "Share files, assign tasks, and communicate in real-time.",
                            'icon' =>  _icons('tools'),
                        ],
                        [
                            'heading' => "Task Management System",
                            'body' => "Organize, prioritize, and track tasks to boost productivity.",
                            'icon' =>  _icons('edit'),
                        ],

                    ]
                ],

                'characteristics' => [
                    'title' => 'Paid Key Features',
                    'subTitle' => 'Access Advanced Features for Project Management',
                    'shortDetails' => '',
                    'items' => [
                        [
                            'heading' => 'Advanced Gantt Chart Software',
                            'body' => 'Plan, schedule, and monitor projects with precision.',
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Time Management Software',
                            'body' => 'Track time spent on tasks and optimize team efficiency.',
                            'icon' =>  _icons('activity_log'),
                        ],
                        [
                            'heading' => 'Enhanced Collaboration Tools',
                            'body' => 'Foster teamwork with advanced communication and file-sharing features.',
                            'icon' =>  _icons('tools'),
                        ],
                        [
                            'heading' => 'Customizable Dashboards',
                            'body' => 'Tailor your workspace to suit your unique project needs.',
                            'icon' =>  _icons('cog'),
                        ],
                        [
                            'heading' => 'Analytics & Reporting',
                            'body' => 'Gain actionable insights into project performance and team productivity.',
                            'icon' =>  _icons('reports'),
                        ],
                    ]
                ],

                'imageOne' => [
                    'title' => 'Benefits of iHelpKL',
                    'subTitle' => 'Transform Your Workflow with iHelpKL',
                    'shortDetails' => "<p><strong>Optimize Task Management:</strong> Stay on top of tasks with Task Management Software.</p>" . "<p><strong>Enhance Team Collaboration:</strong> Use Collaboration Tools to keep everyone aligned.</p>" . "<p><strong>Save Time:</strong>  Automate repetitive tasks and focus on what matters.</p>" . "<p><strong>Improve Project Visibility:</strong> Track progress with Kanban Boards and Gantt Charts.</p>" . "<p><strong>Boost Productivity:</strong> Achieve more with Time Management Software and Productivity Tools.</p>",
                    'imgFeatured' => Vite::imageWeb('testimonial-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),

                ],

                'faqs' => [
                    'title' => 'FAQ',
                    'subTitle' => "Task Management FAQ's",
                    'items' => [
                        [
                            'heading' => "Is iHelpKL suitable for small teams?",
                            'body' => "Yes! iHelpKL is perfect for teams of all sizes, from startups to large enterprises."
                        ],
                        [
                            'heading' => "Can I use iHelpKL for personal task management?",
                            'body' => "Absolutely! Our To-Do List Apps and Time Management Software are great for personal use."
                        ],
                        [
                            'heading' => " Does iHelpKL integrate with other tools?",
                            'body' => "Yes, iHelpKL seamlessly integrates with popular productivity and collaboration tools."
                        ],
                        [
                            'heading' => "Is there a free trial available?",
                            'body' => "Yes, you can explore our free features or sign up for a premium trial."
                        ],
                        [
                            'heading' => "Is my data secure with iHelpKL?",
                            'body' => "We prioritize data security and use advanced encryption to protect your information."
                        ],
                        [
                            'heading' => "Is iHelpKL available in Bahasa Malaysia?",
                            'body' => " Yes, we offer localized support and language options for Malaysian users."
                        ],

                    ]
                ]

            ],

            [
                'id' => 4,
                'meta_title' => 'Optimize Complaint Management for Malaysian Businesses',
                'meta_description' => 'iHelpKL offers advanced Complaint Management tools like Ticketing Systems, CRM, and VoC Platforms to enhance customer support and satisfaction',
                'title' => 'Complain Management System',
                'subTitle' => "Transform Complaint Management with iHelpKL's All-in-One Solutions",
                'slug' => route('web.products.details', ['slug' => 'complaint-management-software']),
                'short_details' => "iHelpKL offers a comprehensive suite of tools, including Complaint Management, Ticketing Systems, Customer Experience Management (CEM), and CRM, designed to optimize operations, enhance customer satisfaction, and drive growth. Whether you're managing customer queries, service requests, or feedback, iHelpKL has you covered.",
                'img_featured' => Vite::imageWeb('ticket.png'),
                'img_featured_alt' => "iHelpKL's Complaint Management Dashboard for Malaysian Businesses",

                'keyPoints' => [],


                'choose1' => [
                    'title' => 'Why Choose?',
                    'subTitle' => 'Why Choose iHelpKL?',
                    'shortDetails' => "iHelpKL is the perfect choice for Malaysian businesses looking for a scalable, user-friendly, and data-driven solution to manage Complaint Management and operations. The Ultimate Solution for Complaint Management in Malaysian Businesses",
                    'imgFeatured' => 'choose-img1.png',
                    'items' => [
                        [
                            'heading' => 'All-in-One Platform',
                            'body' => 'Combines CRM, Help Desk Software, and Customer Experience Management (CEM) for effective complaint handling.',
                            'icon' =>  _icons('robot'),
                        ],
                        [
                            'heading' => 'Scalable Solutions',
                            'body' => 'Grow your business without worrying about outgrowing your tools.',
                            'icon' =>  _icons('services'),
                        ],
                        [
                            'heading' => 'Data-Driven Insights',
                            'body' => "Make smarter decisions with real-time analytics and reporting on complaint trends.",
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Localized Support',
                            'body' => 'Designed for Malaysian businesses with dedicated customer service.',
                            'icon' =>  _icons('flag'),
                        ],

                    ]
                ],

                'services2' => [
                    'title' => 'Key Features',
                    'subTitle' => 'Get Started with Our Free Tools',
                    'shortDetails' => 'Start with our free tools to handle customer queries, feedback, and complaints efficiently. Perfect for small businesses or those new to Complaint Management Software',
                    'items' => [
                        [
                            'heading' => "Basic Ticketing System",
                            'body' => "Effortlessly track and manage customer queries and complaints.",
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => "Help Desk Software",
                            'body' => "Provide quick and efficient support to resolve customer issues.",
                            'icon' =>  _icons('info'),
                        ],
                        [
                            'heading' => "Customer Feedback Management System",
                            'body' => "Collect and analyze feedback to improve Complaint Management.",
                            'icon' =>  _icons('tools'),
                        ],
                        [
                            'heading' => "Issue Tracking System (ITS)",
                            'body' => "Monitor and resolve complaints with ease.",
                            'icon' =>  _icons('question'),
                        ],
                        [
                            'heading' => "Basic CRM",
                            'body' => "Manage customer interactions and complaints effectively.",
                            'icon' =>  _icons('lead'),
                        ],

                    ]
                ],

                'characteristics' => [
                    'title' => 'Paid Features Section',
                    'subTitle' => 'Upgrade to Advanced Features of Complaint Management',
                    'shortDetails' => 'Unlock advanced tools like CMS, VoC Platform, and QMS to streamline Complaint Management, improve customer satisfaction, and ensure compliance',
                    'items' => [
                        [
                            'heading' => 'Advanced Ticketing System',
                            'body' => ' Automate workflows and prioritize tasks for faster complaint resolution.',
                            'icon' =>  _icons('realtime'),
                        ],
                        [
                            'heading' => 'Case Management System (CMS)',
                            'body' => 'Organize and resolve complex complaints efficiently.',
                            'icon' =>  _icons('activity_log'),
                        ],
                        [
                            'heading' => 'Voice of the Customer (VoC) Platform',
                            'body' => 'Gain deep insights into customer complaints and preferences.',
                            'icon' =>  _icons('speaker'),
                        ],
                        [
                            'heading' => 'Quality Management System (QMS)',
                            'body' => ' Ensure high-quality complaint resolution and compliance.',
                            'icon' =>  _icons('testimonials'),
                        ],
                        [
                            'heading' => 'Grievance Redressal System (GRS)',
                            'body' => ' Address and resolve customer grievances effectively.',
                            'icon' =>  _icons('speedometer'),
                        ],
                        [
                            'heading' => 'Service Request Management System (SRMS)',
                            'body' => 'Handle service requests and complaints smoothly.',
                            'icon' =>  _icons('services'),
                        ],
                        [
                            'heading' => 'Resolution Management System (RMS)',
                            'body' => 'Track and ensure timely complaint resolution.',
                            'icon' =>  _icons('portal'),
                        ],
                    ]
                ],

                'imageOne' => [
                    'title' => 'Benefits of iHelpKL',
                    'subTitle' => 'Why iHelpKL is the Best Choice for Complaint Management',
                    'shortDetails' => "<p>From boosting efficiency to enhancing customer satisfaction, iHelpKL helps businesses save time, reduce costs, and scale confidently in Complaint Management.</p>" . "<p><strong>Boost Efficiency:</strong>  Automate repetitive tasks and enhance workflows to resolve complaints faster.</p>" . "<p><strong>Enhance Customer Satisfaction:</strong> Deliver personalized and timely support to keep customers happy.</p>" . "<p><strong>Improve Team Collaboration:</strong> Keep your team aligned and productive with collaborative tools for complaint resolution.</p>" . "<p><strong>Save Time and Costs:</strong> Reduce manual effort and operational expenses with automated Complaint Management Systems.</p>" . "<p><strong>Scale with Confidence:</strong> Handle growing customer complaints effortlessly with scalable solutions.</p>",
                    'imgFeatured' => Vite::imageWeb('testimonial-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),

                ],

                'faqs' => [
                    'title' => 'FAQ',
                    'subTitle' => "Complaint Management FAQ's",
                    'items' => [
                        [
                            'heading' => "Is iHelpKL suitable for small businesses handling complaints?",
                            'body' => "Absolutely! iHelpKL is designed for businesses of all sizes, from startups to enterprises."
                        ],
                        [
                            'heading' => "Can I try iHelpKL’s Complaint Management tools before purchasing?",
                            'body' => "Yes, we offer free features and a trial of our premium plans."
                        ],
                        [
                            'heading' => "Does iHelpKL integrate with other tools for complaint tracking?",
                            'body' => "Yes, iHelpKL effortlessly integrates with popular productivity and collaboration tools."
                        ],
                        [
                            'heading' => "Is iHelpKL available in Bahasa Malaysia for local businesses?",
                            'body' => "Yes, we offer localized support and language options for Malaysian users."
                        ],
                        [
                            'heading' => "What industries can benefit from iHelpKL’s Complaint Management System?",
                            'body' => "iHelpKL is versatile and suitable for industries like retail, IT, healthcare, education, and more."
                        ],
                    ]
                ],

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
