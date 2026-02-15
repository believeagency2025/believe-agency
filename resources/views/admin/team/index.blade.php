@extends('layouts.admin')

@section('title', __('admin.team') . ' ' . __('admin.management'))
@section('page_title', __('admin.team'))

@section('content')
<div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-slate-200 dark:border-slate-700 flex flex-wrap items-center justify-between gap-4">
        <div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('admin.all_members') }}</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400">{{ __('admin.management') }}</p>
        </div>
        <a href="{{ route('admin.team.create') }}" class="px-5 py-2.5 bg-brand-500 hover:bg-brand-600 text-white rounded-xl font-bold transition-all shadow-lg shadow-brand-500/20 flex items-center gap-2">
            <i class="fas fa-plus text-xs"></i>
            {{ __('admin.add') }}
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-start border-collapse">
            <thead>
                <tr class="bg-slate-50 dark:bg-slate-900/50">
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.team') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.role') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.status') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.order') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider text-end">{{ __('admin.actions') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                @forelse($members as $member)
                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/25 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-slate-100 dark:bg-slate-900 rounded-xl overflow-hidden shrink-0 border border-slate-200 dark:border-slate-700">
                                @if($member->image)
                                    <img src="{{ asset('storage/' . $member->image) }}" alt="" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-slate-400 text-[10px]">No Img</div>
                                @endif
                            </div>
                            <div>
                                <p class="font-bold text-slate-900 dark:text-white text-sm">{{ $member->name[app()->getLocale()] ?? $member->name['en'] }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm font-medium text-slate-600 dark:text-slate-400">
                            {{ $member->role[app()->getLocale()] ?? $member->role['en'] }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        @if($member->is_active)
                            <span class="px-2 py-1 rounded-lg bg-emerald-50 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-[10px] font-bold uppercase tracking-wider">{{ __('admin.active') }}</span>
@else
                            <span class="px-2 py-1 rounded-lg bg-slate-100 dark:bg-slate-700 text-slate-500 text-[10px] font-bold uppercase tracking-wider">{{ __('admin.inactive') }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                        {{ $member->order }}
                    </td>
                    <td class="px-6 py-4 text-end">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.team.edit', $member) }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-500/10 transition-all">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                            <form action="{{ route('admin.team.destroy', $member) }}" method="POST">
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
                    <td colspan="5" class="px-6 py-12 text-center text-slate-500 dark:text-slate-400">
                        <div class="flex flex-col items-center gap-3 text-slate-300 dark:text-slate-600">
                            <i class="fas fa-users text-4xl"></i>
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
