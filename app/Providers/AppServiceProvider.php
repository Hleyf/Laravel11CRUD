<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        // fixes the error: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes in MySQL
        Schema::defaultStringLength(191);
    }
}
