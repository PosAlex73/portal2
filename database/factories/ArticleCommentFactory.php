<?php

namespace Database\Factories;

use App\Enums\MessageStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleComment>
 */
class ArticleCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => (new Collection(MessageStatuses::getAll()))->random(),
            'text' => $this->faker->text(100)
        ];
    }
}
