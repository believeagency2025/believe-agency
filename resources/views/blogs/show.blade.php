@extends('layouts.web')

@section('title', $blog->title)

@section('content')
<section class="relative pt-32 pb-20 bg-gray-50 dark:bg-slate-900 transition-colors duration-300 overflow-hidden">
    <!-- Animated Ambient Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-[-10%] w-[50%] h-[50%] bg-brand-300/10 dark:bg-brand-900/10 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 animate-blob"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Breadcrumbs -->
        <nav class="flex mb-8" aria-label="Breadcrumb" data-aos="fade-up">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 {{ app()->getLocale() == 'ar' ? 'space-x-reverse' : '' }}">
                <li class="inline-flex items-center">
                    <a href="{{ url('/') }}" class="text-gray-500 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 text-sm font-medium transition-colors">
                        <i class="fas fa-home {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i> {{ __('site.home') ?? 'Home' }}
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-gray-400 text-xs mx-2"></i>
                        <a href="{{ route('blogs') }}" class="text-gray-500 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 text-sm font-medium transition-colors">
                            {{ __('site.blogs') ?? 'What is New' }}
                        </a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-gray-400 text-xs mx-2"></i>
                        <span class="text-brand-600 dark:text-brand-400 text-sm font-bold truncate max-w-[200px]">{{ $blog->title }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 shadow-xl transition-all" data-aos="fade-up">
                    @if($blog->image)
                        <div class="relative h-[400px]">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                        </div>
                    @endif

                    <div class="p-8 md:p-12">
                        <div class="flex items-center gap-4 mb-6">
                            <span class="bg-brand-50 dark:bg-brand-500/10 text-brand-600 dark:text-brand-400 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider">
                                {{ $blog->created_at->format('M d, Y') }}
                            </span>
                            <span class="text-gray-400 text-sm flex items-center gap-2">
                                <i class="fas fa-clock"></i> {{ $blog->created_at->diffForHumans() }}
                            </span>
                        </div>

                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                            {{ $blog->title }}
                        </h1>

                        <div class="prose prose-lg dark:prose-invert max-w-none text-gray-600 dark:text-gray-300 leading-relaxed whitespace-pre-line">
                            {!! $blog->content !!}
                        </div>
                    </div>
                </div>

                <!-- Share -->
                <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-gray-200 dark:border-white/5 flex flex-col md:flex-row items-center justify-between gap-6" data-aos="fade-up">
                    <h4 class="font-bold text-gray-900 dark:text-white">{{ __('site.share_article') ?? 'Share this article:' }}</h4>
                    <div class="flex items-center gap-4">
                        @php
                            $shareUrl = urlencode(request()->fullUrl());
                            $shareTitle = urlencode($blog->title);
                        @endphp
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" class="w-12 h-12 rounded-2xl bg-slate-100 dark:bg-slate-900 flex items-center justify-center text-brand-600 dark:text-white hover:bg-brand-600 hover:text-white transition-all shadow-sm">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" class="w-12 h-12 rounded-2xl bg-slate-100 dark:bg-slate-900 flex items-center justify-center text-brand-600 dark:text-white hover:bg-brand-600 hover:text-white transition-all shadow-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}" target="_blank" class="w-12 h-12 rounded-2xl bg-slate-100 dark:bg-slate-900 flex items-center justify-center text-brand-600 dark:text-white hover:bg-brand-600 hover:text-white transition-all shadow-sm">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://wa.me/?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" class="w-12 h-12 rounded-2xl bg-slate-100 dark:bg-slate-900 flex items-center justify-center text-brand-600 dark:text-white hover:bg-brand-600 hover:text-white transition-all shadow-sm">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-8">
                <!-- Recent Posts -->
                <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-gray-200 dark:border-white/5 shadow-xl" data-aos="fade-left">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-8 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-brand-500 rounded-full"></span>
                        {{ __('site.recent_blogs') ?? 'Recent News' }}
                    </h3>
                    <div class="space-y-6">
                        @foreach($recentBlogs as $recent)
                            <a href="{{ route('blog.detail', $recent->slug) }}" class="group flex items-start gap-4">
                                @if($recent->image)
                                    <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0">
                                        <img src="{{ asset('storage/' . $recent->image) }}" alt="{{ $recent->title }}" class="w-full h-full object-cover transition-transform group-hover:scale-110">
                                    </div>
                                @else
                                    <div class="w-20 h-20 rounded-2xl bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400 shrink-0">
                                        <i class="fas fa-image"></i>
                                    </div>
                                @endif
                                <div class="flex-1">
                                    <h4 class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors line-clamp-2 mb-1">
                                        {{ $recent->title }}
                                    </h4>
                                    <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">
                                        {{ $recent->created_at->format('M d, Y') }}
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="bg-brand-600 rounded-3xl p-8 text-center relative overflow-hidden group" data-aos="fade-left" data-aos-delay="100">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-16 -translate-y-16 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10">
                        <i class="fas fa-paper-plane text-4xl text-white/20 mb-6"></i>
                        <h3 class="text-xl font-bold text-white mb-4">{{ __('site.have_project') ?? 'Have a special project?' }}</h3>
                        <p class="text-white/80 text-sm mb-8 leading-relaxed">
                            {{ __('site.cta_description') ?? 'Let\'s collaborate and build something extraordinary together.' }}
                        </p>
                        <a href="{{ url('/#contact') }}" class="inline-block w-full py-3 bg-white text-brand-600 rounded-xl font-bold hover:bg-slate-50 transition-colors">
                            {{ __('site.contact_us') ?? 'Contact Us' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
