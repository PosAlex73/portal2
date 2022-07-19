<?php

namespace Database\Factories;

use App\Enums\Courses\CoursePractice;
use App\Enums\Courses\CourseStatuses;
use App\Enums\Courses\CourseTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PracticeCourse>
 */
class PracticeCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => '',
            'description' => '',
            'short_description' => '',
            'category_id' => '',
            'image' => $this->faker->imageUrl(),
            'price' => 0,
            'type' => CourseTypes::FREE,
            'practice' => CoursePractice::YES,
            'class' => '',
            'status' => CourseStatuses::IN_PROGRESS
        ];
    }
}
