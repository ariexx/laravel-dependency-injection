<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment\PaymentMethod;

class HomeController extends Controller
{
    public function index(PaymentMethod $paymentMethod)
    {
        $paymentMethod->execute();
    }
}
