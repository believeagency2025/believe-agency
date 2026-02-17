@extends('layouts.web')

@section('title', __('site.blogs_title') ?? 'What is New - Blog')

@section('content')
<section class="relative pt-32 pb-20 bg-gray-50 dark:bg-slate-900 transition-colors duration-300 overflow-hidden">
    <!-- Animated Ambient Background (copied from home for consistency) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-[-10%] w-[50%] h-[50%] bg-purple-300/10 dark:bg-purple-900/10 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 animate-blob"></div>
        <div class="absolute top-0 right-[-10%] w-[50%] h-[50%] bg-brand-300/10 dark:bg-brand-900/10 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider text-sm">{{ __('site.blogs_subtitle') ?? 'What is New' }}</span>
            <h1 class="text-4xl md:text-6xl font-bold mt-2 mb-4 text-gray-900 dark:text-white">
                {!! __('site.blogs_main_title') ?? 'Latest News & <span class="text-brand-600">Insights</span>' !!}
            </h1>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">{{ __('site.blogs_description') ?? 'Stay updated with our latest activities, news, and insights into the digital world.' }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($blogs as $index => $blog)
                <div class="group glass-card bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5 hover:shadow-2xl transition-all duration-300 flex flex-col h-full"
                    data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                    <a href="{{ route('blog.detail', $blog->slug) }}" class="relative overflow-hidden h-64 shrink-0 block">
                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                            <div class="w-full h-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400">
                                <i class="fas fa-image text-4xl"></i>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="bg-white text-gray-900 px-6 py-2 rounded-full font-semibold">{{ __('site.read_more') ?? 'Read More' }}</span>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-brand-500 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                {{ $blog->created_at->format('M d, Y') }}
                            </span>
                        </div>
                    </a>
                    <div class="p-8 flex flex-col flex-1">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors line-clamp-2">
                            {{ $blog->title }}
                        </h2>
                        <div class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3 flex-1 overflow-hidden">
                            {{ Str::limit(strip_tags($blog->content), 150) }}
                        </div>
                        <a href="{{ route('blog.detail', $blog->slug) }}"
                            class="inline-flex items-center gap-2 text-brand-600 dark:text-brand-400 font-bold group-hover:gap-3 transition-all mt-auto">
                            <span>{{ __('site.read_more') ?? 'Read Full Article' }}</span>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-20 text-center" data-aos="fade-up">
                    <div class="w-20 h-20 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mx-auto mb-6 text-slate-400">
                        <i class="fas fa-newspaper text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ __('site.no_blogs') ?? 'No blog posts yet.' }}</h3>
                    <p class="text-gray-500 dark:text-gray-400 mt-2">{{ __('site.check_back_later') ?? 'Please check back later for new updates.' }}</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center" data-aos="fade-up">
            {{ $blogs->links() }}
        </div>
    </div>
</section>
@endsection
