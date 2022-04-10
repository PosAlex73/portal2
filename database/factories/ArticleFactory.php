<?php

namespace Database\Factories;

use App\Enums\ArticleStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
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
            'text' => $this->faker->text(500),
            'image' => $this->faker->imageUrl,
            'status' => ArticleStatuses::ACTIVE,
        ];
    }
}
