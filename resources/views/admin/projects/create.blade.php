@extends('layouts.admin')

@section('title', __('admin.add_new_project'))
@section('page_title', __('admin.create_project'))

@section('content')
<div class="max-w-5xl">
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
            <!-- Tabs Header -->
            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 border-b border-slate-200 dark:border-slate-700 flex gap-4">
                <button type="button" onclick="switchLang('en')" id="btn-en" class="px-4 py-2 rounded-xl text-sm font-bold transition-all bg-brand-500 text-white shadow-lg shadow-brand-500/20">English</button>
                <button type="button" onclick="switchLang('ar')" id="btn-ar" class="px-4 py-2 rounded-xl text-sm font-bold transition-all text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700">العربية</button>
            </div>

            <div class="p-8">
                <!-- English Content -->
                <div id="content-en" class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.title') }} (English)</label>
                        <input type="text" name="title[en]" value="{{ old('title.en') }}" required
                            placeholder="e.g., Mazzawi Real Estate Website"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('title.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('title.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.description') }} (English)</label>
                        <textarea name="description[en]" rows="3"
                            placeholder="Brief summary of the project..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('description.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('description.en') }}</textarea>
                        @error('description.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.message_content') }} (English)</label>
                        <textarea name="content[en]" rows="6"
                            placeholder="Explain the project details, challenges, and solutions..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('content.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('content.en') }}</textarea>
                        @error('content.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Arabic Content -->
                <div id="content-ar" class="space-y-6 hidden" dir="rtl">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.title') }} (العربية)</label>
                        <input type="text" name="title[ar]" value="{{ old('title.ar') }}"
                            placeholder="مثال: موقع عقارات مزاوي"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('title.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('title.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.description') }} (العربية)</label>
                        <textarea name="description[ar]" rows="3"
                            placeholder="ملخص بسيط عن المشروع..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('description.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('description.ar') }}</textarea>
                        @error('description.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.message_content') }} (العربية)</label>
                        <textarea name="content[ar]" rows="6"
                            placeholder="اشرح تفاصيل المشروع..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('content.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('content.ar') }}</textarea>
                        @error('content.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.project_details') }}</h3>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.services') }}</label>
                        <select name="service_id" required class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('service_id') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                            <option value="">{{ __('admin.select_service') ?? 'Select Service' }}</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                                    {{ $service->title[app()->getLocale()] ?? $service->title['en'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('service_id')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.slug') }}</label>
                        <input type="text" name="slug" value="{{ old('slug') }}" required
                            placeholder="project-slug"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('slug') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('slug')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.client_name') }}</label>
                        <input type="text" name="client_name" value="{{ old('client_name') }}"
                            placeholder="Client name"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('client_name') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('client_name')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.completion_date') }}</label>
                            <input type="date" name="completion_date" value="{{ old('completion_date') }}"
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('completion_date') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                            @error('completion_date')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.display_order') }}</label>
                            <input type="number" name="order" value="{{ old('order', 0) }}" required
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('order') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                            @error('order')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.website') }}</label>
                        <input type="url" name="website_url" value="{{ old('website_url') }}"
                            placeholder="https://example.com"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('website_url') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('website_url')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-3">
                        <input type="checkbox" name="is_featured" id="is_featured" value="1" class="w-5 h-5 text-brand-500 border-slate-300 rounded-lg focus:ring-brand-500 cursor-pointer">
                        <label for="is_featured" class="text-sm font-bold text-slate-700 dark:text-slate-300 cursor-pointer">{{ __('admin.featured_project') }}</label>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.media_assets') }}</h3>

                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.main_image') }}</label>
                    <input type="file" name="main_image" required
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('main_image') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-brand-50 file:text-brand-600 hover:file:bg-brand-100">
                    @error('main_image')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                    <p class="text-[10px] text-slate-500 mt-2">{{ __('admin.recommended_size') }}: 1200x800px. {{ __('admin.max_2mb') }}.</p>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.gallery_images') }}</label>
                    <input type="file" name="gallery[]" multiple
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('gallery.*') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-brand-50 file:text-brand-600 hover:file:bg-brand-100">
                    @error('gallery.*')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                    <p class="text-[10px] text-slate-500 mt-2">{{ __('admin.multiple_images_hint') }}</p>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 transform hover:-translate-y-1">
                {{ __('admin.save_project') }}
            </button>
            <a href="{{ route('admin.projects.index') }}" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 transition-all">
                {{ __('admin.cancel') }}
            </a>
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
