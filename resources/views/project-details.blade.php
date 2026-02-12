@extends('layouts.web')

@section('title', 'Project Details')

@push('styles')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <style>
        /* Swiper Customization */
        .swiper {
            width: 100%;
            height: 100%;
            border-radius: 1rem;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: rgba(0, 0, 0, 0.02);
            /* Subtle background for mismatched aspect ratios */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border-radius: 1rem;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* Ensures full image is visible */
            border-radius: 1rem;
            cursor: pointer;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #5dc9e0;
            background: rgba(255, 255, 255, 0.8);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            backdrop-filter: blur(4px);
        }

        .dark .swiper-button-next,
        .dark .swiper-button-prev {
            background: rgba(0, 0, 0, 0.5);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 18px;
            font-weight: bold;
        }

        .swiper-pagination-bullet-active {
            background-color: #5dc9e0;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-16 hero-bg overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-[20%] right-[10%] w-[40%] h-[40%] bg-blue-500/5 dark:bg-blue-500/10 rounded-full blur-[120px]">
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span id="project-category"
                class="inline-block px-4 py-1.5 rounded-full bg-brand-100 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 text-sm font-semibold mb-4"
                data-aos="fade-up">{{ __('site.project_details.category_placeholder') }}</span>
            <h1 id="project-title" class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6"
                data-aos="fade-up" data-aos-delay="100">{{ __('site.project_details.title_placeholder') }}</h1>
            <p id="project-desc" class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-8"
                data-aos="fade-up" data-aos-delay="200">{{ __('site.project_details.desc_placeholder') }}</p>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="py-12 bg-white dark:bg-slate-800 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- Left Column: Content (2/3) -->
                <div class="lg:col-span-2 space-y-12">

                    <!-- Gallery Carousel -->
                    <div class="w-full relative group" data-aos="fade-up">
                        <div class="swiper mySwiper aspect-video" id="gallery-swiper">
                            <div class="swiper-wrapper" id="gallery-wrapper">
                                <!-- Slides injected via JS -->
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <!-- Project Overview -->
                    <div class="prose dark:prose-invert max-w-none" data-aos="fade-up">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            {{ __('site.project_details.overview') }}</h2>
                        <div id="project-long-desc" class="text-gray-600 dark:text-gray-400 leading-relaxed text-lg">
                        </div>
                    </div>

                    <!-- Features Grid -->
                    <div id="features-section" class="hidden">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6" id="features-title">
                            {{ __('site.project_details.key_features') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="features-grid">
                            <!-- Features injected via JS -->
                        </div>
                    </div>

                    <!-- Testimonial -->
                    <div id="testimonial-section"
                        class="hidden bg-gray-50 dark:bg-slate-700/30 rounded-2xl p-8 border-l-4 border-brand-500"
                        data-aos="fade-up">
                        <i class="fas fa-quote-left text-3xl text-brand-500 mb-4 opacity-50"></i>
                        <p id="testimonial-text" class="text-xl italic text-gray-700 dark:text-gray-300 mb-6"></p>
                        <div>
                            <h4 id="testimonial-name" class="font-bold text-gray-900 dark:text-white"></h4>
                            <span id="testimonial-role" class="text-sm text-gray-500 dark:text-gray-400"></span>
                        </div>
                    </div>

                </div>

                <!-- Sidebar Column -->
                <div>
                    <div class="sticky top-24 space-y-8">

                        <!-- Project Info Card -->
                        <div class="bg-gray-50 dark:bg-slate-700/30 rounded-2xl p-6 border border-gray-100 dark:border-white/5"
                            data-aos="fade-left">
                                {{ __('site.project_details.info_title') }}</h3>

                            <dl class="space-y-4">
                                <div>
                                    <dt class="text-sm text-gray-500 dark:text-gray-400 mb-1">{{ __('site.project_details.client') }}</dt>
                                    <dd
                                        class="text-base font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                        <i class="far fa-user text-brand-500"></i> <span id="info-client">-</span>
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-500 dark:text-gray-400 mb-1">{{ __('site.project_details.category') }}</dt>
                                    <dd
                                        class="text-base font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                        <i class="far fa-folder text-brand-500"></i> <span id="info-category">-</span>
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-500 dark:text-gray-400 mb-1">{{ __('site.project_details.duration') }}</dt>
                                    <dd
                                        class="text-base font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                        <i class="far fa-clock text-brand-500"></i> <span id="info-duration">-</span>
                                    </dd>
                                </div>
                            </dl>

                            <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                                <a href="#" id="info-website-btn" target="_blank"
                                    class="w-full flex items-center justify-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-medium py-3 px-4 rounded-xl transition-all shadow-lg hover:shadow-brand-500/30">
                                    <span>{{ __('site.project_details.visit_website') }}</span> <i
                                        class="fas fa-external-link-alt text-sm"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Tech Stack (Sidebar) -->
                        <div id="tech-section-sidebar" class="hidden" data-aos="fade-left" data-aos-delay="100">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">{{ __('site.project_details.technologies') }}</h3>
                            <div class="flex flex-wrap gap-2" id="tech-tags">
                                <!-- Tech tags injected here -->
                            </div>
                        </div>

                        <!-- Stats (Sidebar) -->
                        <div id="results-section-sidebar" class="hidden" data-aos="fade-left" data-aos-delay="200">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">{{ __('site.project_details.results') }}</h3>
                            <div class="space-y-4" id="results-list">
                                <!-- Results injected here -->
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- GLightbox JS -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <!-- Custom Project Details JS -->
    <script src="{{ asset('js/project-details.js') }}"></script>
@endpush
