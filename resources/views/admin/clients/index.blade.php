@extends('layouts.admin')

@section('title', __('admin.clients') . ' ' . __('admin.management'))
@section('page_title', __('admin.clients'))

@section('content')
<div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-slate-200 dark:border-slate-700 flex flex-wrap items-center justify-between gap-4">
        <div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white text-start">{{ __('admin.all_clients') }}</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400 text-start">{{ __('admin.partnership_subtitle') }}</p>
        </div>
        <a href="{{ route('admin.clients.create') }}" class="px-5 py-2.5 bg-brand-500 hover:bg-brand-600 text-white rounded-xl font-bold transition-all shadow-lg shadow-brand-500/20 flex items-center gap-2">
            <i class="fas fa-plus text-xs"></i>
            {{ __('admin.add') }}
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-start border-collapse">
            <thead>
                <tr class="bg-slate-50 dark:bg-slate-900/50">
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.logo_name') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.website') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.status') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.order') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-400 dark:text-slate-50 uppercase tracking-wider text-end">{{ __('admin.actions') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                @forelse($clients as $client)
                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/25 transition-colors">
                    <td class="px-6 py-4 text-start">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-white dark:bg-slate-900 rounded-lg overflow-hidden shrink-0 border border-slate-200 dark:border-slate-700 p-1">
                                <img src="{{ asset('storage/' . $client->logo) }}" alt="" class="w-full h-full object-contain">
                            </div>
                            <span class="font-bold text-slate-900 dark:text-white text-sm whitespace-nowrap">{{ $client->name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-start">
                        @if($client->website_url)
                            <a href="{{ $client->website_url }}" target="_blank" class="text-xs text-brand-500 hover:underline">{{ __('admin.visit_site') }} <i class="fas fa-external-link-alt ml-1"></i></a>
                        @else
                            <span class="text-xs text-slate-400">-</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-start">
                        @if($client->is_active)
                            <span class="px-2 py-1 rounded-lg bg-emerald-50 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-[10px] font-bold uppercase tracking-wider whitespace-nowrap">{{ __('admin.active') }}</span>
                        @else
                            <span class="px-2 py-1 rounded-lg bg-slate-100 dark:bg-slate-700 text-slate-500 text-[10px] font-bold uppercase tracking-wider whitespace-nowrap">{{ __('admin.inactive') }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-start text-sm text-slate-600 dark:text-slate-400">
                        {{ $client->order }}
                    </td>
                    <td class="px-6 py-4 text-end">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.clients.edit', $client) }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-500/10 transition-all">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                            <form action="{{ route('admin.clients.destroy', $client) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="w-8 h-8 rounded-lg flex items-center justify-center text-red-500 hover:bg-red-50 dark:hover:bg-red-500/10 transition-all">
                                    <i class="fas fa-trash-alt text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center">
                        <div class="flex flex-col items-center gap-3 text-slate-300 dark:text-slate-600">
                            <i class="fas fa-handshake text-4xl"></i>
                            <p class="font-medium text-sm text-slate-500">{{ __('admin.no_data') }}</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
