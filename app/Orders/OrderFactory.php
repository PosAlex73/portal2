<?php

namespace App\Orders;

use App\Orders\Payments\TestPayment;
use App\Orders\Products\ProductFactory;
use Illuminate\Support\Collection;

class OrderFactory
{
    public static function getOrderData(string $type, int $id)
    {
        $product = ProductFactory::getProduct($type, $id);

        if (empty($product)) {
            return false;
        }

        $product_data = new Collection();

        //TODO payments service
        $product_data['product'] = $product;
        $product_data['payments'] = [new TestPayment()];
        return $product_data;
    }
}
