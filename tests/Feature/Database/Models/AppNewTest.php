<?php

namespace Tests\Feature\Database\Models;

use App\Models\AppNew;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppNewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $news = AppNew::factory()->create();
        $this->assertModelExists($news);
        $news->delete();
        $this->assertModelMissing($news);
    }
}
