@extends('layouts.web')

@section('title', 'Digital & Marketing Solutions')

@section('content')
    <!-- Hero Section -->
    <section id="home"
        class="relative min-h-screen flex items-center justify-center pt-20 hero-bg overflow-hidden bg-gray-50 dark:bg-slate-900 transition-colors duration-300">

        <!-- Subtle Ambient Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-brand-500/5 dark:bg-brand-500/10 rounded-full blur-[120px]">
            </div>
            <div
                class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-accent-500/5 dark:bg-accent-500/10 rounded-full blur-[120px]">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center" data-aos="fade-up"
            data-aos-duration="1000">

            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-gray-200 text-brand-600 dark:bg-white/5 dark:border-white/10 dark:text-brand-300 text-sm font-medium mb-8 backdrop-blur-sm shadow-sm dark:shadow-none">
                <span class="w-2 h-2 rounded-full bg-brand-500 dark:bg-brand-400 animate-pulse"></span>
                <span data-i18n="hero.badge">{{ __('site.hero.badge') }}</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-8 text-gray-900 dark:text-white tracking-tight">
                <span data-i18n="hero.title_prefix">{{ __('site.hero.title_prefix') }}</span> <br />
                <span class="text-brand-500" data-i18n="hero.title_highlight">{{ __('site.hero.title_highlight') }}</span>
            </h1>

            <!-- Subheading -->
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 mb-10 max-w-2xl mx-auto leading-relaxed"
                data-i18n="hero.subtitle">
                {{ __('site.hero.subtitle') }}
            </p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#projects"
                    class="group px-8 py-4 bg-brand-500 rounded-full text-white font-semibold shadow-lg shadow-brand-500/20 hover:bg-brand-600 transition-all hover:-translate-y-0.5 w-full sm:w-auto">
                    <span data-i18n="hero.btn_work">{{ __('site.hero.btn_work') }}</span>
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="#contact" data-i18n="hero.btn_contact"
                    class="px-8 py-4 bg-white text-gray-900 hover:bg-gray-50 border border-gray-200 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 dark:border-white/10 rounded-full font-semibold backdrop-blur-sm transition-colors w-full sm:w-auto shadow-sm dark:shadow-none">
                    {{ __('site.hero.btn_contact') }}
                </a>
            </div>

            <!-- Stats/Trust Indicators (Simplified) -->
            <div
                class="mt-16 pt-8 border-t border-gray-200 dark:border-white/5 grid grid-cols-1 sm:grid-cols-3 gap-8 max-w-2xl mx-auto">
                <div>
                    <span class="block text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-1">55+</span>
                    <span class="text-xs md:text-sm text-gray-500 dark:text-gray-400"
                        data-i18n="hero.stats_clients">{{ __('site.hero.stats_clients') }}</span>
                </div>
                <div>
                    <span class="block text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-1">95+</span>
                    <span class="text-xs md:text-sm text-gray-500 dark:text-gray-400"
                        data-i18n="hero.stats_projects">{{ __('site.hero.stats_projects') }}</span>
                </div>
                <div>
                    <span class="block text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-1">4.9/5</span>
                    <span class="text-xs md:text-sm text-gray-500 dark:text-gray-400"
                        data-i18n="hero.stats_rating">{{ __('site.hero.stats_rating') }}</span>
                </div>
            </div>
        </div>

    </section>

    <!-- About Section -->
    <section id="about" class="py-20 relative overflow-hidden bg-slate-900">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-linear-to-l from-brand-900/20 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="fade-right">
                    <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl group">
                        <img src="{{ asset('img/about-1.webp') }}" alt="About Us"
                            class="w-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-slate-900 via-transparent to-transparent opacity-60">
                        </div>
                    </div>
                    <!-- Floater -->
                    <div class="absolute -bottom-8 -right-8 glass-card p-6 rounded-2xl max-w-xs hidden md:block animate-float"
                        style="animation-delay: 2s;">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2"
                            data-i18n="floater.philosophy">{{ __('site.floater.philosophy') }}</p>
                        <div class="flex items-center gap-2">
                            <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
                            <span class="text-xs text-brand-400 font-bold uppercase" data-i18n="floater.label">{{ __('site.floater.label') }}</span>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <span class="text-brand-400 font-semibold tracking-wider text-sm" data-i18n="about.chip">WHO WE
                        ARE</span>
                    <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-6" data-i18n="about.title">{!! __('site.about.title') !!}</h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6" data-i18n="about.desc1">
                        {!! __('site.about.desc1') !!}
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed mb-8" data-i18n="about.desc2">
                        {{ __('site.about.desc2') }}
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-500/20 flex items-center justify-center text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-300" data-i18n="about.point1">{{ __('site.about.point1') }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-500/20 flex items-center justify-center text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-300" data-i18n="about.point2">{{ __('site.about.point2') }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-500/20 flex items-center justify-center text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-300" data-i18n="about.point3">{{ __('site.about.point3') }}</span>
                        </div>
                    </div>

                    <a href="#contact"
                        class="inline-flex items-center gap-2 text-white font-semibold group hover:text-brand-400 transition-colors">
                        <span data-i18n="about.btn">{{ __('site.about.btn') }}</span> <i
                            class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50 dark:bg-slate-900 relative transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                    data-i18n="services.subtitle">WHAT WE
                    DO</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white"
                    data-i18n="services.title">{!! __('site.services.title') !!}
                </h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto" data-i18n="services.description">{{ __('site.services.description') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-brand-100 dark:bg-brand-500/10 rounded-2xl flex items-center justify-center text-brand-600 dark:text-brand-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-brand-300 transition-colors"
                        data-i18n="services.branding.title">{{ __('site.services.branding.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6"
                        data-i18n="services.branding.desc">{{ __('site.services.branding.desc') }}</p>
                    <a href="#"
                        class="text-sm font-semibold text-brand-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span data-i18n="services.learn_more">Learn More</span> <i
                            class="fas fa-arrow-right text-brand-600 dark:text-brand-500"></i>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-accent-100 dark:bg-accent-500/10 rounded-2xl flex items-center justify-center text-accent-600 dark:text-accent-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-accent-600 dark:group-hover:text-accent-300 transition-colors"
                        data-i18n="services.web.title">{{ __('site.services.web.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6"
                        data-i18n="services.web.desc">{{ __('site.services.web.desc') }}</p>
                    <a href="#"
                        class="text-sm font-semibold text-accent-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span data-i18n="services.learn_more">Learn More</span> <i
                            class="fas fa-arrow-right text-accent-600 dark:text-accent-500"></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-pink-100 dark:bg-pink-500/10 rounded-2xl flex items-center justify-center text-pink-600 dark:text-pink-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-pink-600 dark:group-hover:text-pink-300 transition-colors"
                        data-i18n="services.app.title">{{ __('site.services.app.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6"
                        data-i18n="services.app.desc">{{ __('site.services.app.desc') }}
                    </p>
                    <a href="#"
                        class="text-sm font-semibold text-pink-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span data-i18n="services.learn_more">Learn More</span> <i
                            class="fas fa-arrow-right text-pink-600 dark:text-pink-500"></i>
                    </a>
                </div>

                <!-- Service 4 -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 bg-green-100 dark:bg-green-500/10 rounded-2xl flex items-center justify-center text-green-600 dark:text-green-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-300 transition-colors"
                        data-i18n="services.marketing.title">{{ __('site.services.marketing.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6"
                        data-i18n="services.marketing.desc">{{ __('site.services.marketing.desc') }}</p>
                    <a href="#"
                        class="text-sm font-semibold text-green-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span data-i18n="services.learn_more">Learn More</span> <i
                            class="fas fa-arrow-right text-green-600 dark:text-green-500"></i>
                    </a>
                </div>

                <!-- Service 5 -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-14 h-14 bg-yellow-100 dark:bg-yellow-500/10 rounded-2xl flex items-center justify-center text-yellow-600 dark:text-yellow-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-yellow-600 dark:group-hover:text-yellow-300 transition-colors"
                        data-i18n="services.ecommerce.title">{{ __('site.services.ecommerce.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6"
                        data-i18n="services.ecommerce.desc">{{ __('site.services.ecommerce.desc') }}</p>
                    <a href="#"
                        class="text-sm font-semibold text-yellow-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span data-i18n="services.learn_more">Learn More</span> <i
                            class="fas fa-arrow-right text-yellow-600 dark:text-yellow-500"></i>
                    </a>
                </div>

                <!-- Service 6 -->
                <div class="group glass-card bg-white dark:bg-slate-800 p-8 rounded-3xl hover:bg-gray-100 dark:hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="w-14 h-14 bg-teal-100 dark:bg-teal-500/10 rounded-2xl flex items-center justify-center text-teal-600 dark:text-teal-400 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-teal-600 dark:group-hover:text-teal-300 transition-colors"
                        data-i18n="services.software.title">{{ __('site.services.software.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6"
                        data-i18n="services.software.desc">{{ __('site.services.software.desc') }}</p>
                    <a href="#"
                        class="text-sm font-semibold text-teal-600 dark:text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                        <span data-i18n="services.learn_more">Learn More</span> <i
                            class="fas fa-arrow-right text-teal-500"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects"
        class="py-20 bg-gray-50 dark:bg-slate-900 border-t border-gray-200 dark:border-white/5 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6" data-aos="fade-up">
                <div>
                    <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                        data-i18n="projects.subtitle">{{ __('site.projects.subtitle') }}</span>
                    <h2 class="text-3xl md:text-5xl font-bold mt-2 text-gray-900 dark:text-white"
                        data-i18n="projects.title">{!! __('site.projects.title') !!}</h2>
                </div>
                <!-- Filter Buttons (Simplified for HTML version) -->
                <div class="flex flex-wrap gap-2">
                    <button class="px-5 py-2 rounded-full bg-brand-500 text-white text-sm font-medium shadow-md"
                        data-i18n="projects.filter_all">{{ __('site.projects.filter_all') }}</button>
                    <button
                        class="px-5 py-2 rounded-full glass bg-white/50 dark:bg-white/5 hover:bg-gray-200 dark:hover:bg-white/10 text-gray-600 dark:text-gray-300 text-sm font-medium transition-colors"
                        data-i18n="projects.filter_web">{{ __('site.projects.filter_web') }}</button>
                    <button
                        class="px-5 py-2 rounded-full glass bg-white/50 dark:bg-white/5 hover:bg-gray-200 dark:hover:bg-white/10 text-gray-600 dark:text-gray-300 text-sm font-medium transition-colors"
                        data-i18n="projects.filter_app">{{ __('site.projects.filter_app') }}</button>
                    <button
                        class="px-5 py-2 rounded-full glass bg-white/50 dark:bg-white/5 hover:bg-gray-200 dark:hover:bg-white/10 text-gray-600 dark:text-gray-300 text-sm font-medium transition-colors"
                        data-i18n="projects.filter_branding">{{ __('site.projects.filter_branding') }}</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="100"
                    onclick="window.location.href='{{ url('project-details') }}?id=mazzawi'">
                    <img src="{{ asset('img/portfolio/Web Design & Development/web1.webp') }}" alt="Mazzawi Contracting"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 flex flex-col justify-end">
                        <span
                            class="text-brand-400 text-xs font-bold uppercase tracking-wider mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Web
                            Development</span>
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75"
                            data-i18n="projects.project1_title">{{ __('site.projects.project1_title') }}</h3>
                        <p class="text-gray-300 text-sm line-clamp-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100"
                            data-i18n="projects.project1_description">{{ __('site.projects.project1_description') }}</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="200"
                    onclick="window.location.href='{{ url('project-details') }}?id=noor-alsham'">
                    <img src="{{ asset('img/portfolio/Web Design & Development/web2.webp') }}" alt="Noor Al Sham"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 flex flex-col justify-end">
                        <span
                            class="text-brand-400 text-xs font-bold uppercase tracking-wider mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Web
                            Development</span>
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75"
                            data-i18n="projects.project2_title">{{ __('site.projects.project2_title') }}</h3>
                        <p class="text-gray-300 text-sm line-clamp-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100"
                            data-i18n="projects.project2_description">{{ __('site.projects.project2_description') }}</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="300"
                    onclick="window.location.href='{{ url('project-details') }}?id=abby-physics'">
                    <img src="{{ asset('img/portfolio/Apps Development/app1.webp') }}" alt="Abby Physics"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 flex flex-col justify-end">
                        <span
                            class="text-pink-400 text-xs font-bold uppercase tracking-wider mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300"
                            data-i18n="project3.cat">App
                            Development</span>
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75"
                            data-i18n="projects.project3_title">{{ __('site.projects.project3_title') }}</h3>
                        <p class="text-gray-300 text-sm line-clamp-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100"
                            data-i18n="projects.project3_description">{{ __('site.projects.project3_description') }}</p>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="400"
                    onclick="window.location.href='{{ url('project-details') }}?id=ab-creates'">
                    <img src="{{ asset('img/portfolio/Branding & Creative Design/branding.webp') }}" alt="AB Creates"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 flex flex-col justify-end">
                        <span
                            class="text-purple-400 text-xs font-bold uppercase tracking-wider mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300"
                            data-i18n="project4.cat">Branding</span>
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75"
                            data-i18n="projects.project6_title">{{ __('site.projects.project6_title') }}</h3>
                        <p class="text-gray-300 text-sm line-clamp-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100"
                            data-i18n="projects.project6_description">{{ __('site.projects.project6_description') }}</p>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="500"
                    onclick="window.location.href='{{ url('project-details') }}?id=mas-riyadh'">
                    <img src="{{ asset('img/portfolio/E-commerce/e-commerce.webp') }}" alt="E-commerce App"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 flex flex-col justify-end">
                        <span
                            class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300"
                            data-i18n="project5.cat">E-Commerce</span>
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75"
                            data-i18n="projects.project9_title">{{ __('site.projects.project9_title') }}</h3>
                        <p class="text-gray-300 text-sm line-clamp-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100"
                            data-i18n="projects.project9_description">{{ __('site.projects.project9_description') }}</p>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="600"
                    onclick="window.location.href='{{ url('project-details') }}?id=marketing-campaign'">
                    <img src="{{ asset('img/portfolio/Digital Marketing/digitalmarketing1.webp') }}" alt="Marketing Campaign"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 flex flex-col justify-end">
                        <span
                            class="text-green-400 text-xs font-bold uppercase tracking-wider mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300"
                            data-i18n="project6.cat">Marketing</span>
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75"
                            data-i18n="projects.project5_title">{{ __('site.projects.project5_title') }}</h3>
                        <p class="text-gray-300 text-sm line-clamp-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100"
                            data-i18n="projects.project5_description">{{ __('site.projects.project5_description') }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center">
                <a href="#projects"
                    class="inline-block px-8 py-3 rounded-full border border-gray-300 dark:border-white/10 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors text-gray-900 dark:text-white font-medium"
                    data-i18n="projects.view_all">{{ __('site.projects.view_all') }}</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section
        class="py-20 relative overflow-hidden bg-slate-900 dark:bg-slate-900 bg-white transition-colors duration-300">
        <!-- Dark Mode Background -->
        <div class="absolute top-0 left-0 w-full h-full bg-slate-900 opacity-90 z-0 hidden dark:block"></div>
        <!-- Light Mode Background -->
        <div class="absolute top-0 left-0 w-full h-full bg-gray-50 z-0 dark:hidden"></div>

        <!-- bg pattern -->
        <div class="absolute inset-0 z-0 opacity-10"
            style="background-image: radial-gradient(#38bdf8 1px, transparent 1px); background-size: 32px 32px;">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                    data-i18n="testimonials.subtitle">{{ __('site.testimonials.subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 text-gray-900 dark:text-white"
                    data-i18n="testimonials.title">{!! __('site.testimonials.title') !!}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="glass-card bg-white dark:bg-white/5 p-8 rounded-3xl relative border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-4xl text-gray-200 dark:text-white/5"></i>
                    <div class="flex text-yellow-500 text-sm mb-6">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6"
                        data-i18n="testimonial1.text">{{ __('site.testimonials.testimonial1.text') }}</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('img/testimonial-1.webp') }}" alt="Client"
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-brand-500/50">
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-sm"
                                data-i18n="testimonial1.name">{{ __('site.testimonials.testimonial1.name') }}</h4>
                            <p class="text-xs text-brand-600 dark:text-brand-400"
                                data-i18n="testimonial1.role">{{ __('site.testimonials.testimonial1.role') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="glass-card bg-white dark:bg-white/5 p-8 rounded-3xl relative border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-4xl text-gray-200 dark:text-white/5"></i>
                    <div class="flex text-yellow-500 text-sm mb-6">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6"
                        data-i18n="testimonial2.text">{{ __('site.testimonials.testimonial2.text') }}</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('img/testimonial-2.webp') }}" alt="Client"
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-brand-500/50">
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-sm"
                                data-i18n="testimonial2.name">{{ __('site.testimonials.testimonial2.name') }}</h4>
                            <p class="text-xs text-brand-600 dark:text-brand-400"
                                data-i18n="testimonial2.role">{{ __('site.testimonials.testimonial2.role') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="glass-card bg-white dark:bg-white/5 p-8 rounded-3xl relative border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none"
                    data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-4xl text-gray-200 dark:text-white/5"></i>
                    <div class="flex text-yellow-500 text-sm mb-6">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6"
                        data-i18n="testimonial3.text">{{ __('site.testimonials.testimonial3.text') }}</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('img/testimonial-3.webp') }}" alt="Client"
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-brand-500/50">
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white text-sm"
                                data-i18n="testimonial3.name">{{ __('site.testimonials.testimonial3.name') }}</h4>
                            <p class="text-xs text-brand-600 dark:text-brand-400"
                                data-i18n="testimonial3.role">{{ __('site.testimonials.testimonial3.role') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="py-20 bg-white dark:bg-slate-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                    data-i18n="clients.section_subtitle">{{ __('site.clients.subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white"
                    data-i18n="clients.section_title">{!! __('site.clients.title') !!}
                </h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center opacity-60 dark:opacity-40">
                <!-- Client 1 -->
                <div class="flex justify-center p-4 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 1" class="h-12 w-auto object-contain">
                </div>
                <!-- Client 2 -->
                <div class="flex justify-center p-4 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 2" class="h-12 w-auto object-contain">
                </div>
                <!-- Client 3 -->
                <div class="flex justify-center p-4 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 3" class="h-12 w-auto object-contain">
                </div>
                <!-- Client 4 -->
                <div class="flex justify-center p-4 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 4" class="h-12 w-auto object-contain">
                </div>
                <!-- Client 5 -->
                <div class="flex justify-center p-4 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 5" class="h-12 w-auto object-contain">
                </div>
                <!-- Client 6 -->
                <div class="flex justify-center p-4 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client 6" class="h-12 w-auto object-contain">
                </div>
            </div>

            <div class="mt-16 text-center" data-aos="fade-up">
                <a href="clients.html"
                    class="inline-flex items-center gap-2 text-brand-600 dark:text-brand-400 font-semibold hover:gap-3 transition-all">
                    <span data-i18n="clients.view_all">{{ __('site.clients_page.view_all') }}</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 dark:bg-slate-900 relative transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div data-aos="fade-right">
                    <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                        data-i18n="contact.subtitle">{{ __('site.contact.subtitle') }}</span>
                    <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-6 text-gray-900 dark:text-white"
                        data-i18n="contact.title">{!! __('site.contact.title') !!}</h2>
                    <p class="text-gray-600 dark:text-gray-400 text-lg mb-10 max-w-lg" data-i18n="contact.desc">
                        {{ __('site.contact.description') }}
                    </p>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-brand-100 dark:bg-brand-500/10 flex items-center justify-center text-brand-600 dark:text-brand-400 text-xl shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-bold text-lg mb-1"
                                    data-i18n="contact.location_title">{{ __('site.contact.location_title') }}</h4>
                                <p class="text-gray-600 dark:text-gray-400" data-i18n="contact.location">{{ __('site.contact.location') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-brand-100 dark:bg-brand-500/10 flex items-center justify-center text-brand-600 dark:text-brand-400 text-xl shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-bold text-lg mb-1"
                                    data-i18n="contact.email_title">{{ __('site.contact.email_title') }}</h4>
                                <p class="text-gray-600 dark:text-gray-400">info@believe-agency.net</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-brand-100 dark:bg-brand-500/10 flex items-center justify-center text-brand-600 dark:text-brand-400 text-xl shrink-0">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-bold text-lg mb-1"
                                    data-i18n="contact.phone_title">{{ __('site.contact.phone_title') }}</h4>
                                <p class="text-gray-600 dark:text-gray-400">+20 15 0529 4544</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div
                        class="glass-card bg-white dark:bg-slate-800 p-8 md:p-10 rounded-3xl border border-gray-200 dark:border-white/5 relative z-10 shadow-xl dark:shadow-none">
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-gray-600 dark:text-gray-400"
                                        data-i18n="contact.form.name">{{ __('site.contact.form_name') }}</label>
                                    <input type="text" data-i18n="contact.form.name"
                                        class="w-full bg-gray-50 dark:bg-slate-800/50 border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors"
                                        placeholder="{{ __('site.contact.form_name_placeholder') }}">
                                </div>
                                <div class="space-y-2">
                                        data-i18n="contact.form.phone">{{ __('site.contact.form_phone') }}</label>
                                    <input type="tel" data-i18n="contact.form.phone"
                                        class="w-full bg-gray-50 dark:bg-slate-800/50 border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors"
                                        placeholder="{{ __('site.contact.form_phone_placeholder') }}">
                                </div>
                            </div>

                            <div class="space-y-2">
                                    data-i18n="contact.form.email">{{ __('site.contact.form_email') }}</label>
                                <input type="email" data-i18n="contact.form.email"
                                    class="w-full bg-gray-50 dark:bg-slate-800/50 border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors"
                                    placeholder="{{ __('site.contact.form_email_placeholder') }}">
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-600 dark:text-gray-400"
                                    data-i18n="contact.form.message">{{ __('site.contact.form_message') }}</label>
                                <textarea rows="4" data-i18n="contact.form.message"
                                    class="w-full bg-gray-50 dark:bg-slate-800/50 border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-colors resize-none"
                                    placeholder="{{ __('site.contact.form_message_placeholder') }}"></textarea>
                            </div>

                            <button type="button"
                                class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-4 rounded-xl shadow-lg shadow-brand-500/25 transition-all transform hover:-translate-y-1">
                                <span data-i18n="contact.form.submit">{{ __('site.contact.form_submit') }}</span> <i
                                    class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Decorative blur -->
                    <div
                        class="absolute -top-10 -right-10 w-40 h-40 bg-accent-500 rounded-full blur-3xl opacity-20 z-0">
                    </div>
                    <div
                        class="absolute -bottom-10 -left-10 w-40 h-40 bg-brand-500 rounded-full blur-3xl opacity-20 z-0">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
