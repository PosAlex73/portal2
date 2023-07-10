<?php

namespace Tests\Feature\Front;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
        $this->frontUrls = [
            'front.index',
            'front.plans',
            'front.courses',
            'front.blog',
            'front.promotions',
            'front.rating',
            'front.pcourses',
            'front.news',
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
        foreach ($this->frontUrls as $route) {
            $this->get(route($route))->assertStatus(200);
        }
    }

    public function testSearchWrong()
    {
        $searchEmpty = route('front.search');
        $searchWithWrongTag = route('front.search', ['search' => 'some_words']);

        $this->get($searchEmpty)->assertRedirect();
        $this->get($searchWithWrongTag)->assertStatus(200);
    }

    public function testSearchRight()
    {
        $searchUrl = route('front.search', ['search' => 'test']);
        Article::factory(1)->create([
            'title' => 'test',
            'text' => 'test',
            ''
        ]);

    }
}

