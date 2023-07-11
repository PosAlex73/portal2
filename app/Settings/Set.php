<?php

namespace App\Settings;

use App\Models\Setting;
use Illuminate\Support\Collection;

class Set
{
    private Collection $settings;

    public function __construct(Collection $settings)
    {
        $this->settings = new Collection();
        foreach ($settings as $setting) {
            $this->settings->put($setting->title, $setting->value);
        }
    }

    public function getSettings()
    {
        return $this->settings;
    }

    public function get(string $setting)
    {
        return $this->settings->get($setting);
    }

    public function set(string $setting, mixed $value)
    {
        /** @var Setting $setting */
        $setting = Setting::where('title', $setting)->get();
        if (empty($setting)) {
            throw new \Exception('Setting not found');
        }

        $setting->update([
            'value' => $value
        ]);
    }
}
