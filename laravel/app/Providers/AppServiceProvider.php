<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        Schema::defaultStringLength(191);

        \Illuminate\Support\Facades\URL::forceScheme('https');

        if (config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }
}
