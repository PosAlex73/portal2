<?php

namespace App\Providers;

use App\Courses\CourseRepository;
use App\Courses\Php\BasePhpCourse;
use App\Courses\Php\TypesCourse;
use App\Tasks\TasksRepository;
use Illuminate\Support\ServiceProvider;

class PracticeCourseProvider extends ServiceProvider
{
    protected static $courses = [
        'PHP' => [
            BasePhpCourse::class, TypesCourse::class
        ]
    ];

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

        $this->app->bind(CourseRepository::class, function() {
            return new CourseRepository(self::$courses);
        });
    }
}
