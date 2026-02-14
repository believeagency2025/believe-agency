<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth {{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Believe Agency | @yield('title', 'Digital & Marketing Solutions')</title>

    <!-- Meta Tags -->
    <meta name="description" content="Believe Agency is a leading digital solutions and marketing agency. We specialize in web development, app development, branding, digital marketing, and e-commerce solutions to help your business grow.">
    <meta name="keywords" content="Believe Agency, Digital Marketing, Web Development, App Development, Branding, SEO, E-commerce, Software Solutions, Marketing Agency Egypt">
    <meta name="author" content="Believe Agency">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#1792ad">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Believe Agency | @yield('title', 'Digital & Marketing Solutions')">
    <meta property="og:description" content="Believe Agency is a leading digital solutions and marketing agency. We specialize in web development, app development, branding, digital marketing, and e-commerce solutions.">
    <meta property="og:image" content="{{ asset('img/dark.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Believe Agency | @yield('title', 'Digital & Marketing Solutions')">
    <meta property="twitter:description" content="Believe Agency is a leading digital solutions and marketing agency. We specialize in web development, app development, branding, digital marketing, and e-commerce solutions.">
    <meta property="twitter:image" content="{{ asset('img/dark.png') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <link rel="favicon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'Tajawal', 'sans-serif'],
                        arabic: ['Tajawal', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#5dc9e0', // Old Primary Light
                            500: '#1792ad', // Primary Brand Color
                            600: '#004a5c', // Old Primary Dark
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                        accent: {
                            500: '#8b5cf6', // Violet accent
                            600: '#7c3aed',
                        },
                        slate: {
                            800: '#112240', // Card Background
                            900: '#0a1929', // Main Dark Background
                        },
                        gray: {
                            50: '#f4f4f4', // Main Light Background
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'fade-in-up': 'fade-in-up 0.8s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'fade-in-up': {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/responsive-fixes.css') }}">

    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #0f172a;
        }

        ::-webkit-scrollbar-thumb {
            background: #38bdf8;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0ea5e9;
        }

        /* Glassmorphism Utilities */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .glass {
            background: rgba(10, 25, 41, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
        }

        .dark .glass-card {
            background: rgba(17, 34, 64, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        /* Gradient Text Replacement */
        .text-gradient {
            color: #1792ad;
        }

        .dark .text-gradient {
            color: #5dc9e0;
        }

        /* Hero pattern background */
        .hero-bg {
            background-color: #f8fafc;
            background-image:
                radial-gradient(at 0% 0%, hsla(189, 100%, 96%, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(250, 100%, 96%, 1) 0, transparent 50%);
        }

        .dark .hero-bg {
            background-color: #0a1929;
            background-image:
                radial-gradient(at 0% 0%, hsla(253, 16%, 7%, 1) 0, transparent 50%),
                radial-gradient(at 50% 0%, hsla(225, 39%, 30%, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(339, 49%, 30%, 1) 0, transparent 50%);
        }
    </style>
    <script>
        // Check local storage or system preference on load
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    @stack('styles')
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-slate-900 dark:text-white font-sans overflow-x-hidden transition-colors duration-300">

    <!-- Professional Loader -->
    <div id="page-loader" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-gray-50/95 dark:bg-slate-900/95 backdrop-blur-2xl transition-all duration-700 ease-in-out">
        <div class="relative mb-8">
            <!-- Glow Effect -->
            <div class="absolute inset-0 bg-brand-500/20 rounded-full blur-xl animate-pulse"></div>
            <!-- Spinner Base -->
            <div class="w-24 h-24 border-4 border-gray-200 dark:border-slate-700 rounded-full"></div>
            <!-- Spinner Active -->
            <div class="absolute top-0 left-0 w-24 h-24 border-4 border-brand-500 rounded-full animate-spin border-t-transparent shadow-[0_0_15px_rgba(23,146,173,0.5)]"></div>
            <!-- Center Icon -->
            <div class="absolute inset-0 flex items-center justify-center">
                <img src="{{ asset('img/logo100.webp') }}" alt="Loading" class="w-12 h-auto animate-pulse">
            </div>
        </div>

        <div class="text-center space-y-3 z-10">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight animate-fade-in-up">
                Believe <span class="text-brand-500">Agency</span>
            </h2>
            <p class="text-gray-500 dark:text-gray-400 text-sm font-medium tracking-widest uppercase animate-pulse">
                {{ __('site.loading', ['default' => 'Loading Experience']) }}
            </p>
        </div>
    </div>

    <!-- Navbar -->
    @include('layouts.navbar')

    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Floating Action Buttons -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-4">
        <!-- Back to Top -->
        <button id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="w-12 h-12 bg-brand-500 hover:bg-brand-600 text-white rounded-full shadow-lg shadow-brand-500/30 flex items-center justify-center transform translate-y-20 opacity-0 transition-all duration-300 hover:-translate-y-1 focus:outline-none">
            <i class="fas fa-arrow-up"></i>
        </button>

        <!-- WhatsApp -->
        <a href="https://wa.me/201505294544" target="_blank"
            class="w-12 h-12 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg shadow-green-500/30 flex items-center justify-center transform hover:-translate-y-1 transition-all duration-300 hover:rotate-12">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Init Animations
        AOS.init({
            once: true,
            offset: 100,
            duration: 800,
        });

        // Back to Top Visibility
        window.addEventListener('scroll', () => {
            const backToTop = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                backToTop.classList.remove('translate-y-20', 'opacity-0');
            } else {
                backToTop.classList.add('translate-y-20', 'opacity-0');
            }

            // Sticky Navbar Glass Effect
            const nav = document.getElementById('navbar');
            if (nav) {
                if (window.scrollY > 20) {
                    nav.classList.add('glass-card');
                    nav.classList.remove('glass');
                } else {
                    nav.classList.add('glass');
                    nav.classList.remove('glass-card');
                }
            }
        });

        // Dark mode toggle logic
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        var themeToggleBtn = document.getElementById('theme-toggle');
        var themeToggleMobileBtn = document.getElementById('theme-toggle-mobile');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            if (themeToggleLightIcon) themeToggleLightIcon.classList.remove('hidden');
        } else {
            if (themeToggleDarkIcon) themeToggleDarkIcon.classList.remove('hidden');
        }

        function toggleTheme() {
            // toggle icons inside button
            if (themeToggleDarkIcon) themeToggleDarkIcon.classList.toggle('hidden');
            if (themeToggleLightIcon) themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                // if NOT set via local storage previously
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        }

        if (themeToggleBtn) themeToggleBtn.addEventListener('click', toggleTheme);
        if (themeToggleMobileBtn) themeToggleMobileBtn.addEventListener('click', toggleTheme);

        // Loader Logic
        window.addEventListener('load', () => {
            const loader = document.getElementById('page-loader');
            if (loader) {
                loader.classList.add('opacity-0', 'invisible');
                // Remove from DOM after transition
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 700);
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
