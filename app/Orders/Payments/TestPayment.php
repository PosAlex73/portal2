<?php

namespace App\Orders\Payments;

class TestPayment extends APayment
{
    protected $template = 'payments.test';

    function handlePayment()
    {
        return true;
    }
}
