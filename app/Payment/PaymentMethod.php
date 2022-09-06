<?php

namespace App\Payment;

interface PaymentMethod
{
    public function inquiry();
    public function execute();
}
