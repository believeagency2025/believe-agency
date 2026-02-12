@extends('layouts.web')

@section('title', 'Privacy Policy')

@section('content')
<!-- Header -->
<div class="bg-gray-50 dark:bg-slate-900 pt-32 pb-12 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm uppercase">Legal</span>
        <h1 class="text-4xl md:text-5xl font-bold mt-2 mb-6 text-gray-900 dark:text-white" data-i18n="privacy.title">Privacy <span class="text-brand-500">Policy</span></h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
            <span data-i18n="privacy.last_updated">Last updated:</span> {{ date('F d, Y') }}
        </p>
    </div>
</div>

<!-- Content -->
<div class="bg-white dark:bg-slate-900 pb-20 transition-colors duration-300 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-indigo mx-auto text-gray-600 dark:text-gray-300 dark:prose-invert">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="privacy.intro.title">1. Introduction</h3>
            <p class="mb-4" data-i18n="privacy.intro.text">
                Welcome to Believe Agency ("we," "our," or "us"). We value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.
            </p>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="privacy.collect.title">2. Information We Collect</h3>
            <p class="mb-4" data-i18n="privacy.collect.text">We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
            <ul class="list-disc pl-6 mb-4 space-y-2">
                <li data-i18n="privacy.collect.list1"><strong>Personal Data:</strong> Personally identifiable information, such as your name, shipping address, email address, and telephone number, that you voluntarily give to us when you register with the Site or when you choose to participate in various activities related to the Site.</li>
                <li data-i18n="privacy.collect.list2"><strong>Derivative Data:</strong> Information our servers automatically collect when you access the Site, such as your IP address, your browser type, your operating system, your access times, and the pages you have viewed directly before and after accessing the Site.</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="privacy.use.title">3. Use of Your Information</h3>
            <p class="mb-4" data-i18n="privacy.use.text">Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you via the Site to:</p>
            <ul class="list-disc pl-6 mb-4 space-y-2">
                <li data-i18n="privacy.use.list1">Create and manage your account.</li>
                <li data-i18n="privacy.use.list2">Email you regarding your account or order.</li>
                <li data-i18n="privacy.use.list3">Fulfill and manage purchases, orders, payments, and other transactions related to the Site.</li>
                <li data-i18n="privacy.use.list4">Generate a personal profile about you to make future visits to the Site more personalized.</li>
                <li data-i18n="privacy.use.list5">Increase the efficiency and operation of the Site.</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="privacy.disclosure.title">4. Disclosure of Your Information</h3>
            <p class="mb-4" data-i18n="privacy.disclosure.text">We may share information we have collected about you in certain situations. Your information may be disclosed as follows:</p>
            <ul class="list-disc pl-6 mb-4 space-y-2">
                <li data-i18n="privacy.disclosure.list1"><strong>By Law or to Protect Rights:</strong> If we believe the release of information about you is necessary to respond to legal process, to investigate or remedy potential violations of our policies, or to protect the rights, property, and safety of others, we may share your information as permitted or required by any applicable law, rule, or regulation.</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="privacy.contact.title">5. Contact Us</h3>
            <p class="mb-4" data-i18n="privacy.contact.text">If you have questions or comments about this Privacy Policy, please contact us at:</p>
            <div class="bg-gray-50 dark:bg-slate-800 p-6 rounded-2xl border border-gray-200 dark:border-gray-700 not-prose mt-6">
                <p class="font-bold text-gray-900 dark:text-white text-lg mb-2">Believe Agency</p>
                <p class="text-gray-600 dark:text-gray-400 mb-1" data-i18n="contact.location">Tanta, Egypt</p>
                <p class="text-gray-600 dark:text-gray-400 mb-1">Email: info@believe-agency.net</p>
                <p class="text-gray-600 dark:text-gray-400">Phone: +20 15 0529 4544</p>
            </div>
        </div>
    </div>
</div>
@endsection
