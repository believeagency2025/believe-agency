@extends('layouts.web')

@section('title', __('site.clients.page_title'))

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
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up">{{ __('site.clients.title') }}</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto" data-aos="fade-up"
                data-aos-delay="100">
                {{ __('site.clients.subtitle') }}
            </p>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="200">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white">{{ __('site.nav.home') }}</a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('site.clients.breadcrumb') }}</span>
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
                @foreach($clients as $client)
                @if($client->website_url)
                <a href="{{ $client->website_url }}" target="_blank" class="flex flex-col items-center justify-center p-8 bg-gray-50 dark:bg-gray-50 rounded-2xl border border-gray-100 dark:border-white/5 shadow-sm"
                    data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                        class="h-16 w-auto mb-4">
                    <h3 class="font-bold text-gray-800 dark:text-gray-800">{{ $client->name }}</h3>
                </a>
                @else
                <div class="flex flex-col items-center justify-center p-8 bg-gray-50 dark:bg-gray-50 rounded-2xl border border-gray-100 dark:border-white/5 shadow-sm"
                    data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                        class="h-16 w-auto mb-4">
                    <h3 class="font-bold text-gray-800 dark:text-gray-800">{{ $client->name }}</h3>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
