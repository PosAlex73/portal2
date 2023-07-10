<?php

namespace Tests\Feature\Database\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserCreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCreateAndDelete()
    {
        $user = User::factory()->create();
        $this->assertModelExists($user->profile);
        $this->assertModelExists($user->thread);
        $this->assertModelExists($user->settings);
        $user->delete();
        $this->assertModelMissing($user->profile);
        $this->assertModelMissing($user->thread);
        $this->assertModelMissing($user->settings);
    }
}
