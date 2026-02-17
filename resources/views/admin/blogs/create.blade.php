@extends('layouts.admin')

@section('title', __('admin.add_new_blog') ?? 'Add New Blog')
@section('page_title', __('admin.create_blog') ?? 'Create Blog')

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
            <!-- Tabs Header -->
            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 border-b border-slate-200 dark:border-slate-700 flex gap-4">
                <button type="button" onclick="switchLang('en')" id="btn-en" class="px-4 py-2 rounded-xl text-sm font-bold transition-all bg-brand-500 text-white shadow-lg shadow-brand-500/20">{{ __('admin.en') }}</button>
                <button type="button" onclick="switchLang('ar')" id="btn-ar" class="px-4 py-2 rounded-xl text-sm font-bold transition-all text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700">{{ __('admin.ar') }}</button>
            </div>

            <div class="p-8">
                <!-- English Content -->
                <div id="content-en" class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.title') }} ({{ __('admin.en') }})</label>
                        <input type="text" name="title[en]" value="{{ old('title.en') }}" required
                            placeholder="Blog title in English"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('title.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('title.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.message_content') }} ({{ __('admin.en') }})</label>
                        <textarea name="content[en]" rows="10"
                            placeholder="Blog content in English..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('content.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('content.en') }}</textarea>
                        @error('content.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Arabic Content -->
                <div id="content-ar" class="space-y-6 hidden" dir="rtl">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.title') }} ({{ __('admin.ar') }})</label>
                        <input type="text" name="title[ar]" value="{{ old('title.ar') }}" required
                            placeholder="عنوان المدونة بالعربية"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('title.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('title.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.message_content') }} ({{ __('admin.ar') }})</label>
                        <textarea name="content[ar]" rows="10"
                            placeholder="محتوى المدونة بالعربية..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('content.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('content.ar') }}</textarea>
                        @error('content.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6">
            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">{{ __('admin.general') }} {{ __('admin.settings') }}</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.photo') }}</label>
                    <div class="flex items-center gap-4">
                        <div id="image-preview" class="w-24 h-24 rounded-2xl bg-slate-100 dark:bg-slate-900 border-2 border-dashed border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-400 overflow-hidden">
                            <i class="fas fa-image text-2xl" id="image-placeholder"></i>
                            <img src="" id="image-element" class="hidden w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <input type="file" name="image" id="image-input" accept="image/*" class="hidden">
                            <label for="image-input" class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 dark:bg-slate-700 hover:bg-slate-200 dark:hover:bg-slate-600 text-slate-700 dark:text-slate-200 rounded-xl font-bold cursor-pointer transition-all">
                                <i class="fas fa-upload"></i>
                                {{ __('admin.click_to_upload') ?? 'Upload Photo' }}
                            </label>
                            <p class="text-[10px] text-slate-500 mt-2">{{ __('admin.max_2mb') }} (JPEG, PNG, WEBP)</p>
                        </div>
                    </div>
                    @error('image')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.slug') }}</label>
                    <input type="text" name="slug" value="{{ old('slug') }}"
                        placeholder="e.g., modern-web-trends"
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('slug') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.display_order') }}</label>
                    <input type="number" name="order" value="{{ old('order', 0) }}" required
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('order') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                </div>

                <div class="flex items-center gap-3">
                    <input type="checkbox" name="is_active" id="is_active" checked value="1" class="w-5 h-5 text-brand-500 border-slate-300 rounded-lg focus:ring-brand-500 cursor-pointer">
                    <label for="is_active" class="text-sm font-bold text-slate-700 dark:text-slate-300 cursor-pointer">{{ __('admin.active_visible') }}</label>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 transform hover:-translate-y-1">
                {{ __('admin.save') ?? 'Save Blog' }}
            </button>
            <a href="{{ route('admin.blogs.index') }}" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 transition-all">
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

    // Image Preview
    const imageInput = document.getElementById('image-input');
    const imagePreview = document.getElementById('image-element');
    const imagePlaceholder = document.getElementById('image-placeholder');

    imageInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                imagePlaceholder.classList.add('hidden');
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
@endpush
