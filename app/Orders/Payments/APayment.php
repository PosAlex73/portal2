<?php

namespace App\Orders\Payments;

use App\Enums\Orders\Payments;

abstract class APayment
{
    protected $template;
    protected $title;
    protected $type;

    public function __construct()
    {
         $template = '';
         $title = '';
         $type = Payments::TEST_PAYMENT;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function getTitle()
    {
        return $this->title;
    }

    function getPaymentType(): string
    {
        return $this->type;
    }

    abstract function handlePayment();
}
