<?php

namespace App\Providers;

use App\Composers\Users\UserStatuses;
use App\Composers\Users\UserTypes;
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
    }
}
