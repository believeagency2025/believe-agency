@extends('layouts.admin')

@section('title', __('admin.edit_category') . ': ' . ($category->name[app()->getLocale()] ?? $category->name['en'] ?? ' Untitled'))
@section('page_title', __('admin.edit_category'))

@section('content')
<div class="max-w-2xl">
    <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 border-b border-slate-200 dark:border-slate-700 flex gap-4">
                <button type="button" onclick="switchLang('en')" id="btn-en" class="px-4 py-2 rounded-xl text-sm font-bold transition-all bg-brand-500 text-white shadow-lg shadow-brand-500/20">English</button>
                <button type="button" onclick="switchLang('ar')" id="btn-ar" class="px-4 py-2 rounded-xl text-sm font-bold transition-all text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700">العربية</button>
            </div>

            <div class="p-8">
                <div id="content-en" class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.name') }} (English)</label>
                        <input type="text" name="name[en]" value="{{ old('name.en', $category->name['en'] ?? '') }}" required placeholder="e.g., Web Development" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('name.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('name.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div id="content-ar" class="space-y-6 hidden" dir="rtl">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.name') }} (العربية)</label>
                        <input type="text" name="name[ar]" value="{{ old('name.ar', $category->name['ar'] ?? '') }}" placeholder="مثال: تطوير المواقع" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('name.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-end" dir="rtl">
                        @error('name.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Slug</label>
                    <input type="text" name="slug" value="{{ old('slug', $category->slug) }}" required placeholder="web-dev" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('slug') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                    @error('slug')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.type') }}</label>
                    <select name="type" required class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('type') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        <option value="project" {{ $category->type == 'project' ? 'selected' : '' }}>{{ __('admin.projects') }}</option>
                        <option value="service" {{ $category->type == 'service' ? 'selected' : '' }}>{{ __('admin.services') }}</option>
                    </select>
                    @error('type')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.order') }}</label>
                    <input type="number" name="order" value="{{ old('order', $category->order) }}" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('order') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                    @error('order')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 transform hover:-translate-y-1">{{ __('admin.update_category') }}</button>
            <a href="{{ route('admin.categories.index') }}" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 transition-all">{{ __('admin.cancel') }}</a>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    function switchLang(lang) {
        const btnEn = document.getElementById('btn-en');
        const btnAr = document.getElementById('btn-ar');
        const contentEn = document.getElementById('content-en');
        const contentAr = document.getElementById('content-ar');

        if (lang === 'en') {
            btnEn.classList.add('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
            btnEn.classList.remove('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-100', 'dark:hover:bg-slate-700');
            btnAr.classList.remove('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
            btnAr.classList.add('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-100', 'dark:hover:bg-slate-700');
            contentEn.classList.remove('hidden');
            contentAr.classList.add('hidden');
        } else {
            btnAr.classList.add('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
            btnAr.classList.remove('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-100', 'dark:hover:bg-slate-700');
            btnEn.classList.remove('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
            btnEn.classList.add('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-100', 'dark:hover:bg-slate-700');
            contentAr.classList.remove('hidden');
            contentEn.classList.add('hidden');
        }
    }
</script>
@endpush
