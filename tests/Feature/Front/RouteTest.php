<?php

namespace Tests\Feature\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Orchid\Support\Assert;
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
        $response = $this->get($searchWithWrongTag);
        $response->assertStatus(200);
        $response->assertSee(__('vars.courses_not_found'));
    }

    public function testSearchRight()
    {
        $searchUrl = route('front.search', ['search' => 'testlolkek']);
        $category = Category::factory()->create();
        $article = Article::factory()->create(['text' => 'text', 'category_id' => $category->id]);
        $response = $this->get($searchUrl);
        $response->assertSee('testlolkek');

        Article::destroy($article->id);
        Category::destroy($category->id);
    }
}

