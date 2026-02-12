@extends('layouts.web')

@section('title', 'Client Testimonials')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 md:pt-32 pb-20 hero-bg overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-[30%] left-[-10%] w-[50%] h-[50%] bg-brand-500/5 dark:bg-brand-500/10 rounded-full blur-[150px]">
            </div>
            <div
                class="absolute bottom-[10%] right-[-10%] w-[40%] h-[40%] bg-accent-500/5 dark:bg-accent-500/10 rounded-full blur-[120px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up"
                data-i18n="testimonials.title">Client Testimonials</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto" data-aos="fade-up"
                data-aos-delay="100" data-i18n="testimonials.subtitle">
                Hear what our clients have to say about their experience with Believe Agency
            </p>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="200">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white"
                            data-i18n="nav.home">Home</a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400"
                                data-i18n="testimonials.title">Testimonials</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white dark:bg-slate-800 border-y border-gray-200 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div data-aos="fade-up" data-aos-delay="0">
                    <span class="block text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">120+</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400" data-i18n="testimonials.stat1">Happy
                        Clients</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <span class="block text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">95+</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400" data-i18n="testimonials.stat2">Projects
                        Done</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <span class="block text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">5.0</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400" data-i18n="testimonials.stat3">Average
                        Rating</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <span class="block text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">100%</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400"
                        data-i18n="testimonials.stat4">Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                    data-i18n="testimonials.section_subtitle">SUCCESS STORIES</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white"
                    data-i18n="testimonials.section_title">What Our Clients Say</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="glass-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic" data-i18n="testimonials.review1">
                        "Believe Agency transformed our online presence completely. Their team is professional,
                        creative, and always delivers on time. Highly recommended!"
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-brand-100 dark:bg-brand-900/20 flex items-center justify-center">
                            <i class="fas fa-user text-brand-600 dark:text-brand-400"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="testimonials.client1.name">
                                Mohamed Saeed</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400"
                                data-i18n="testimonials.client1.company">Tech Startup CEO</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="glass-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic" data-i18n="testimonials.review2">
                        "Working with Believe Agency was a game-changer for our business. They understood our vision and
                        brought it to life beautifully."
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-accent-100 dark:bg-accent-900/20 flex items-center justify-center">
                            <i class="fas fa-user text-accent-600 dark:text-accent-400"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="testimonials.client2.name">
                                Layla Ahmed</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400"
                                data-i18n="testimonials.client2.company">Fashion Brand Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="glass-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic" data-i18n="testimonials.review3">
                        "The best digital agency in Egypt! Their expertise in web development and marketing helped us
                        grow our business significantly."
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/20 flex items-center justify-center">
                            <i class="fas fa-user text-green-600 dark:text-green-400"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="testimonials.client3.name">
                                Khaled Hassan</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400"
                                data-i18n="testimonials.client3.company">Restaurant Chain Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="glass-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic" data-i18n="testimonials.review4">
                        "Exceptional service and outstanding results! The team went above and beyond to ensure our
                        project was perfect."
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/20 flex items-center justify-center">
                            <i class="fas fa-user text-purple-600 dark:text-purple-400"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="testimonials.client4.name">
                                Fatima Ali</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400"
                                data-i18n="testimonials.client4.company">E-commerce Director</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="glass-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic" data-i18n="testimonials.review5">
                        "Professional, reliable, and creative. Believe Agency is our go-to partner for all digital
                        solutions."
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/20 flex items-center justify-center">
                            <i class="fas fa-user text-orange-600 dark:text-orange-400"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="testimonials.client5.name">
                                Youssef Ibrahim</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400"
                                data-i18n="testimonials.client5.company">Marketing Manager</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="glass-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic" data-i18n="testimonials.review6">
                        "Amazing team with incredible talent! They delivered exactly what we needed and more. Thank you
                        Believe Agency!"
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/20 flex items-center justify-center">
                            <i class="fas fa-user text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="testimonials.client6.name">
                                Mona Khalil</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400"
                                data-i18n="testimonials.client6.company">Fitness Center Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
