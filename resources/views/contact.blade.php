@extends('layouts.web')

@section('title', 'Contact Us')

@push('styles')
    <style>
        .hero-bg-custom {
            background-image: radial-gradient(at 0% 0%, hsla(189, 100%, 96%, 0.1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(250, 100%, 96%, 0.1) 0, transparent 50%);
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section (Updated to match CTA style) -->
    <section class="py-32 bg-brand-600 relative overflow-hidden hero-bg-custom">
        <div class="absolute inset-0 pointer-events-none">
            <!-- Same overlay effects as CTA -->
            <div class="absolute inset-0 bg-brand-900/50 mix-blend-multiply"></div>
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-400 rounded-full blur-[100px] opacity-50"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-accent-400 rounded-full blur-[100px] opacity-50">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6" data-aos="fade-up">{{ __('site.contact.title') }}</h1>
            <p class="text-xl text-brand-100 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                {{ __('site.contact.subtitle') }}
            </p>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="200">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-brand-100">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium hover:text-white transition-colors">
                            {{ __('site.nav.home') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right mx-2 text-xs opacity-75"></i>
                            <span class="text-sm font-medium text-white opacity-90">{{ __('site.nav.contact') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section class="py-20 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
                <!-- Address Card -->
                <div class="glass-card p-8 rounded-3xl text-center hover:shadow-xl transition-shadow" data-aos="fade-up"
                    data-aos-delay="100">
                    <a href="https://maps.google.com/?q=Tanta,+Egypt" target="_blank"
                        class="w-16 h-16 mx-auto bg-brand-100 dark:bg-brand-500/10 rounded-full flex items-center justify-center text-brand-600 dark:text-brand-400 text-2xl mb-4 hover:shadow-lg transition-all">
                        <i class="fas fa-map-marker-alt"></i>
                    </a>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                        {{ __('site.contact.address_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('site.contact.location') }}</p>
                </div>

                <!-- Phone Card -->
                <div class="glass-card p-8 rounded-3xl text-center hover:shadow-xl transition-shadow" data-aos="fade-up"
                    data-aos-delay="200">
                    <a href="tel:+201505294544"
                        class="w-16 h-16 mx-auto bg-green-100 dark:bg-green-500/10 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 text-2xl mb-4 hover:shadow-lg transition-all">
                        <i class="fas fa-phone-alt"></i>
                    </a>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                        {{ __('site.contact.phone_title') }}</h3>
                    <a href="tel:+201505294544"
                        class="text-gray-600 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+20
                        15 0529 4544</a>
                </div>

                <!-- Email Card -->
                <div class="glass-card p-8 rounded-3xl text-center hover:shadow-xl transition-shadow" data-aos="fade-up"
                    data-aos-delay="300">
                    <a href="mailto:info@believe-agency.net"
                        class="w-16 h-16 mx-auto bg-blue-100 dark:bg-blue-500/10 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400 text-2xl mb-4 hover:shadow-lg transition-all">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                        {{ __('site.contact.email_title') }}</h3>
                    <a href="mailto:info@believe-agency.net"
                        class="text-gray-600 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 transition-colors break-all">info@believe-agency.net</a>
                </div>

                <!-- WhatsApp Card -->
                <div class="glass-card p-8 rounded-3xl text-center hover:shadow-xl transition-shadow" data-aos="fade-up"
                    data-aos-delay="400">
                    <a href="https://wa.me/201505294544" target="_blank"
                        class="w-16 h-16 mx-auto bg-green-100 dark:bg-green-500/10 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 text-2xl mb-4 hover:shadow-lg transition-all">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                        {{ __('site.contact.whatsapp_title') }}</h3>
                    <a href="https://wa.me/201505294544" target="_blank"
                        class="text-gray-600 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+20
                        15 0529 4544</a>
                </div>
            </div>

            <!-- Contact Form & Map -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="glass-card p-8 rounded-3xl" data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
                        {{ __('site.contact.form_title') }}</h2>
                    <form id="contactForm" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('site.contact.form_name') }} <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required
                                placeholder="{{ __('site.contact.form_name_placeholder') }}"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('site.contact.form_email') }}</label>
                            <input type="email" id="email" name="email"
                                placeholder="{{ __('site.contact.form_email_placeholder') }}"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('site.contact.form_phone') }} <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" required
                                placeholder="{{ __('site.contact.form_phone_placeholder') }}"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}"
                                dir="ltr">
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('site.contact.form_service') }}</label>
                            <select id="service" name="service"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                                <option value="" disabled selected>{{ __('site.contact.select_service') }}</option>
                                <option value="web-design">{{ __('site.nav.web_design') }}</option>
                                <option value="app-development">{{ __('site.nav.apps_development') }}</option>
                                <option value="branding">{{ __('site.nav.branding') }}</option>
                                <option value="marketing">{{ __('site.nav.digital_marketing') }}</option>
                                <option value="ecommerce">{{ __('site.nav.ecommerce') }}</option>
                                <option value="software">{{ __('site.nav.software_tools') }}</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('site.contact.form_message') }}</label>
                            <textarea id="message" name="message" rows="4"
                                placeholder="{{ __('site.contact.form_message_placeholder') }}"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"></textarea>
                        </div>

                         <!-- "I'm not a robot" Checkbox (Visual) -->
                        <div
                            class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 border border-gray-200 dark:border-gray-600 rounded-xl w-fit">
                            <input type="checkbox" id="robot_check_contact"
                                class="w-6 h-6 text-brand-500 rounded border-gray-300 focus:ring-brand-500 cursor-pointer">
                            <label for="robot_check_contact"
                                class="text-sm text-gray-600 dark:text-gray-400 cursor-pointer select-none">{{ __('site.contact.not_robot', ['default' => 'I am not a robot']) }}</label>
                            <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA"
                                class="w-8 h-8 opacity-50 ml-2">
                        </div>

                        <button type="submit"
                            class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg shadow-brand-500/25 hover:shadow-brand-500/40 transform hover:-translate-y-0.5">
                            {{ __('site.contact.form_submit') }}
                        </button>
                    </form>
                </div>

                <!-- Map -->
                <div class="glass-card p-2 rounded-3xl overflow-hidden" data-aos="fade-left">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.0000000000005!2d30.999278!3d30.788434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145822b9f1c5a5af%3A0x0!2zMzDCsDQ3JzMyLjkiTiAzMMKwNTknMzYuMCJF!5e0!3m2!1sen!2seg!4v1234567890"
                        width="100%" style="border:0; border-radius: 1.5rem;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl h-[450px] lg:h-[828px] w-full">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Contact Form Handler
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert("{{ __('site.contact.success_message') }}");
            this.reset();
        });
    </script>
@endpush
