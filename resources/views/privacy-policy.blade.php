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
        <div class="prose prose-lg prose-indigo mx-auto text-gray-600 dark:text-gray-300 dark:prose-invert">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4">{{ __('site.privacy.intro.title') }}</h3>
            <p class="mb-4">
                {{ __('site.privacy.intro.text') }}
            </p>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4">{{ __('site.privacy.collect.title') }}</h3>
            <p class="mb-4">{{ __('site.privacy.collect.text') }}</p>
            <ul class="list-disc pl-6 mb-4 space-y-2">
                <li>{!! __('site.privacy.collect.list1') !!}</li>
                <li>{!! __('site.privacy.collect.list2') !!}</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4">{{ __('site.privacy.use.title') }}</h3>
            <p class="mb-4">{{ __('site.privacy.use.text') }}</p>
            <ul class="list-disc pl-6 mb-4 space-y-2">
                <li>{{ __('site.privacy.use.list1') }}</li>
                <li>{{ __('site.privacy.use.list2') }}</li>
                <li>{{ __('site.privacy.use.list3') }}</li>
                <li>{{ __('site.privacy.use.list4') }}</li>
                <li>{{ __('site.privacy.use.list5') }}</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4">{{ __('site.privacy.disclosure.title') }}</h3>
            <p class="mb-4">{{ __('site.privacy.disclosure.text') }}</p>
            <ul class="list-disc pl-6 mb-4 space-y-2">
                <li>{!! __('site.privacy.disclosure.list1') !!}</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4">{{ __('site.privacy.contact.title') }}</h3>
            <p class="mb-4">{{ __('site.privacy.contact.text') }}</p>
            <div class="bg-gray-50 dark:bg-slate-800 p-6 rounded-2xl border border-gray-200 dark:border-gray-700 not-prose mt-6">
                <p class="font-bold text-gray-900 dark:text-white text-lg mb-2">Believe Agency</p>
                <p class="text-gray-600 dark:text-gray-400 mb-1">{{ __('site.privacy.contact.location') }}</p>
                <p class="text-gray-600 dark:text-gray-400 mb-1">Email: info@believe-agency.net</p>
                <p class="text-gray-600 dark:text-gray-400">Phone: +20 15 0529 4544</p>
            </div>
        </div>
    </div>
</div>
@endsection
