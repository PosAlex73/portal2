<?php

namespace App\Orders\Products;

use App\Enums\Orders\OrderTypes;
use App\Models\Course;
use App\Models\Plan;
use App\Models\PracticeCourse;

class ProductFactory
{
    public static function getProduct(string $type, int $id)
    {
        $entity = match ($type) {
            OrderTypes::COURSE => Course::find($id),
            OrderTypes::PLAN => Plan::find($id),
            OrderTypes::PCOURSE => PracticeCourse::find($id),
            default => null,
        };

        if (empty($entity)) {
            return false;
        }

        if ($type === OrderTypes::COURSE) {
            $product = new Product(
                OrderTypes::COURSE,
                $entity->price,
                $entity->title,
                $entity->id
            );
        } elseif ($type === OrderTypes::PLAN) {
            $product = new Product(
                OrderTypes::COURSE,
                $entity->price,
                $entity->title,
                $entity->id
            );
        } elseif ($type === OrderTypes::PCOURSE) {
            $product = new Product(
                OrderTypes::PCOURSE,
                $entity->price,
                $entity->title,
                $entity->id
            );
        } else {
            $product = null;
        }

        return $product;
    }
}
