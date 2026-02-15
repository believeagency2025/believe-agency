@extends('layouts.admin')

@section('title', __('admin.add_new_client'))
@section('page_title', __('admin.add_new_client'))

@section('content')
<div class="max-w-xl">
    <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6">
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-start">{{ __('admin.name') }}</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                    placeholder="e.g., Al-Faris Group"
                    class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('name') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-start">
                @error('name')
                    <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-start">{{ __('admin.client_logo') }}</label>
                <input type="file" name="logo" required
                    class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('logo') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-brand-50 file:text-brand-600 hover:file:bg-brand-100">
                @error('logo')
                    <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                @enderror
                <p class="text-[10px] text-slate-500 mt-2 text-start">{{ __('admin.recommended_size') }}: PNG or WebP with transparent background. {{ __('admin.max_2mb') }}.</p>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-start">{{ __('admin.website_url') }} ({{ __('admin.optional') }})</label>
                <input type="url" name="website_url" value="{{ old('website_url') }}"
                    placeholder="https://client-website.com"
                    class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('website_url') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm text-start">
                @error('website_url')
                    <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-start">{{ __('admin.display_order') }}</label>
                    <input type="number" name="order" value="{{ old('order', 0) }}" required
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('order') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none dark:text-white text-start">
                    @error('order')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center gap-3 pt-6">
                    <input type="checkbox" name="is_active" id="is_active" value="1" checked class="w-5 h-5 text-brand-500 border-slate-300 rounded-lg focus:ring-brand-500 cursor-pointer">
                    <label for="is_active" class="text-sm font-bold text-slate-700 dark:text-slate-300 cursor-pointer">{{ __('admin.active_visible') }}</label>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 transform hover:-translate-y-1">
                {{ __('admin.create_client') }}
            </button>
            <a href="{{ route('admin.clients.index') }}" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 transition-all">
                {{ __('admin.cancel') }}
            </a>
        </div>
    </form>
</div>
@endsection
