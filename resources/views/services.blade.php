@extends('layouts.web')

@section('title', __('site.nav.services'))

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 md:pt-32 pb-20 hero-bg overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-[30%] left-[-10%] w-[50%] h-[50%] bg-brand-500/5 dark:bg-brand-500/10 rounded-full blur-[150px]"></div>
            <div class="absolute bottom-[10%] right-[-10%] w-[40%] h-[40%] bg-accent-500/5 dark:bg-accent-500/10 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up">
                {!! __('site.services.title') !!}
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">
                {!! __('site.services.subtitle') !!}
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services_nav as $index => $s)
                    @php
                        $s_title = $s->title[app()->getLocale()] ?? $s->title['en'] ?? '';
                        $s_desc = $s->description[app()->getLocale()] ?? $s->description['en'] ?? '';
                    @endphp
                    <div class="group relative p-8 rounded-3xl bg-white dark:bg-white/5 border border-gray-100 dark:border-white/5 shadow-xl shadow-gray-200/50 dark:shadow-none hover:-translate-y-2 transition-all duration-500 overflow-hidden"
                        data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <!-- Decorative Background -->
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-brand-500/5 rounded-full blur-3xl group-hover:bg-brand-500/10 transition-colors"></div>

                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-brand-50 dark:bg-brand-500/10 rounded-2xl flex items-center justify-center text-brand-600 dark:text-brand-400 text-3xl mb-8 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500">
                                <i class="{{ $s->icon_class ?? 'fas fa-briefcase' }}"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white group-hover:text-brand-600 transition-colors">
                                {{ $s_title }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-8">
                                {{ Str::limit($s_desc, 120) }}
                            </p>
                            <a href="{{ route('service.detail', $s->slug) }}" class="inline-flex items-center gap-2 text-brand-600 dark:text-brand-400 font-bold hover:gap-3 transition-all group/btn">
                                {{ __('site.services.learn_more') }}
                                <i class="fas fa-arrow-right text-sm"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
