@extends('layouts.web')

@php
    $locale = app()->getLocale();
    $title = $service->title[$locale] ?? $service->title['en'] ?? '';
    $subtitle = $service->subtitle[$locale] ?? $service->subtitle['en'] ?? '';
    $description = $service->description[$locale] ?? $service->description['en'] ?? '';
@endphp

@section('title', $title)

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 md:pt-32 pb-20 hero-bg overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-[30%] left-[-10%] w-[50%] h-[50%] bg-brand-500/5 dark:bg-brand-500/10 rounded-full blur-[150px]"></div>
            <div class="absolute bottom-[10%] right-[-10%] w-[40%] h-[40%] bg-accent-500/5 dark:bg-accent-500/10 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up">
                {!! $title !!}
            </h1>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white">
                            {{ __('site.nav.home') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <a href="{{ url('services') }}" class="text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white">
                                {{ __('site.nav.services') }}
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- Left Content -->
                <div class="lg:col-span-2">
                    <div class="mb-12" data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
                            {{ $subtitle }}
                        </h2>
                        <div class="text-gray-600 dark:text-gray-400 leading-relaxed text-lg space-y-4">
                            {!! nl2br(e($description)) !!}
                        </div>
                    </div>

                    @if($service->features && count($service->features) > 0)
                        <!-- Features Grid -->
                        <div class="mb-16">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
                                {{ __('site.service_app.offer_title') }}
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                @foreach($service->features as $index => $feature)
                                    <div class="flex gap-4 p-6 rounded-2xl bg-gray-50 dark:bg-slate-800/50 border border-gray-100 dark:border-white/5 hover:border-brand-500/30 transition-colors"
                                        data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                                        <div class="shrink-0">
                                            <div class="w-12 h-12 rounded-xl bg-brand-100 dark:bg-brand-500/10 flex items-center justify-center text-brand-600 dark:text-brand-400 text-xl">
                                                <i class="{{ $feature['icon'] ?? 'fas fa-check' }}"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 dark:text-white mb-2">
                                                {{ $feature['title'][$locale] ?? $feature['title']['en'] ?? '' }}
                                            </h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ $feature['desc'][$locale] ?? $feature['desc']['en'] ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($service->process && count($service->process) > 0)
                        <!-- Process -->
                        <div class="mb-16">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
                                {{ __('site.service_app.process_title') }}
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                                @foreach($service->process as $index => $step)
                                    <div class="text-center relative p-6 rounded-2xl bg-white dark:bg-slate-800 border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-shadow"
                                        data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                                        <div class="w-16 h-16 mx-auto bg-brand-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-lg shadow-brand-500/30">
                                            {{ $step['step'] ?? ($index + 1) }}
                                        </div>
                                        <h4 class="font-bold text-gray-900 dark:text-white mb-2">
                                            {{ $step['title'][$locale] ?? $step['title']['en'] ?? '' }}
                                        </h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            {{ $step['desc'][$locale] ?? $step['desc']['en'] ?? '' }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Right Sidebar -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- CTA Widget -->
                    <div class="glass-card bg-brand-600 text-white p-8 rounded-3xl text-center relative overflow-hidden" data-aos="fade-up">
                        <div class="absolute inset-0 bg-linear-to-br from-brand-500 to-brand-700 opacity-90"></div>
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-4">{{ __('site.service_app.cta_title') }}</h3>
                            <p class="text-brand-100 mb-8 text-sm">{{ __('site.service_app.cta_desc') }}</p>
                            <a href="{{ url('contact') }}" class="inline-flex items-center justify-center bg-white text-brand-600 font-bold py-3 px-6 rounded-full w-full hover:bg-brand-50 transition-colors mb-4">
                                {{ __('site.service_app.cta_btn1') }}
                            </a>
                            <a href="tel:+201505194544" class="inline-flex items-center justify-center border-2 border-white/30 text-white font-bold py-3 px-6 rounded-full w-full hover:bg-white/10 transition-colors">
                                {{ __('site.service_app.cta_btn2') }}
                            </a>
                        </div>
                    </div>

                    <!-- Why Choose Us Widget -->
                    <div class="bg-gray-50 dark:bg-slate-800 p-8 rounded-3xl border border-gray-100 dark:border-white/5" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-6">
                            {{ __('site.service_app.why_title') }}
                        </h4>
                        <ul class="space-y-4">
                            @foreach(range(1, 5) as $i)
                                @php
                                    $whyKey = 'site.service_app.why' . $i;
                                    $translatedWhy = __($whyKey);
                                @endphp
                                @if($translatedWhy !== $whyKey)
                                    <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check-circle text-brand-500 text-lg"></i>
                                        <span>{{ $translatedWhy }}</span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
