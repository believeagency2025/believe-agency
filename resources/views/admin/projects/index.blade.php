@extends('layouts.admin')

@section('header_title', 'Projects')
@section('header_subtitle', 'Manage your portfolio projects')

@section('content')
<div class="glass-card rounded-3xl overflow-hidden p-8">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">All Projects</h3>
            <p class="text-sm text-gray-500">Manage, edit, or delete projects</p>
        </div>
        <button class="bg-brand-500 hover:bg-brand-600 text-white px-6 py-2 rounded-xl font-bold transition-all flex items-center gap-2">
            <i class="fas fa-plus"></i> Add New Project
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50/50 dark:bg-white/5">
                <tr>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase">Image</th>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase">Project Name</th>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase">Category</th>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase">Client</th>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-white/5">
                <!-- Static Example Data -->
                <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                    <td class="px-8 py-4">
                        <div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-slate-700 overflow-hidden">
                            <img src="https://via.placeholder.com/150" alt="Project" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-8 py-4 font-bold text-sm">Mazzawi Contracting Website</td>
                    <td class="px-8 py-4 text-sm text-gray-500">Web Design</td>
                    <td class="px-8 py-4 text-sm font-medium">Ahmed Almohandis</td>
                    <td class="px-8 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="p-2 text-gray-400 hover:text-brand-500 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                    <td class="px-8 py-4">
                        <div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-slate-700 overflow-hidden">
                            <img src="https://via.placeholder.com/150" alt="Project" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-8 py-4 font-bold text-sm">Noor Al Sham Mobile App</td>
                    <td class="px-8 py-4 text-sm text-gray-500">App Dev</td>
                    <td class="px-8 py-4 text-sm font-medium">Mohamed Hassan</td>
                    <td class="px-8 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="p-2 text-gray-400 hover:text-brand-500 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
