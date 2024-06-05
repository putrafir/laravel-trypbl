<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Route;

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
        Route::bind('pendaftar', function ($value) {
            return Pendaftar::where('nisn', $value)->firstOrFail();
        });
    }
}
