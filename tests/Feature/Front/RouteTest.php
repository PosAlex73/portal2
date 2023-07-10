<?php

namespace Tests\Feature\Front;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->frontUrls = [
            'front.index',
            'front.plans',
            'front.courses',
            'front.blog',
            'front.blog',
            'front.promotions',
            'front.rating',
            'front.pcourses',
            'front.news',
            'front.search',
            'front.achievements.list'
        ];
    }

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
}

