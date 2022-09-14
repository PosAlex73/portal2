<?php

namespace App\Providers;

use App\Orders\Payments\CreditCard;
use App\Orders\Payments\PaymentRepository;
use App\Orders\Payments\TestPayment;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class PaymentProvider extends ServiceProvider
{
    public $payments = [
        TestPayment::class,
        CreditCard::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(PaymentRepository::class, function () {
            $payments = new Collection();
            foreach ($this->payments as $payment) {
                $payments->add(new $payment());
            }

            return new PaymentRepository($payments);
        });
    }
}
