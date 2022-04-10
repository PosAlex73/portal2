<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->phoneNumber,
            'contacted_email' => $this->faker->email,
            'age' => mt_rand(18, 75),
            'country' => $this->faker->countryCode,
            'experience' => mt_rand(1, 5),
            'about' => $this->faker->text(500),
        ];
    }
}
