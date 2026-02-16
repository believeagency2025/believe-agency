@extends('layouts.web')

@section('title', $project->title)

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
                data-aos="fade-up">
                {{ $project->service ? $project->service->title : __('site.projects.category_other') }}
            </span>
            <h1 id="project-title" class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6"
                data-aos="fade-up" data-aos-delay="100">{{ $project->title }}</h1>
            <p id="project-desc" class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-8"
                data-aos="fade-up" data-aos-delay="200">{{ $project->description }}</p>
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
                                @forelse ($project->images as $image)
                                    <div class="swiper-slide">
                                        <a href="{{ asset('storage/' . $image->image_path) }}" class="glightbox" data-gallery="project-gallery">
                                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $project->title }}" loading="lazy" onerror="this.src='{{ asset($image->image_path) }}'">
                                        </a>
                                    </div>
                                @empty
                                    <div class="swiper-slide">
                                        <img src="{{ asset('img/placeholder.webp') }}" alt="Placeholder" loading="lazy">
                                    </div>
                                @endforelse
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <!-- Project Overview -->
                    <div class="prose dark:prose-invert max-w-none" data-aos="fade-up">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            {{ __('site.project_details.overview') }}
                        </h2>
                        <div id="project-long-desc" class="text-gray-600 dark:text-gray-400 leading-relaxed text-lg">
                            {!! nl2br(e($project->overview)) !!}
                        </div>
                    </div>

                    <!-- Features Grid -->
                    @if ($project->features->count() > 0)
                        <div id="features-section">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6" id="features-title">
                                {{ __('site.project_details.key_features') }}
                            </h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach ($project->features as $feature)
                                    <div class="group bg-gray-50 dark:bg-slate-700/50 p-5 rounded-xl border border-gray-100 dark:border-white/5 hover:border-brand-200 dark:hover:border-brand-500/30 hover:bg-white dark:hover:bg-slate-700 transition-all duration-300 shadow-sm hover:shadow-md">

                                        {{-- Flex Container لضبط الأيقونة بجانب النص --}}
                                        <div class="flex items-start gap-3">

                                            {{-- الأيقونة --}}
                                            <div class="flex-shrink-0 mt-1">
                                                <i class="fas fa-check-circle text-brand-500 dark:text-brand-400 text-lg"></i>
                                            </div>

                                            {{-- النصوص --}}
                                            <div>
                                                <h4 class="font-bold text-gray-900 dark:text-white leading-tight">
                                                    {{ $feature->title }}
                                                </h4>

                                                @if($feature->description && $feature->description !== $feature->title)
                                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                                        {{ $feature->description }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Testimonial -->
                    @if ($project->testimonial_text)
                        <div id="testimonial-section"
                            class="bg-gray-50 dark:bg-slate-700/30 rounded-2xl p-8 border-l-4 border-brand-500"
                            data-aos="fade-up">
                            <i class="fas fa-quote-left text-3xl text-brand-500 mb-4 opacity-50"></i>
                            <p id="testimonial-text" class="text-xl italic text-gray-700 dark:text-gray-300 mb-6">
                                {{ $project->testimonial_text }}
                            </p>
                            <div>
                                <h4 id="testimonial-name" class="font-bold text-gray-900 dark:text-white">
                                    {{ $project->testimonial_name }}
                                </h4>
                                <span id="testimonial-role" class="text-sm text-gray-500 dark:text-gray-400">
                                    {{ $project->testimonial_role }}
                                </span>
                            </div>
                        </div>
                    @endif

                </div>

                <!-- Sidebar Column -->
                <div>
                    <div class="sticky top-24 space-y-8">

                        <!-- Project Info Card -->
                        <div class="bg-gray-50 dark:bg-slate-700/30 rounded-2xl p-6 border border-gray-100 dark:border-white/5"
                            data-aos="fade-left">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                                {{ __('site.project_details.info_title') }}
                            </h3>

                            <dl class="space-y-4">
                                <div>
                                    <dt class="text-sm text-gray-500 dark:text-gray-400 mb-1">{{ __('site.project_details.client') }}</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                        <i class="far fa-user text-brand-500"></i>
                                        <span>{{ $project->client_name ?? '-' }}</span>
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-500 dark:text-gray-400 mb-1">{{ __('site.project_details.category') }}</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                        <i class="far fa-folder text-brand-500"></i>
                                        <span>{{ $project->service ? $project->service->title : __('site.projects.category_other') }}</span>
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-500 dark:text-gray-400 mb-1">{{ __('site.project_details.duration') }}</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                        <i class="far fa-clock text-brand-500"></i>
                                        <span>{{ $project->duration ?? '-' }}</span>
                                    </dd>
                                </div>
                            </dl>

                            @if($project->website_url && $project->website_url != '#')
                            <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                                <a href="{{ $project->website_url }}" target="_blank"
                                    class="w-full flex items-center justify-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-medium py-3 px-4 rounded-xl transition-all shadow-lg hover:shadow-brand-500/30">
                                    <span>{{ __('site.project_details.visit_website') }}</span> <i
                                        class="fas fa-external-link-alt text-sm"></i>
                                </a>
                            </div>
                            @endif
                        </div>

                        <!-- Tech Stack (Sidebar) -->
                        @if($project->techStack->count() > 0)
                        <div id="tech-section-sidebar" data-aos="fade-left" data-aos-delay="100">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">{{ __('site.project_details.technologies') }}</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project->techStack as $tech)
                                <span class="px-3 py-1 bg-white dark:bg-slate-700 border border-gray-200 dark:border-slate-600 rounded-lg text-sm text-gray-600 dark:text-gray-300">
                                    {{ $tech->name }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        @endif
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Swiper
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                loop: true
            });

            // Initialize GLightbox
            const lightbox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true,
                autoplayVideos: true
            });
        });
    </script>
@endpush
