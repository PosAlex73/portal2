<?php

namespace App\Providers;

use App\Alerts\Alert;
use App\Courses\CourseStats;
use App\Models\Setting;
use App\Settings\Set;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        App::bind(Set::class, function ($app) {
            return new Set(Setting::all());
        });

        App::singleton(Alert::class, function () {
            return new Alert();
        });

        App::bind(CourseStats::class, function ($app, $params) {
            return new CourseStats($params['user_progress']);
        });
    }
}
