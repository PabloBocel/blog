<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer;
use Faker\Provider\Company;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('prueba', 'Este es un mensaje de prueba');

        View::composer('welcome', CompanyComposer::class);
    }
}
