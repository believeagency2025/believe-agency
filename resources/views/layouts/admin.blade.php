<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Believe Admin</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                    },
                    fontFamily: {
                        outfit: ['Outfit', 'Tajawal', 'sans-serif'],
                        tajawal: ['Tajawal', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Outfit', 'Tajawal', sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glass {
            background: rgba(15, 23, 42, 0.7);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        .sidebar-link.active {
            background-color: #0ea5e9;
            color: white;
            box-shadow: 0 10px 15px -3px rgba(14, 165, 233, 0.3);
        }

        /* Custom Sidebar Scrollbar */
        nav.overflow-y-auto {
            scrollbar-width: thin;
            scrollbar-color: #e2e8f0 transparent;
        }
        .dark nav.overflow-y-auto {
            scrollbar-color: #334155 transparent;
        }

        nav.overflow-y-auto::-webkit-scrollbar {
            width: 5px;
        }
        nav.overflow-y-auto::-webkit-scrollbar-track {
            background: transparent;
        }
        nav.overflow-y-auto::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 20px;
        }
        .dark nav.overflow-y-auto::-webkit-scrollbar-thumb {
            background: #475569;
        }
        nav.overflow-y-auto::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-slate-50 dark:bg-slate-900 min-h-screen transition-colors duration-300">

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 start-0 z-50 w-64 bg-white dark:bg-slate-800 border-e border-slate-200 dark:border-slate-700 transition-transform duration-300 transform -translate-x-full lg:translate-x-0 rtl:translate-x-full lg:rtl:translate-x-0">
        <div class="flex flex-col h-full">
            <div class="p-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <img src="{{ asset('img/dark.png') }}" alt="Believe Agency" class="h-10 w-auto block dark:hidden">
                    <img src="{{ asset('img/light.png') }}" alt="Believe Agency" class="h-10 w-auto hidden dark:block">
                </a>
            </div>

            <nav class="flex-1 px-4 space-y-1 overflow-y-auto pb-6">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                    <i class="fas fa-chart-pie w-5"></i>
                    {{ __('admin.dashboard') }}
                </a>

                <div class="pt-4 pb-2 px-4 uppercase text-[10px] font-bold text-slate-400 tracking-wider">{{ __('admin.management') }}</div>

                <a href="{{ route('admin.services.index') }}" class="sidebar-link {{ request()->routeIs('admin.services.*') ? 'active' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                    <i class="fas fa-concierge-bell w-5"></i>
                    {{ __('admin.services') }}
                </a>


                <a href="{{ route('admin.projects.index') }}" class="sidebar-link {{ request()->routeIs('admin.projects.*') ? 'active' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                    <i class="fas fa-briefcase w-5"></i>
                    <span class="flex-1">{{ __('admin.projects') }}</span>
                </a>

                <a href="{{ route('admin.team.index') }}" class="sidebar-link {{ request()->routeIs('admin.team.*') ? 'active' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                    <i class="fas fa-users w-5"></i>
                    {{ __('admin.team') }}
                </a>

                <a href="{{ route('admin.clients.index') }}" class="sidebar-link {{ request()->routeIs('admin.clients.*') ? 'active' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                    <i class="fas fa-handshake w-5"></i>
                    {{ __('admin.clients') }}
                </a>

                <a href="{{ route('admin.testimonials.index') }}" class="sidebar-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                    <i class="fas fa-quote-right w-5"></i>
                    {{ __('admin.testimonials') }}
                </a>

                <a href="{{ route('admin.messages.index') }}" class="sidebar-link {{ request()->routeIs('admin.messages.*') ? 'active' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                    <i class="fas fa-envelope-open-text w-5"></i>
                    <span class="flex-1">{{ __('admin.inquiries') }}</span>
                    <span class="px-2 py-0.5 text-[10px] font-semibold rounded-full bg-green-100 dark:bg-green-500/20 text-green-700 dark:text-green-400">{{ $newMessagesCount }}</span>
                </a>

                <div class="pt-4 pb-2 px-4 uppercase text-[10px] font-bold text-slate-400 tracking-wider">{{ __('admin.system') }}</div>

                <a href="{{ route('admin.settings') }}" class="sidebar-link {{ request()->routeIs('admin.settings') ? 'active' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700/50 hover:text-slate-900 dark:hover:text-white' }} flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                    <i class="fas fa-cog w-5"></i>
                    {{ __('admin.settings') }}
                </a>

                <!-- Logout Button -->
                <div class="pt-6">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-red-500 hover:bg-red-50 dark:hover:bg-red-500/10 flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-medium">
                            <i class="fas fa-right-from-bracket w-5"></i>
                            {{ __('admin.logout') }}
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="lg:ms-64 min-h-screen">
        <!-- Topbar -->
        <header class="glass sticky top-0 z-40 w-full px-6 py-4 flex items-center justify-between">
            <button id="mobileMenuBtn" class="lg:hidden text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">
                <i class="fas fa-bars text-xl"></i>
            </button>

            <div class="flex items-center gap-4 ms-auto">
                <!-- Theme Toggle -->
                <button id="themeToggle" class="w-10 h-10 rounded-xl flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">
                    <i class="fas fa-moon dark:hidden"></i>
                    <i class="fas fa-sun hidden dark:block"></i>
                </button>

                <!-- Language Selector -->
                <div class="flex items-center gap-1 bg-slate-100 dark:bg-slate-800 p-1 rounded-xl">
                    <a href="{{ route('lang.switch', 'en') }}" class="px-2 py-1 rounded-lg text-xs font-bold transition-all {{ app()->getLocale() == 'en' ? 'bg-white dark:bg-slate-700 text-brand-500 shadow-sm' : 'text-slate-500' }}">EN</a>
                    <a href="{{ route('lang.switch', 'ar') }}" class="px-2 py-1 rounded-lg text-xs font-bold transition-all {{ app()->getLocale() == 'ar' ? 'bg-white dark:bg-slate-700 text-brand-500 shadow-sm' : 'text-slate-500' }}">AR</a>
                </div>

                <!-- Profile Dropdown -->
                <div class="flex items-center gap-3 ps-4 border-s border-slate-200 dark:border-slate-700">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-slate-900 dark:text-white">{{ Auth::user()->name }}</p>
                        <p class="text-[10px] text-slate-500 font-medium">{{ __('admin.administrator') }}</p>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-brand-100 dark:bg-brand-500/20 text-brand-600 dark:text-brand-400 flex items-center justify-center font-bold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="p-6">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">@yield('page_title')</h2>
                <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mt-1">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-brand-500 transition-colors">{{ __('admin.dashboard') }}</a>
                    <i class="fas fa-chevron-right text-[10px] rtl:rotate-180"></i>
                    <span class="font-medium text-slate-900 dark:text-slate-200">@yield('page_title')</span>
                </div>
            </div>

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-500 text-white rounded-2xl shadow-lg shadow-red-500/20 flex items-start gap-3">
                    <i class="fas fa-exclamation-circle mt-1"></i>
                    <div>
                        <p class="font-bold underline mb-1">{{ __('admin.validation_errors') ?? 'Please correct the following errors:' }}</p>
                        <ul class="text-sm space-y-1">
                            @foreach($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <script>
        // Sidebar Mobile Toggle
        const sidebar = document.getElementById('sidebar');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        mobileMenuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Theme Management
        const themeToggle = document.getElementById('themeToggle');
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        themeToggle.addEventListener('click', () => {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        });

        // Global Delete Confirmation
        document.addEventListener('submit', function(e) {
            if (e.target.matches('form') && (e.target.querySelector('button[type="submit"].text-red-500') || e.target.classList.contains('delete-form'))) {
                if (e.target.dataset.confirmed) return;

                e.preventDefault();
                const form = e.target;

                Swal.fire({
                    title: "{{ __('admin.delete_confirm') }}",
                    text: "{{ __('admin.delete_warning_text') ?? 'This action cannot be undone!' }}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444',
                    cancelButtonColor: '#64748b',
                    confirmButtonText: "{{ __('admin.delete') }}",
                    cancelButtonText: "{{ __('admin.cancel') }}",
                    background: document.documentElement.classList.contains('dark') ? '#1e293b' : '#fff',
                    color: document.documentElement.classList.contains('dark') ? '#fff' : '#1e293b',
                    borderRadius: '1.5rem',
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.dataset.confirmed = true;
                        form.submit();
                    }
                });
            }
        });

        // Toast Notification Function
        const toast = (message, icon = 'success') => {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                },
                background: document.documentElement.classList.contains('dark') ? '#1e293b' : '#fff',
                color: document.documentElement.classList.contains('dark') ? '#fff' : '#1e293b',
            });
            Toast.fire({
                icon: icon,
                title: message
            });
        };

        @if(session('success'))
            toast("{{ session('success') }}", 'success');
        @endif

        @if(session('error'))
            toast("{{ session('error') }}", 'error');
        @endif
    </script>
    @stack('scripts')
</body>
</html>
