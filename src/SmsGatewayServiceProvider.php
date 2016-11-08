<?php

namespace Walletmix\SmsGateway;

use Illuminate\Support\ServiceProvider;

class SmsGatewayServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'smsgate');
		
		
		$this->publishes([
            __DIR__.'/config/smsconfig.php' => base_path('config/smsconfig.php'),
        ]);
		
		
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Walletmix\SmsGateway\SmsGatewayController');
    }
}