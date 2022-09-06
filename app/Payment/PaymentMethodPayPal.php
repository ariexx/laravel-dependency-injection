<?php

namespace App\Payment;

use App\Payment\PaymentMethod;

class PaymentMethodPayPal implements PaymentMethod
{
    public function inquiry()
    {
    }

    public function execute()
    {
        dd('payment method paypal');
    }
}
