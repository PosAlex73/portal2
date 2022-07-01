<?php

namespace App\Providers;

use App\Courses\CourseRepository;
use App\Courses\Php\BasePhpCourse;
use App\Courses\Php\TypesCourse;
use Illuminate\Support\ServiceProvider;

class PracticeCourseProvider extends ServiceProvider
{
    protected $courses = [
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
        $this->app->bind(CourseRepository::class, function() {
            return new CourseRepository($this->courses);
        });
    }
}
