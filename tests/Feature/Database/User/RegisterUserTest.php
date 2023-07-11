<?php

namespace Tests\Feature\Database\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegisterUser()
    {
        $firstName = $this->faker->firstName();
        $lastName = $this->faker->lastName();
        $email = $this->faker->safeEmail();
        $password = 'password123';

        $response = $this->post(route('register.post') ,[
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password
        ]);
        $response->assertRedirect();
        $this->assertDatabaseHas('users', [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email
        ]);
    }
}
