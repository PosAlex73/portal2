<?php

namespace App\Providers;

use App\Tasks\TasksRepository;
use Illuminate\Support\ServiceProvider;

class TaskProvider extends ServiceProvider
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
        $this->app->bind(TasksRepository::class, function () {
            return TasksRepository::class;
        });
    }
}
