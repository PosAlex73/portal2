<?php

namespace App\Settings;

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
}
