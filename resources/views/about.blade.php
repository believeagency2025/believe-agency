@extends('layouts.web')

@section('title', 'About Us')

@section('content')
    <!-- Page Header/Hero -->
    <section class="relative pt-24 md:pt-32 pb-20 hero-bg overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] bg-brand-500/5 dark:bg-brand-500/10 rounded-full blur-[120px]">
            </div>
            <div
                class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] bg-accent-500/5 dark:bg-accent-500/10 rounded-full blur-[120px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up">
                {{ __('site.nav.about') }}</h1>
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
                                {{ __('site.nav.about') }}</span>
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

    <!-- Main About Content -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Image Section (Matched Home Style) -->
                <div class="relative" data-aos="fade-right">
                    <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl group">
                        <img src="{{ asset('img/about-1.webp') }}" alt="About Us"
                            class="w-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-slate-900 via-transparent to-transparent opacity-60">
                        </div>
                    </div>
                    <!-- Floater (Kept from original about page but styled like home) -->
                    <div class="absolute -bottom-8 -right-8 glass-card p-6 rounded-2xl max-w-xs hidden md:block animate-float"
                        style="animation-delay: 2s;">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('site.floater.philosophy') }}</p>
                        <div class="flex items-center gap-2">
                            <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
                            <span class="text-xs text-brand-400 font-bold uppercase">
                                {{ __('site.floater.label') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div data-aos="fade-left">
                    <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm">
                        {{ __('site.about.chip') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-6 text-gray-900 dark:text-white">
                        {!! __('site.about.title') !!}</h2>
                    <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-6">
                        {!! __('site.about.desc1') !!}
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8">
                        {{ __('site.about.desc2') }}
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-100 dark:bg-brand-500/20 flex items-center justify-center text-brand-600 dark:text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300">{{ __('site.about.point1') }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-100 dark:bg-brand-500/20 flex items-center justify-center text-brand-600 dark:text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300">{{ __('site.about.point2') }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-100 dark:bg-brand-500/20 flex items-center justify-center text-brand-600 dark:text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300">{{ __('site.about.point3') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-slate-900 dark:bg-slate-950">
            <div class="absolute inset-0 opacity-20"
                style="background-image: radial-gradient(#38bdf8 1px, transparent 1px); background-size: 32px 32px;">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-400 font-semibold tracking-wider text-sm">{{ __('site.choose.subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-white">{{ __('site.choose.title') }}</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">{{ __('site.choose.description') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">{{ __('site.choose.feature1.title') }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ __('site.choose.feature1.desc') }}</p>
                </div>

                <!-- Feature 2 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">{{ __('site.choose.feature2.title') }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ __('site.choose.feature2.desc') }}</p>
                </div>

                <!-- Feature 3 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">{{ __('site.choose.feature3.title') }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ __('site.choose.feature3.desc') }}</p>
                </div>

                <!-- Feature 4 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">{{ __('site.choose.feature4.title') }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ __('site.choose.feature4.desc') }}</p>
                </div>

                <!-- Feature 5 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">{{ __('site.choose.feature5.title') }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ __('site.choose.feature5.desc') }}</p>
                </div>

                <!-- Feature 6 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">{{ __('site.choose.feature6.title') }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ __('site.choose.feature6.desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Members Section -->
    <section class="py-20 bg-white dark:bg-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm">
                    {{ __('site.team.section_subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white">
                    {{ __('site.team.section_title') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($team as $index => $member)
                    <div class="team-card glass-card rounded-[40px] overflow-hidden group border border-gray-100 dark:border-white/5 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
                        data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}"
                                class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay/Social Links -->
                            <div class="social-links bg-white/90 dark:bg-slate-900/90 backdrop-blur-md p-4 flex justify-center gap-3 absolute -bottom-full left-0 right-0 transition-all duration-300 group-hover:bottom-0 border-t border-gray-100 dark:border-white/10">
                                @if(isset($member['social']))
                                    @foreach($member['social'] as $platform => $link)
                                        <a href="{{ $link }}" target="_blank"
                                            class="w-10 h-10 rounded-full bg-brand-50 text-brand-600 hover:bg-brand-600 hover:text-white dark:bg-white/10 dark:text-white dark:hover:bg-brand-600 flex items-center justify-center transition-all shadow-sm">
                                            <i class="fab fa-{{ $platform }}"></i>
                                        </a>
                                    @endforeach
                                @endif

                                {{-- CV Icon --}}
                                @if(isset($member['cv_link']) && $member['cv_link'])
                                    <a href="{{ $member['cv_link'] }}" target="_blank" title="View CV"
                                       class="w-10 h-10 rounded-full bg-brand-50 text-brand-600 hover:bg-brand-600 hover:text-white dark:bg-white/10 dark:text-white dark:hover:bg-brand-600 flex items-center justify-center transition-all shadow-sm">
                                        <i class="fas fa-file-alt"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="p-6 text-center bg-white dark:bg-white/5">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1 group-hover:text-brand-600 transition-colors">
                                {{ $member['name'] }}
                            </h3>
                            <p class="text-brand-600 dark:text-brand-400 text-sm font-medium">
                                {{ __($member['role_key']) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-16 text-center" data-aos="fade-up">
                <a href="{{ url('team') }}"
                    class="inline-flex items-center gap-2 text-brand-600 dark:text-brand-400 font-semibold hover:gap-3 transition-all">
                    <span>{{ __('site.nav.our_team') }}</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-brand-600 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-brand-900/50 mix-blend-multiply"></div>
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-400 rounded-full blur-[100px] opacity-50"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-accent-400 rounded-full blur-[100px] opacity-50">
            </div>
        </div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center text-white" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">{{ __('site.cta.title') }}</h2>
            <p class="text-lg md:text-xl text-brand-100 mb-8 max-w-2xl mx-auto">{{ __('site.cta.description') }}</p>
            <a href="{{ url('contact') }}"
                class="inline-block bg-white text-brand-600 px-8 py-4 rounded-full font-bold shadow-lg hover:bg-gray-100 hover:scale-105 transition-all">
                {{ __('site.cta.button') }}</a>
        </div>
    </section>
@endsection
