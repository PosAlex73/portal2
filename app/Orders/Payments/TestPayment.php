<?php

namespace App\Orders\Payments;

use App\Enums\Orders\Payments;

class TestPayment implements IPayment
{
    private $type = Payments::TEST_PAYMENT;

    function getPaymentType(): string
    {
        return $this->type;
    }

    function handlePayment()
    {
        return true;
    }
}
