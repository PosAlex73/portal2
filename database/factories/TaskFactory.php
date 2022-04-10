<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use App\Enums\Tasks\TaskTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'data' => '',
            'status' => CommonStatuses::ACTIVE,
            'type' => TaskTypes::THEORY,
        ];
    }
}
