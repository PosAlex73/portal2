<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FrontTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPlans()
    {
        $plan_list = $this->get(route('front.plans'));

        $plan_list->assertStatus(200);
    }

    public function testCourses()
    {
        $courses_list = $this->get(route('front.courses'));

        $courses_list->assertStatus(200);
    }
}
