@extends('layouts.admin')

@section('title', __('admin.site_messages'))
@section('page_title', __('admin.message_content'))

@section('content')
<div class="max-w-4xl space-y-8">
    <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
        <div class="p-8 border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 flex flex-wrap items-center justify-between gap-4 text-start">
            <div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">{{ $message->subject }}</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Received on {{ $message->created_at->format('M d, Y \a\t h:i A') }}</p>
            </div>
            <div class="flex items-center gap-3">
                @if($message->status === 'replied')
                    <span class="px-3 py-1 rounded-xl bg-emerald-50 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-xs font-bold uppercase tracking-wider">Replied</span>
                @else
                    <span class="px-3 py-1 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider">Read</span>
                @endif
            </div>
        </div>

        <div class="p-8 space-y-8 text-start">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-1">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">{{ __('admin.sender') }}</p>
                    <p class="font-bold text-slate-900 dark:text-white">{{ $message->name }}</p>
                </div>
                <div class="space-y-1">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">{{ __('admin.email') }}</p>
                    <a href="mailto:{{ $message->email }}" class="font-bold text-brand-500 hover:underline">{{ $message->email }}</a>
                </div>
                <div class="space-y-1">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">{{ __('admin.phone_number') }}</p>
                    <p class="font-bold text-slate-900 dark:text-white">{{ $message->phone ?? __('admin.no_data') }}</p>
                </div>
            </div>

            <div class="space-y-3">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">{{ __('admin.message_content') }}</p>
                <div class="p-6 bg-slate-50 dark:bg-slate-900/50 rounded-2xl border border-slate-200 dark:border-slate-700">
                    <p class="text-slate-700 dark:text-slate-300 leading-relaxed whitespace-pre-line">{{ $message->message }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-4">
        <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/20 transform hover:-translate-y-1 flex items-center gap-2">
            <i class="fas fa-reply"></i>
            {{ __('admin.reply_email') }}
        </a>
        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="px-8 py-4 bg-white dark:bg-slate-800 text-red-500 rounded-2xl font-bold border border-red-100 dark:border-red-500/20 hover:bg-red-50 dark:hover:bg-red-500/5 transition-all">
                {{ __('admin.delete') }} {{ __('admin.message_content') }}
            </button>
        </form>
        <a href="{{ route('admin.messages.index') }}" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 transition-all">
            {{ __('admin.back_to_list') }}
        </a>
    </div>
</div>
@endsection
