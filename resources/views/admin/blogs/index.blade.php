@extends('layouts.admin')

@section('title', __('admin.blogs') ?? 'What is New')
@section('page_title', __('admin.blogs') ?? 'What is New')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">{{ __('admin.blogs_subtitle') }}</p>
        <a href="{{ route('admin.blogs.create') }}" class="px-6 py-3 bg-brand-500 hover:bg-brand-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-brand-500/25 flex items-center gap-2 transform hover:-translate-y-1">
            <i class="fas fa-plus"></i>
            {{ __('admin.create_blog') ?? 'Add New' }}
        </a>
    </div>

    <div class="bg-white dark:bg-slate-800 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-900/50">
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.photo') }}</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.title') }}</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.order') }}</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">{{ __('admin.status') }}</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">{{ __('admin.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                    @forelse($blogs as $blog)
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors group">
                        <td class="px-6 py-4">
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="h-12 w-12 rounded-xl object-cover ring-2 ring-slate-100 dark:ring-slate-700">
                            @else
                                <div class="h-12 w-12 rounded-xl bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400">
                                    <i class="fas fa-image"></i>
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-bold text-slate-900 dark:text-white">
                            {{ $blog->title }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 rounded-lg text-xs font-bold">
                                {{ $blog->order }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            @if($blog->is_active)
                                <span class="px-3 py-1 bg-green-100 dark:bg-green-500/20 text-green-700 dark:text-green-400 rounded-full text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('admin.active') ?? 'Active' }}
                                </span>
                            @else
                                <span class="px-3 py-1 bg-slate-100 dark:bg-slate-700 text-slate-500 dark:text-slate-400 rounded-full text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('admin.inactive') ?? 'Inactive' }}
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="w-10 h-10 flex items-center justify-center bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-blue-400 rounded-xl hover:bg-blue-600 hover:text-white transition-all">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="delete-form inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-10 h-10 flex items-center justify-center bg-red-50 dark:bg-red-500/10 text-red-500 dark:text-red-400 rounded-xl hover:bg-red-500 hover:text-white transition-all">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-slate-500 dark:text-slate-400 font-medium">
                            <div class="flex flex-col items-center gap-3">
                                <i class="fas fa-newspaper text-4xl text-slate-200 dark:text-slate-700"></i>
                                {{ __('admin.no_data') ?? 'No blogs found.' }}
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
