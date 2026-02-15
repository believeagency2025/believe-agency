@extends('layouts.admin')

@section('title', __('admin.site_messages'))
@section('page_title', __('admin.inquiries'))

@section('content')
<div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-slate-200 dark:border-slate-700">
        <div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white text-start">{{ __('admin.view_all') }} {{ __('admin.site_messages') }}</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400 text-start">{{ __('admin.recent_inquiries') }}</p>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-start border-collapse">
            <thead>
                <tr class="bg-slate-50 dark:bg-slate-900/50">
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-start">{{ __('admin.sender') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-start">{{ __('admin.subject') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-start">{{ __('admin.date') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-start">{{ __('admin.status') }}</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-400 dark:text-slate-50 uppercase tracking-wider text-end">{{ __('admin.actions') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                @forelse($messages as $message)
                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/25 transition-colors {{ $message->status === 'new' ? 'bg-brand-50/20 dark:bg-brand-500/5' : '' }}">
                    <td class="px-6 py-4 text-start">
                        <div>
                            <p class="font-bold text-slate-900 dark:text-white text-sm whitespace-nowrap">{{ $message->name }}</p>
                            <p class="text-[10px] text-slate-500 whitespace-nowrap">{{ $message->email }}</p>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-start">
                        <p class="text-sm text-slate-700 dark:text-slate-300 font-medium whitespace-nowrap">{{ $message->subject }}</p>
                        <p class="text-[10px] text-slate-500 line-clamp-1 max-w-[200px]">{{ $message->message }}</p>
                    </td>
                    <td class="px-6 py-4 text-start">
                        <p class="text-xs text-slate-500 whitespace-nowrap">{{ $message->created_at->format('M d, Y') }}</p>
                        <p class="text-[10px] text-slate-400 whitespace-nowrap">{{ $message->created_at->diffForHumans() }}</p>
                    </td>
                    <td class="px-6 py-4 text-start">
                        @if($message->status === 'new')
                            <span class="px-2 py-1 rounded-lg bg-red-50 dark:bg-red-500/10 text-red-600 dark:text-red-400 text-[10px] font-bold uppercase tracking-wider">{{ __('admin.new') }}</span>
                        @elseif($message->status === 'replied')
                            <span class="px-2 py-1 rounded-lg bg-emerald-50 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-[10px] font-bold uppercase tracking-wider">Replied</span>
                        @else
                            <span class="px-2 py-1 rounded-lg bg-slate-100 dark:bg-slate-700 text-slate-500 text-[10px] font-bold uppercase tracking-wider">Read</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-end">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.messages.show', $message) }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-500/10 transition-all">
                                <i class="fas fa-eye text-sm"></i>
                            </a>
                            <form action="{{ route('admin.messages.destroy', $message) }}" method="POST">
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
                            <i class="fas fa-envelope-open-text text-4xl"></i>
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
