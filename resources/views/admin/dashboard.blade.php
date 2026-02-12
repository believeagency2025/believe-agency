@extends('layouts.admin')

@section('header_title', __('admin.overview'))
@section('header_subtitle', __('admin.welcome_back'))

@section('content')
<!-- Stats Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stat 1: Visitors -->
    <div class="glass-card p-6 rounded-3xl group hover:border-brand-500/50 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <div
                class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-brand-500/10 flex items-center justify-center text-brand-600 dark:text-brand-400 text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-users"></i>
            </div>
            <span
                class="text-xs font-bold text-green-500 bg-green-500/10 px-2 py-1 rounded-lg">+12%</span>
        </div>
        <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">{{ __('admin.total_visitors') }}</p>
        <h3 class="text-2xl font-bold mt-1">24,512</h3>
    </div>

    <!-- Stat 2: Clients -->
    <div class="glass-card p-6 rounded-3xl group hover:border-brand-500/50 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <div
                class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400 text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-briefcase"></i>
            </div>
            <span class="text-xs font-bold text-blue-500 bg-blue-500/10 px-2 py-1 rounded-lg">+5</span>
        </div>
        <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">{{ __('admin.total_clients') }}</p>
        <h3 class="text-2xl font-bold mt-1">128</h3>
    </div>

    <!-- Stat 3: Projects -->
    <div class="glass-card p-6 rounded-3xl group hover:border-brand-500/50 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <div
                class="w-12 h-12 rounded-2xl bg-purple-50 dark:bg-purple-500/10 flex items-center justify-center text-purple-600 dark:text-purple-400 text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-check-circle"></i>
            </div>
            <span class="text-xs font-bold text-purple-500 bg-purple-500/10 px-2 py-1 rounded-lg">85%</span>
        </div>
        <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">{{ __('admin.completed_projects') }}</p>
        <h3 class="text-2xl font-bold mt-1">342</h3>
    </div>

    <!-- Stat 4: Messages -->
    <div class="glass-card p-6 rounded-3xl group hover:border-brand-500/50 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <div
                class="w-12 h-12 rounded-2xl bg-orange-100 dark:bg-orange-500/10 flex items-center justify-center text-orange-600 dark:text-orange-400 text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-envelope"></i>
            </div>
            <span class="text-xs font-bold text-red-500 bg-red-500/10 px-2 py-1 rounded-lg">{{ __('admin.new') }}</span>
        </div>
        <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">{{ __('admin.unread_messages') }}</p>
        <h3 class="text-2xl font-bold mt-1">5</h3>
    </div>
</div>

<!-- Site Messages Section -->
<div class="glass-card rounded-3xl overflow-hidden border border-gray-200 dark:border-white/5">
    <div class="p-6 border-b border-gray-200 dark:border-white/5 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ __('admin.site_messages') }}</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('admin.recent_inquiries') }}</p>
        </div>
        <a href="#" class="text-brand-500 hover:text-brand-600 font-bold text-sm transition-colors">{{ __('admin.view_all') }}</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-start">
            <thead class="bg-gray-50/50 dark:bg-white/5">
                <tr class="text-gray-500 dark:text-gray-400 text-xs uppercase tracking-wider">
                    <th class="px-8 py-4 font-bold text-start">{{ __('admin.sender') }}</th>
                    <th class="px-8 py-4 font-bold text-start">{{ __('admin.email') }}</th>
                    <th class="px-8 py-4 font-bold text-start">{{ __('admin.subject') }}</th>
                    <th class="px-8 py-4 font-bold text-start">{{ __('admin.date') }}</th>
                    <th class="px-8 py-4 font-bold text-end">{{ __('admin.actions') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-white/5">
                <!-- Message 1 -->
                <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors cursor-pointer">
                    <td class="px-8 py-4 font-bold text-sm">أحمد محمد</td>
                    <td class="px-8 py-4 text-sm text-gray-500">ahmed@example.com</td>
                    <td class="px-8 py-4 text-sm font-medium">استفسار عن خدمات التصميم</td>
                    <td class="px-8 py-4 text-sm text-gray-500">{{ __('admin.today') }}، 10:30 صباحاً</td>
                    <td class="px-8 py-4">
                        <div class="flex items-center justify-end gap-2" style="direction: ltr;">
                            <button class="text-gray-400 hover:text-brand-500 transition-colors"><i class="fas fa-reply"></i></button>
                            <button class="text-gray-400 hover:text-red-500 transition-colors"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <!-- Message 2 -->
                <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors cursor-pointer bg-brand-50/50 dark:bg-brand-900/10">
                    <td class="px-8 py-4 font-bold text-sm">سارة علي <span class="bg-brand-500 text-white text-[10px] px-1.5 py-0.5 rounded ms-2">{{ __('admin.new') }}</span></td>
                    <td class="px-8 py-4 text-sm text-gray-500">sarah@company.com</td>
                    <td class="px-8 py-4 text-sm font-medium">فرصة شراكة</td>
                    <td class="px-8 py-4 text-sm text-gray-500">{{ __('admin.yesterday') }}، 4:15 مساءً</td>
                    <td class="px-8 py-4">
                         <div class="flex items-center justify-end gap-2" style="direction: ltr;">
                            <button class="text-gray-400 hover:text-brand-500 transition-colors"><i class="fas fa-reply"></i></button>
                            <button class="text-gray-400 hover:text-red-500 transition-colors"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                 <!-- Message 3 -->
                <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors cursor-pointer">
                    <td class="px-8 py-4 font-bold text-sm">مايكل براون</td>
                    <td class="px-8 py-4 text-sm text-gray-500">m.brown@tech.io</td>
                    <td class="px-8 py-4 text-sm font-medium">طلب عرض سعر لتطبيق موبايل</td>
                    <td class="px-8 py-4 text-sm text-gray-500">10 فبراير 2026</td>
                    <td class="px-8 py-4">
                        <div class="flex items-center justify-end gap-2" style="direction: ltr;">
                            <button class="text-gray-400 hover:text-brand-500 transition-colors"><i class="fas fa-reply"></i></button>
                            <button class="text-gray-400 hover:text-red-500 transition-colors"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
