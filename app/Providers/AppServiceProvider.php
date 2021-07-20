<?php

namespace App\Providers;

use Braintree\Gateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Si va a prendere da config tutte le impostazioni che gli abbiamo passato
        $this->app->bind(Gateway::class, function($app){
            return new Gateway($app['config']['braintree']);
        });
    }
}
