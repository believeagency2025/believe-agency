@extends('layouts.web')

@section('title', 'Terms of Service')

@section('content')
<!-- Header -->
<div class="bg-gray-50 dark:bg-slate-900 pt-32 pb-12 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm uppercase">Legal</span>
        <h1 class="text-4xl md:text-5xl font-bold mt-2 mb-6 text-gray-900 dark:text-white" data-i18n="terms.title">Terms of <span class="text-brand-500">Service</span></h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
            <span data-i18n="terms.last_updated">Last updated:</span> {{ date('F d, Y') }}
        </p>
    </div>
</div>

<!-- Content -->
<div class="bg-white dark:bg-slate-900 pb-20 transition-colors duration-300 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-indigo mx-auto text-gray-600 dark:text-gray-300 dark:prose-invert">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="terms.agreement.title">1. Agreement to Terms</h3>
            <p class="mb-4" data-i18n="terms.agreement.text">
                These Terms of Service constitute a legally binding agreement made between you, whether personally or on behalf of an entity ("you") and Believe Agency ("we," "us," or "our"), concerning your access to and use of the website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the "Site").
            </p>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="terms.ip.title">2. Intellectual Property Rights</h3>
            <p class="mb-4" data-i18n="terms.ip.text">
                Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (collectively, the "Content") and the trademarks, service marks, and logos contained therein (the "Marks") are owned or controlled by us or licensed to us, and are protected by copyright and trademark laws and various other intellectual property rights.
            </p>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="terms.user.title">3. User Representations</h3>
            <p class="mb-4" data-i18n="terms.user.text">By using the Site, you represent and warrant that:</p>
            <ul class="list-disc pl-6 mb-4 space-y-2">
                <li data-i18n="terms.user.list1">All registration information you submit will be true, accurate, current, and complete.</li>
                <li data-i18n="terms.user.list2">You will maintain the accuracy of such information and promptly update such registration information as necessary.</li>
                <li data-i18n="terms.user.list3">You have the legal capacity and you agree to comply with these Terms of Service.</li>
                <li data-i18n="terms.user.list4">You are not a minor in the jurisdiction in which you reside.</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="terms.prohibited.title">4. Prohibited Activities</h3>
            <p class="mb-4" data-i18n="terms.prohibited.text">
                You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.
            </p>

            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4" data-i18n="terms.contact.title">5. Contact Us</h3>
            <p class="mb-4" data-i18n="terms.contact.text">To resolve a complaint regarding the Site or to receive further information regarding use of the Site, please contact us at:</p>
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
