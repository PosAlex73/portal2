<?php

namespace App\Orders\Payments;

class TestPayment extends APayment
{
    protected $template = 'payments.test';
    protected $title = 'test';

    function handlePayment($product)
    {
        return true;
    }
}
