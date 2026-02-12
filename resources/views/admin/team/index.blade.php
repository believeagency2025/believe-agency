@extends('layouts.admin')

@section('header_title', 'Team Members')
@section('header_subtitle', 'Manage your team')

@section('content')
<div class="glass-card rounded-3xl overflow-hidden p-8">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Our Team</h3>
            <p class="text-sm text-gray-500">Manage team members and roles</p>
        </div>
        <button class="bg-brand-500 hover:bg-brand-600 text-white px-6 py-2 rounded-xl font-bold transition-all flex items-center gap-2">
            <i class="fas fa-plus"></i> Add Team Member
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Team Member Card -->
        <div class="glass border border-gray-200 dark:border-white/5 rounded-2xl p-6 relative group overflow-hidden">
            <div class="absolute inset-0 bg-brand-500/0 group-hover:bg-brand-500/5 transition-colors"></div>
            <div class="flex flex-col items-center text-center relative z-10">
                <div class="w-24 h-24 rounded-full bg-gray-200 dark:bg-slate-700 mb-4 overflow-hidden border-4 border-white dark:border-slate-800 shadow-xl">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-lg font-bold">John Doe</h3>
                <p class="text-brand-500 text-sm font-medium mb-4">CEO & Founder</p>
                <div class="flex gap-3">
                    <button class="p-2 bg-gray-100 dark:bg-white/10 rounded-full text-gray-500 dark:text-gray-400 hover:bg-brand-500 hover:text-white transition-all">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </button>
                    <button class="p-2 bg-gray-100 dark:bg-white/10 rounded-full text-gray-500 dark:text-gray-400 hover:bg-brand-500 hover:text-white transition-all">
                        <i class="fab fa-twitter text-sm"></i>
                    </button>
                    <button class="p-2 bg-gray-100 dark:bg-white/10 rounded-full text-gray-500 dark:text-gray-400 hover:bg-red-500 hover:text-white transition-all">
                        <i class="fas fa-trash text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="glass border border-gray-200 dark:border-white/5 rounded-2xl p-6 relative group overflow-hidden">
             <div class="absolute inset-0 bg-brand-500/0 group-hover:bg-brand-500/5 transition-colors"></div>
            <div class="flex flex-col items-center text-center relative z-10">
                <div class="w-24 h-24 rounded-full bg-gray-200 dark:bg-slate-700 mb-4 overflow-hidden border-4 border-white dark:border-slate-800 shadow-xl">
                     <img src="https://via.placeholder.com/150" alt="Team Member" class="w-full h-full object-cover">
                </div>
                <h3 class="text-lg font-bold">Jane Smith</h3>
                <p class="text-brand-500 text-sm font-medium mb-4">Lead Designer</p>
                 <div class="flex gap-3">
                    <button class="p-2 bg-gray-100 dark:bg-white/10 rounded-full text-gray-500 dark:text-gray-400 hover:bg-brand-500 hover:text-white transition-all">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </button>
                    <button class="p-2 bg-gray-100 dark:bg-white/10 rounded-full text-gray-500 dark:text-gray-400 hover:bg-brand-500 hover:text-white transition-all">
                        <i class="fab fa-dribbble text-sm"></i>
                    </button>
                    <button class="p-2 bg-gray-100 dark:bg-white/10 rounded-full text-gray-500 dark:text-gray-400 hover:bg-red-500 hover:text-white transition-all">
                        <i class="fas fa-trash text-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
