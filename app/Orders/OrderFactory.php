<?php

namespace App\Orders;

use App\Enums\Orders\OrderTypes;
use App\Models\Course;
use App\Models\Plan;
use App\Orders\Payments\TestPayment;
use Illuminate\Support\Collection;

class OrderFactory
{
    public static function getOrderData(string $type, int $id)
    {
        $product = static::getProduct($type, $id);

        if (empty($product)) {
            return false;
        }

        $product_data = new Collection();

        //TODO payments service
        $product_data['payment'] = [TestPayment::class];
    }

    public static function getProduct(string $type, int $id)
    {
        return match ($type) {
            OrderTypes::COURSE => Course::find($id),
            OrderTypes::PLAN => Plan::find($id),
            default => null,
        };
    }
}
