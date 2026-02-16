@extends('layouts.admin')

@section('title', __('admin.add_new_member'))
@section('page_title', __('admin.add_new_member'))

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
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
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.name') }} (English)</label>
                        <input type="text" name="name[en]" value="{{ old('name.en') }}" required
                            placeholder="e.g., John Doe"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('name.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('name.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.role') }} (English)</label>
                        <input type="text" name="role[en]" value="{{ old('role.en') }}" required
                            placeholder="e.g., Creative Director"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('role.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('role.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Arabic Content -->
                <div id="content-ar" class="space-y-6 hidden" dir="rtl">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.name') }} (العربية)</label>
                        <input type="text" name="name[ar]" value="{{ old('name.ar') }}" required
                            placeholder="مثال: جون دو"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('name.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-right">
                        @error('name.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.role') }} (العربية)</label>
                        <input type="text" name="role[ar]" value="{{ old('role.ar') }}" required
                            placeholder="مثال: مدير إبداعي"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('role.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-right">
                        @error('role.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6">
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.social_professional') }}</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.facebook') }} URL</label>
                    <input type="url" name="social_links[facebook]" value="{{ old('social_links.facebook') }}"
                        placeholder="https://facebook.com/username"
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('social_links.facebook') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.linkedin') }} URL</label>
                    <input type="url" name="social_links[linkedin]" value="{{ old('social_links.linkedin') }}"
                        placeholder="https://linkedin.com/in/username"
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('social_links.linkedin') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.cv_link') }}</label>
                    <input type="url" name="cv_link" value="{{ old('cv_link') }}"
                        placeholder="https://drive.google.com/file/d/..."
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('cv_link') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                    @error('cv_link')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.profile_picture') }}</h3>
                <div>
                    <input type="file" name="image" required
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('image') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-brand-50 file:text-brand-600 hover:file:bg-brand-100">
                    @error('image')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                    <p class="text-[10px] text-slate-500 mt-2">{{ __('admin.recommended_size') }}: Square image (800x800px). {{ __('admin.max_2mb') }}.</p>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8 space-y-6">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.settings') }}</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.display_order') }}</label>
                        <input type="number" name="order" value="{{ old('order', 0) }}" required
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('order') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('order')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <input type="checkbox" name="is_active" id="is_active" value="1" checked class="w-5 h-5 text-brand-500 border-slate-300 rounded-lg focus:ring-brand-500 cursor-pointer">
                        <label for="is_active" class="text-sm font-bold text-slate-700 dark:text-slate-300 cursor-pointer">{{ __('admin.active_member') }}</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 transform hover:-translate-y-1">
                {{ __('admin.create_member') }}
            </button>
            <a href="{{ route('admin.team.index') }}" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 transition-all">
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
