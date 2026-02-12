@extends('layouts.admin')

@section('header_title', 'General Settings')
@section('header_subtitle', 'Manage website configuration')

@section('content')
<div class="glass-card rounded-3xl overflow-hidden p-8 max-w-4xl mx-auto">
    <div class="mb-8">
        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Website Settings</h3>
        <p class="text-sm text-gray-500">Update your site identity and contact info</p>
    </div>

    <form class="space-y-6">
        <!-- Logo Upload -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Website Logo</label>
            <div class="flex items-center gap-6">
                <div class="w-20 h-20 rounded-xl bg-gray-100 dark:bg-slate-800 border-2 border-dashed border-gray-300 dark:border-gray-600 flex items-center justify-center text-gray-400">
                    <img src="https://believe-agency.net/img/logo100.webp" alt="Logo" class="w-12 h-auto opacity-50">
                </div>
                <div class="flex-1">
                    <input type="file" class="block w-full text-sm text-gray-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-xl file:border-0
                        file:text-sm file:font-semibold
                        file:bg-brand-50 file:text-brand-700
                        hover:file:bg-brand-100
                        dark:file:bg-brand-500/10 dark:file:text-brand-400
                    "/>
                    <p class="mt-1 text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Site Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Website Name</label>
                <input type="text" value="Believe Agency" class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-all" placeholder="Enter site name">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Contact Email</label>
                <input type="email" value="info@believe-agency.net" class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-all" placeholder="Enter contact email">
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Phone Number</label>
                <input type="tel" value="+20 15 0529 4544" class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-all" placeholder="Enter phone number">
            </div>

             <!-- Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Address</label>
                <input type="text" value="Tanta, Egypt" class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-all" placeholder="Enter address">
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="border-t border-gray-200 dark:border-white/10 pt-6">
            <h4 class="text-md font-bold text-gray-900 dark:text-white mb-4">Social Media Links</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                 <div class="relative">
                    <i class="fab fa-facebook absolute left-4 top-3.5 text-gray-400"></i>
                    <input type="text" class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-all" placeholder="Facebook URL">
                </div>
                 <div class="relative">
                    <i class="fab fa-twitter absolute left-4 top-3.5 text-gray-400"></i>
                    <input type="text" class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-all" placeholder="Twitter URL">
                </div>
                 <div class="relative">
                    <i class="fab fa-instagram absolute left-4 top-3.5 text-gray-400"></i>
                    <input type="text" class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-all" placeholder="Instagram URL">
                </div>
                 <div class="relative">
                    <i class="fab fa-linkedin absolute left-4 top-3.5 text-gray-400"></i>
                    <input type="text" class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-all" placeholder="LinkedIn URL">
                </div>
            </div>
        </div>

        <div class="flex justify-end pt-4">
            <button type="button" class="px-6 py-3 rounded-xl bg-gray-100 dark:bg-white/5 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 font-bold mr-4 transition-all">Cancel</button>
            <button type="submit" class="px-8 py-3 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-bold shadow-lg shadow-brand-500/20 transition-all">Save Changes</button>
        </div>
    </form>
</div>
@endsection
