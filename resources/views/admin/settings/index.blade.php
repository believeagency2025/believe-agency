@extends('layouts.admin')

@section('title', __('admin.settings') . ' ' . __('admin.management'))
@section('page_title', __('admin.settings'))

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-8">
        @csrf

        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
            <!-- Tabs Header -->
            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 border-b border-slate-200 dark:border-slate-700 flex gap-4 overflow-x-auto">
                <button type="button" onclick="switchTab('general')" id="tab-btn-general" class="px-5 py-2.5 rounded-xl text-sm font-bold transition-all bg-brand-500 text-white shadow-lg shadow-brand-500/20 whitespace-nowrap">{{ __('admin.general') }}</button>
                <button type="button" onclick="switchTab('social')" id="tab-btn-social" class="px-5 py-2.5 rounded-xl text-sm font-bold transition-all text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 whitespace-nowrap">{{ __('admin.social_links') }}</button>
                <button type="button" onclick="switchTab('contact')" id="tab-btn-contact" class="px-5 py-2.5 rounded-xl text-sm font-bold transition-all text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 whitespace-nowrap">{{ __('admin.contact_info') }}</button>
            </div>

            <div class="p-8">
                <!-- General Settings -->
                <div id="tab-general" class="space-y-6">
                    <input type="hidden" name="group" value="general">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.agency_name') }}</label>
                        <input type="text" name="agency_name" value="{{ \App\Models\Setting::get('agency_name', 'Believe Agency') }}"
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('agency_name') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                        @error('agency_name')
                            <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Social Links -->
                <div id="tab-social" class="space-y-6 hidden">
                    <input type="hidden" name="group" value="social">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.facebook') }}</label>
                            <input type="url" name="facebook" value="{{ \App\Models\Setting::get('facebook') }}"
                                placeholder="https://facebook.com/..."
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('facebook') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('facebook')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.instagram') }}</label>
                            <input type="url" name="instagram" value="{{ \App\Models\Setting::get('instagram') }}"
                                placeholder="https://instagram.com/..."
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('instagram') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('instagram')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.behance') }}</label>
                            <input type="url" name="behance" value="{{ \App\Models\Setting::get('behance') }}"
                                placeholder="https://behance.net/..."
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('behance') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('behance')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.linkedin') }}</label>
                            <input type="url" name="linkedin" value="{{ \App\Models\Setting::get('linkedin') }}"
                                placeholder="https://linkedin.com/..."
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('linkedin') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('linkedin')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.tiktok') }}</label>
                            <input type="url" name="tiktok" value="{{ \App\Models\Setting::get('tiktok') }}"
                                placeholder="https://tiktok.com/@..."
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('tiktok') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('tiktok')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.twitter') }}</label>
                            <input type="url" name="twitter" value="{{ \App\Models\Setting::get('twitter') }}"
                                placeholder="https://x.com/..."
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('twitter') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('twitter')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.whatsapp') }}</label>
                            <input type="text" name="whatsapp" value="{{ \App\Models\Setting::get('whatsapp') }}"
                                placeholder="201..."
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('whatsapp') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('whatsapp')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div id="tab-contact" class="space-y-6 hidden">
                    <input type="hidden" name="group" value="contact">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.email_address') }}</label>
                            <input type="email" name="contact_email" value="{{ \App\Models\Setting::get('contact_email') }}"
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('contact_email') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('contact_email')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.phone_number') }}</label>
                            <input type="text" name="contact_phone" value="{{ \App\Models\Setting::get('contact_phone') }}"
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('contact_phone') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('contact_phone')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.office_address') }}</label>
                            <input type="text" name="contact_address" value="{{ \App\Models\Setting::get('contact_address') }}"
                                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border @error('contact_address') border-red-500 @else border-slate-200 dark:border-slate-700 @enderror rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white text-sm">
                            @error('contact_address')
                                <p class="mt-1 text-xs text-red-500 font-bold flex items-center gap-1"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-10 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 transform hover:-translate-y-1">
                {{ __('admin.save_all') }}
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    function switchTab(tabId) {
        // Hide all tabs
        ['general', 'social', 'contact'].forEach(id => {
            document.getElementById('tab-' + id).classList.add('hidden');
            document.getElementById('tab-btn-' + id).classList.remove('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
            document.getElementById('tab-btn-' + id).classList.add('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-100', 'dark:hover:bg-slate-700');
        });

        // Show active tab
        document.getElementById('tab-' + tabId).classList.remove('hidden');
        const activeBtn = document.getElementById('tab-btn-' + tabId);
        activeBtn.classList.add('bg-brand-500', 'text-white', 'shadow-lg', 'shadow-brand-500/20');
        activeBtn.classList.remove('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-100', 'dark:hover:bg-slate-700');
    }
</script>
@endpush
