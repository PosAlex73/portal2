<?php

namespace App\Utils\Alanytics;

use App\Models\Order;
use App\Utils\AnalyticItem;

class Orders extends AnalyticItem
{
    public const CLASS_NAME = Order::class;

    public function __construct()
    {
        parent::__construct();
    }

    function getTitle(): string
    {
        return __('vars.orders');
    }

    function getListLink(): string
    {
        return route('orders.index');
    }
}
