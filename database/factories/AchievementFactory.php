<?php

namespace Database\Factories;

use App\Enums\Achivements\AchievementTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achievement>
 */
class AchievementFactory extends Factory
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
            'description' => $this->faker->text(200),
            'achievement' => $this->faker->text(200),
            'type' => AchievementTypes::COMMON,
        ];
    }
}
