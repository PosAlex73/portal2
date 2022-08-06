<?php

namespace App\Orders\Payments;

class TestPayment extends APayment
{
    public const NAME = 'test_payment';

    protected $template = 'payments.test';
    protected $title = 'test';

    function handlePayment($product)
    {
        return true;
    }
}
