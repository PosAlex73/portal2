<?php

namespace Tests\Feature\Database\Models;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleCommentTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $category = Category::find(1);
        $article = Article::factory()->create([
            'category_id' => $category->id
        ]);
        $user = User::factory()->create();
        $comment = $article->comments()->create([
            'user_id' => $user->id,
            'text' => $this->faker->text(200)
        ]);
        $this->assertModelExists($comment);
        $comment->delete();
        $this->assertModelMissing($comment);
        $user->delete();
        $article->delete();
    }
}
