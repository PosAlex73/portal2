<?php

namespace App\Orders\Payments;

class CreditCard extends APayment
{
    function handlePayment($product)
    {
        return true;
    }
}
