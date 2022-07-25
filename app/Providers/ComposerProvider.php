<?php

namespace App\Providers;

use App\Composers\Courses\TaskData;
use App\Composers\Users\UserStatuses;
use App\Composers\Users\UserTypes;
use App\Composers\Utils\Countries;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['admin.users.edit', 'admin.users.create'], UserStatuses::class);
        View::composer(['admin.users.edit', 'admin.users.create'], UserTypes::class);
        View::composer(['admin.users.profile'], Countries::class);

        View::composer(['admin.tasks.*'], TaskData::class);
    }
}
