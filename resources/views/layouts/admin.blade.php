<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Believe Agency | لوحة التحكم</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Tajawal', 'sans-serif'],
                        arabic: ['Tajawal', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            400: '#5dc9e0',
                            500: '#1792ad',
                            600: '#004a5c',
                        },
                        slate: {
                            800: '#112240',
                            900: '#0a1929',
                            950: '#020617',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Glassmorphism Styles */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .glass {
            background: rgba(10, 25, 41, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.05);
        }

        .dark .glass-card {
            background: rgba(17, 34, 64, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
        }

        /* Sidebar Item Styling */
        .sidebar-item.active {
            background: linear-gradient(to right, rgba(23, 146, 173, 0.2), transparent);
            border-left: 4px solid #1792ad;
            color: #1792ad;
        }

        [dir="rtl"] .sidebar-item.active {
            background: linear-gradient(to left, rgba(23, 146, 173, 0.2), transparent);
            border-right: 4px solid #1792ad;
            border-left: none;
        }

        /* Sidebar Visibility Logic */
        #sidebar {
            transform: translateX(-100%);
        }
        [dir="rtl"] #sidebar {
            transform: translateX(100%);
        }
        #sidebar.show {
            transform: translateX(0) !important;
        }
        @media (min-width: 768px) {
            #sidebar {
                transform: translateX(0) !important;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #1792ad;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-slate-950 dark:text-white font-sans transition-colors duration-300">

    <div class="flex min-h-screen overflow-hidden">

        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed inset-y-0 start-0 z-50 w-64 transition-transform duration-300 glass border-e border-gray-200 dark:border-white/5">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="p-6 flex items-center gap-3 justify-center">
                    <img src="https://believe-agency.net/img/logo100.webp" alt="Logo" class="h-10 w-auto"
                        onerror="this.src='https://via.placeholder.com/40x40?text=B'">
                    <span class="text-xl font-bold tracking-tight">Believe <span
                            class="text-brand-500">Admin</span></span>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-4 space-y-2 mt-4 overflow-y-auto">
                    <a href="{{ route('admin.dashboard') }}"
                        class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 hover:text-brand-500 transition-all">
                        <i class="fas fa-th-large w-5 text-center"></i>
                        <span class="font-medium">{{ __('admin.dashboard') }}</span>
                    </a>

                    <div class="pt-4 pb-2">
                        <span class="px-4 text-xs font-bold text-gray-400 uppercase tracking-widest">{{ __('admin.management') }}</span>
                    </div>

                    <a href="{{ route('admin.projects.index') }}"
                        class="sidebar-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 hover:text-brand-500 transition-all">
                        <i class="fas fa-project-diagram w-5 text-center"></i>
                        <span class="font-medium">{{ __('admin.projects') }}</span>
                    </a>

                    <a href="{{ route('admin.services.index') }}"
                        class="sidebar-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 hover:text-brand-500 transition-all">
                        <i class="fas fa-cogs w-5 text-center"></i>
                        <span class="font-medium">{{ __('admin.services') }}</span>
                    </a>

                    <a href="{{ route('admin.clients.index') }}"
                        class="sidebar-item {{ request()->routeIs('admin.clients.*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 hover:text-brand-500 transition-all">
                        <i class="fas fa-users w-5 text-center"></i>
                        <span class="font-medium">{{ __('admin.clients') }}</span>
                    </a>

                    <a href="{{ route('admin.team.index') }}"
                        class="sidebar-item {{ request()->routeIs('admin.team.*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 hover:text-brand-500 transition-all">
                        <i class="fas fa-user-friends w-5 text-center"></i>
                        <span class="font-medium">{{ __('admin.team') }}</span>
                    </a>

                    <!-- <a href="#"
                        class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 hover:text-brand-500 transition-all">
                        <i class="fas fa-envelope w-5 text-center"></i>
                        <span class="font-medium">Messages</span>
                        <span class="ml-auto bg-brand-500 text-white text-[10px] px-2 py-0.5 rounded-full">5</span>
                    </a> -->

                    <div class="pt-4 pb-2">
                        <span class="px-4 text-xs font-bold text-gray-400 uppercase tracking-widest">{{ __('admin.system') }}</span>
                    </div>

                    <a href="{{ route('admin.settings') }}"
                        class="sidebar-item {{ request()->routeIs('admin.settings') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 hover:text-brand-500 transition-all">
                        <i class="fas fa-cog w-5 text-center"></i>
                        <span class="font-medium">{{ __('admin.settings') }}</span>
                    </a>
                </nav>

                <!-- Profile Bottom -->
                <div class="p-4 border-t border-gray-200 dark:border-white/5">
                    <div class="flex items-center gap-3 p-2 rounded-2xl bg-gray-100 dark:bg-white/5">
                        <button class="ms-auto text-gray-400 hover:text-red-500 transition-colors">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                         <div class="overflow-hidden">
                            <p class="text-sm font-bold truncate">{{ __('admin.admin_user') }}</p>
                            <p class="text-xs text-gray-500 truncate">{{ __('admin.administrator') }}</p>
                        </div>
                        <div
                            class="w-10 h-10 rounded-lg bg-brand-500 flex items-center justify-center text-white font-bold shrink-0">
                            AD</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 md:ps-[18rem] min-h-screen p-4 md:p-8 pt-24 md:pt-8 transition-all duration-300">

            <!-- Top Header (Clean - No sharp div) -->
            <header
                class="fixed md:static top-0 inset-x-0 z-40 md:z-auto h-16 md:h-auto flex items-center justify-between px-4 md:px-0 mb-8 bg-gray-50/80 dark:bg-slate-950/80 md:bg-transparent backdrop-blur-md md:backdrop-blur-none">
                <div class="flex items-center gap-4">
                    <button id="mobile-toggle" class="md:hidden text-gray-500 p-2">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div>
                        <h1 class="text-xl md:text-3xl font-bold text-gray-900 dark:text-white">@yield('header_title', __('admin.overview'))</h1>
                        <p class="hidden md:block text-sm text-gray-500 dark:text-gray-400">@yield('header_subtitle', __('admin.welcome_back'))</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <!-- Search -->
                   <!--  <div class="hidden lg:flex items-center relative">
                        <i class="fas fa-search absolute left-3 text-gray-400 text-sm"></i>
                        <input type="text" placeholder="Search anything..."
                            class="bg-white dark:bg-slate-900 border border-gray-200 dark:border-white/5 rounded-xl pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand-500/50 w-64 transition-all">
                    </div> -->

                    <!-- Theme Toggle -->
                    <button id="theme-toggle"
                        class="w-10 h-10 flex items-center justify-center rounded-2xl bg-white dark:bg-slate-900 border border-gray-200 dark:border-white/5 text-gray-500 hover:text-brand-500 transition-all shadow-sm hover:shadow-md">
                        <i id="theme-icon" class="fas fa-moon"></i>
                    </button>

                    <!-- Notifications -->
                    <button
                        class="relative w-10 h-10 flex items-center justify-center rounded-2xl bg-white dark:bg-slate-900 border border-gray-200 dark:border-white/5 text-gray-500 hover:text-brand-500 transition-all shadow-sm hover:shadow-md">
                        <i class="fas fa-bell"></i>
                        <span
                            class="absolute top-2 start-2.5 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
                    </button>

                    <!-- Language Toggle -->
                    <a href="{{ route('admin.lang.switch', app()->getLocale() == 'ar' ? 'en' : 'ar') }}"
                        class="w-10 h-10 flex items-center justify-center rounded-2xl bg-white dark:bg-slate-900 border border-gray-200 dark:border-white/5 text-gray-500 hover:text-brand-500 transition-all shadow-sm hover:shadow-md font-bold text-xs uppercase"
                        id="lang-btn">
                        {{ app()->getLocale() == 'ar' ? 'EN' : 'AR' }}
                    </a>
                </div>
            </header>

            @yield('content')

        </main>
    </div>

    <!-- Backdrop for mobile -->
    <div id="sidebar-backdrop" class="fixed inset-0 bg-black/50 z-40 hidden transition-opacity opacity-0"></div>

    <script>
        // Init properties
        const html = document.documentElement;
        const themeBtn = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        const mobileToggle = document.getElementById('mobile-toggle');

        // --- Theme Logic ---
        function updateTheme() {
            if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                html.classList.add('dark');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                html.classList.remove('dark');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        }

        themeBtn.addEventListener('click', () => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            }
        });

        // --- Mobile Sidebar Logic ---
        function toggleSidebar() {
            const isShown = sidebar.classList.contains('show');
            if (!isShown) {
                sidebar.classList.add('show');
                backdrop.classList.remove('hidden');
                setTimeout(() => backdrop.classList.add('opacity-100'), 10);
            } else {
                sidebar.classList.remove('show');
                backdrop.classList.remove('opacity-100');
                setTimeout(() => backdrop.classList.add('hidden'), 300);
            }
        }

        mobileToggle.addEventListener('click', toggleSidebar);
        backdrop.addEventListener('click', toggleSidebar);

        // Initialize
        updateTheme();
    </script>
</body>

</html>
