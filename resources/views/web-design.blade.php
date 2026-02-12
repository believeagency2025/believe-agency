@extends('layouts.web')

@section('title', 'Web Design & Development')

@section('content')
    <!-- Page Header/Hero -->
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
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up">
                {{ __('site.service_web.title') }}</h1>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white">
                            {{ __('site.nav.home') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <a href="{{ url('services') }}"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white">
                                {{ __('site.nav.services') }}
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400"
                                >{{ __('site.service_web.breadcrumb') }}</span>
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
                            {{ __('site.service_web.heading') }}</h2>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-lg">
                            {{ __('site.service_web.description') }}
                        </p>
                    </div>

                    <!-- Offers Grid -->
                    <div class="mb-16">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
                            {{ __('site.service_web.offer_title') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Feature 1 -->
                            <div class="flex gap-4 p-6 rounded-2xl bg-gray-50 dark:bg-slate-800/50 border border-gray-100 dark:border-white/5 hover:border-brand-500/30 transition-colors"
                                data-aos="fade-up" data-aos-delay="100">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-green-100 dark:bg-green-500/10 flex items-center justify-center text-green-600 dark:text-green-400 text-xl">
                                        <i class="fas fa-desktop"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2"
                                        data-i18n="service_web.offer1_title">{{ __('site.service_web.offer1_title') }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"
                                        data-i18n="service_web.offer1_desc">{{ __('site.service_web.offer1_desc') }}</p>
                                </div>
                            </div>
                            <!-- Feature 2 -->
                            <div class="flex gap-4 p-6 rounded-2xl bg-gray-50 dark:bg-slate-800/50 border border-gray-100 dark:border-white/5 hover:border-brand-500/30 transition-colors"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400 text-xl">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2"
                                        data-i18n="service_web.offer2_title">{{ __('site.service_web.offer2_title') }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"
                                        data-i18n="service_web.offer2_desc">{{ __('site.service_web.offer2_desc') }}</p>
                                </div>
                            </div>
                            <!-- Feature 3 -->
                            <div class="flex gap-4 p-6 rounded-2xl bg-gray-50 dark:bg-slate-800/50 border border-gray-100 dark:border-white/5 hover:border-brand-500/30 transition-colors"
                                data-aos="fade-up" data-aos-delay="300">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-500/10 flex items-center justify-center text-purple-600 dark:text-purple-400 text-xl">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2"
                                        data-i18n="service_web.offer3_title">{{ __('site.service_web.offer3_title') }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"
                                        data-i18n="service_web.offer3_desc">{{ __('site.service_web.offer3_desc') }}</p>
                                </div>
                            </div>
                            <!-- Feature 4 -->
                            <div class="flex gap-4 p-6 rounded-2xl bg-gray-50 dark:bg-slate-800/50 border border-gray-100 dark:border-white/5 hover:border-brand-500/30 transition-colors"
                                data-aos="fade-up" data-aos-delay="400">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-orange-100 dark:bg-orange-500/10 flex items-center justify-center text-orange-600 dark:text-orange-400 text-xl">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2"
                                        data-i18n="service_web.offer4_title">{{ __('site.service_web.offer4_title') }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"
                                        data-i18n="service_web.offer4_desc">{{ __('site.service_web.offer4_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process -->
                    <div class="mb-16">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
                            {{ __('site.service_web.process_title') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="text-center relative p-6 rounded-2xl bg-white dark:bg-slate-800 border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-shadow"
                                data-aos="fade-up" data-aos-delay="100">
                                <div
                                    class="w-16 h-16 mx-auto bg-brand-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-lg shadow-brand-500/30">
                                    1</div>
                                <h4 class="font-bold text-gray-900 dark:text-white mb-2">
                                    {{ __('site.service_web.process1_title') }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('site.service_web.process1_desc') }}</p>
                            </div>
                            <div class="text-center relative p-6 rounded-2xl bg-white dark:bg-slate-800 border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-shadow"
                                data-aos="fade-up" data-aos-delay="200">
                                <div
                                    class="w-16 h-16 mx-auto bg-brand-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-lg shadow-brand-500/30">
                                    2</div>
                                <h4 class="font-bold text-gray-900 dark:text-white mb-2">
                                    {{ __('site.service_web.process2_title') }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('site.service_web.process2_desc') }}</p>
                            </div>
                            <div class="text-center relative p-6 rounded-2xl bg-white dark:bg-slate-800 border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-shadow"
                                data-aos="fade-up" data-aos-delay="300">
                                <div
                                    class="w-16 h-16 mx-auto bg-brand-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-lg shadow-brand-500/30">
                                    3</div>
                                <h4 class="font-bold text-gray-900 dark:text-white mb-2">
                                    {{ __('site.service_web.process3_title') }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('site.service_web.process3_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- CTA Widget -->
                    <div class="glass-card bg-brand-600 text-white p-8 rounded-3xl text-center relative overflow-hidden"
                        data-aos="fade-up">
                        <div class="absolute inset-0 bg-linear-to-br from-brand-500 to-brand-700 opacity-90"></div>
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-4">{{ __('site.service_web.cta_title') }}</h3>
                            <p class="text-brand-100 mb-8 text-sm">{{ __('site.service_web.cta_desc') }}</p>
                            <a href="{{ url('contact') }}"
                                class="inline-flex items-center justify-center bg-white text-brand-600 font-bold py-3 px-6 rounded-full w-full hover:bg-brand-50 transition-colors mb-4">
                                {{ __('site.service_web.cta_btn1') }}
                            </a>
                            <a href="tel:+201505194544"
                                class="inline-flex items-center justify-center border-2 border-white/30 text-white font-bold py-3 px-6 rounded-full w-full hover:bg-white/10 transition-colors">
                                {{ __('site.service_web.cta_btn2') }}
                            </a>
                        </div>
                    </div>

                    <!-- Why Choose Us Widget -->
                    <div class="bg-gray-50 dark:bg-slate-800 p-8 rounded-3xl border border-gray-100 dark:border-white/5"
                        data-aos="fade-up" data-aos-delay="100">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-6">
                            {{ __('site.service_web.why_title') }}</h4>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-check-circle text-brand-500 text-lg"></i>
                                <span>{{ __('site.service_web.why1') }}</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-check-circle text-brand-500 text-lg"></i>
                                <span>{{ __('site.service_web.why2') }}</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-check-circle text-brand-500 text-lg"></i>
                                <span>{{ __('site.service_web.why3') }}</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-check-circle text-brand-500 text-lg"></i>
                                <span>{{ __('site.service_web.why4') }}</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-check-circle text-brand-500 text-lg"></i>
                                <span>{{ __('site.service_web.why5') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
