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
                            <i class="fas fa-chevron-right ltr:mx-2 rtl:mx-2 rtl:rotate-180 text-xs opacity-75"></i>
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
                    <div
                        class="w-16 h-16 mx-auto bg-brand-100 dark:bg-brand-500/10 rounded-full flex items-center justify-center text-brand-600 dark:text-brand-400 text-2xl mb-4 hover:shadow-lg transition-all">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                        {{ __('site.contact.address_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $settings['contact_address'] ?? __('site.contact.location') }}</p>
                </div>

                <!-- Phone Card -->
                <div class="glass-card p-8 rounded-3xl text-center hover:shadow-xl transition-shadow" data-aos="fade-up"
                    data-aos-delay="200">
                    <a href="tel:{{ $settings['contact_phone'] ?? '' }}"
                        class="w-16 h-16 mx-auto bg-green-100 dark:bg-green-500/10 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 text-2xl mb-4 hover:shadow-lg transition-all">
                        <i class="fas fa-phone-alt"></i>
                    </a>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                        {{ __('site.contact.phone_title') }}</h3>
                    <a href="tel:{{ $settings['contact_phone'] ?? '' }}"
                        class="text-gray-600 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 transition-colors">{{ $settings['contact_phone'] ?? '' }}</a>
                </div>

                <!-- Email Card -->
                <div class="glass-card p-8 rounded-3xl text-center hover:shadow-xl transition-shadow" data-aos="fade-up"
                    data-aos-delay="300">
                    <a href="mailto:{{ $settings['contact_email'] ?? 'info@believe-agency.net' }}"
                        class="w-16 h-16 mx-auto bg-blue-100 dark:bg-blue-500/10 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400 text-2xl mb-4 hover:shadow-lg transition-all">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                        {{ __('site.contact.email_title') }}</h3>
                    <a href="mailto:{{ $settings['contact_email'] ?? 'info@believe-agency.net' }}"
                        class="text-gray-600 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 transition-colors break-all">{{ $settings['contact_email'] ?? 'info@believe-agency.net' }}</a>
                </div>

                <!-- WhatsApp Card -->
                <div class="glass-card p-8 rounded-3xl text-center hover:shadow-xl transition-shadow" data-aos="fade-up"
                    data-aos-delay="400">
                    @if($settings['whatsapp'] ?? null)
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp']) }}" target="_blank"
                            class="w-16 h-16 mx-auto bg-green-100 dark:bg-green-500/10 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 text-2xl mb-4 hover:shadow-lg transition-all">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.contact.whatsapp_title') }}</h3>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp']) }}" target="_blank"
                            class="text-gray-600 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 transition-colors">{{ $settings['whatsapp'] ?? '' }}</a>
                    @else
                        <div
                            class="w-16 h-16 mx-auto bg-green-100 dark:bg-green-500/10 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 text-2xl mb-4 opacity-50">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.contact.whatsapp_title') }}</h3>
                        <p class="text-gray-400">{{ __('site.no_data', ['default' => 'Not Available']) }}</p>
                    @endif
                </div>
            </div>

            <!-- Contact Form & Map -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="glass-card p-8 rounded-3xl" data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
                        {{ __('site.contact.form_title') }}</h2>
                    <form id="contactForm" class="space-y-6">
                        @csrf
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
                               @foreach ($services as $service)
                               <option value="{{ $service->title }}">{{ $service->title }}</option>
                               @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('site.contact.form_message') }}</label>
                            <textarea id="message" name="message" rows="4"
                                placeholder="{{ __('site.contact.form_message_placeholder') }}"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"></textarea>
                        </div>

                        <!-- Creative "I'm not a robot" Verification -->
                        <div class="relative group">
                            <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-slate-900/50 border border-gray-200 dark:border-gray-700 rounded-2xl transition-all duration-300 group-hover:border-brand-500/50">
                                <div class="flex items-center gap-4">
                                    <div class="relative flex items-center justify-center">
                                        <input type="checkbox" id="robot_check_home" required class="peer appearance-none w-10 h-10 border-2 border-gray-300 dark:border-gray-600 rounded-full checked:bg-brand-500 checked:border-brand-500 transition-all cursor-pointer">
                                        <i class="fas fa-check absolute text-white opacity-0 peer-checked:opacity-100 transition-opacity pointer-events-none"></i>
                                        <div class="absolute inset-0 rounded-full border-2 border-brand-500 scale-0 peer-checked:animate-ping opacity-0 peer-checked:opacity-20"></div>
                                    </div>
                                    <label for="robot_check_home" class="text-sm font-semibold text-gray-600 dark:text-gray-400 cursor-pointer select-none group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">
                                        {{ __('site.contact.not_robot') }}
                                    </label>
                                </div>
                                <div class="flex flex-col items-center opacity-40 grayscale group-hover:grayscale-0 group-hover:opacity-100 transition-all">
                                    <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" class="w-6 h-6 mb-1">
                                    <span class="text-[8px] uppercase tracking-tighter">Privacy</span>
                                </div>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Contact Form Handler
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Check robot verification
            const robotCheck = document.getElementById('robot_check_contact');
            if (!robotCheck.checked) {
                Swal.fire({
                    icon: 'warning',
                    title: '{{ __('site.contact.robot_check_required', ['default' => 'Please verify you are not a robot']) }}',
                    confirmButtonColor: '#6366f1'
                });
                return;
            }

            const form = this;
            const submitButton = form.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;

            // Disable button and show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> {{ __('site.contact.sending', ['default' => 'Sending...']) }}';

            // Prepare form data
            const formData = new FormData(form);

            // Submit via AJAX
            fetch('{{ route('contact.submit') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: '{{ __('site.contact.success_title', ['default' => 'Message Sent!']) }}',
                        text: data.message,
                        confirmButtonColor: '#6366f1'
                    });
                    form.reset();
                    robotCheck.checked = false;
                } else {
                    throw new Error(data.message || 'An error occurred');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: '{{ __('site.contact.error_title', ['default' => 'Error']) }}',
                    text: '{{ __('site.contact.error_message', ['default' => 'Failed to send message. Please try again.']) }}',
                    confirmButtonColor: '#6366f1'
                });
            })
            .finally(() => {
                // Re-enable button
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
            });
        });
    </script>
@endpush
