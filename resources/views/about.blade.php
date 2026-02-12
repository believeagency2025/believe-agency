@extends('layouts.web')

@section('title', 'About Us')

@section('content')
    <!-- Page Header/Hero -->
    <section class="relative pt-24 md:pt-32 pb-20 hero-bg overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] bg-brand-500/5 dark:bg-brand-500/10 rounded-full blur-[120px]">
            </div>
            <div
                class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] bg-accent-500/5 dark:bg-accent-500/10 rounded-full blur-[120px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up"
                data-i18n="nav.about">About Us</h1>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white"
                            data-i18n="nav.home">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400"
                                data-i18n="nav.about">About</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white dark:bg-slate-800 border-y border-gray-200 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-200 dark:divide-white/5">
                <div data-aos="fade-up" data-aos-delay="0">
                    <span
                        class="block text-3xl md:text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">55+</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400" data-i18n="hero.stats_clients">Happy
                        Clients</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <span
                        class="block text-3xl md:text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">95+</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400" data-i18n="hero.stats_projects">Projects
                        Done</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <span
                        class="block text-3xl md:text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">120+</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400" data-i18n="facts.total_clients">Total
                        Clients</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <span
                        class="block text-3xl md:text-4xl font-bold text-brand-600 dark:text-brand-400 mb-2">5.0</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400" data-i18n="facts.star_reviews">Star
                        Rating</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main About Content -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Image Grid -->
                <div class="relative" data-aos="fade-right">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <img src="{{ asset('img/about-1.webp') }}" alt="About 1"
                            class="rounded-2xl shadow-lg w-full h-64 object-cover transform translate-y-8">
                        <img src="{{ asset('img/about-2.webp') }}" alt="About 2"
                            class="rounded-2xl shadow-lg w-full h-64 object-cover">
                    </div>
                    <!-- Floater -->
                    <div class="absolute -bottom-8 -right-8 glass-card p-6 rounded-2xl max-w-xs hidden md:block animate-float"
                        style="animation-delay: 2s;">
                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2"
                            data-i18n="floater.philosophy">"Every idea deserves the chance to grow, free from fear and
                            uncertainty."</p>
                        <div class="flex items-center gap-2">
                            <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
                            <span class="text-xs text-brand-400 font-bold uppercase" data-i18n="floater.label">Our
                                Philosophy</span>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div data-aos="fade-left">
                    <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                        data-i18n="about.chip">WHO WE ARE</span>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-6 text-gray-900 dark:text-white"
                        data-i18n="about.title">About Believe Agency</h2>
                    <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-6" data-i18n="about.desc1">
                        Believe Agency is a forward-thinking digital solutions and marketing agency built on one simple
                        belief: every idea deserves the chance to grow.
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8" data-i18n="about.desc2">
                        We combine expertise with empathy to deliver exceptional results. Whether it's a new brand
                        identity, a complex web application, or a strategic marketing campaign, we are your partners in
                        success.
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-100 dark:bg-brand-500/20 flex items-center justify-center text-brand-600 dark:text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300" data-i18n="about.point1">Innovative Digital
                                Solutions</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-100 dark:bg-brand-500/20 flex items-center justify-center text-brand-600 dark:text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300" data-i18n="about.point2">Professional &
                                Experienced Team</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-100 dark:bg-brand-500/20 flex items-center justify-center text-brand-600 dark:text-brand-400">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300" data-i18n="about.point3">Client-Centric
                                Approach</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-slate-900 dark:bg-slate-950">
            <div class="absolute inset-0 opacity-20"
                style="background-image: radial-gradient(#38bdf8 1px, transparent 1px); background-size: 32px 32px;">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-400 font-semibold tracking-wider text-sm" data-i18n="choose.subtitle">WHY CHOOSE
                    US</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-white" data-i18n="choose.title">What Makes Us
                    Different</h2>
                <p class="text-gray-400 max-w-2xl mx-auto" data-i18n="choose.description">We combine expertise with
                    empathy to deliver exceptional results for our clients.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white" data-i18n="choose.feature1.title">Innovative Solutions
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="choose.feature1.desc">We stay ahead of
                        digital trends to provide cutting-edge solutions that drive real business growth.</p>
                </div>

                <!-- Feature 2 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white" data-i18n="choose.feature2.title">Client-Centric
                        Approach</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="choose.feature2.desc">Your success is
                        our priority. We work closely with you to understand and achieve your goals.</p>
                </div>

                <!-- Feature 3 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white" data-i18n="choose.feature3.title">Measurable Results
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="choose.feature3.desc">We focus on
                        delivering tangible results that impact your bottom line and business growth.</p>
                </div>

                <!-- Feature 4 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white" data-i18n="choose.feature4.title">Full-Service Agency
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="choose.feature4.desc">From branding to
                        development and marketing, we offer comprehensive digital solutions.</p>
                </div>

                <!-- Feature 5 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white" data-i18n="choose.feature5.title">Fast Delivery</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="choose.feature5.desc">We understand time
                        is money. Our efficient processes ensure timely delivery without compromising quality.</p>
                </div>

                <!-- Feature 6 -->
                <div class="glass-card bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors"
                    data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="w-14 h-14 bg-brand-500/20 rounded-2xl flex items-center justify-center text-brand-400 text-2xl mb-6">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white" data-i18n="choose.feature6.title">24/7 Support</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="choose.feature6.desc">We're always here
                        for you. Our dedicated support team is available round the clock.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Members Section -->
    <section class="py-20 bg-white dark:bg-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                    data-i18n="team.section_subtitle">MEET OUR EXPERTS</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white"
                    data-i18n="team.section_title">The People Behind Our Success</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1: Abdallah Bakour -->
                <div class="team-card glass-card bg-gray-50 dark:bg-slate-900/50 rounded-3xl overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('img/team-4.webp') }}" alt="Abdallah Bakour"
                            class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="social-links absolute bottom-0 left-0 right-0 bg-brand-600/90 backdrop-blur-sm p-4 flex justify-center gap-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center text-white transition-all"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center text-white transition-all"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1" data-i18n="team.member4_name">
                            Abdallah Bakour</h3>
                        <p class="text-brand-600 dark:text-brand-400 text-sm font-medium" data-i18n="team.member4_role">
                            Branding Specialist</p>
                    </div>
                </div>

                <!-- Team Member 2: Mostafa Elsawaf -->
                <div class="team-card glass-card bg-gray-50 dark:bg-slate-900/50 rounded-3xl overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Mostafa Elsawaf"
                            class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="social-links absolute bottom-0 left-0 right-0 bg-brand-600/90 backdrop-blur-sm p-4 flex justify-center gap-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center text-white transition-all"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center text-white transition-all"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1" data-i18n="team.member1_name">
                            Mostafa Elsawaf</h3>
                        <p class="text-brand-600 dark:text-brand-400 text-sm font-medium" data-i18n="team.member1_role">
                            Founder & CEO</p>
                    </div>
                </div>

                <!-- Team Member 3: Mahmoud Mohamed -->
                <div class="team-card glass-card bg-gray-50 dark:bg-slate-900/50 rounded-3xl overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('img/team-2.webp') }}" alt="Mahmoud Mohamed"
                            class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="social-links absolute bottom-0 left-0 right-0 bg-brand-600/90 backdrop-blur-sm p-4 flex justify-center gap-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center text-white transition-all"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center text-white transition-all"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1" data-i18n="team.member2_name">
                            Mahmoud Mohamed</h3>
                        <p class="text-brand-600 dark:text-brand-400 text-sm font-medium" data-i18n="team.member_role">
                            Marketing Manager</p>
                    </div>
                </div>

                <!-- Team Member 4: Mostafa Ali -->
                <div class="team-card glass-card bg-gray-50 dark:bg-slate-900/50 rounded-3xl overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('img/team-3.webp') }}" alt="Mostafa Ali"
                            class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="social-links absolute bottom-0 left-0 right-0 bg-brand-600/90 backdrop-blur-sm p-4 flex justify-center gap-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center text-white transition-all"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center text-white transition-all"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1" data-i18n="team.member3_name">
                            Mostafa Ali</h3>
                        <p class="text-brand-600 dark:text-brand-400 text-sm font-medium" data-i18n="team.member3_role">
                            Project Manager</p>
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center" data-aos="fade-up">
                <a href="{{ url('team') }}"
                    class="inline-flex items-center gap-2 text-brand-600 dark:text-brand-400 font-semibold hover:gap-3 transition-all">
                    <span data-i18n="nav.our_team">View Full Team</span>
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
            <h2 class="text-3xl md:text-5xl font-bold mb-6" data-i18n="cta.title">Ready to Transform Your Digital
                Presence?</h2>
            <p class="text-lg md:text-xl text-brand-100 mb-8 max-w-2xl mx-auto" data-i18n="cta.description">Let's
                work
                together to create something amazing. Contact us today to start your journey.</p>
            <a href="{{ url('contact') }}"
                class="inline-block bg-white text-brand-600 px-8 py-4 rounded-full font-bold shadow-lg hover:bg-gray-100 hover:scale-105 transition-all"
                data-i18n="cta.button">Get Started Now</a>
        </div>
    </section>
@endsection
