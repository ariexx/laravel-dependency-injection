<?php

namespace App\Providers;

use App\Payment\PaymentMethod;
use App\Payment\PaymentMethodPayPal;
use App\Payment\PaymentMethodStripe;
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
        $this->app->singleton(PaymentMethod::class, function ($app) {
            switch (request()->get('payment_method')) {
                case 'stripe':
                    return new PaymentMethodStripe();
                case 'paypal':
                    return new PaymentMethodPayPal();
                default:
                    dd('payment method not found');
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
