@extends('layouts.web')

@section('title', 'Privacy Policy')

@section('content')
<!-- Header -->
<div class="bg-gray-50 dark:bg-slate-900 pt-32 pb-12 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm uppercase">{{ __('site.privacy.chip') }}</span>
        <h1 class="text-4xl md:text-5xl font-bold mt-2 mb-6 text-gray-900 dark:text-white">{!! __('site.privacy.title') !!}</h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
            <span>{{ __('site.privacy.last_updated') }}</span> {{ date('F d, Y') }}
        </p>
    </div>
</div>

<!-- Content -->
<div class="bg-white dark:bg-slate-900 pb-20 transition-colors duration-300 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-indigo mx-auto text-gray-600 dark:text-gray-300 dark:prose-invert pt-10">
            @if($content)
                {!! nl2br(e($content)) !!}
            @else
                <p class="text-center italic opacity-50">{{ __('site.no_data') }}</p>
            @endif
        </div>
    </div>
</div>
@endsection
