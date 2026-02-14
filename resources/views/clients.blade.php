@extends('layouts.web')

@section('title', 'Our Clients')

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
                data-i18n="clients.title">Our Clients</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto" data-aos="fade-up"
                data-aos-delay="100" data-i18n="clients.subtitle">
                Trusted by companies across the region for our digital expertise
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
                                data-i18n="clients.title">Clients</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Clients Grid -->
    <section class="py-20 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 items-center">
                <!-- Client 1 -->
                <div class="group flex flex-col items-center justify-center p-8 glass-card rounded-2xl grayscale hover:grayscale-0 transition-all duration-300"
                    data-aos="fade-up">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 1"
                        class="h-20 w-auto mb-4 opacity-70 group-hover:opacity-100 transition-opacity">
                    <h3 class="font-bold text-gray-800 dark:text-gray-200">{{ __('site.clients_list.mazzawi') }}</h3>
                </div>
                <!-- Client 2 -->
                <div class="group flex flex-col items-center justify-center p-8 glass-card rounded-2xl grayscale hover:grayscale-0 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 2"
                        class="h-20 w-auto mb-4 opacity-70 group-hover:opacity-100 transition-opacity">
                    <h3 class="font-bold text-gray-800 dark:text-gray-200">{{ __('site.clients_list.noor_al_sham') }}</h3>
                </div>
                <!-- Client 3 -->
                <div class="group flex flex-col items-center justify-center p-8 glass-card rounded-2xl grayscale hover:grayscale-0 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 3"
                        class="h-20 w-auto mb-4 opacity-70 group-hover:opacity-100 transition-opacity">
                    <h3 class="font-bold text-gray-800 dark:text-gray-200">{{ __('site.clients_list.abby_physics') }}</h3>
                </div>
                <!-- Client 4 -->
                <div class="group flex flex-col items-center justify-center p-8 glass-card rounded-2xl grayscale hover:grayscale-0 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 4"
                        class="h-20 w-auto mb-4 opacity-70 group-hover:opacity-100 transition-opacity">
                    <h3 class="font-bold text-gray-800 dark:text-gray-200">{{ __('site.clients_list.al_mohandis') }}</h3>
                </div>
                <!-- Client 5 -->
                <div class="group flex flex-col items-center justify-center p-8 glass-card rounded-2xl grayscale hover:grayscale-0 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 5"
                        class="h-20 w-auto mb-4 opacity-70 group-hover:opacity-100 transition-opacity">
                    <h3 class="font-bold text-gray-800 dark:text-gray-200">{{ __('site.clients_list.waterfall') }}</h3>
                </div>
                <!-- Client 6 -->
                <div class="group flex flex-col items-center justify-center p-8 glass-card rounded-2xl grayscale hover:grayscale-0 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 6"
                        class="h-20 w-auto mb-4 opacity-70 group-hover:opacity-100 transition-opacity">
                    <h3 class="font-bold text-gray-800 dark:text-gray-200">{{ __('site.clients_list.mehan') }}</h3>
                </div>
                <!-- Client 7 -->
                <div class="group flex flex-col items-center justify-center p-8 glass-card rounded-2xl grayscale hover:grayscale-0 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 7"
                        class="h-20 w-auto mb-4 opacity-70 group-hover:opacity-100 transition-opacity">
                    <h3 class="font-bold text-gray-800 dark:text-gray-200">{{ __('site.clients_list.mas_alriyadh') }}</h3>
                </div>
                <!-- Client 8 -->
                <div class="group flex flex-col items-center justify-center p-8 glass-card rounded-2xl grayscale hover:grayscale-0 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="700">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 8"
                        class="h-20 w-auto mb-4 opacity-70 group-hover:opacity-100 transition-opacity">
                    <h3 class="font-bold text-gray-800 dark:text-gray-200">{{ __('site.clients_list.kenze') }}</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
