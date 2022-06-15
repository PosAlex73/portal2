<?php

namespace App\Orders;

use App\Enums\Orders\OrderStatuses;
use App\Models\Order;
use App\Orders\Payments\APayment;
use App\Orders\Products\Product;
use App\Orders\Products\ProductFactory;

class OrderHandler
{
    public function handleOrder($order_data)
    {
        $product = ProductFactory::getProduct($order_data['type'], $order_data['id']);
        if (empty($product)) {
            return false;
        }

        $payment_result = true;
        if ($product->price > 0) {
            $payment_result = $this->payment($product, $order_data);
        }

        if (!$payment_result) {
            return false;
        }

        $order = Order::create([
            'user_id' => $order_data['user']->id,
            'payment' => $order_data['payment'],
            'total' => $product->price,
            'data' => '',
            'status' => OrderStatuses::OPEN
        ]);

        return $order;
    }

    protected function payment(Product $product, APayment $payment)
    {
        $result = $payment->handlePayment($product);

        return $result;
    }
}
