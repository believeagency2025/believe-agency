@extends('layouts.admin')

@section('title', __('admin.edit_testimonial'))
@section('page_title', __('admin.edit_testimonial'))

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
            <!-- Tabs Header -->
            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 border-b border-slate-200 dark:border-slate-700 flex gap-4">
                <button type="button" onclick="switchLang('en')" id="btn-en" class="px-4 py-2 rounded-xl text-sm font-bold transition-all bg-brand-500 text-white shadow-lg shadow-brand-500/20">English</button>
                <button type="button" onclick="switchLang('ar')" id="btn-ar" class="px-4 py-2 rounded-xl text-sm font-bold transition-all text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700">العربية</button>
            </div>

            <div class="p-8">
                <!-- English Content -->
                <div id="content-en" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-start">{{ __('admin.client_name') }} (EN)</label>
                            <input type="text" name="client_name[en]" value="{{ old('client_name.en', $testimonial->getTranslations('client_name')['en'] ?? '') }}" required
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('client_name.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-start">
                            @error('client_name.en')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-start">{{ __('admin.client_role') }} (EN)</label>
                            <input type="text" name="client_role[en]" value="{{ old('client_role.en', $testimonial->getTranslations('client_role')['en'] ?? '') }}" required
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('client_role.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-start">
                            @error('client_role.en')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-start">{{ __('admin.feedback') }} (EN)</label>
                        <textarea name="content[en]" rows="4" required
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('content.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-start">{{ old('content.en', $testimonial->getTranslations('content')['en'] ?? '') }}</textarea>
                        @error('content.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Arabic Content -->
                <div id="content-ar" class="space-y-6 hidden" dir="rtl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-right">{{ __('admin.client_name') }} (AR)</label>
                            <input type="text" name="client_name[ar]" value="{{ old('client_name.ar', $testimonial->getTranslations('client_name')['ar'] ?? '') }}" required
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('client_name.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-right">
                            @error('client_name.ar')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-right">{{ __('admin.client_role') }} (AR)</label>
                            <input type="text" name="client_role[ar]" value="{{ old('client_role.ar', $testimonial->getTranslations('client_role')['ar'] ?? '') }}" required
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('client_role.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-right">
                            @error('client_role.ar')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 text-right">{{ __('admin.feedback') }} (AR)</label>
                        <textarea name="content[ar]" rows="4" required
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('content.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-right">{{ old('content.ar', $testimonial->getTranslations('content')['ar'] ?? '') }}</textarea>
                        @error('content.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6 text-start">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.media_rating') }}</h3>
                <div class="space-y-4">
                    @if($testimonial->image)
                    <div class="relative w-20 h-20 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-700">
                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="" class="w-full h-full object-cover">
                    </div>
                    @endif
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.change_photo_optional') }}</label>
                        <input type="file" name="image"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('image') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-brand-50 file:text-brand-600 hover:file:bg-brand-100">
                        @error('image')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.rating') }} (1-5)</label>
                        <select name="rating" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('rating') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                            @for($i=5; $i>=1; $i--)
                                <option value="{{ $i }}" {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>{{ $i }} {{ __('admin.stars') }}</option>
                            @endfor
                        </select>
                        @error('rating')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6 text-start">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.settings') }}</h3>
                <div class="space-y-4">
                    <div class="flex items-center gap-3 pt-2">
                        <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }} class="w-5 h-5 text-brand-500 border-slate-300 rounded-lg focus:ring-brand-500 cursor-pointer">
                        <label for="is_active" class="text-sm font-bold text-slate-700 dark:text-slate-300 cursor-pointer">{{ __('admin.active_visible') }}</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 transform hover:-translate-y-1">
                {{ __('admin.update_testimonial') }}
            </button>
            <a href="{{ route('admin.testimonials.index') }}" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 transition-all">
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
