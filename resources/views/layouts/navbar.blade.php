<nav class="fixed w-full z-50 transition-all duration-300 glass border-b border-gray-200 dark:border-white/5" id="navbar" style="border-radius: 0px 0px 30px 30px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-2">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="{{ asset('img/dark.png') }}" alt="Believe Agency" class="h-12 md:h-20 w-auto transition-all duration-300 hover:scale-105 block dark:hidden">
                    <img src="{{ asset('img/light.png') }}" alt="Believe Agency" class="h-12 md:h-20 w-auto transition-all duration-300 hover:scale-105 hidden dark:block">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <div class="flex items-baseline space-x-6">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-brand-600 dark:text-gray-300 dark:hover:text-brand-400 px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ __('site.nav.home') }}</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-brand-600 dark:text-gray-300 dark:hover:text-brand-400 px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ __('site.nav.about') }}</a>
                    <div class="relative group h-full flex items-center">
                        <a href="{{ route('services') }}" class="flex items-center gap-1 text-gray-700 hover:text-brand-600 dark:text-gray-300 dark:hover:text-brand-400 px-3 py-2 rounded-md text-sm font-medium transition-colors group-hover:text-brand-600 dark:group-hover:text-brand-400">
                            <span>{{ __('site.nav.services') }}</span>
                            <i class="fas fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180 opacity-70"></i>
                        </a>

                        <!-- Dropdown Menu -->
                        <div class="absolute top-full left-0 pt-2 w-72 transform origin-top-left transition-all duration-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl ring-1 ring-black/5 dark:ring-white/10 overflow-hidden backdrop-blur-xl p-2">
                                <a href="{{ route('web-design') }}" class="group/item flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-brand-50 dark:hover:bg-brand-900/20 transition-colors">
                                    <div class="w-10 h-10 rounded-lg bg-brand-100 dark:bg-brand-900/50 flex items-center justify-center text-brand-600 dark:text-brand-400 group-hover/item:bg-brand-200 dark:group-hover/item:bg-brand-800/50 transition-colors">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('site.nav.web_design') }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Modern & Responsive</div>
                                    </div>
                                </a>

                                <a href="{{ route('apps-development') }}" class="group/item flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-accent-50 dark:hover:bg-accent-900/20 transition-colors">
                                    <div class="w-10 h-10 rounded-lg bg-accent-100 dark:bg-accent-900/50 flex items-center justify-center text-accent-600 dark:text-accent-400 group-hover/item:bg-accent-200 dark:group-hover/item:bg-accent-800/50 transition-colors">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('site.nav.apps_development') }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">iOS & Android</div>
                                    </div>
                                </a>

                                <a href="{{ route('branding') }}" class="group/item flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-pink-50 dark:hover:bg-pink-900/20 transition-colors">
                                    <div class="w-10 h-10 rounded-lg bg-pink-100 dark:bg-pink-900/50 flex items-center justify-center text-pink-600 dark:text-pink-400 group-hover/item:bg-pink-200 dark:group-hover/item:bg-pink-800/50 transition-colors">
                                        <i class="fas fa-paint-brush"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('site.nav.branding') }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Identity & Design</div>
                                    </div>
                                </a>

                                <a href="{{ route('marketing') }}" class="group/item flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                    <div class="w-10 h-10 rounded-lg bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-blue-600 dark:text-blue-400 group-hover/item:bg-blue-200 dark:group-hover/item:bg-blue-800/50 transition-colors">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('site.nav.digital_marketing') }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">SEO & Social Media</div>
                                    </div>
                                </a>

                                <a href="{{ route('ecommerce') }}" class="group/item flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-green-50 dark:hover:bg-green-900/20 transition-colors">
                                    <div class="w-10 h-10 rounded-lg bg-green-100 dark:bg-green-900/50 flex items-center justify-center text-green-600 dark:text-green-400 group-hover/item:bg-green-200 dark:group-hover/item:bg-green-800/50 transition-colors">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('site.nav.ecommerce') }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Online Stores</div>
                                    </div>
                                </a>

                                <a href="{{ route('software-tools') }}" class="group/item flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-colors">
                                    <div class="w-10 h-10 rounded-lg bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center text-purple-600 dark:text-purple-400 group-hover/item:bg-purple-200 dark:group-hover/item:bg-purple-800/50 transition-colors">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('site.nav.software_tools') }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">ERP & CRM</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('projects') }}" class="text-gray-700 hover:text-brand-600 dark:text-gray-300 dark:hover:text-brand-400 px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ __('site.nav.projects') }}</a>
                    <a href="{{ route('clients') }}" class="text-gray-700 hover:text-brand-600 dark:text-gray-300 dark:hover:text-brand-400 px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ __('site.nav.clients') }}</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-brand-600 dark:text-gray-300 dark:hover:text-brand-400 px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ __('site.nav.contact') }}</a>
                </div>

                <div class="flex items-center gap-4">
                    <!-- Language Switcher -->
                    <a href="{{ route('lang.switch', app()->getLocale() == 'ar' ? 'en' : 'ar') }}" class="group flex items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-brand-600 dark:hover:text-white font-medium text-sm transition-colors p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-white/5">
                         <i class="fas fa-globe text-lg"></i>
                        <span class="hidden lg:block">{{ __('site.nav.language') }}</span>
                    </a>

                    <!-- Dark Mode Toggle -->
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700/50 focus:outline-none rounded-lg text-sm p-2.5 transition-colors">
                        <i id="theme-toggle-dark-icon" class="fas fa-moon hidden"></i>
                        <i id="theme-toggle-light-icon" class="fas fa-sun hidden"></i>
                    </button>

                    <a href="{{ route('contact') }}" class="hidden sm:inline-block bg-brand-500 hover:bg-brand-600 text-white px-5 py-2.5 rounded-full text-sm font-medium transition-all shadow-lg shadow-brand-500/25 hover:shadow-brand-500/40 transform hover:-translate-y-0.5">{{ __('site.nav.lets_talk') }}</a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden items-center gap-4">
                <button id="theme-toggle-mobile" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700/50 focus:outline-none rounded-lg text-sm p-2.5 transition-colors">
                    <i class="fas fa-adjust"></i>
                </button>

                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 dark:text-gray-400 hover:text-brand-600 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-btn">
                    <span class="sr-only">Open main menu</span>
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden glass border-t border-gray-200 dark:border-white/5 bg-white/95 dark:bg-slate-900/95 backdrop-blur-2xl transition-all duration-300 transform origin-top" style="border-radius: 0px 0px 30px 30px;" id="mobile-menu">
        <div class="px-4 pt-4 pb-8 space-y-2">
            <a href="{{ route('home') }}" class="flex items-center gap-4 text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-white px-4 py-3 rounded-2xl text-base font-semibold hover:bg-brand-50/50 dark:hover:bg-brand-900/20 transition-all duration-200">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-brand-600 dark:text-brand-400 transition-colors">
                    <i class="fas fa-home"></i>
                </div>
                <span>{{ __('site.nav.home') }}</span>
            </a>

            <a href="{{ route('about') }}" class="flex items-center gap-4 text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-white px-4 py-3 rounded-2xl text-base font-semibold hover:bg-brand-50/50 dark:hover:bg-brand-900/20 transition-all duration-200">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-brand-600 dark:text-brand-400 transition-colors">
                    <i class="fas fa-info-circle"></i>
                </div>
                <span>{{ __('site.nav.about') }}</span>
            </a>

            <a href="{{ route('services') }}" class="flex items-center gap-4 text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-white px-4 py-3 rounded-2xl text-base font-semibold hover:bg-brand-50/50 dark:hover:bg-brand-900/20 transition-all duration-200">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-brand-600 dark:text-brand-400 transition-colors">
                    <i class="fas fa-briefcase"></i>
                </div>
                <span>{{ __('site.nav.services') }}</span>
            </a>

            <a href="{{ route('projects') }}" class="flex items-center gap-4 text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-white px-4 py-3 rounded-2xl text-base font-semibold hover:bg-brand-50/50 dark:hover:bg-brand-900/20 transition-all duration-200">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-brand-600 dark:text-brand-400 transition-colors">
                    <i class="fas fa-folder-open"></i>
                </div>
                <span>{{ __('site.nav.projects') }}</span>
            </a>

            <a href="{{ route('clients') }}" class="flex items-center gap-4 text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-white px-4 py-3 rounded-2xl text-base font-semibold hover:bg-brand-50/50 dark:hover:bg-brand-900/20 transition-all duration-200">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-brand-600 dark:text-brand-400 transition-colors">
                    <i class="fas fa-users"></i>
                </div>
                <span>{{ __('site.nav.clients') }}</span>
            </a>

            <div class="pt-4 mt-4 border-t border-gray-100 dark:border-white/5 space-y-4">
                <a href="{{ route('lang.switch', app()->getLocale() == 'ar' ? 'en' : 'ar') }}" class="flex items-center justify-between text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-white px-4 py-3 rounded-2xl text-base font-semibold hover:bg-gray-50/50 dark:hover:bg-white/5 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400">
                            <i class="fas fa-globe"></i>
                        </div>
                        <span>{{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}</span>
                    </div>
                </a>

                <a href="{{ route('contact') }}" class="flex items-center justify-center gap-3 w-full bg-brand-500 hover:bg-brand-600 text-white px-6 py-4 rounded-2xl text-base font-bold transition-all shadow-lg shadow-brand-500/25 active:scale-95">
                    <i class="fas fa-comments"></i>
                    <span>{{ __('site.nav.lets_talk') }}</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }
</script>
