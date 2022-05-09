<?php

namespace Tests\Feature\Admin;

use App\Enums\Users\UserTypes;
use App\Models\User;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->user_admin = User::factory()->create(['type' => UserTypes::ADMIN]);
        $this->user_simple = User::factory()->create(['type' => UserTypes::SIMPLE]);

        $this->list_routes = [
            'articles.index',
            'articles.create',
            'categories.index',
            'categories.create',
            'courses.index',
            'courses.create',
            'orders.index',
            'orders.create',
            'pages.index',
            'pages.create',
            'promotions.index',
            'promotions.create',
            'plans.index',
            'plans.create',
            'users.index',
            'users.create',
            'tasks.index',
            'tasks.create',
        ];
    }

    public function tearDown(): void
    {
        parent::tearDown();
        $this->user_simple->delete();
        $this->user_admin->delete();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminLogin()
    {
        $response = $this->get(url('/boss'));
        $response->assertRedirect(route('dashboard'));
        $response = $this->actingAs($this->user_simple)->get(route('dashboard'));
        $response->assertRedirect();
        $response = $this->actingAs($this->user_admin)->get(route('dashboard'));
        $response->assertStatus(200);
    }

    public function testAdminRoutes()
    {
        foreach($this->list_routes as $route) {
            $this->get(route($route))->assertStatus(302);
            $this->actingAs($this->user_admin)->get(route($route))->assertStatus(200);
            $this->actingAs($this->user_simple)->get(route($route))->assertRedirect();
        }
    }
}
