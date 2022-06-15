<?php

namespace App\Orders\Payments;

interface IPayment
{
    function getPaymentType(): string;
    function handlePayment();
}
