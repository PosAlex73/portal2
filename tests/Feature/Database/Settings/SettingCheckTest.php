<?php

namespace Tests\Feature\Database\Settings;

use App\Enums\Settings\SettingTypes;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SettingCheckTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSettingsCheck()
    {
        $settings = SettingTypes::getAll();
        foreach ($settings as $setting) {
            $this->assertDatabaseHas('settings', [
                'title' => $setting
            ]);
        }
    }
}
