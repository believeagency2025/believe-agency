@extends('layouts.web')

@section('title', 'Business Software Tools')

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
                data-i18n="service_software.title">{{ __('site.service_software.title') }}</h1>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white"
                            data-i18n="nav.home">{{ __('site.nav.home') }}</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <a href="{{ url('services') }}"
                                class="text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white"
                                data-i18n="nav.services">{{ __('site.nav.services') }}</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400"
                                data-i18n="service_software.title">{{ __('site.service_software.title') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-20 bg-white dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                        data-i18n="service_software.subtitle">{{ __('site.service_software.subtitle') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-6 text-gray-900 dark:text-white"
                        data-i18n="service_software.heading">{{ __('site.service_software.heading') }}</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed"
                        data-i18n="service_software.description">
                        {{ __('site.service_software.description') }}
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-500 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300"
                                data-i18n="service_software.feature1">{{ __('site.service_software.feature1') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-500 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300"
                                data-i18n="service_software.feature2">{{ __('site.service_software.feature2') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-500 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300" data-i18n="service_software.feature3">{{ __('site.service_software.feature3') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-500 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300"
                                data-i18n="service_software.feature4">{{ __('site.service_software.feature4') }}</span>
                        </li>
                    </ul>
                </div>
                <div data-aos="fade-left">
                    <div
                        class="glass-card p-8 rounded-3xl border border-gray-200 dark:border-white/5 shadow-2xl dark:shadow-none">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="text-center p-6 bg-brand-50 dark:bg-brand-900/20 rounded-2xl">
                                <i class="fas fa-chart-line text-4xl text-brand-600 dark:text-brand-400 mb-3"></i>
                                <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="service_software.erp">{{ __('site.service_software.erp') }}
                                </h4>
                            </div>
                            <div class="text-center p-6 bg-accent-50 dark:bg-accent-900/20 rounded-2xl">
                                <i class="fas fa-users text-4xl text-accent-600 dark:text-accent-400 mb-3"></i>
                                <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="service_software.crm">{{ __('site.service_software.crm') }}
                                </h4>
                            </div>
                            <div class="text-center p-6 bg-green-50 dark:bg-green-900/20 rounded-2xl">
                                <i class="fas fa-cash-register text-4xl text-green-600 dark:text-green-400 mb-3"></i>
                                <h4 class="font-bold text-gray-900 dark:text-white" data-i18n="service_software.pos">{{ __('site.service_software.pos') }}
                                </h4>
                            </div>
                            <div class="text-center p-6 bg-purple-50 dark:bg-purple-900/20 rounded-2xl">
                                <i class="fas fa-tachometer-alt text-4xl text-purple-600 dark:text-purple-400 mb-3"></i>
                                <h4 class="font-bold text-gray-900 dark:text-white"
                                    data-i18n="service_software.dashboard">{{ __('site.service_software.dashboard') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Software Solutions -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                    data-i18n="service_software.solutions_subtitle">{{ __('site.service_software.solutions_subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white"
                    data-i18n="service_software.solutions_title">{{ __('site.service_software.solutions_title') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- ERP -->
                <div class="glass-card p-8 rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-brand-100 dark:bg-brand-500/10 rounded-2xl flex items-center justify-center text-brand-600 dark:text-brand-400 text-3xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white"
                        data-i18n="service_software.erp_title">{{ __('site.service_software.erp_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4" data-i18n="service_software.erp_desc">
                        {{ __('site.service_software.erp_desc') }}
                    </p>
                </div>

                <!-- CRM -->
                <div class="glass-card p-8 rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-accent-100 dark:bg-accent-500/10 rounded-2xl flex items-center justify-center text-accent-600 dark:text-accent-400 text-3xl mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white"
                        data-i18n="service_software.crm_title">{{ __('site.service_software.crm_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4" data-i18n="service_software.crm_desc">
                        {{ __('site.service_software.crm_desc') }}
                    </p>
                </div>

                <!-- POS -->
                <div class="glass-card p-8 rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-green-100 dark:bg-green-500/10 rounded-2xl flex items-center justify-center text-green-600 dark:text-green-400 text-3xl mb-6">
                        <i class="fas fa-cash-register"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white"
                        data-i18n="service_software.pos_title">{{ __('site.service_software.pos_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4" data-i18n="service_software.pos_desc">
                        {{ __('site.service_software.pos_desc') }}
                    </p>
                </div>

                <!-- Inventory -->
                <div class="glass-card p-8 rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-purple-100 dark:bg-purple-500/10 rounded-2xl flex items-center justify-center text-purple-600 dark:text-purple-400 text-3xl mb-6">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white"
                        data-i18n="service_software.inventory_title">{{ __('site.service_software.inventory_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4" data-i18n="service_software.inventory_desc">
                        {{ __('site.service_software.inventory_desc') }}
                    </p>
                </div>

                <!-- HR -->
                <div class="glass-card p-8 rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-16 h-16 bg-orange-100 dark:bg-orange-500/10 rounded-2xl flex items-center justify-center text-orange-600 dark:text-orange-400 text-3xl mb-6">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white"
                        data-i18n="service_software.hr_title">{{ __('site.service_software.hr_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4" data-i18n="service_software.hr_desc">
                        {{ __('site.service_software.hr_desc') }}
                    </p>
                </div>

                <!-- Analytics -->
                <div class="glass-card p-8 rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="w-16 h-16 bg-blue-100 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center text-blue-600 dark:text-blue-400 text-3xl mb-6">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white"
                        data-i18n="service_software.analytics_title">{{ __('site.service_software.analytics_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4" data-i18n="service_software.analytics_desc">
                        {{ __('site.service_software.analytics_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-brand-600 to-brand-700 dark:from-brand-700 dark:to-accent-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up"
                data-i18n="service_software.cta_title">{{ __('site.service_software.cta_title') }}</h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100"
                data-i18n="service_software.cta_desc">
                {{ __('site.service_software.cta_desc') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ url('contact') }}"
                    class="bg-white text-brand-600 hover:bg-gray-100 px-8 py-4 rounded-full font-semibold transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1"
                    data-i18n="service_software.cta_button1">{{ __('site.service_software.cta_button1') }}</a>
                <a href="{{ url('projects') }}"
                    class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-brand-600 px-8 py-4 rounded-full font-semibold transition-all"
                    data-i18n="service_software.cta_button2">{{ __('site.service_software.cta_button2') }}</a>
            </div>
        </div>
    </section>
@endsection
