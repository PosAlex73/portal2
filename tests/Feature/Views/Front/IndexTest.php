<?php

namespace Tests\Feature\Views\Front;

use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
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
        $response = $this->get(route('front.index'));
        $response->assertStatus(200);
        $heroText = Set::get(SettingTypes::MAIN_HERO);
    }
}
