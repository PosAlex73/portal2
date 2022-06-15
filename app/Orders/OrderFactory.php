<?php

namespace App\Orders;

use App\Models\Course;
use App\Models\Plan;

class OrderFactory
{
    public static function getOrderData(string $type, int $id)
    {
        return match ($type) {
            'course' => Course::find($id),
            'plan' => Plan::find($id),
            default => null,
        };
    }
}
