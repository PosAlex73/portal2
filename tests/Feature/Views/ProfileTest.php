<?php

namespace Tests\Feature\Views;

use App\Enums\Users\UserTypes;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProfile()
    {
        $response = $this->get(route('front.user'));
        $response->assertStatus(302);
        $user = User::factory()->create([
            'type' => UserTypes::SIMPLE
        ]);
        $response = $this->actingAs($user)->get(route('front.user'));
        $response->assertStatus(200);
        $user->delete();
    }
}
