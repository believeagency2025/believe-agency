@extends('layouts.admin')

@section('title', __('admin.add') . ' ' . __('admin.project'))
@section('page_title', __('admin.add') . ' ' . __('admin.project'))

@section('content')
<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
    @csrf

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 text-start">
        <!-- Left Column: Main Info (2/3) -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Language Tabs & Content -->
            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
                <div class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-slate-900 dark:text-white">{{ __('admin.project_details') }}</h3>
                        <div class="flex p-1 bg-slate-200 dark:bg-slate-700 rounded-xl" id="lang-switcher">
                            <button type="button" data-lang="en" class="px-4 py-1.5 rounded-lg text-xs font-bold transition-all bg-white dark:bg-slate-600 text-brand-500 shadow-sm">English</button>
                            <button type="button" data-lang="ar" class="px-4 py-1.5 rounded-lg text-xs font-bold transition-all text-slate-500 dark:text-slate-400">العربية</button>
                        </div>
                    </div>
                </div>

                <div class="p-6 space-y-6">
                    <!-- EN Content -->
                    <div id="content-en" class="space-y-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.title') }} (EN)</label>
                            <input type="text" name="title_en" value="{{ old('title_en') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.short_description') }} (EN)</label>
                            <textarea name="description_en" rows="3" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">{{ old('description_en') }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.full_overview') }} (EN)</label>
                            <textarea name="overview_en" rows="6" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none text-start">{{ old('overview_en') }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.client_name') }} (EN)</label>
                            <input type="text" name="client_name_en" value="{{ old('client_name_en') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">
                        </div>
                    </div>

                    <!-- AR Content (Hidden initially) -->
                    <div id="content-ar" class="space-y-6 hidden" dir="rtl">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.title') }} (العربية)</label>
                            <input type="text" name="title_ar" value="{{ old('title_ar') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.short_description') }} (العربية)</label>
                            <textarea name="description_ar" rows="3" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">{{ old('description_ar') }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.full_overview') }} (العربية)</label>
                            <textarea name="overview_ar" rows="6" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none text-right">{{ old('overview_ar') }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.client_name') }} (العربية)</label>
                            <input type="text" name="client_name_ar" value="{{ old('client_name_ar') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features & Tech Stack -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-start">
                <!-- Features -->
                <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
                    <div class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 px-6 py-4 flex items-center justify-between">
                        <h3 class="font-bold text-slate-900 dark:text-white">{{ __('admin.features') }}</h3>
                        <button type="button" onclick="addFeature()" class="text-brand-500 hover:text-brand-600 text-sm font-bold flex items-center gap-1">
                            <i class="fas fa-plus-circle"></i> {{ __('admin.add') }}
                        </button>
                    </div>
                    <div class="p-6 space-y-4" id="features-container">
                        <!-- Feature items will be added here -->
                    </div>
                </div>

                <!-- Tech Stack -->
                <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
                    <div class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 px-6 py-4 flex items-center justify-between">
                        <h3 class="font-bold text-slate-900 dark:text-white">{{ __('admin.tech_stack') }}</h3>
                        <button type="button" onclick="addTech()" class="text-brand-500 hover:text-brand-600 text-sm font-bold flex items-center gap-1">
                            <i class="fas fa-plus-circle"></i> {{ __('admin.add') }}
                        </button>
                    </div>
                    <div class="p-6 space-y-4" id="tech-container">
                        <!-- Tech items will be added here -->
                    </div>
                </div>
            </div>

            <!-- Testimonial Section -->
            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
                <div class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 px-6 py-4 flex items-center justify-between">
                    <h3 class="font-bold text-slate-900 dark:text-white">{{ __('admin.testimonial') }}</h3>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Testimonial (EN)</label>
                        <textarea name="testimonial_text_en" rows="3" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">{{ old('testimonial_text_en') }}</textarea>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Testimonial (AR)</label>
                        <textarea name="testimonial_text_ar" rows="3" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none text-right" dir="rtl">{{ old('testimonial_text_ar') }}</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Name (EN)</label>
                        <input type="text" name="testimonial_name_en" value="{{ old('testimonial_name_en') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Role (EN)</label>
                        <input type="text" name="testimonial_role_en" value="{{ old('testimonial_role_en') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">الاسم (AR)</label>
                        <input type="text" name="testimonial_name_ar" value="{{ old('testimonial_name_ar') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none text-right" dir="rtl">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">الدور (AR)</label>
                        <input type="text" name="testimonial_role_ar" value="{{ old('testimonial_role_ar') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none text-right" dir="rtl">
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Sidebar Settings (1/3) -->
        <div class="space-y-8">
            <!-- Basic Config -->
            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
                <div class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 px-6 py-4">
                    <h3 class="font-bold text-slate-900 dark:text-white">{{ __('admin.settings') }}</h3>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.slug') }}</label>
                        <input type="text" id="slug-input" name="slug" value="{{ old('slug') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none font-mono text-sm" required>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.service') }}</label>
                        <select name="service_id" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none" required>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.duration') }}</label>
                        <input type="text" name="duration" value="{{ old('duration') }}" placeholder="e.g. 2 Months" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.website_url') }}</label>
                        <input type="url" name="website_url" value="{{ old('website_url') }}" placeholder="https://..." class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.status') }}</label>
                        <select name="status" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none">
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-900/50 rounded-2xl border border-slate-100 dark:border-slate-700">
                        <input type="checkbox" name="is_featured" value="1" id="is_featured" {{ old('is_featured') ? 'checked' : '' }} class="w-5 h-5 rounded border-slate-300 text-brand-500 focus:ring-brand-500">
                        <label for="is_featured" class="text-sm font-bold text-slate-700 dark:text-slate-200 cursor-pointer">{{ __('admin.featured_project') }}</label>
                    </div>
                </div>
            </div>

            <!-- Image Settings -->
            <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
                <div class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 px-6 py-4">
                    <h3 class="font-bold text-slate-900 dark:text-white">{{ __('admin.images') }}</h3>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.featured_image') }}</label>
                        <div class="w-full aspect-video bg-slate-100 dark:bg-slate-900 rounded-2xl border-2 border-dashed border-slate-200 dark:border-slate-700 flex flex-col items-center justify-center relative overflow-hidden group">
                            <img id="featured-preview" class="absolute inset-0 w-full h-full object-cover hidden">
                            <i class="fas fa-cloud-upload-alt text-3xl text-slate-400 mb-3 group-hover:scale-110 transition-transform"></i>
                            <span class="text-xs font-bold text-slate-500 text-center px-4">Click to upload featured image<br>(1200x800 recommended)</span>
                            <input type="file" name="featured_image" onchange="previewFeatured(this)" class="absolute inset-0 opacity-0 cursor-pointer">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.gallery_images') }}</label>
                        <input type="file" name="gallery[]" multiple class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 transition-all outline-none text-sm">
                        <p class="text-[10px] text-slate-400 mt-2">You can select multiple images at once.</p>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold text-lg shadow-xl shadow-brand-500/30 transition-all active:scale-95">
                {{ __('admin.save') }}
            </button>
        </div>
    </div>
</form>

<template id="feature-template">
    <div class="feature-item p-4 bg-slate-50 dark:bg-slate-900/50 rounded-2xl border border-slate-100 dark:border-slate-700 space-y-3 relative group text-start">
        <button type="button" onclick="this.parentElement.remove()" class="absolute top-2 right-2 w-6 h-6 rounded-full bg-red-100 text-red-500 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity">
            <i class="fas fa-times"></i>
        </button>
        <div class="space-y-3">
            <div class="grid grid-cols-2 gap-3">
                <input type="text" name="features[INDEX][title_en]" placeholder="{{ __('admin.title') }} (EN)" class="w-full px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-xs outline-none">
                <input type="text" name="features[INDEX][title_ar]" placeholder="{{ __('admin.title') }} (AR)" class="w-full px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-xs outline-none text-right" dir="rtl">
            </div>
            <div class="grid grid-cols-2 gap-3">
                <textarea name="features[INDEX][description_en]" placeholder="{{ __('admin.description') }} (EN)" rows="2" class="w-full px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-xs outline-none"></textarea>
                <textarea name="features[INDEX][description_ar]" placeholder="{{ __('admin.description') }} (AR)" rows="2" class="w-full px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-xs outline-none text-right" dir="rtl"></textarea>
            </div>
        </div>
    </div>
</template>

<template id="tech-template">
    <div class="tech-item p-4 bg-slate-50 dark:bg-slate-900/50 rounded-2xl border border-slate-100 dark:border-slate-700 relative group">
        <button type="button" onclick="this.parentElement.remove()" class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-red-100 text-red-500 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity">
            <i class="fas fa-times"></i>
        </button>
        <input type="text" name="tech_stack[INDEX][name]" placeholder="{{ __('admin.tech_name') }}" class="w-full px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-xs outline-none">
    </div>
</template>

@push('scripts')
<script>
    // Language Switcher
    const langBtns = document.querySelectorAll('#lang-switcher button');
    const contentEn = document.getElementById('content-en');
    const contentAr = document.getElementById('content-ar');

    langBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const lang = btn.dataset.lang;
            langBtns.forEach(b => {
                b.classList.remove('bg-white', 'dark:bg-slate-600', 'text-brand-500', 'shadow-sm');
                b.classList.add('text-slate-500', 'dark:text-slate-400');
            });
            btn.classList.add('bg-white', 'dark:bg-slate-600', 'text-brand-500', 'shadow-sm');
            btn.classList.remove('text-slate-500', 'dark:text-slate-400');

            if (lang === 'en') {
                contentEn.classList.remove('hidden');
                contentAr.classList.add('hidden');
            } else {
                contentEn.classList.add('hidden');
                contentAr.classList.remove('hidden');
            }
        });
    });

    // Auto-slug generation
    const titleEn = document.querySelector('input[name="title_en"]');
    const slugInput = document.getElementById('slug-input');
    titleEn.addEventListener('input', () => {
        if (!slugInput.dataset.manual) {
            slugInput.value = titleEn.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        }
    });
    slugInput.addEventListener('input', () => {
        slugInput.dataset.manual = true;
    });

    // Image Preview
    function previewFeatured(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('featured-preview');
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Dynamic Features
    let featureIndex = 0;
    function addFeature() {
        const container = document.getElementById('features-container');
        const template = document.getElementById('feature-template').innerHTML;
        const html = template.replace(/INDEX/g, featureIndex++);
        container.insertAdjacentHTML('beforeend', html);
    }

    // Dynamic Tech Stack
    let techIndex = 0;
    function addTech() {
        const container = document.getElementById('tech-container');
        const template = document.getElementById('tech-template').innerHTML;
        const html = template.replace(/INDEX/g, techIndex++);
        container.insertAdjacentHTML('beforeend', html);
    }

    // Add initial rows
    window.onload = () => {
        addFeature();
        addTech();
    };
</script>
@endpush
@endsection
