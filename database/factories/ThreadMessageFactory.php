<?php

namespace Database\Factories;

use App\Enums\Thread\MessageStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ThreadMessage>
 */
class ThreadMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'message' => $this->faker->text(50),
            'status' => MessageStatuses::UNREAD
        ];
    }
}
