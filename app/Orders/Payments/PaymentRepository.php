<?php

namespace App\Orders\Payments;

use Illuminate\Support\Collection;

class PaymentRepository
{
    public function __construct(protected Collection $payments)
    {}

    public function getPayments(): Collection
    {
        return $this->payments;
    }
}
