<?php

namespace Tests\Feature\Database;

use Database\Seeders\AppNewSeeder;
use Tests\TestCase;

class Appnew extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->seed(AppNewSeeder::class);
        $this->assertDatabaseCount('app_news', 200);
    }
}
