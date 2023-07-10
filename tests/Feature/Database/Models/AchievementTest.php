<?php

namespace Tests\Feature\Database\Models;

use App\Models\Achievement;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AchievementTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create();
        $a = Achievement::factory()->create([
            'user_id' => $user->id
        ]);
        $this->assertModelExists($a);
        $a->delete();
        $this->assertModelMissing($a);
        $user->delete();
        $this->assertModelMissing($user);
    }
}
