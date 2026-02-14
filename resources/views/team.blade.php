@extends('layouts.web')

@section('title', 'Our Team')

@push('styles')
    <style>
        .team-card {
            position: relative;
            overflow: hidden;
        }

        .team-card .social-links {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            transition: bottom 0.3s ease;
        }

        .team-card:hover .social-links {
            bottom: 0;
        }
    </style>
@endpush

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
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up">
                {{ __('site.team.title') }}</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto" data-aos="fade-up"
                data-aos-delay="100">
                {{ __('site.team.subtitle') }}
            </p>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="200">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white">
                            {{ __('site.nav.home') }}
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('site.team.title') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Team Members -->
    <section class="py-20 bg-white dark:bg-slate-800">
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
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials"
        class="py-20 relative overflow-hidden bg-gray-50 dark:bg-slate-900 transition-colors duration-300">
        <!-- Backgrounds -->
        <div class="absolute top-0 left-0 w-full h-full bg-slate-900 opacity-90 z-0 hidden dark:block"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-gray-50 z-0 dark:hidden"></div>
        <div class="absolute inset-0 z-0 opacity-10"
            style="background-image: radial-gradient(#38bdf8 1px, transparent 1px); background-size: 32px 32px;">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm">{{ __('site.testimonials.subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 text-gray-900 dark:text-white">{!! __('site.testimonials.title') !!}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonials Loop (Static for now as per home) -->
                @foreach([1, 2, 3] as $i)
                <div class="glass-card bg-white dark:bg-white/5 p-8 rounded-3xl relative border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-none hover:transform hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-4xl text-gray-200 dark:text-white/5"></i>
                    <div class="flex text-yellow-500 text-sm mb-6">
                        @for($j=0; $j<5; $j++) <i class="fas fa-star"></i> @endfor
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        {{ __('site.testimonials.testimonial'.$i.'.text') }}</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('img/testimonial-'.$i.'.webp') }}" alt="Client"
                            class="w-12 h-12 rounded-full object-cover ring-2 ring-brand-500/50">
                        <div>
                             <h4 class="font-bold text-gray-900 dark:text-white text-sm">
                                {{ __('site.testimonials.testimonial'.$i.'.name') }}</h4>
                            <p class="text-xs text-brand-600 dark:text-brand-400">{{ __('site.testimonials.testimonial'.$i.'.role') }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="py-20 bg-white dark:bg-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm">{{ __('site.clients.subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white">
                    {!! __('site.clients.title') !!}
                </h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center opacity-60 dark:opacity-40">
                @for($i=1; $i<=6; $i++)
                <div class="flex justify-center p-4 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <img src="{{ asset('img/logo100.webp') }}" alt="Client {{ $i }}" class="h-12 w-auto object-contain">
                </div>
                @endfor
            </div>

            <div class="mt-16 text-center" data-aos="fade-up">
                <a href="{{ url('clients') }}"
                    class="inline-flex items-center gap-2 text-brand-600 dark:text-brand-400 font-semibold hover:gap-3 transition-all">
                    <span>{{ __('site.clients.view_all') }}</span>
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
            <h2 class="text-3xl md:text-5xl font-bold mb-6" data-aos="fade-up" >
                {{ __('site.team.cta_title') }}</h2>
            <p class="text-xl text-brand-100 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                {{ __('site.team.cta_desc') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ url('contact') }}"
                    class="bg-white text-brand-600 hover:bg-gray-100 px-8 py-4 rounded-full font-bold transition-all shadow-lg hover:shadow-2xl hover:scale-105 transform">
                    {{ __('site.team.cta_button') }}</a>
            </div>
        </div>
    </section>
@endsection
