<?php

namespace BitcoinValidation;

use Illuminate\Support\ServiceProvider as BaseServiceProdiver;

class ServiceProvider extends BaseServiceProdiver
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'bitcoin-validation');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/bitcoin-validation'),
        ]);
    }
}
