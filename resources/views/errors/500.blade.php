@extends('layouts.web')

@section('title', 'Server Error')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-slate-900 transition-colors duration-300">
    <div class="text-center px-4" data-aos="fade-up">
        <h1 class="text-9xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-orange-500 mb-4 animate-pulse">500</h1>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">Internal <span class="text-red-500">Server Error</span></h2>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-10 max-w-lg mx-auto">
            Something went wrong on our end. Please try again later or contact support if the problem persists.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ url('/') }}" class="bg-brand-500 text-white px-8 py-3 rounded-full font-semibold hover:bg-brand-600 transition-all shadow-lg hover:shadow-brand-500/25">
                <i class="fas fa-home mr-2"></i> Go Home
            </a>
            <a href="{{ url('/contact') }}" class="bg-white dark:bg-slate-800 text-gray-900 dark:text-white border border-gray-200 dark:border-gray-700 px-8 py-3 rounded-full font-semibold hover:bg-gray-50 dark:hover:bg-slate-700 transition-all shadow-sm">
                <i class="fas fa-envelope mr-2"></i> Contact Support
            </a>
        </div>

        <!-- Decorative elements -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-red-500/10 rounded-full blur-[100px] -z-10 pointer-events-none"></div>
    </div>
</div>
@endsection
