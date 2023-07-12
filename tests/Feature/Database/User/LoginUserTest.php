<?php

namespace Tests\Feature\Database\User;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginUserTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginUser()
    {
        $email = $this->faker->safeEmail();
        $password = 'password123';

        $user = User::factory()->create([
            'email' => $email,
            'password' => $password,
        ]);

        $response = $this->post(route('login.post'), [
            'email' => $email,
            'password' => $password
        ]);

        $response->assertRedirect(route('front.index'));
        $user->delete();
    }
}
