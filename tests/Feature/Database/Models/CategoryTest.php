<?php

namespace Tests\Feature\Database\Models;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $category = Category::factory()->create();

        $article = Article::factory()->create([
            'category_id' => $category->id
        ]);

        $this->assertModelExists($category);
        $this->expectException(\Exception::class);

        $category->delete();
        $article->delete();
        $category->delete();
    }
}
