<?php

namespace Tests\Feature\Views\Front;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterAndSignUpTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginForm()
    {
        $response = $this->get(route('register'));
        $response
            ->assertStatus(200);
        $response = $this->actingAs(User::factory()->create())->get(route('register'));
        $response->assertRedirect();
    }

    public function testRegisterForm()
    {
        $response = $this->get(route('login'));
        $response
            ->assertStatus(200);
        $response = $this->actingAs(User::factory()->create())->get(route('login'));
        $response->assertRedirect();
    }
}
