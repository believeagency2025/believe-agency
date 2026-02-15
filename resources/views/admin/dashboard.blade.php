@extends('layouts.admin')

@section('title', __('admin.dashboard'))
@section('page_title', __('admin.overview'))

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stat Cards -->
    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm transition-all hover:-translate-y-1">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-brand-100 dark:bg-brand-500/10 rounded-2xl flex items-center justify-center text-brand-600 dark:text-brand-400 text-xl">
                <i class="fas fa-briefcase"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">{{ __('admin.projects') }}</p>
                <h4 class="text-2xl font-bold text-slate-900 dark:text-white">{{ $projectsCount }}</h4>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm transition-all hover:-translate-y-1">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-500/10 rounded-2xl flex items-center justify-center text-purple-600 dark:text-purple-400 text-xl">
                <i class="fas fa-concierge-bell"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">{{ __('admin.services') }}</p>
                <h4 class="text-2xl font-bold text-slate-900 dark:text-white">{{ $servicesCount }}</h4>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm transition-all hover:-translate-y-1">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-pink-100 dark:bg-pink-500/10 rounded-2xl flex items-center justify-center text-pink-600 dark:text-pink-400 text-xl">
                <i class="fas fa-envelope"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">{{ __('admin.unread_messages') }}</p>
                <h4 class="text-2xl font-bold text-slate-900 dark:text-white">{{ $messagesCount }}</h4>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-slate-800 p-6 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm transition-all hover:-translate-y-1">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center text-blue-600 dark:text-blue-400 text-xl">
                <i class="fas fa-users"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">{{ __('admin.total_visitors') }}</p>
                <h4 class="text-2xl font-bold text-slate-900 dark:text-white">{{ $totalVisitors }}</h4>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Welcome Card -->
    <div class="lg:col-span-2 bg-slate-900 rounded-3xl p-8 relative overflow-hidden shadow-2xl">
        <div class="relative z-10">
            <h3 class="text-2xl font-bold text-white mb-2">{{ __('admin.welcome_back', ['name' => explode(' ', Auth::user()->name)[0]]) }}</h3>
            <p class="text-slate-400 max-w-md">{{ __('admin.overview_subtitle') ?? 'Everything looking good today.' }}</p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="{{ route('admin.projects.create') }}" class="px-6 py-3 bg-brand-500 hover:bg-brand-600 text-white rounded-xl font-bold transition-all shadow-lg shadow-brand-500/20">
                    {{ __('admin.add') }} {{ __('admin.projects') }}
                </a>
                <a href="{{ route('admin.settings') }}" class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white rounded-xl font-bold transition-all">
                    {{ __('admin.settings') }}
                </a>
            </div>

            <!-- Visitor Brief Stats -->
            <div class="mt-10 grid grid-cols-2 gap-6 max-w-sm">
                <div class="flex flex-col">
                    <span class="text-slate-500 text-xs font-bold uppercase tracking-wider mb-1">{{ __('admin.last_7_days') ?? 'Last 7 Days' }}</span>
                    <span class="text-2xl font-bold text-white">{{ number_format($visitorsLastWeek) }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-slate-500 text-xs font-bold uppercase tracking-wider mb-1">{{ __('admin.last_30_days') ?? 'Last 30 Days' }}</span>
                    <span class="text-2xl font-bold text-white">{{ number_format($visitorsLastMonth) }}</span>
                </div>
            </div>
        </div>
        <!-- Decorative blobs -->
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-brand-500 rounded-full blur-3xl opacity-20"></div>
        <div class="absolute -bottom-10 right-20 w-40 h-40 bg-purple-500 rounded-full blur-3xl opacity-10"></div>
    </div>

    <!-- Quick Info -->
    <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-slate-200 dark:border-slate-700">
        <h3 class="font-bold text-slate-900 dark:text-white mb-6">{{ __('admin.quick_actions') ?? 'Quick Actions' }}</h3>
        <div class="space-y-4">
            <a href="{{ route('admin.projects.create') }}" class="w-full p-4 bg-slate-50 dark:bg-slate-700/50 rounded-2xl flex items-center gap-4 text-slate-700 dark:text-slate-300 hover:bg-brand-50 shadow-sm transition-all group">
                <div class="w-10 h-10 bg-white dark:bg-slate-800 rounded-xl flex items-center justify-center group-hover:bg-brand-500 group-hover:text-white transition-all shadow-sm">
                    <i class="fas fa-plus"></i>
                </div>
                <span class="font-semibold text-sm">{{ __('admin.add') }} {{ __('admin.projects') }}</span>
            </a>
            <a href="{{ route('admin.services.create') }}" class="w-full p-4 bg-slate-50 dark:bg-slate-700/50 rounded-2xl flex items-center gap-4 text-slate-700 dark:text-slate-300 hover:bg-brand-50 shadow-sm transition-all group">
                <div class="w-10 h-10 bg-white dark:bg-slate-800 rounded-xl flex items-center justify-center group-hover:bg-brand-500 group-hover:text-white transition-all shadow-sm">
                    <i class="fas fa-plus"></i>
                </div>
                <span class="font-semibold text-sm">{{ __('admin.add') }} {{ __('admin.services') }}</span>
            </a>
            <a href="{{ route('admin.testimonials.create') }}" class="w-full p-4 bg-slate-50 dark:bg-slate-700/50 rounded-2xl flex items-center gap-4 text-slate-700 dark:text-slate-300 hover:bg-brand-50 shadow-sm transition-all group">
                <div class="w-10 h-10 bg-white dark:bg-slate-800 rounded-xl flex items-center justify-center group-hover:bg-brand-500 group-hover:text-white transition-all shadow-sm">
                    <i class="fas fa-plus"></i>
                </div>
                <span class="font-semibold text-sm">{{ __('admin.add') }} {{ __('admin.testimonials') }}</span>
            </a>
        </div>
    </div>
</div>

<!-- Recent Inquiries & Visitor Stats -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-8 mt-8">
    <!-- Recent Inquiries -->
    <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-200 dark:border-slate-700 flex items-center justify-between">
            <div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.recent_inquiries') }}</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400">{{ __('admin.site_messages') }}</p>
            </div>
            <a href="{{ route('admin.messages.index') }}" class="text-brand-500 hover:text-brand-600 font-bold text-sm flex items-center gap-2">
                {{ __('admin.view_all') }}
                <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-start border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-900/50">
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-start">{{ __('admin.sender') }}</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-end">{{ __('admin.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                    @forelse($recentMessages as $message)
                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/25 transition-colors">
                        <td class="px-6 py-4">
                            <div class="text-start">
                                <p class="text-sm font-bold text-slate-900 dark:text-white">{{ $message->name }}</p>
                                <p class="text-[10px] text-slate-500">{{ $message->subject }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-end">
                            <a href="{{ route('admin.messages.show', $message) }}" class="text-brand-500 hover:text-brand-600">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2" class="px-6 py-12 text-center text-slate-500 dark:text-slate-400">
                            {{ __('admin.no_data') }}
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Most Visited Pages -->
    <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-200 dark:border-slate-700 flex items-center justify-between">
            <div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.most_visited_pages') }}</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400">{{ __('admin.visitor_stats') }}</p>
            </div>
            <div class="px-3 py-1 bg-brand-50 dark:bg-brand-500/10 text-brand-600 dark:text-brand-400 text-xs font-bold rounded-lg">
                {{ __('admin.unique_visitors') }}: {{ $uniqueVisitors }}
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-start border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-900/50">
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-start">{{ __('admin.page_path') }}</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-end">{{ __('admin.views') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                    @forelse($topPages as $page)
                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/25 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-link text-slate-400 text-[10px]"></i>
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">/{{ $page->path ?: 'home' }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-end">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">{{ number_format($page->views) }}</span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2" class="px-6 py-12 text-center text-slate-500 dark:text-slate-400">
                            {{ __('admin.no_data') }}
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
