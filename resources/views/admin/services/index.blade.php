@extends('layouts.admin')

@section('header_title', 'Services')
@section('header_subtitle', 'Manage your service offerings')

@section('content')
<div class="glass-card rounded-3xl overflow-hidden p-8">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">All Services</h3>
            <p class="text-sm text-gray-500">Edit your service details</p>
        </div>
        <button class="bg-brand-500 hover:bg-brand-600 text-white px-6 py-2 rounded-xl font-bold transition-all flex items-center gap-2">
            <i class="fas fa-plus"></i> Add New Service
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Service Card Example -->
        <div class="glass border border-gray-200 dark:border-white/5 rounded-2xl p-6 group hover:border-brand-500/50 transition-all">
            <div class="w-12 h-12 rounded-xl bg-brand-100 dark:bg-brand-500/10 flex items-center justify-center text-brand-600 dark:text-brand-400 text-xl mb-4 group-hover:scale-110 transition-transform">
                <i class="fas fa-layer-group"></i>
            </div>
            <h3 class="text-lg font-bold mb-2">Web Design</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4 line-clamp-2">Creating stunning, responsive websites tailored to your brand identity.</p>
            <div class="flex justify-end gap-2">
                <button class="text-gray-400 hover:text-brand-500 transition-colors p-2"><i class="fas fa-edit"></i></button>
                <button class="text-gray-400 hover:text-red-500 transition-colors p-2"><i class="fas fa-trash"></i></button>
            </div>
        </div>

        <div class="glass border border-gray-200 dark:border-white/5 rounded-2xl p-6 group hover:border-brand-500/50 transition-all">
            <div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-500/10 flex items-center justify-center text-purple-600 dark:text-purple-400 text-xl mb-4 group-hover:scale-110 transition-transform">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <h3 class="text-lg font-bold mb-2">App Development</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4 line-clamp-2">Building powerful mobile applications for iOS and Android.</p>
            <div class="flex justify-end gap-2">
                <button class="text-gray-400 hover:text-brand-500 transition-colors p-2"><i class="fas fa-edit"></i></button>
                <button class="text-gray-400 hover:text-red-500 transition-colors p-2"><i class="fas fa-trash"></i></button>
            </div>
        </div>

        <div class="glass border border-gray-200 dark:border-white/5 rounded-2xl p-6 group hover:border-brand-500/50 transition-all">
            <div class="w-12 h-12 rounded-xl bg-orange-100 dark:bg-orange-500/10 flex items-center justify-center text-orange-600 dark:text-orange-400 text-xl mb-4 group-hover:scale-110 transition-transform">
                <i class="fas fa-paint-brush"></i>
            </div>
            <h3 class="text-lg font-bold mb-2">Branding</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4 line-clamp-2">Crafting unique brand identities that resonate with your audience.</p>
            <div class="flex justify-end gap-2">
                <button class="text-gray-400 hover:text-brand-500 transition-colors p-2"><i class="fas fa-edit"></i></button>
                <button class="text-gray-400 hover:text-red-500 transition-colors p-2"><i class="fas fa-trash"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection
