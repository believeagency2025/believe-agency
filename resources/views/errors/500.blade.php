@extends('layouts.web')

@section('title', __('site.error.500.subtitle'))

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-slate-900 transition-colors duration-300">
    <div class="text-center px-4" data-aos="fade-up">
        <h1 class="text-9xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-orange-500 mb-4 animate-pulse">{{ __('site.error.500.title') }}</h1>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">{!! __('site.error.500.subtitle') !!}</h2>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-10 max-w-lg mx-auto">
            {{ __('site.error.500.description') }}
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ url('/') }}" class="bg-brand-500 text-white px-8 py-3 rounded-full font-semibold hover:bg-brand-600 transition-all shadow-lg hover:shadow-brand-500/25">
                <i class="fas fa-home mr-2"></i> {{ __('site.error.500.btn_home') }}
            </a>
            <a href="{{ url('/contact') }}" class="bg-white dark:bg-slate-800 text-gray-900 dark:text-white border border-gray-200 dark:border-gray-700 px-8 py-3 rounded-full font-semibold hover:bg-gray-50 dark:hover:bg-slate-700 transition-all shadow-sm">
                <i class="fas fa-envelope mr-2"></i> {{ __('site.error.500.btn_contact') }}
            </a>
        </div>

        <!-- Decorative elements -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-red-500/10 rounded-full blur-[100px] -z-10 pointer-events-none"></div>
    </div>
</div>
@endsection
