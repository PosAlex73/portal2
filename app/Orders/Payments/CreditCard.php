<?php

namespace App\Orders\Payments;

class CreditCard extends APayment
{
    public const NAME = 'credit_card';

    protected $template = 'payments.credit_card';
    protected $title = 'credit_card';

    function handlePayment($product)
    {
        return true;
    }
}
