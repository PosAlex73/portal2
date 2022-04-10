<?php

namespace Database\Factories;

use App\Enums\Courses\CourseStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'description' => $this->faker->text(150),
            'short_description' => $this->faker->text(50),
            'image' => $this->faker->imageUrl,
            'status' => CourseStatuses::ACTIVE,
        ];
    }
}
