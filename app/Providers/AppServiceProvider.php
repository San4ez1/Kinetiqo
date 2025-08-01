<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
{
    Route::middleware('api')
        ->prefix('api')
        ->namespace('App\Http\Controllers')
        ->group(base_path('routes/api.php'));
}
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
