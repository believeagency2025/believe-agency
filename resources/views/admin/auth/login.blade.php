<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('admin.login.title') }} | Believe Agency</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glass {
            background: rgba(15, 23, 42, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
    </style>
</head>
<body class="bg-slate-50 dark:bg-slate-900 min-h-screen flex items-center justify-center p-4 relative overflow-hidden transition-colors duration-300">

    <!-- Decorative background elements -->
    <div class="absolute top-0 -left-4 w-72 h-72 bg-brand-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute top-0 -right-4 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

    <div class="w-full max-w-md relative z-10">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center justify-center gap-3">
                Believe <span class="text-brand-500">Admin</span>
            </h1>
            <p class="text-slate-500 dark:text-slate-400 mt-2">{{ __('admin.login.subtitle') }}</p>
        </div>

        <!-- Login Card -->
        <div class="glass p-8 rounded-3xl shadow-2xl">
            <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">{{ __('admin.login.email') }}</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 start-0 ps-4 flex items-center text-slate-400">
                            <i class="far fa-envelope"></i>
                        </span>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="admin@believe-agency.com"
                            class="w-full ps-11 pe-4 py-3 bg-white/50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300">{{ __('admin.login.password') }}</label>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 start-0 ps-4 flex items-center text-slate-400">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password" required
                            placeholder="••••••••"
                            class="w-full ps-11 pe-4 py-3 bg-white/50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 rounded-2xl focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 transition-all dark:text-white">
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-4 rounded-2xl shadow-lg shadow-brand-500/25 transition-all transform hover:-translate-y-1 active:scale-95">
                    {{ __('admin.login.submit') }} <i class="fas fa-arrow-right ms-2 text-sm rtl:rotate-180"></i>
                </button>
            </form>
        </div>

        <!-- Footer -->
        <p class="text-center text-slate-500 dark:text-slate-400 text-sm mt-8">
            &copy; {{ date('Y') }} <a href="https://believe-agency.com" target="_blank">Believe Agency</a>.
        </p>
    </div>

    <!-- Theme & Language -->
    <div class="absolute top-6 end-6 flex items-center gap-3 z-20">
        <!-- Language Selector -->
        <div class="flex items-center gap-1 glass p-1 rounded-2xl">
            <a href="{{ route('lang.switch', 'en') }}" class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all {{ app()->getLocale() == 'en' ? 'bg-white dark:bg-slate-700 text-brand-500 shadow-sm' : 'text-slate-500' }}">EN</a>
            <a href="{{ route('lang.switch', 'ar') }}" class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all {{ app()->getLocale() == 'ar' ? 'bg-white dark:bg-slate-700 text-brand-500 shadow-sm' : 'text-slate-500' }}">AR</a>
        </div>

        <!-- Theme Toggle -->
        <button id="themeToggle" class="w-12 h-12 glass rounded-2xl flex items-center justify-center text-slate-600 dark:text-slate-300 hover:scale-110 transition-all">
            <i class="fas fa-moon dark:hidden"></i>
            <i class="fas fa-sun hidden dark:block"></i>
        </button>
    </div>

    <script>
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
    </script>
</body>
</html>
