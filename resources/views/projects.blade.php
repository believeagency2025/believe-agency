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
            <div class="grid grid-cols-2 lg:flex lg:flex-wrap justify-center gap-2 mb-12" data-aos="fade-up" data-aos-delay="100">
                @foreach($services as $service)
                <button
                    class="projects-filter-btn w-full lg:w-auto px-2 lg:px-6 py-2.5 rounded-xl glass bg-white/50 dark:bg-white/5 hover:bg-brand-500 hover:text-white dark:hover:bg-brand-500 dark:hover:text-white text-gray-600 dark:text-gray-300 text-[10px] sm:text-xs lg:text-sm font-semibold transition-all shadow-sm hover:shadow-brand-500/20"
                    data-filter="{{ $service->slug }}">{{ $service->title }}</button>
                @endforeach
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
                @foreach($projects as $index => $project)
                <div class="project-item {{ $project->service ? $project->service->slug : 'all' }} group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="{{ 100 * ($index % 3) }}">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('storage/' . $project->featured_image) }}"
                            alt="{{ $project->title }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='{{ asset($project->featured_image) }}'">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('project-details', $project->slug) }}"
                                class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-brand-500 hover:text-white transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300">
                                {{ __('site.projects.view_project') }}</a>
                        </div>
                    </div>
                    <div class="p-6 text-start">
                        <span
                            class="text-xs font-bold text-brand-600 dark:text-brand-400 uppercase tracking-wider block mb-2">
                            {{ $project->service ? $project->service->title : '' }}</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ $project->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            {{ $project->description }}</p>
                        <a href="{{ route('project-details', $project->slug) }}"
                            class="inline-flex items-center text-brand-600 dark:text-brand-400 font-medium hover:text-brand-800 dark:hover:text-brand-300 transition-colors">
                            <span>{{ __('site.projects.view_details') }}</span> <i
                                class="fas fa-arrow-right {{ app()->getLocale() == 'ar' ? 'mr-2 rotate-180' : 'ml-2' }} text-sm"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. تهيئة مكتبة الأنيميشن لتظهر العناصر المخفية
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                });
            }

            // كود الفلترة الخاص بك كما هو
            const filterBtns = document.querySelectorAll('.projects-filter-btn');
            const projectItems = document.querySelectorAll('.project-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const filter = btn.getAttribute('data-filter');

                    // تحديث ستايل الأزرار
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
                        b.classList.add('glass', 'bg-white/50', 'dark:bg-white/5', 'text-gray-600', 'dark:text-gray-300');
                    });
                    btn.classList.add('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
                    btn.classList.remove('glass', 'bg-white/50', 'dark:bg-white/5', 'text-gray-600', 'dark:text-gray-300');

                    // فلترة العناصر
                    projectItems.forEach(item => {
                        // إزالة كلاس الأنيميشن مؤقتاً لإعادة تشغيله إذا أردت
                        item.classList.remove('aos-animate');

                        if (filter === 'all' || item.classList.contains(filter)) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                                if (typeof AOS !== 'undefined') item.classList.add('aos-animate');
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.95)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });

                    // تحديث AOS للحسابات الجديدة
                    if (typeof AOS !== 'undefined') {
                        setTimeout(() => { AOS.refresh(); }, 400);
                    }
                });
            });
        });

        // حل إضافي: إجبار اللودر على الاختفاء في حالة وجود مشكلة في اللايوت
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader'); // تأكد من اسم الـ ID في ملف layout
            if(preloader) {
                preloader.style.opacity = '0';
                setTimeout(() => { preloader.style.display = 'none'; }, 500);
            }
        });
    </script>
@endpush
@endsection
