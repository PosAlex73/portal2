<?php

namespace App\View\Components\Admin;

use App\Enums\Settings\SettingTabs;
use App\Models\Setting;
use Illuminate\View\Component;

class Settings extends Component
{
    public $tabs;
    public $settings;
    public $settings_schema;
    public $selectable_types;
    public $file_types;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->tabs = SettingTabs::getAll();
        $this->tabSettings();
        $this->settings_schema = (array) \App\Settings\Settings::getSettings();
        $this->selectable_types = (array) \App\Settings\Settings::getSelectableTypes();
        $this->file_types = (array) \App\Settings\Settings::getFileTypes();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin.components.settings.settings');
    }

    private function tabSettings()
    {
        $all_settings = Setting::all();

        foreach ($this->tabs as $tab) {
            $this->settings[$tab] = [];
        }

        foreach ($all_settings as $setting) {
            $this->settings[$setting->tab][] = $setting;
        }
    }
}
