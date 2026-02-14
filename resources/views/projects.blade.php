@extends('layouts.web')

@section('title', 'Our Projects')

@section('content')
    <!-- Page Header/Hero -->
    <section class="relative pt-24 md:pt-32 pb-20 hero-bg overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-[20%] right-[10%] w-[40%] h-[40%] bg-blue-500/5 dark:bg-blue-500/10 rounded-full blur-[120px]">
            </div>
            <div
                class="absolute bottom-[0%] left-[10%] w-[40%] h-[40%] bg-pink-500/5 dark:bg-pink-500/10 rounded-full blur-[120px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6" data-aos="fade-up">
                {{ __('site.nav.projects') }}</h1>
            <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-white">
                            {{ __('site.nav.home') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                {{ __('site.nav.projects') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm uppercase">
                    {{ __('site.projects.subtitle') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 mb-4 text-gray-900 dark:text-white">
                    {!! __('site.projects.title') !!}</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">{{ __('site.projects.description') }}</p>
            </div>

            <!-- Filters -->
            <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-6 gap-3 mb-12" data-aos="fade-up" data-aos-delay="100">
                <button
                    class="projects-filter-btn w-full px-4 py-2.5 rounded-xl glass bg-white/50 dark:bg-white/5 hover:bg-brand-500 hover:text-white dark:hover:bg-brand-500 dark:hover:text-white text-gray-600 dark:text-gray-300 text-sm font-semibold transition-all shadow-sm hover:shadow-brand-500/20" data-filter="web">{{ __('site.projects.filter_web') }}</button>
                <button
                    class="projects-filter-btn w-full px-4 py-2.5 rounded-xl glass bg-white/50 dark:bg-white/5 hover:bg-brand-500 hover:text-white dark:hover:bg-brand-500 dark:hover:text-white text-gray-600 dark:text-gray-300 text-sm font-semibold transition-all shadow-sm hover:shadow-brand-500/20" data-filter="app">{{ __('site.projects.filter_app') }}</button>
                <button
                    class="projects-filter-btn w-full px-4 py-2.5 rounded-xl glass bg-white/50 dark:bg-white/5 hover:bg-brand-500 hover:text-white dark:hover:bg-brand-500 dark:hover:text-white text-gray-600 dark:text-gray-300 text-sm font-semibold transition-all shadow-sm hover:shadow-brand-500/20"  style="font-size:10px !important;" data-filter="branding">{{ __('site.projects.filter_branding') }}</button>
                <button
                    class="projects-filter-btn w-full px-4 py-2.5 rounded-xl glass bg-white/50 dark:bg-white/5 hover:bg-brand-500 hover:text-white dark:hover:bg-brand-500 dark:hover:text-white text-gray-600 dark:text-gray-300 text-sm font-semibold transition-all shadow-sm hover:shadow-brand-500/20" data-filter="marketing">{{ __('site.projects.filter_marketing') }}</button>
                <button
                    class="projects-filter-btn w-full px-4 py-2.5 rounded-xl glass bg-white/50 dark:bg-white/5 hover:bg-brand-500 hover:text-white dark:hover:bg-brand-500 dark:hover:text-white text-gray-600 dark:text-gray-300 text-sm font-semibold transition-all shadow-sm hover:shadow-brand-500/20" data-filter="ecommerce">{{ __('site.projects.filter_ecommerce') }}</button>
                <button class="projects-filter-btn w-full px-4 py-2.5 rounded-xl bg-brand-500 text-white text-sm font-semibold shadow-lg shadow-brand-500/20 transition-all hover:bg-brand-500 hover:text-white dark:hover:bg-brand-500 dark:hover:text-white" style="font-size:10px !important;" data-filter="all">{{ __('site.services.software.title') }}</button>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
                <!-- Project 1: Mazzawi (Web) -->
                <div class="project-item web group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <!-- Fallback Image if main fails -->
                        <img src="{{ asset('img/portfolio/Web Design & Development/web1.webp') }}"
                            alt="Mazzawi Contracting"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'mazzawi']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-brand-600 dark:text-brand-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_web') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project1_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project1_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'mazzawi']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2: Noor Al Sham (Web) -->
                <div class="project-item web group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('img/portfolio/Web Design & Development/web2.webp') }}" alt="Noor Al Sham"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'noor-alsham']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-brand-600 dark:text-brand-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_web') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project2_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project2_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'noor-alsham']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 3: Abby Physics (App) -->
                <div class="project-item app group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('img/portfolio/Apps Development/app1.webp') }}" alt="Abby Physics"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1632571401005-458e9d244591?q=80&w=2071&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'abby-physics']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-pink-600 dark:text-pink-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_app') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project3_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project3_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'abby-physics']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 4: AlMonasib (App) -->
                <div class="project-item app group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('img/portfolio/Apps Development/app2.webp') }}" alt="AlMonasib"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'almonasib']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-pink-600 dark:text-pink-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_app') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project4_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project4_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'almonasib']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 5: Media Buying (Marketing) -->
                <div class="project-item marketing group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('img/portfolio/Digital Marketing/digitalmarketing1.webp') }}"
                            alt="Media Buying"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1533750349088-cd871a92f312?q=80&w=2070&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'media-buying']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-green-600 dark:text-green-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_marketing') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project5_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project5_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'media-buying']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 6: AB Creates (Branding) -->
                <div class="project-item branding group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('img/portfolio/Branding & Creative Design/branding.webp') }}" alt="AB Creates"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1626785774573-4b799314346d?q=80&w=2070&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'branding']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-brand-600 dark:text-brand-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_branding') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project6_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project6_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'branding']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 7: Brochure Designs (Branding) -->
                <div class="project-item branding group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('img/portfolio/Branding & Creative Design/brochure design.webp') }}"
                            alt="Brochure Designs"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1586717791821-3f44a5638d28?q=80&w=2070&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'brochure']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-brand-600 dark:text-brand-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_branding') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project7_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project7_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'brochure']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 8: Company Profile (Branding) -->
                <div class="project-item branding group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('img/portfolio/Branding & Creative Design/company profile.webp') }}"
                            alt="Company Profile"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1586717791821-3f44a5638d28?q=80&w=2070&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'company-profile']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-brand-600 dark:text-brand-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_branding') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project8_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project8_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'company-profile']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 9: E-commerce (Ecommerce) -->
                <div class="project-item ecommerce group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('img/portfolio/E-commerce/e-commerce.webp') }}" alt="E-commerce App"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070&auto=format&fit=crop'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', ['id' => 'ecommerce']) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-yellow-600 dark:text-yellow-400 uppercase tracking-wider block mb-2">
                            {{ __('site.projects.category_ecommerce') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('site.projects.project9_title') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ __('site.projects.project9_description') }}</p>
                        <a href="{{ route('project-details', ['id' => 'ecommerce']) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterBtns = document.querySelectorAll('.projects-filter-btn');
                const projectItems = document.querySelectorAll('.project-item');

                filterBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        const filter = btn.getAttribute('data-filter');

                        // Update button styles
                        filterBtns.forEach(b => {
                            b.classList.remove('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
                            b.classList.add('glass', 'bg-white/50', 'dark:bg-white/5', 'text-gray-600', 'dark:text-gray-300');
                        });
                        btn.classList.add('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
                        btn.classList.remove('glass', 'bg-white/50', 'dark:bg-white/5', 'text-gray-600', 'dark:text-gray-300');

                        // Filter items
                        projectItems.forEach(item => {
                            if (filter === 'all' || item.classList.contains(filter)) {
                                item.style.display = 'block';
                                setTimeout(() => {
                                    item.style.opacity = '1';
                                    item.style.transform = 'scale(1)';
                                }, 10);
                            } else {
                                item.style.opacity = '0';
                                item.style.transform = 'scale(0.95)';
                                setTimeout(() => {
                                    item.style.display = 'none';
                                }, 300);
                            }
                        });

                        // Refresh AOS
                        if (typeof AOS !== 'undefined') {
                            setTimeout(() => { AOS.refresh(); }, 400);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
