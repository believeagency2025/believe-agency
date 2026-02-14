@extends('layouts.web')

@section('title', 'Our Services')

@section('content')
    <!-- Page Header/Hero -->
    <section class="relative pt-24 md:pt-32 pb-20 hero-bg overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-[30%] left-[-10%] w-[50%] h-[50%] bg-brand-500/5 dark:bg-brand-500/10 rounded-full blur-[150px]">
            </div>
            <div
                class="absolute bottom-[10%] right-[-10%] w-[40%] h-[40%] bg-purple-500/5 dark:bg-purple-500/10 rounded-full blur-[120px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up">
                {{ __('site.nav.services') }}</h1>
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
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                {{ __('site.nav.services') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white dark:bg-slate-800 border-y border-gray-200 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-200 dark:divide-white/5">
                <div data-aos="fade-up" data-aos-delay="0">
                    <span
                        class="block text-3xl md:text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">55+</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('site.hero.stats_clients') }}</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <span
                        class="block text-3xl md:text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">95+</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('site.hero.stats_projects') }}</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <span
                        class="block text-3xl md:text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">120+</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('site.facts.total_clients') }}</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <span
                        class="block text-3xl md:text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">5.0</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('site.facts.star_reviews') }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm">
                    {{ __('site.services.subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white">
                    {!! __('site.services.title') !!}</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">{{ __('site.services.description') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Branding -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-brand-100 dark:bg-brand-500/10 rounded-2xl flex items-center justify-center text-brand-600 dark:text-brand-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-brand-300 transition-colors">
                        {{ __('site.services.branding.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                        {{ __('site.services.branding.desc') }}</p>
                    <a href="{{ url('branding') }}"
                        class="text-sm font-semibold text-brand-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span>{{ __('site.services.learn_more') }}</span> <i
                            class="fas fa-arrow-right text-brand-600 dark:text-brand-500"></i>
                    </a>
                </div>

                <!-- Web Development -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-accent-100 dark:bg-accent-500/10 rounded-2xl flex items-center justify-center text-accent-600 dark:text-accent-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-accent-600 dark:group-hover:text-accent-300 transition-colors">
                        {{ __('site.services.web.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                        {{ __('site.services.web.desc') }}</p>
                    <a href="{{ url('web-design') }}"
                        class="text-sm font-semibold text-accent-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span>{{ __('site.services.learn_more') }}</span> <i
                            class="fas fa-arrow-right text-accent-600 dark:text-accent-500"></i>
                    </a>
                </div>

                <!-- App Development -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-pink-100 dark:bg-pink-500/10 rounded-2xl flex items-center justify-center text-pink-600 dark:text-pink-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-pink-600 dark:group-hover:text-pink-300 transition-colors">
                        {{ __('site.services.app.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                        {{ __('site.services.app.desc') }}</p>
                    <a href="{{ url('apps-development') }}"
                        class="text-sm font-semibold text-pink-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span>{{ __('site.services.learn_more') }}</span> <i
                            class="fas fa-arrow-right text-pink-600 dark:text-pink-500"></i>
                    </a>
                </div>

                <!-- E-Commerce -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 bg-yellow-100 dark:bg-yellow-500/10 rounded-2xl flex items-center justify-center text-yellow-600 dark:text-yellow-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-yellow-600 dark:group-hover:text-yellow-300 transition-colors">
                        {{ __('site.services.ecommerce.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                        {{ __('site.services.ecommerce.desc') }}</p>
                    <a href="{{ url('ecommerce') }}"
                        class="text-sm font-semibold text-yellow-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span>{{ __('site.services.learn_more') }}</span> <i
                            class="fas fa-arrow-right text-yellow-600 dark:text-yellow-500"></i>
                    </a>
                </div>

                <!-- Digital Marketing -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-14 h-14 bg-green-100 dark:bg-green-500/10 rounded-2xl flex items-center justify-center text-green-600 dark:text-green-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-300 transition-colors">
                        {{ __('site.services.marketing.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                        {{ __('site.services.marketing.desc') }}</p>
                    <a href="{{ url('marketing') }}"
                        class="text-sm font-semibold text-green-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span>{{ __('site.services.learn_more') }}</span> <i
                            class="fas fa-arrow-right text-green-600 dark:text-green-500"></i>
                    </a>
                </div>

                <!-- Software Solutions -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="w-14 h-14 bg-teal-100 dark:bg-teal-500/10 rounded-2xl flex items-center justify-center text-teal-600 dark:text-teal-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-teal-600 dark:group-hover:text-teal-300 transition-colors">
                        {{ __('site.services.software.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                        {{ __('site.services.software.desc') }}</p>
                    <a href="{{ url('software-tools') }}"
                        class="text-sm font-semibold text-teal-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span>{{ __('site.services.learn_more') }}</span> <i
                            class="fas fa-arrow-right text-teal-500"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
