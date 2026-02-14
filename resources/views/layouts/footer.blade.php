<footer class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 pt-16 pb-8 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 mb-6">
                    <img src="{{ asset('img/dark.png') }}" alt="Believe Agency" class="h-16 md:h-20 w-auto transition-all duration-300 hover:scale-105 block dark:hidden">
                    <img src="{{ asset('img/light.png') }}" alt="Believe Agency" class="h-16 md:h-20 w-auto transition-all duration-300 hover:scale-105 hidden dark:block">
                </div>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    {{ __('site.footer.desc') }}
                </p>
                <div class="flex gap-4 mt-6 flex-wrap">
                    <a href="https://www.facebook.com/BelieveAgency2025" target="_blank"
                        class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white transition-colors"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.behance.net/believeagency" target="_blank"
                        class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white transition-colors"><i
                            class="fab fa-behance"></i></a>
                    <a href="https://www.instagram.com/believe_agency_?igsh=MWhyaHQxNmg1Mm45Zg%3D%3D&utm_source=qr"
                        class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white transition-colors"><i
                            class="fab fa-instagram"></i></a>
                     <a href="https://www.linkedin.com/company/believeagency2025/"
                        class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white transition-colors"><i
                            class="fab fa-linkedin-in"></i></a>
                     <a href="https://www.tiktok.com/@believe.agency4?_r=1&_t=ZS-92W8PwecCMz"
                        class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white transition-colors"><i
                            class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div>
                <h4 class="text-gray-900 dark:text-white font-bold mb-6">{{ __('site.footer.services') }}</h4>
                <ul class="space-y-3 text-gray-600 dark:text-gray-400 text-sm">
                    <li><a href="{{ url('/web-design') }}"
                            class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.footer.links.web') }}</a></li>
                    <li><a href="{{ url('/apps-development') }}"
                            class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.footer.links.app') }}</a></li>
                    <li><a href="{{ url('/branding') }}"
                            class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.footer.links.branding') }}</a></li>
                    <li><a href="{{ url('/marketing') }}"
                            class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.footer.links.marketing') }}</a></li>
                    <li><a href="{{ url('/ecommerce') }}" class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.nav.ecommerce') }}</a></li>
                    <li><a href="{{ url('/software-tools') }}" class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.nav.software_tools') }}</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-gray-900 dark:text-white font-bold mb-6">{{ __('site.footer.company') }}</h4>
                <ul class="space-y-3 text-gray-600 dark:text-gray-400 text-sm">
                    <li><a href="{{ url('/about') }}"
                            class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.footer.links.about') }}</a></li>
                    <li><a href="{{ url('/team') }}" class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.footer.links.team') }}</a></li>
                    <li><a href="{{ url('/projects') }}"
                            class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.footer.links.projects') }}</a></li>
                    <li><a href="{{ url('/clients') }}" class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.nav.clients') }}</a></li>
                    <li><a href="{{ url('/contact') }}"
                            class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">{{ __('site.footer.links.contact') }}</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-gray-900 dark:text-white font-bold mb-6">{{ __('site.footer.contact') }}</h4>
                <ul class="space-y-3 text-gray-600 dark:text-gray-400 text-sm">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt mt-1 text-brand-500 dark:text-brand-500"></i>
                        <span>{{ __('site.contact.location') }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-phone mt-1 text-brand-500 dark:text-brand-500"></i>
                        <span>+20 15 0529 4544</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-envelope mt-1 text-brand-500 dark:text-brand-500"></i>
                        <span>info@believe-agency.net</span>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="border-t border-gray-200 dark:border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-500 text-sm">{!! __('site.footer.rights') !!}</p>
            <div class="flex gap-6 text-sm text-gray-500">
                <a href="{{ url('/privacy-policy') }}" class="hover:text-brand-500 dark:hover:text-white">{{ __('site.footer.privacy') }}</a>
                <a href="{{ url('/terms') }}" class="hover:text-brand-500 dark:hover:text-white">{{ __('site.footer.terms') }}</a>
            </div>
        </div>
    </div>
</footer>
