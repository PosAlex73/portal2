<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppNew>
 */
class AppNewFactory extends Factory
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
            'description' => $this->faker->text(500),
            'status' => CommonStatuses::ACTIVE,
            'image' => $this->faker->imageUrl()
        ];
    }
}
