<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => ['en' => 'Sarah Johnson', 'ar' => 'سارة جونسون'],
                'client_role' => ['en' => 'CEO, Tech Startup', 'ar' => 'المدير التنفيذي، شركة ناشئة تقنية'],
                'content' => [
                    'en' => 'Working with Believe Agency was a game-changer for our business. Their creative approach and dedication to excellence helped us achieve results beyond our expectations.',
                    'ar' => 'العمل مع وكالة بيليف كان نقطة تحول لأعمالنا. نهجهم الإبداعي وتفانيهم في التميز ساعدنا على تحقيق نتائج تفوق توقعاتنا.'
                ],
                'image' => 'testimonials/client-1.webp',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'client_name' => ['en' => 'Ahmed Hassan', 'ar' => 'أحمد حسن'],
                'client_role' => ['en' => 'Marketing Director', 'ar' => 'مدير التسويق'],
                'content' => [
                    'en' => 'The team at Believe Agency transformed our brand identity completely. Professional, creative, and always punctual. Highly recommended!',
                    'ar' => 'فريق وكالة بيليف حول هوية علامتنا التجارية بالكامل. محترفون، مبدعون، ودائماً في الموعد. أنصح بهم بشدة!'
                ],
                'image' => 'testimonials/client-2.webp',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'client_name' => ['en' => 'Maria Garcia', 'ar' => 'ماريا غارسيا'],
                'client_role' => ['en' => 'E-commerce Owner', 'ar' => 'مالكة متجر إلكتروني'],
                'content' => [
                    'en' => 'Outstanding service! They understood our vision perfectly and delivered a website that exceeded all our expectations. Sales increased by 300%!',
                    'ar' => 'خدمة متميزة! فهموا رؤيتنا تمامًا وقدموا موقعًا إلكترونيًا فاق كل توقعاتنا. زادت المبيعات بنسبة 300%!'
                ],
                'image' => 'testimonials/client-3.webp',
                'rating' => 5,
                'is_active' => true,
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
