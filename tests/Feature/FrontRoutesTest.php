<?php

namespace Tests\Feature;

use App\Enums\Users\UserTypes;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FrontRoutesTest extends TestCase
{
    public $user_simple;
    public $public_routes;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->user_simple = User::factory()->create(['type' => UserTypes::SIMPLE]);

        $this->public_routes = [
            'front.index',
            'front.plans',
            'front.courses',
            'front.blog',
            'front.promotions'
        ];
    }

    public function tearDown(): void
    {
        parent::tearDown();
        $this->user_simple->delete();
    }

    public function testPublicRoutes()
    {
        foreach ($this->public_routes as $route) {
            $this->get(route($route))->assertStatus(200);
        }
    }

    public function testPlansRoute()
    {
        $plan = Plan::factory()->create();
        $response = $this->get(route('front.plans.plan', ['plan' => $plan]));
        $response->assertStatus(200);
    }
}
