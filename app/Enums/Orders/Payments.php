<?php

namespace App\Enums\Orders;

use App\Enums\Enumable;
use App\Orders\Payments\CreditCard;
use App\Orders\Payments\TestPayment;

class Payments
{
    use Enumable;

    public const TEST_PAYMENT = TestPayment::class;
    public const CREDIT_CARD = CreditCard::class;
}
