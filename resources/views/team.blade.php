@extends('layouts.web')

@section('title', 'Our Team')

@push('styles')
    <style>
        .team-card {
            position: relative;
            overflow: hidden;
        }

        .team-card .social-links {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            transition: bottom 0.3s ease;
        }

        .team-card:hover .social-links {
            bottom: 0;
        }
    </style>
@endpush

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
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up"
                data-i18n="team.title">Our Team</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto" data-aos="fade-up"
                data-aos-delay="100" data-i18n="team.subtitle">
                Meet the talented individuals who make Believe Agency exceptional
            </p>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="200">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white"
                            data-i18n="nav.home">Home</a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400"
                                data-i18n="team.title">Our Team</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Team Members -->
    <section class="py-20 bg-white dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm"
                    data-i18n="team.section_subtitle">MEET OUR EXPERTS</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white"
                    data-i18n="team.section_title">The People Behind Our Success</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1: Abdallah Bakour -->
                <div class="team-card glass-card rounded-3xl overflow-hidden group" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="relative">
                        <img src="{{ asset('img/team-4.webp') }}" alt="Abdallah Bakour"
                            class="w-full aspect-square object-cover">
                        <div class="social-links bg-brand-600/95 backdrop-blur-sm p-4 flex justify-center gap-3">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-behance"></i>
                            </a>
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
                <div class="team-card glass-card rounded-3xl overflow-hidden group" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="relative">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Mostafa Elsawaf"
                            class="w-full aspect-square object-cover">
                        <div class="social-links bg-accent-600/95 backdrop-blur-sm p-4 flex justify-center gap-3">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-behance"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1" data-i18n="team.member1_name">
                            Mostafa Elsawaf</h3>
                        <p class="text-accent-600 dark:text-accent-400 text-sm font-medium"
                            data-i18n="team.member1_role">Founder & CEO</p>
                    </div>
                </div>

                <!-- Team Member 3: Mahmoud Mohamed -->
                <div class="team-card glass-card rounded-3xl overflow-hidden group" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="relative">
                        <img src="{{ asset('img/team-2.webp') }}" alt="Mahmoud Mohamed"
                            class="w-full aspect-square object-cover">
                        <div class="social-links bg-green-600/95 backdrop-blur-sm p-4 flex justify-center gap-3">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1" data-i18n="team.member2_name">
                            Mahmoud Mohamed</h3>
                        <p class="text-green-600 dark:text-green-400 text-sm font-medium" data-i18n="team.member_role">
                            Marketing Manager</p>
                    </div>
                </div>

                <!-- Team Member 4: Mostafa Ali -->
                <div class="team-card glass-card rounded-3xl overflow-hidden group" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="relative">
                        <img src="{{ asset('img/team-3.webp') }}" alt="Mostafa Ali"
                            class="w-full aspect-square object-cover">
                        <div class="social-links bg-purple-600/95 backdrop-blur-sm p-4 flex justify-center gap-3">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center text-white transition-all">
                                <i class="fab fa-behance"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1" data-i18n="team.member3_name">
                            Mostafa Ali</h3>
                        <p class="text-purple-600 dark:text-purple-400 text-sm font-medium"
                            data-i18n="team.member3_role">Project Manager</p>
                    </div>
                </div>
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
            <h2 class="text-3xl md:text-5xl font-bold mb-6" data-aos="fade-up" data-i18n="team.cta_title">
                Want to Join Our Team?</h2>
            <p class="text-xl text-brand-100 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100"
                data-i18n="team.cta_desc">
                We're always looking for talented individuals to join our growing team.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ url('contact') }}"
                    class="bg-white text-brand-600 hover:bg-gray-100 px-8 py-4 rounded-full font-bold transition-all shadow-lg hover:shadow-2xl hover:scale-105 transform"
                    data-i18n="team.cta_button">Contact Us</a>
            </div>
        </div>
    </section>
@endsection
