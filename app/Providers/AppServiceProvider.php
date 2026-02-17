<?php

namespace App\Providers;

use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Pagination\Paginator::useTailwind();

        View::composer('*', function ($view) {
            $view->with('services_nav', Service::where('is_active', true)->orderBy('order')->get());
            $view->with('newMessagesCount', ContactMessage::where('status', 'new')->count());

            // Share settings as a key-value collection
            $view->with('settings', Setting::all()->pluck('value', 'key'));
        });
    }
}
