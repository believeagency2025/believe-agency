@extends('layouts.admin')

@section('header_title', 'Clients')
@section('header_subtitle', 'Manage your client list')

@section('content')
<div class="glass-card rounded-3xl overflow-hidden p-8">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">All Clients</h3>
            <p class="text-sm text-gray-500">View and manage your clients</p>
        </div>
        <button class="bg-brand-500 hover:bg-brand-600 text-white px-6 py-2 rounded-xl font-bold transition-all flex items-center gap-2">
            <i class="fas fa-plus"></i> Add New Client
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50/50 dark:bg-white/5">
                <tr>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase">Logo</th>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase">Client Name</th>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase">Industry</th>
                    <th class="px-8 py-4 text-xs font-bold text-gray-400 uppercase text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-white/5">
                <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                    <td class="px-8 py-4">
                        <div class="w-12 h-12 rounded-full bg-gray-100 dark:bg-slate-800 flex items-center justify-center font-bold text-brand-500 text-xl border border-gray-200 dark:border-white/10">
                            A
                        </div>
                    </td>
                    <td class="px-8 py-4 font-bold text-sm">Al-Faris Group</td>
                    <td class="px-8 py-4 text-sm text-gray-500">Construction</td>
                    <td class="px-8 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                             <button class="p-2 text-gray-400 hover:text-brand-500 transition-colors"><i class="fas fa-edit"></i></button>
                             <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                 <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                    <td class="px-8 py-4">
                        <div class="w-12 h-12 rounded-full bg-gray-100 dark:bg-slate-800 flex items-center justify-center font-bold text-purple-500 text-xl border border-gray-200 dark:border-white/10">
                            M
                        </div>
                    </td>
                    <td class="px-8 py-4 font-bold text-sm">Mazzawi</td>
                    <td class="px-8 py-4 text-sm text-gray-500">Real Estate</td>
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
