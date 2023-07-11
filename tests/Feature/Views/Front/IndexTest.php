<?php

namespace Tests\Feature\Views\Front;

use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLanding()
    {
        $text = Set::get(SettingTypes::MAIN_HERO);
        $response = $this->get(route('front.index'));
        $response->assertStatus(200);
        $response->assertSee($text);
    }

    public function testGuestButtons()
    {
        $this->get(route('front.index'))
            ->assertSee(__('vars.sign_up'))
            ->assertSee(__('vars.register'));
    }

    public function testUserBarButtons()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('front.index'));
        $firstName = $user->first_name;
        $lastName = $user->lastName;
        $response->assertStatus(200)
            ->assertSee($firstName)
            ->assertSee($lastName);

        $user->delete();
    }
}
