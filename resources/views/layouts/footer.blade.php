<footer class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 pt-16 pb-8 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 mb-6">
                    <img src="{{ asset('img/dark.png') }}" alt="Believe Agency" class="h-16 md:h-20 w-auto transition-all duration-300 hover:scale-105 block dark:hidden">
                    <img src="{{ asset('img/light.png') }}" alt="Believe Agency" class="h-16 md:h-20 w-auto transition-all duration-300 hover:scale-105 hidden dark:block">
                </div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 tracking-tight">
                    Believe <span class="text-brand-500">Agency</span>
                </h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6 font-medium">
                    {{ __('site.footer.desc') }}
                </p>
                <div class="flex gap-4 mt-6 flex-wrap">
                    @if($settings['facebook'] ?? null)
                        <a href="{{ $settings['facebook'] }}" target="_blank"
                            class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white dark:hover:bg-brand-600 transition-colors"><i
                                class="fab fa-facebook-f"></i></a>
                    @endif
                    @if($settings['behance'] ?? null)
                        <a href="{{ $settings['behance'] }}" target="_blank"
                            class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white dark:hover:bg-brand-600 transition-colors"><i
                                class="fab fa-behance"></i></a>
                    @endif
                    @if($settings['instagram'] ?? null)
                        <a href="{{ $settings['instagram'] }}" target="_blank"
                            class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white dark:hover:bg-brand-600 transition-colors"><i
                                class="fab fa-instagram"></i></a>
                    @endif
                    @if($settings['linkedin'] ?? null)
                         <a href="{{ $settings['linkedin'] }}" target="_blank"
                            class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white dark:hover:bg-brand-600 transition-colors"><i
                                class="fab fa-linkedin-in"></i></a>
                    @endif
                    @if($settings['tiktok'] ?? null)
                         <a href="{{ $settings['tiktok'] }}" target="_blank"
                            class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white dark:hover:bg-brand-600 transition-colors"><i
                                class="fab fa-tiktok"></i></a>
                    @endif
                    @if($settings['twitter'] ?? null)
                         <a href="{{ $settings['twitter'] }}" target="_blank"
                            class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-brand-600 hover:text-white dark:hover:bg-brand-600 transition-colors"><i
                                class="fab fa-x-twitter"></i></a>
                    @endif
                </div>
            </div>

            <div>
                <h4 class="text-gray-900 dark:text-white font-bold mb-6">{{ __('site.footer.services') }}</h4>
                <ul class="space-y-3 text-gray-600 dark:text-gray-400 text-sm">
                    @foreach($services_nav as $s_nav)
                        <li>
                            <a href="{{ route('service.detail', $s_nav->slug) }}" class="hover:text-brand-500 dark:hover:text-brand-400 transition-colors">
                                {{ $s_nav->title }}
                            </a>
                        </li>
                    @endforeach
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
                <ul class="space-y-2">
                    <li class="flex items-start gap-3">
                        <div class="w-5 flex justify-center shrink-0 mt-1">
                            <i class="fas fa-map-marker-alt text-brand-500"></i>
                        </div>
                        <span class="text-gray-600 dark:text-gray-400 text-sm leading-6">{{ $settings['contact_address'] ?? __('site.contact.location') }}</span>
                    </li>
                    <li class="flex items-start gap-3" style="height: 20px !important;">
                        <div class="w-5 flex justify-center shrink-0 mt-1">
                            <i class="fas fa-phone-alt text-brand-500"></i>
                        </div>
                         <a href="tel:{{ $settings['contact_phone'] ?? '' }}" class="text-gray-600 dark:text-gray-400 text-sm hover:text-brand-600 transition-colors leading-6">{{ $settings['contact_phone'] ?? '' }}</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-5 flex justify-center shrink-0 mt-1">
                            <i class="fas fa-envelope text-brand-500"></i>
                        </div>
                        <a href="mailto:{{ $settings['contact_email'] ?? 'info@believe-agency.net' }}" class="text-gray-600 dark:text-gray-400 text-sm hover:text-brand-600 transition-colors leading-6">{{ $settings['contact_email'] ?? 'info@believe-agency.net' }}</a>
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
