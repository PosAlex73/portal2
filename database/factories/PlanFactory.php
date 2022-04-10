<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'description' => $this->faker->text(300),
            'short_description' => $this->faker->text(50),
            'image' => $this->faker->imageUrl,
            'status' => CommonStatuses::ACTIVE,
            'price' => mt_rand(1, 1000)
        ];
    }
}
