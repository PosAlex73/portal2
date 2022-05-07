<?php

namespace Tests\Feature\Admin;

use App\Enums\Users\UserTypes;
use App\Models\User;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function setUp(): void
    {
        $this->user_admin = User::factory()->create(['type' => UserTypes::ADMIN]);
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

        $user_simple = User::factory()->create(['type' => UserTypes::SIMPLE]);
        $response = $this->actingAs($user_simple)->get(route('dashboard'));
        $response->assertRedirect();

        $user_admin = User::factory()->create(['type' => UserTypes::ADMIN]);
        $response = $this->actingAs($user_admin)->get(route('dashboard'));
        $response->assertStatus(200);
    }

    public function testAdminRoutes()
    {
        $response = $this->get(route('article.index'))->assertStatus(200);

//        Route::resource('articles', ArticleController::class);
//        Route::resource('categories', CategoryController::class);
//        Route::resource('courses', CourseController::class);
//        Route::resource('orders', OrderController::class);
//        Route::resource('pages', PageController::class);
//        Route::resource('promotions', PromotionController::class);
//        Route::resource('plans', PlanController::class);
//        Route::resource('users', UserController::class);
//        Route::resource('tasks', TaskController::class);
    }
}
