<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'slug' => 'branding',
                'title' => ['en' => 'Branding & Creative Design', 'ar' => 'العلامة التجارية والتصميم الإبداعي'],
                'subtitle' => ['en' => 'Build a Memorable Brand Identity', 'ar' => 'بناء هوية علامة تجارية لا تُنسى'],
                'icon_class' => 'fas fa-paint-brush',
                'description' => [
                    'en' => 'Create a powerful brand identity that resonates with your audience. From logo design to complete brand guidelines, we help you stand out in the market.',
                    'ar' => 'أنشئ هوية علامة تجارية قوية تلقى صدى لدى جمهورك. من تصميم الشعار إلى أدلة العلامة التجارية الكاملة، نساعدك على التميز في السوق.'
                ],
                'features' => [
                    [
                        'title' => ['en' => 'Logo Design', 'ar' => 'تصميم الشعار'],
                        'desc' => ['en' => 'Unique and memorable logos that represent your brand identity.', 'ar' => 'شعارات فريدة ولا تُنسى تمثل هوية علامتك التجارية.'],
                        'icon' => 'fas fa-palette'
                    ],
                    [
                        'title' => ['en' => 'Brand Guidelines', 'ar' => 'أدلة العلامة التجارية'],
                        'desc' => ['en' => 'Comprehensive brand books with colors, typography, and usage rules.', 'ar' => 'كتب علامة تجارية شاملة تشمل الألوان والخطوط وقواعد الاستخدام.'],
                        'icon' => 'fas fa-book'
                    ],
                    [
                        'title' => ['en' => 'Visual Identity', 'ar' => 'الهوية البصرية'],
                        'desc' => ['en' => 'Complete visual systems including business cards, letterheads, and more.', 'ar' => 'أنظمة بصرية كاملة تشمل بطاقات العمل والقرطاسية والمزيد.'],
                        'icon' => 'fas fa-fingerprint'
                    ],
                    [
                        'title' => ['en' => 'Marketing Materials', 'ar' => 'المواد التسويقية'],
                        'desc' => ['en' => 'Brochures, flyers, social media graphics, and promotional materials.', 'ar' => 'البروشورات، النشرات الإعلانية، رسومات وسائل التواصل الاجتماعي، والمواد الترويجية.'],
                        'icon' => 'fas fa-bullhorn'
                    ]
                ],
                'process' => [
                    [
                        'title' => ['en' => 'Research', 'ar' => 'البحث'],
                        'desc' => ['en' => 'Understanding your brand.', 'ar' => 'فهم علامتك التجارية.'],
                        'step' => 1
                    ],
                    [
                        'title' => ['en' => 'Concept', 'ar' => 'المفهوم'],
                        'desc' => ['en' => 'Creative ideation.', 'ar' => 'التفكير الإبداعي.'],
                        'step' => 2
                    ],
                    [
                        'title' => ['en' => 'Design', 'ar' => 'التصميم'],
                        'desc' => ['en' => 'Visual execution.', 'ar' => 'التنفيذ البصري.'],
                        'step' => 3
                    ],
                    [
                        'title' => ['en' => 'Deliver', 'ar' => 'التسليم'],
                        'desc' => ['en' => 'Final brand assets.', 'ar' => 'أصول العلامة التجارية النهائية.'],
                        'step' => 4
                    ]
                ],
                'order' => 1
            ],
            [
                'slug' => 'web-design',
                'title' => ['en' => 'Web Design & Development', 'ar' => 'تصميم وتطوير المواقع'],
                'subtitle' => ['en' => 'Professional Web Design & Development Services', 'ar' => 'خدمات تصميم وتطوير مواقع احترافية'],
                'icon_class' => 'fas fa-desktop',
                'description' => [
                    'en' => 'Transform your digital presence with our comprehensive web design and development solutions. We create modern, responsive, and user-friendly websites that drive results and engage your audience.',
                    'ar' => 'طور وجودك الرقمي مع حلولنا الشاملة لتصميم وتطوير المواقع. نصمم مواقع حديثة، متجاوبة، وسهلة الاستخدام تحقق النتائج وتجذب جمهورك.'
                ],
                'features' => [
                    [
                        'title' => ['en' => 'Responsive Design', 'ar' => 'تصميم متجاوب'],
                        'desc' => ['en' => 'Mobile-first approach ensuring your website looks perfect on all devices.', 'ar' => 'نهج يركز على الجوال لضمان ظهور موقعك بشكل مثالي على جميع الأجهزة.'],
                        'icon' => 'fas fa-mobile-alt'
                    ],
                    [
                        'title' => ['en' => 'Custom Development', 'ar' => 'تطوير مخصص'],
                        'desc' => ['en' => 'Tailored solutions built specifically for your business needs.', 'ar' => 'حلول مصممة خصيصاً لتلبية احتياجات عملك الفريدة.'],
                        'icon' => 'fas fa-code'
                    ],
                    [
                        'title' => ['en' => 'SEO Optimization', 'ar' => 'تحسين محركات البحث'],
                        'desc' => ['en' => 'Built-in SEO features to improve your search engine rankings.', 'ar' => 'ميزات SEO مدمجة لتحسين ترتيب موقعك في محركات البحث.'],
                        'icon' => 'fas fa-search'
                    ],
                    [
                        'title' => ['en' => 'Fast Loading', 'ar' => 'سرعة التحميل'],
                        'desc' => ['en' => 'Optimized performance for better user experience and conversions.', 'ar' => 'أداء محسن لتقديم تجربة مستخدم أفضل وزيادة التحويلات.'],
                        'icon' => 'fas fa-bolt'
                    ]
                ],
                'process' => [
                    [
                        'title' => ['en' => 'Discovery', 'ar' => 'الاستكشاف'],
                        'desc' => ['en' => 'Analysis and strategic planning.', 'ar' => 'التحليل والتخطيط الاستراتيجي.'],
                        'step' => 1
                    ],
                    [
                        'title' => ['en' => 'Design & Dev', 'ar' => 'التصميم والتطوير'],
                        'desc' => ['en' => 'Creating and building the solution.', 'ar' => 'إنشاء وبناء الحل.'],
                        'step' => 2
                    ],
                    [
                        'title' => ['en' => 'Launch', 'ar' => 'الإطلاق'],
                        'desc' => ['en' => 'Testing and going live.', 'ar' => 'الاختبار والإطلاق الفعلي.'],
                        'step' => 3
                    ]
                ],
                'order' => 2
            ],
            [
                'slug' => 'app-development',
                'title' => ['en' => 'Mobile App Development', 'ar' => 'تطوير تطبيقات الجوال'],
                'subtitle' => ['en' => 'Professional Mobile App Development Services', 'ar' => 'خدمات تطوير تطبيقات جوال احترافية'],
                'icon_class' => 'fas fa-mobile',
                'description' => [
                    'en' => 'We create custom iOS and Android apps that are simple, secure, and tailored to your business needs. From concept to deployment, we bring your mobile app ideas to life.',
                    'ar' => 'نحن نصمم تطبيقات iOS و Android مخصصة، بسيطة، آمنة، ومصممة خصيصاً لاحتياجات عملك. من الفكرة إلى الإطلاق، نحول أفكار تطبيقاتك إلى واقع.'
                ],
                'features' => [
                    [
                        'title' => ['en' => 'iOS App Development', 'ar' => 'تطوير تطبيقات iOS'],
                        'desc' => ['en' => 'Native iOS applications built with Swift and Objective-C for optimal performance.', 'ar' => 'تطبيقات iOS أصلية مبنية بـ Swift و Objective-C لأداء مثالي.'],
                        'icon' => 'fab fa-apple'
                    ],
                    [
                        'title' => ['en' => 'Android App Development', 'ar' => 'تطوير تطبيقات Android'],
                        'desc' => ['en' => 'Native Android apps developed using Kotlin and Java for seamless user experience.', 'ar' => 'تطبيقات Android أصلية مطورة بـ Kotlin و Java لتجربة مستخدم سلسة.'],
                        'icon' => 'fab fa-android'
                    ],
                    [
                        'title' => ['en' => 'Cross-Platform Apps', 'ar' => 'تطبيقات متعددة المنصات'],
                        'desc' => ['en' => 'React Native and Flutter apps for faster development and cost efficiency.', 'ar' => 'تطبيقات React Native و Flutter لتطوير أسرع وكفاءة في التكلفة.'],
                        'icon' => 'fas fa-layers-group'
                    ],
                    [
                        'title' => ['en' => 'App Security', 'ar' => 'أمان التطبيقات'],
                        'desc' => ['en' => 'Built-in security features and data protection to keep your app and users safe.', 'ar' => 'ميزات أمان مدمجة وحماية البيانات للحفاظ على تطبيقك ومستخدميك آمنين.'],
                        'icon' => 'fas fa-shield-alt'
                    ]
                ],
                'process' => [
                    [
                        'title' => ['en' => 'Planning', 'ar' => 'التخطيط'],
                        'desc' => ['en' => 'Define requirements.', 'ar' => 'تحديد المتطلبات.'],
                        'step' => 1
                    ],
                    [
                        'title' => ['en' => 'Design', 'ar' => 'التصميم'],
                        'desc' => ['en' => 'UI/UX Design.', 'ar' => 'تصميم UI/UX.'],
                        'step' => 2
                    ],
                    [
                        'title' => ['en' => 'Develop', 'ar' => 'التطوير'],
                        'desc' => ['en' => 'Coding & Building.', 'ar' => 'البرمجة والبناء.'],
                        'step' => 3
                    ],
                    [
                        'title' => ['en' => 'Launch', 'ar' => 'الإطلاق'],
                        'desc' => ['en' => 'Testing & Deploy.', 'ar' => 'الاختبار والنشر.'],
                        'step' => 4
                    ]
                ],
                'order' => 3
            ],
            [
                'slug' => 'ecommerce',
                'title' => ['en' => 'E-commerce Solutions', 'ar' => 'حلول التجارة الإلكترونية'],
                'subtitle' => ['en' => 'Build Your Online Store', 'ar' => 'قم ببناء متجرك عبر الإنترنت'],
                'icon_class' => 'fas fa-shopping-cart',
                'description' => [
                    'en' => 'Launch a powerful e-commerce platform that drives sales. From product catalogs to secure payments, we build complete online shopping experiences.',
                    'ar' => 'أطلق منصة تجارة إلكترونية قوية تزيد من مبيعاتك. من كتالوجات المنتجات إلى المدفوعات الآمنة، نبني تجارب تسوق كاملة عبر الإنترنت.'
                ],
                'features' => [
                    [
                        'title' => ['en' => 'Custom Online Stores', 'ar' => 'متاجر إلكترونية مخصصة'],
                        'desc' => ['en' => 'Fully customized e-commerce platforms tailored to your brand.', 'ar' => 'منصات تجارة إلكترونية مخصصة بالكامل مصممة لعلامتك التجارية.'],
                        'icon' => 'fas fa-store'
                    ],
                    [
                        'title' => ['en' => 'Payment Integration', 'ar' => 'تكامل المدفوعات'],
                        'desc' => ['en' => 'Secure payment gateways and multiple payment options.', 'ar' => 'بوابات دفع آمنة وخيارات دفع متعددة.'],
                        'icon' => 'fas fa-credit-card'
                    ],
                    [
                        'title' => ['en' => 'Inventory Management', 'ar' => 'إدارة المخزون'],
                        'desc' => ['en' => 'Advanced tools to manage products, stock, and orders.', 'ar' => 'أدوات متقدمة لإدارة المنتجات، المخزون، والطلبات.'],
                        'icon' => 'fas fa-boxes'
                    ],
                    [
                        'title' => ['en' => 'Analytics & Reports', 'ar' => 'التحليلات والتقارير'],
                        'desc' => ['en' => 'Detailed insights into sales, customers, and performance.', 'ar' => 'تقارير مفصلة عن المبيعات، العملاء، والأداء.'],
                        'icon' => 'fas fa-chart-line'
                    ]
                ],
                'process' => [
                    [
                        'title' => ['en' => 'Planning', 'ar' => 'التخطيط'],
                        'desc' => ['en' => 'Strategy & requirements.', 'ar' => 'الاستراتيجية والمتطلبات.'],
                        'step' => 1
                    ],
                    [
                        'title' => ['en' => 'Design', 'ar' => 'التصميم'],
                        'desc' => ['en' => 'UI/UX for shopping.', 'ar' => 'تصميم UI/UX للتسوق.'],
                        'step' => 2
                    ],
                    [
                        'title' => ['en' => 'Build', 'ar' => 'البناء'],
                        'desc' => ['en' => 'Development & testing.', 'ar' => 'التطوير والاختبار.'],
                        'step' => 3
                    ],
                    [
                        'title' => ['en' => 'Launch', 'ar' => 'الإطلاق'],
                        'desc' => ['en' => 'Go live & support.', 'ar' => 'الانطلاق والدعم.'],
                        'step' => 4
                    ]
                ],
                'order' => 4
            ],
            [
                'slug' => 'marketing',
                'title' => ['en' => 'Digital Marketing', 'ar' => 'التسويق الرقمي'],
                'subtitle' => ['en' => 'Professional Digital Marketing Services', 'ar' => 'خدمات التسويق الرقمي الاحترافية'],
                'icon_class' => 'fas fa-bullhorn',
                'description' => [
                    'en' => 'Grow your business with our comprehensive digital marketing solutions. We create data-driven strategies that increase visibility, engagement, and conversions.',
                    'ar' => 'نمِّ عملك مع حلولنا الشاملة للتسويق الرقمي. نصمم استراتيجيات قائمة على البيانات تزيد من الظهور والمشاركة والتحويلات.'
                ],
                'features' => [
                    [
                        'title' => ['en' => 'SEO Optimization', 'ar' => 'تحسين محركات البحث'],
                        'desc' => ['en' => 'Improve your search rankings and drive organic traffic to your website.', 'ar' => 'حسّن ترتيبك في محركات البحث وزد من حركة المرور العضوية إلى موقعك.'],
                        'icon' => 'fas fa-search'
                    ],
                    [
                        'title' => ['en' => 'Social Media Marketing', 'ar' => 'التسويق عبر وسائل التواصل'],
                        'desc' => ['en' => 'Engage your audience and build brand awareness across all platforms.', 'ar' => 'تفاعل مع جمهورك وبناء الوعي بالعلامة التجارية عبر جميع المنصات.'],
                        'icon' => 'fab fa-facebook'
                    ],
                    [
                        'title' => ['en' => 'PPC Advertising', 'ar' => 'الإعلانات المدفوعة'],
                        'desc' => ['en' => 'Get instant visibility with targeted paid advertising campaigns.', 'ar' => 'احصل على ظهور فوري من خلال حملات إعلانية مستهدفة.'],
                        'icon' => 'fas fa-ad'
                    ],
                    [
                        'title' => ['en' => 'Content Marketing', 'ar' => 'تسويق المحتوى'],
                        'desc' => ['en' => 'Create valuable content that attracts and converts your target audience.', 'ar' => 'أنشئ محتوى قيماً يجذب ويحول جمهورك المستهدف.'],
                        'icon' => 'fas fa-pen-fancy'
                    ]
                ],
                'process' => [
                    [
                        'title' => ['en' => 'Strategy', 'ar' => 'الاستراتيجية'],
                        'desc' => ['en' => 'Market analysis and planning.', 'ar' => 'تحليل السوق والتخطيط.'],
                        'step' => 1
                    ],
                    [
                        'title' => ['en' => 'Implementation', 'ar' => 'التنفيذ'],
                        'desc' => ['en' => 'Campaign setup and management.', 'ar' => 'إعداد وإدارة الحملة.'],
                        'step' => 2
                    ],
                    [
                        'title' => ['en' => 'Optimization', 'ar' => 'التحسين'],
                        'desc' => ['en' => 'Performance tracking and adjustment.', 'ar' => 'تتبع الأداء والتعديل.'],
                        'step' => 3
                    ]
                ],
                'order' => 5
            ],
            [
                'slug' => 'software-tools',
                'title' => ['en' => 'Business Software Tools', 'ar' => 'أدوات البرمجيات للأعمال'],
                'subtitle' => ['en' => 'Custom Business Software Solutions', 'ar' => 'حلول برمجيات أعمال مخصصة'],
                'icon_class' => 'fas fa-cogs',
                'description' => [
                    'en' => 'Streamline your operations with our custom business software solutions. From ERP to CRM, we build tools that help you work smarter.',
                    'ar' => 'بسّط عملياتك مع حلول البرمجيات المخصصة لدينا. من ERP إلى CRM، نبني أدوات تساعدك على العمل بذكاء أكبر.'
                ],
                'features' => [
                    [
                        'title' => ['en' => 'ERP Systems', 'ar' => 'أنظمة ERP'],
                        'desc' => ['en' => 'Integrated enterprise resource planning for complete business management.', 'ar' => 'تخطيط موارد المؤسسة المتكامل لإدارة الأعمال الكاملة.'],
                        'icon' => 'fas fa-chart-line'
                    ],
                    [
                        'title' => ['en' => 'CRM Solutions', 'ar' => 'حلول CRM'],
                        'desc' => ['en' => 'Customer relationship management tools to grow your sales.', 'ar' => 'أدوات إدارة علاقات العملاء لتنمية مبيعاتك.'],
                        'icon' => 'fas fa-users'
                    ],
                    [
                        'title' => ['en' => 'POS Systems', 'ar' => 'أنظمة نقاط البيع'],
                        'desc' => ['en' => 'Point of sale solutions for retail and restaurant businesses.', 'ar' => 'حلول نقاط البيع لشركات التجزئة والمطاعم.'],
                        'icon' => 'fas fa-cash-register'
                    ],
                    [
                        'title' => ['en' => 'Business Analytics', 'ar' => 'تحليلات الأعمال'],
                        'desc' => ['en' => 'Data-driven insights to make informed business decisions.', 'ar' => 'رؤى قائمة على البيانات لاتخاذ قرارات عمل مستنيرة.'],
                        'icon' => 'fas fa-tachometer-alt'
                    ]
                ],
                'process' => [
                    [
                        'title' => ['en' => 'Analysis', 'ar' => 'التحليل'],
                        'desc' => ['en' => 'Understanding business workflows.', 'ar' => 'فهم تدفقات العمل في الشركة.'],
                        'step' => 1
                    ],
                    [
                        'title' => ['en' => 'Development', 'ar' => 'التطوير'],
                        'desc' => ['en' => 'Building the custom software.', 'ar' => 'بناء البرمجيات المخصصة.'],
                        'step' => 2
                    ],
                    [
                        'title' => ['en' => 'Training', 'ar' => 'التدريب'],
                        'desc' => ['en' => 'Team onboarding and support.', 'ar' => 'تدريب الفريق والدعم.'],
                        'step' => 3
                    ]
                ],
                'order' => 6
            ]
        ];

        foreach ($services as $serviceData) {
            Service::updateOrCreate(
                ['slug' => $serviceData['slug']],
                $serviceData
            );
        }
    }
}
