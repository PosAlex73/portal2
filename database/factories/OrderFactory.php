<?php

namespace Database\Factories;

use App\Enums\Orders\OrderStatuses;
use App\Enums\Orders\Payments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payment' => Payments::TEST_PAYMENT,
            'total' => mt_rand(1, 10000),
            'data' => $this->faker->text(100),
            'status' => OrderStatuses::OPEN
        ];
    }
}
