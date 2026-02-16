<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\ProjectFeature;
use App\Models\ProjectTechStack;
use App\Models\Service;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get service IDs
        $webDesignService = Service::where('slug', 'web-design')->first();
        $appDevService = Service::where('slug', 'app-development')->first();
        $brandingService = Service::where('slug', 'branding')->first();
        $marketingService = Service::where('slug', 'marketing')->first();
        $ecommerceService = Service::where('slug', 'ecommerce')->first();

        $projects = [
            [
                'slug' => 'mazzawi',
                'service_id' => $webDesignService?->id,
                'client_name' => ['en' => 'Mazzawi Contracting LLC', 'ar' => 'شركة مزاوي للمقاولات'],
                'duration' => '2 Months',
                'website_url' => 'https://mazzawi.ae',
                'title' => ['en' => 'Mazzawi Contracting Website', 'ar' => 'موقع مزاوي للمقاولات'],
                'description' => ['en' => 'Professional website for construction company', 'ar' => 'موقع احترافي لشركة مقاولات'],
                'overview' => [
                    'en' => 'Mazzawi Contracting LLC is a leading construction company that needed a modern and professional digital presence to showcase their extensive portfolio of projects and services. The website was designed to reflect their expertise and reliability in the construction industry.',
                    'ar' => 'تعد شركة مزاوي للمقاولات ذ.م.م شركة إنشاءات رائدة كانت بحاجة إلى حضور رقمي حديث واحترافي لعرض محفظتها الواسعة من المشاريع والخدمات. تم تصميم الموقع ليعكس خبرتهم وموثوقيتهم في صناعة البناء.'
                ],
                'featured_image' => 'img/portfolio/Web Design & Development/Mazzawi/mazzawi-1.webp',
                'is_featured' => true,
                'order' => 1,
                'status' => 'active',
                'images' => [
                    'img/portfolio/Web Design & Development/Mazzawi/mazzawi-1.webp',
                    'img/portfolio/Web Design & Development/Mazzawi/mazzawi-2.webp',
                    'img/portfolio/Web Design & Development/Mazzawi/mazzawi-3.webp',
                    'img/portfolio/Web Design & Development/Mazzawi/mazzawi-4.webp'
                ],
                'features' => [
                    ['en' => 'Responsive Design', 'ar' => 'تصميم متجاوب'],
                    ['en' => 'Project Portfolio', 'ar' => 'معرض المشاريع'],
                    ['en' => 'Contact Forms', 'ar' => 'نماذج الاتصال'],
                    ['en' => 'SEO Optimized', 'ar' => 'محسن لمحركات البحث'],
                    ['en' => 'Fast Loading', 'ar' => 'سرعة تحميل عالية']
                ],
                'tech_stack' => [
                    ['icon' => 'fab fa-html5', 'name' => 'HTML5'],
                    ['icon' => 'fab fa-css3-alt', 'name' => 'CSS3'],
                    ['icon' => 'fab fa-js', 'name' => 'JavaScript'],
                    ['icon' => 'fab fa-wordpress', 'name' => 'WordPress']
                ],
                'testimonial' => [
                    'text' => ['en' => 'Excellent work! The website perfectly represents our brand and helps us showcase our projects to potential clients effectively.', 'ar' => 'عمل ممتاز! الموقع يمثل علامتنا التجارية بشكل مثالي ويساعدنا في عرض مشاريعنا للعملاء المحتملين بشكل فعال.'],
                    'name' => ['en' => 'Ahmed Al Mazzawi', 'ar' => 'أحمد المزاوي'],
                    'role' => ['en' => 'CEO, Mazzawi Contracting', 'ar' => 'المدير التنفيذي، مزاوي للمقاولات']
                ]
            ],
            [
                'slug' => 'noor-alsham',
                'service_id' => $webDesignService?->id,
                'client_name' => ['en' => 'Noor Al Sham PHARMA', 'ar' => 'نور الشام للأدوية'],
                'duration' => '6 Weeks',
                'website_url' => 'https://nooralsham-pharma.com',
                'title' => ['en' => 'Noor Al Sham Pharmaceutical Website', 'ar' => 'موقع نور الشام للأدوية'],
                'description' => ['en' => 'Modern pharmaceutical company website', 'ar' => 'موقع حديث لشركة أدوية'],
                'overview' => [
                    'en' => 'Noor Al Sham PHARMA is a prestigious pharmaceutical company that needed a modern and professional website to showcase its products and services. The site had to feature a clean and trustworthy design that appeals to health professionals, distributors and potential customers in the pharmaceutical industry.',
                    'ar' => 'تُعد نور الشام فارما شركة أدوية مرموقة كانت بحاجة إلى موقع حديث واحترافي لعرض منتجاتها وخدماتها. كان لابد أن يتميز الموقع بتصميم نظيف وموثوق يجذب المهنيين الصحيين والموزعين والعملاء المحتملين في صناعة الأدوية.'
                ],
                'featured_image' => 'img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-1.webp',
                'is_featured' => true,
                'order' => 2,
                'status' => 'active',
                'images' => [
                    'img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-1.webp',
                    'img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-2.webp',
                    'img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-3.webp',
                    'img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-4.webp'
                ],
                'features_complex' => [
                    [
                        'icon' => 'fas fa-pills',
                        'title' => ['en' => 'Professional Pharmaceutical Design', 'ar' => 'تصميم دوائي احترافي بلمسة طبية نظيفة'],
                        'description' => ['en' => 'A clean and medical touch to represent the pharmaceutical industry.', 'ar' => 'لمسة طبية نظيفة لتمثيل صناعة الأدوية.']
                    ],
                    [
                        'icon' => 'fas fa-list-ul',
                        'title' => ['en' => 'Product Catalog', 'ar' => 'كتالوج منتجات مع تفاصيل ومواصفات دقيقة'],
                        'description' => ['en' => 'Detailed catalog with specifications and precise information.', 'ar' => 'كتالوج مفصل مع مواصفات ومعلومات دقيقة.']
                    ],
                    [
                        'icon' => 'fas fa-building',
                        'title' => ['en' => 'Company Profile', 'ar' => 'ملف تعريفي للشركة وعرض الشهادات'],
                        'description' => ['en' => 'Showcasing company history, values and certifications.', 'ar' => 'عرض تاريخ الشركة وقيمها وشهاداتها.']
                    ],
                    [
                        'icon' => 'fas fa-envelope',
                        'title' => ['en' => 'Contact Forms', 'ar' => 'نماذج تواصل للاستفسارات والشراكات'],
                        'description' => ['en' => 'Easy communication forms for inquiries and partnerships.', 'ar' => 'نماذج اتصال سهلة للاستفسارات والشراكات.']
                    ],
                    [
                        'icon' => 'fas fa-newspaper',
                        'title' => ['en' => 'News Section', 'ar' => 'قسم للأخبار والتحديثات الخاصة بالصناعة'],
                        'description' => ['en' => 'Keep visitors updated with the latest industry news.', 'ar' => 'إبقاء الزوار على اطلاع بأحدث أخبار الصناعة.']
                    ],
                    [
                        'icon' => 'fas fa-globe',
                        'title' => ['en' => 'Multilingual Support', 'ar' => 'دعم متعدد اللغات للوصول العالمي'],
                        'description' => ['en' => 'Reaching global audience through multiple languages.', 'ar' => 'الوصول إلى جمهور عالمي من خلال لغات متعددة.']
                    ]
                ],
                'tech_stack' => [
                    ['icon' => 'fab fa-html5', 'name' => 'HTML5'],
                    ['icon' => 'fab fa-css3-alt', 'name' => 'CSS3'],
                    ['icon' => 'fab fa-js', 'name' => 'JavaScript'],
                    ['icon' => 'fab fa-php', 'name' => 'PHP']
                ],
                'testimonial' => [
                    'text' => ['en' => 'The website exceeded our expectations. It has significantly improved our online presence and trust among partners.', 'ar' => 'تجاوز الموقع توقعاتنا. لقد حسن بشكل كبير من حضورنا على الإنترنت وثقتنا بين الشركاء.'],
                    'name' => ['en' => 'Dr. Mohammed Hassan', 'ar' => 'د. محمد حسن'],
                    'role' => ['en' => 'Director, Noor Al Sham PHARMA', 'ar' => 'مدير، نور الشام للأدوية']
                ]
            ],
            [
                'slug' => 'abby-physics',
                'service_id' => $appDevService?->id,
                'client_name' => ['en' => 'Abby Physics', 'ar' => 'أبي للفيزياء'],
                'duration' => '3 Months',
                'website_url' => '#',
                'title' => ['en' => 'Abby Physics Educational App', 'ar' => 'تطبيق أبي التعليمي للفيزياء'],
                'description' => ['en' => 'Interactive physics learning application', 'ar' => 'تطبيق تعليمي تفاعلي للفيزياء'],
                'overview' => [
                    'en' => 'Abby Physics is a revolutionary educational mobile application designed to simplify complex physics concepts through interactivity and visualization. It provides students with a comprehensive learning tool that includes lessons, solvers, and simulations.',
                    'ar' => 'أبي للفيزياء هو تطبيق جوال تعليمي ثوري مصمم لتبسيط مفاهيم الفيزياء المعقدة من خلال التفاعل والتصور. يوفر للطلاب أداة تعليمية شاملة تتضمن دروساً وحلولاً ومحاكاة.'
                ],
                'featured_image' => 'img/portfolio/Apps Development/Abby Physics/abby-1.webp',
                'is_featured' => true,
                'order' => 3,
                'status' => 'active',
                'images' => [
                    'img/portfolio/Apps Development/Abby Physics/abby-1.webp',
                    'img/portfolio/Apps Development/Abby Physics/abby-2.webp',
                    'img/portfolio/Apps Development/Abby Physics/abby-3.webp',
                    'img/portfolio/Apps Development/Abby Physics/abby-4.webp'
                ],
                'features_complex' => [
                    [
                        'icon' => 'fas fa-chalkboard-teacher',
                        'title' => ['en' => 'Interactive Lessons', 'ar' => 'دروس تفاعلية'],
                        'description' => ['en' => 'Engaging physics lessons with high-quality animations and interactive content.', 'ar' => 'دروس فيزياء جذابة مع رسوم متحركة عالية الجودة ومحتوى تفاعلي.']
                    ],
                    [
                        'icon' => 'fas fa-calculator',
                        'title' => ['en' => 'Problem Solver', 'ar' => 'حل المسائل'],
                        'description' => ['en' => 'Intelligent solver providing step-by-step physics problem solutions.', 'ar' => 'حلول ذكية توفر خطوات حل مفسرة لمسائل الفيزياء خطوة بخطوة.']
                    ],
                    [
                        'icon' => 'fas fa-atom',
                        'title' => ['en' => 'Simulations', 'ar' => 'محاكاة'],
                        'description' => ['en' => 'Virtual physics experiments and simulations to visualize theories.', 'ar' => 'تجارب ومحاكاة فيزيائية افتراضية لتصور النظريات.']
                    ]
                ],
                'tech_stack' => [
                    ['icon' => 'fab fa-flutter', 'name' => 'Flutter'],
                    ['icon' => 'fas fa-database', 'name' => 'Firebase'],
                    ['icon' => 'fab fa-android', 'name' => 'Android'],
                    ['icon' => 'fab fa-apple', 'name' => 'iOS']
                ]
            ],
            [
                'slug' => 'almonasib',
                'service_id' => $appDevService?->id,
                'client_name' => ['en' => 'AlMonasib', 'ar' => 'المناسب'],
                'duration' => '4 Months',
                'website_url' => '#',
                'title' => ['en' => 'AlMonasib Social Platform', 'ar' => 'منصة المناسب الاجتماعية'],
                'description' => ['en' => 'Social networking mobile application', 'ar' => 'تطبيق جوال للتواصل الاجتماعي'],
                'overview' => [
                    'en' => 'AlMonasib is a dynamic social networking platform that connects individuals based on shared interests and geographical locations. It features real-time interaction and a sophisticated matching algorithm.',
                    'ar' => 'المناسب هي منصة تواصل اجتماعي ديناميكية تربط الأفراد بناءً على الاهتمامات المشتركة والمواقع الجغرافية. تتميز بالتفاعل في الوقت الفعلي وخوارزمية مطابقة متطورة.'
                ],
                'featured_image' => 'img/portfolio/Apps Development/Almonasib/almonasib-1.webp',
                'is_featured' => false,
                'order' => 4,
                'status' => 'active',
                'images' => [
                    'img/portfolio/Apps Development/Almonasib/almonasib-1.webp',
                    'img/portfolio/Apps Development/Almonasib/almonasib-2.webp'
                ],
                'features_complex' => [
                    [
                        'icon' => 'fas fa-users',
                        'title' => ['en' => 'User Profiles', 'ar' => 'ملفات المستخدمين'],
                        'description' => ['en' => 'Detailed personalized user profiles and connection management.', 'ar' => 'ملفات مستخدمين شخصية مفصلة وإدارة الاتصالات.']
                    ],
                    [
                        'icon' => 'fas fa-chart-bar',
                        'title' => ['en' => 'Analytics Dashboard', 'ar' => 'لوحة التحليلات'],
                        'description' => ['en' => 'Tools to track user engagement, activity levels and platform growth.', 'ar' => 'أدوات لتتبع تفاعل المستخدمين ومستويات النشاط ونمو المنصة.']
                    ]
                ],
                'tech_stack' => [
                    ['icon' => 'fab fa-react', 'name' => 'React Native'],
                    ['icon' => 'fas fa-server', 'name' => 'Node.js'],
                    ['icon' => 'fas fa-database', 'name' => 'MongoDB']
                ]
            ],
            [
                'slug' => 'brochure',
                'service_id' => $brandingService?->id,
                'client_name' => ['en' => 'Noor Al Sham PHARMA', 'ar' => 'نور الشام للأدوية'],
                'duration' => '2 Weeks',
                'website_url' => '#',
                'title' => ['en' => 'Pharmaceutical Brochure Design', 'ar' => 'تصميم بروشور دوائي'],
                'description' => ['en' => 'Professional brochure design for pharmaceutical products', 'ar' => 'تصميم بروشور احترافي للمنتجات الدوائية'],
                'overview' => [
                    'en' => 'High-quality aesthetic brochure design for pharmaceutical product lines, ensuring clear communication and professional presentation to medical representatives and clients.',
                    'ar' => 'تصميم بروشور عالي الجودة لخطوط المنتجات الدوائية، مع ضمان التواصل الواضح والعرض الاحترافي للمندوبين الطبيين والعملاء.'
                ],
                'featured_image' => 'img/portfolio/Branding & Creative Design/brochure design/1.webp',
                'is_featured' => false,
                'order' => 5,
                'status' => 'active',
                'images' => [
                    'img/portfolio/Branding & Creative Design/brochure design/1.webp',
                    'img/portfolio/Branding & Creative Design/brochure design/2.webp',
                    'img/portfolio/Branding & Creative Design/brochure design/3.webp',
                    'img/portfolio/Branding & Creative Design/brochure design/4.webp',
                    'img/portfolio/Branding & Creative Design/brochure design/5.webp'
                ],
                'features' => [
                    ['en' => 'Creative Layouts', 'ar' => 'تنسيقات إبداعية'],
                    ['en' => 'High Resolution', 'ar' => 'دقة عالية'],
                    ['en' => 'Print-Ready', 'ar' => 'جاهز للطباعة']
                ],
                'tech_stack' => [
                    ['icon' => 'fab fa-adobe', 'name' => 'Photoshop'],
                    ['icon' => 'fab fa-adobe', 'name' => 'Illustrator'],
                    ['icon' => 'fab fa-adobe', 'name' => 'InDesign']
                ]
            ],
            [
                'slug' => 'company-profile',
                'service_id' => $brandingService?->id,
                'client_name' => ['en' => 'Kenze Capital', 'ar' => 'كينز كابيتال'],
                'duration' => '3 Weeks',
                'website_url' => '#',
                'title' => ['en' => 'Company Profile Design', 'ar' => 'تصميم ملف الشركة'],
                'description' => ['en' => 'Professional company profile for investment firm', 'ar' => 'ملف شركة احترافي لشركة استثمارية'],
                'overview' => [
                    'en' => 'An elegant and comprehensive company profile for Kenze Capital, highlighting their investment strategies, success stories, and corporate values.',
                    'ar' => 'ملف شركة أنيق وشامل لكينز كابيتال، يسلط الضوء على استراتيجياتهم الاستثمارية وقصص نجاحهم وقيم الشركة.'
                ],
                'featured_image' => 'img/portfolio/Branding & Creative Design/company profile/1.webp',
                'is_featured' => false,
                'order' => 6,
                'status' => 'active',
                'images' => [
                    'img/portfolio/Branding & Creative Design/company profile/1.webp',
                    'img/portfolio/Branding & Creative Design/company profile/2.webp',
                    'img/portfolio/Branding & Creative Design/company profile/3.webp',
                    'img/portfolio/Branding & Creative Design/company profile/4.webp'
                ],
                'features' => [
                    ['en' => 'Modern Aesthetic', 'ar' => 'جمالية حديثة'],
                    ['en' => 'Structured Content', 'ar' => 'محتوى منظم'],
                    ['en' => 'Professional Presentation', 'ar' => 'عرض احترافي']
                ],
                'tech_stack' => [
                    ['icon' => 'fab fa-adobe', 'name' => 'Adobe Creative Suite'],
                    ['icon' => 'fab fa-adobe', 'name' => 'InDesign']
                ]
            ],
            [
                'slug' => 'branding-ab-creates',
                'service_id' => $brandingService?->id,
                'client_name' => ['en' => 'AB Creates', 'ar' => 'إيه بي كريتس'],
                'duration' => '1 Month',
                'website_url' => '#',
                'title' => ['en' => 'AB Creates Brand Identity', 'ar' => 'هوية علامة إيه بي كريتس'],
                'description' => ['en' => 'Complete brand identity design', 'ar' => 'تصميم هوية علامة تجارية كاملة'],
                'overview' => [
                    'en' => 'A total brand transformation for AB Creates, including logo design, color palette development, typography, and comprehensive brand guidelines.',
                    'ar' => 'تحول كامل للعلامة التجارية لشركة إيه بي كريتس، بما في ذلك تصميم الشعار وتطوير لوحة الألوان والخطوط وإرشادات العلامة التجارية الشاملة.'
                ],
                'featured_image' => 'img/portfolio/Branding & Creative Design/Branding/branding1.webp',
                'is_featured' => false,
                'order' => 8,
                'status' => 'active',
                'images' => [
                    'img/portfolio/Branding & Creative Design/Branding/branding1.webp',
                    'img/portfolio/Branding & Creative Design/Branding/branding2.webp',
                    'img/portfolio/Branding & Creative Design/Branding/branding3.webp'
                ],
                'tech_stack' => [
                    ['icon' => 'fab fa-adobe', 'name' => 'Illustrator'],
                    ['icon' => 'fab fa-adobe', 'name' => 'Photoshop']
                ]
            ],
            [
                'slug' => 'mas-ecommerce',
                'service_id' => $ecommerceService?->id,
                'client_name' => ['en' => 'Mas ALRiyadh', 'ar' => 'ماس الرياض'],
                'duration' => '2 Months',
                'website_url' => '#',
                'title' => ['en' => 'Mas E-commerce Platform', 'ar' => 'منصة ماس للتجارة الإلكترونية'],
                'description' => ['en' => 'Complete e-commerce mobile application', 'ar' => 'تطبيق جوال كامل للتجارة الإلكترونية'],
                'overview' => [
                    'en' => 'A robust e-commerce mobile application for Mas ALRiyadh, featuring advanced shopping cart functionalities, secure payment gateway integrations, and user-friendly product browsing.',
                    'ar' => 'تطبيق جوال قوي للتجارة الإلكترونية لشركة ماس الرياض، يتميز بوظائف عربة تسوق متقدمة وتكامل بوابات دفع آمنة وتصفح منتجات سهل الاستخدام.'
                ],
                'featured_image' => 'img/portfolio/E-commerce/Mas App/mas1.jpg',
                'is_featured' => false,
                'order' => 9,
                'status' => 'active',
                'images' => [
                    'img/portfolio/E-commerce/Mas App/mas1.jpg',
                    'img/portfolio/E-commerce/Mas App/mas2.jpg',
                    'img/portfolio/E-commerce/Mas App/mas3.jpg'
                ],
                'features' => [
                    ['en' => 'Secure Checkout', 'ar' => 'دفع آمن'],
                    ['en' => 'Real-time Tracking', 'ar' => 'تتبع في الوقت الفعلي'],
                    ['en' => 'Push Notifications', 'ar' => 'إشعارات لحظية']
                ],
                'tech_stack' => [
                    ['icon' => 'fab fa-react', 'name' => 'React Native'],
                    ['icon' => 'fab fa-laravel', 'name' => 'Laravel API'],
                    ['icon' => 'fas fa-shield-alt', 'name' => 'Stripe']
                ]
            ]
        ];

        foreach ($projects as $projectData) {
            // Extract related data
            $images = $projectData['images'] ?? [];
            $features = $projectData['features'] ?? [];
            $featuresComplex = $projectData['features_complex'] ?? [];
            $techStack = $projectData['tech_stack'] ?? [];
            $testimonial = $projectData['testimonial'] ?? null;

            // Remove arrays from main project data
            unset($projectData['images'], $projectData['features'], $projectData['features_complex'], $projectData['tech_stack'], $projectData['testimonial']);

            // Add testimonial fields if exists
            if ($testimonial) {
                $projectData['testimonial_text'] = $testimonial['text'];
                $projectData['testimonial_name'] = $testimonial['name'];
                $projectData['testimonial_role'] = $testimonial['role'];
            }

            // Create or update project
            $project = Project::updateOrCreate(
                ['slug' => $projectData['slug']],
                $projectData
            );

            // Add images
            if (!empty($images)) {
                $project->images()->delete();
                foreach ($images as $index => $imagePath) {
                    ProjectImage::create([
                        'project_id' => $project->id,
                        'image_path' => $imagePath,
                        'order' => $index + 1
                    ]);
                }
            }

            // Add simple features
            if (!empty($features)) {
                $project->features()->delete();
                foreach ($features as $index => $feature) {
                    ProjectFeature::create([
                        'project_id' => $project->id,
                        'title' => $feature,
                        'description' => $feature,
                        'order' => $index + 1
                    ]);
                }
            }

            // Add complex features
            if (!empty($featuresComplex)) {
                foreach ($featuresComplex as $index => $feature) {
                    ProjectFeature::create([
                        'project_id' => $project->id,
                        'icon' => $feature['icon'],
                        'title' => $feature['title'],
                        'description' => $feature['description'],
                        'order' => count($features) + $index + 1
                    ]);
                }
            }

            // Add tech stack
            if (!empty($techStack)) {
                $project->techStack()->delete();
                foreach ($techStack as $index => $tech) {
                    ProjectTechStack::create([
                        'project_id' => $project->id,
                        'name' => $tech['name'],
                        'icon' => $tech['icon'],
                        'order' => $index + 1
                    ]);
                }
            }
        }
    }
}
