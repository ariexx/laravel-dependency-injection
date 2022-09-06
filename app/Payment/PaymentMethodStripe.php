<?php

namespace App\Payment;

class PaymentMethodStripe implements PaymentMethod
{
    public function inquiry()
    {
    }

    public function execute()
    {
        dd('execute payment stripe');
    }
}
