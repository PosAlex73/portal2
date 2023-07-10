<?php

namespace App\Achievements;

use App\Models\Article;
use App\Models\Category;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testArticle()
    {
        $category = Category::factory()->create();
        $article = Article::factory()->create(['category_id' => $category->id]);
        $this->assertModelExists($category);
        $this->assertModelExists($article);
        $article->delete();
        $category->delete();
        $this->assertModelMissing($article);
        $this->assertModelMissing($category);
    }
}
