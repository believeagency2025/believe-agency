@extends('layouts.admin')

@section('title', __('admin.edit_service') . ': ' . ($service->title[app()->getLocale()] ?? $service->title['en'] ?? 'Untitled'))
@section('page_title', __('admin.edit_service'))

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

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
                        <input type="text" name="title[en]" value="{{ old('title.en', $service->title['en'] ?? '') }}" required
                            placeholder="e.g., Web Design & Development"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('title.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('title.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.subtitle') }} ({{ __('admin.en') }})</label>
                        <input type="text" name="subtitle[en]" value="{{ old('subtitle.en', $service->subtitle['en'] ?? '') }}"
                            placeholder="e.g., Innovative Digital Solutions"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('subtitle.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('subtitle.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.description') }} ({{ __('admin.en') }})</label>
                        <textarea name="description[en]" rows="3"
                            placeholder="Brief summary of the service..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('description.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('description.en', $service->description['en'] ?? '') }}</textarea>
                        @error('description.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.message_content') }} ({{ __('admin.en') }})</label>
                        <textarea name="content[en]" rows="6"
                            placeholder="Explain the service in detail..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('content.en') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('content.en', $service->content['en'] ?? '') }}</textarea>
                        @error('content.en')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Arabic Content -->
                <div id="content-ar" class="space-y-6 hidden" dir="rtl">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.title') }} ({{ __('admin.ar') }})</label>
                        <input type="text" name="title[ar]" value="{{ old('title.ar', $service->title['ar'] ?? '') }}"
                            placeholder="مثال: تصميم وتطوير المواقع"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('title.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('title.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.subtitle') }} ({{ __('admin.ar') }})</label>
                        <input type="text" name="subtitle[ar]" value="{{ old('subtitle.ar', $service->subtitle['ar'] ?? '') }}"
                            placeholder="مثال: حلول رقمية مبتكرة"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('subtitle.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('subtitle.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.description') }} ({{ __('admin.ar') }})</label>
                        <textarea name="description[ar]" rows="3"
                            placeholder="ملخص بسيط عن الخدمة..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('description.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('description.ar', $service->description['ar'] ?? '') }}</textarea>
                        @error('description.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.message_content') }} ({{ __('admin.ar') }})</label>
                        <textarea name="content[ar]" rows="6"
                            placeholder="شرح الخدمة بالتفصيل..."
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('content.ar') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">{{ old('content.ar', $service->content['ar'] ?? '') }}</textarea>
                        @error('content.ar')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm p-8">
            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">{{ __('admin.general') }} {{ __('admin.settings') }}</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.icon_class') }} (Font Awesome)</label>
                    <input type="text" name="icon_class" value="{{ old('icon_class', $service->icon_class) }}" required
                        placeholder="fas fa-rocket"
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('icon_class') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                    @error('icon_class')
                        <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                    @enderror
                    <p class="text-[10px] text-slate-500 mt-2">Current Icon: <i class="{{ $service->icon_class }}"></i></p>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.slug') }}</label>
                    <input type="text" name="slug" value="{{ old('slug', $service->slug) }}"
                        placeholder="e.g., app-development"
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('slug') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                </div>

                <div class="md:col-span-2">
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300">{{ __('admin.features') }}</label>
                        <button type="button" onclick="addFeature()" class="px-3 py-1 bg-brand-500/10 text-brand-600 rounded-lg text-xs font-bold hover:bg-brand-500 hover:text-white transition-all">
                            <i class="fas fa-plus mr-1"></i> {{ __('admin.add_feature') }}
                        </button>
                    </div>
                    <div id="features-container" class="space-y-4">
                        <!-- Feature items will be added here -->
                    </div>
                    <textarea name="features" id="features_hidden" class="hidden">{{ old('features', json_encode($service->features)) }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300">{{ __('admin.process_steps') }}</label>
                        <button type="button" onclick="addProcess()" class="px-3 py-1 bg-brand-500/10 text-brand-600 rounded-lg text-xs font-bold hover:bg-brand-500 hover:text-white transition-all">
                            <i class="fas fa-plus mr-1"></i> {{ __('admin.add_step') }}
                        </button>
                    </div>
                    <div id="process-container" class="space-y-4">
                        <!-- Process items will be added here -->
                    </div>
                    <textarea name="process" id="process_hidden" class="hidden">{{ old('process', json_encode($service->process)) }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.display_order') }}</label>
                    <input type="number" name="order" value="{{ old('order', $service->order) }}" required
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('order') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                </div>

                <div class="flex items-center gap-3 md:col-span-2">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }} class="w-5 h-5 text-brand-500 border-slate-300 rounded-lg focus:ring-brand-500 cursor-pointer">
                    <label for="is_active" class="text-sm font-bold text-slate-700 dark:text-slate-300 cursor-pointer">{{ __('admin.active_visible') }}</label>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 transform hover:-translate-y-1">
                {{ __('admin.update_service') }}
            </button>
            <a href="{{ route('admin.services.index') }}" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 transition-all">
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

    // Repeater Logic
    function createRow(type, data = {}) {
        const container = document.getElementById(`${type}-container`);
        const index = container.children.length;
        const row = document.createElement('div');
        row.className = `${type}-row bg-slate-50 dark:bg-slate-900/50 p-6 rounded-2xl border border-slate-200 dark:border-slate-700 relative group animate-fade-in-up`;

        let html = `
            <button type="button" onclick="this.parentElement.remove(); updateHiddenInputs();" class="absolute top-4 right-4 text-slate-400 hover:text-red-500 transition-colors">
                <i class="fas fa-trash-alt"></i>
            </button>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
        `;

        if (type === 'features') {
            html += `
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.title_en') }}</label>
                    <input type="text" data-name="title_en" value="${data.title?.en || ''}" oninput="updateHiddenInputs()" placeholder="e.g. iOS Development" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.title_ar') }}</label>
                    <input type="text" dir="rtl" data-name="title_ar" value="${data.title?.ar || ''}" oninput="updateHiddenInputs()" placeholder="تطوير تطبيقات آيفون" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.icon_class') }}</label>
                    <input type="text" data-name="icon" value="${data.icon || 'fas fa-check'}" oninput="updateHiddenInputs()" placeholder="fab fa-apple" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.desc_en') }}</label>
                    <textarea data-name="desc_en" oninput="updateHiddenInputs()" rows="2" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">${data.desc?.en || ''}</textarea>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.desc_ar') }}</label>
                    <textarea dir="rtl" data-name="desc_ar" oninput="updateHiddenInputs()" rows="2" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">${data.desc?.ar || ''}</textarea>
                </div>
            `;
        } else {
            html += `
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.step_title_en') }}</label>
                    <input type="text" data-name="title_en" value="${data.title?.en || ''}" oninput="updateHiddenInputs()" placeholder="e.g. Planning" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.step_title_ar') }}</label>
                    <input type="text" dir="rtl" data-name="title_ar" value="${data.title?.ar || ''}" oninput="updateHiddenInputs()" placeholder="تخطيط" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">
                </div>
                <div class="md:col-span-2 text-right">
                   <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1 text-left">{{ __('admin.step_number') }}</label>
                   <input type="number" data-name="step" value="${data.step || index + 1}" oninput="updateHiddenInputs()" class="w-24 px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.step_desc_en') }}</label>
                    <textarea data-name="desc_en" oninput="updateHiddenInputs()" rows="2" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">${data.desc?.en || ''}</textarea>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">{{ __('admin.step_desc_ar') }}</label>
                    <textarea dir="rtl" data-name="desc_ar" oninput="updateHiddenInputs()" rows="2" class="w-full px-3 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:border-brand-500 focus:outline-none dark:text-white">${data.desc?.ar || ''}</textarea>
                </div>
            `;
        }

        html += `</div>`;
        row.innerHTML = html;
        container.appendChild(row);
        updateHiddenInputs();
    }

    function addFeature() { createRow('features'); }
    function addProcess() { createRow('process'); }

    function updateHiddenInputs() {
        // Update Features
        const features = [];
        document.querySelectorAll('.features-row').forEach(row => {
            features.push({
                title: {
                    en: row.querySelector('[data-name="title_en"]').value,
                    ar: row.querySelector('[data-name="title_ar"]').value
                },
                desc: {
                    en: row.querySelector('[data-name="desc_en"]').value,
                    ar: row.querySelector('[data-name="desc_ar"]').value
                },
                icon: row.querySelector('[data-name="icon"]').value
            });
        });
        document.getElementById('features_hidden').value = JSON.stringify(features);

        // Update Process
        const process = [];
        document.querySelectorAll('.process-row').forEach(row => {
            process.push({
                title: {
                    en: row.querySelector('[data-name="title_en"]').value,
                    ar: row.querySelector('[data-name="title_ar"]').value
                },
                desc: {
                    en: row.querySelector('[data-name="desc_en"]').value,
                    ar: row.querySelector('[data-name="desc_ar"]').value
                },
                step: row.querySelector('[data-name="step"]').value
            });
        });
        document.getElementById('process_hidden').value = JSON.stringify(process);
    }

    // Initialize with existing data
    document.addEventListener('DOMContentLoaded', () => {
        const featHidden = document.getElementById('features_hidden').value;
        const procHidden = document.getElementById('process_hidden').value;

        if (featHidden && featHidden !== '[]' && featHidden !== '') {
            try {
                const feats = JSON.parse(featHidden);
                feats.forEach(f => createRow('features', f));
            } catch(e) { console.error('Error parsing features', e); }
        }

        if (procHidden && procHidden !== '[]' && procHidden !== '') {
            try {
                const procs = JSON.parse(procHidden);
                procs.forEach(p => createRow('process', p));
            } catch(e) { console.error('Error parsing process', e); }
        }
    });
</script>
@endpush
