<?php

namespace App\Courses\Other;

use App\Courses\Course;
use App\Enums\Tasks\TaskTypes;
use App\Tasks\Theory;
use Illuminate\Support\Collection;

class DockerBasic extends Course
{

    public static string $course_id = 'docker_basic';

    public static function assignTasks(): Collection
    {
        return collect([
            'task1' => fn () => new Theory(),
            'task2' => fn () => new Theory(),
            'task3' => fn () => new Theory(),
            'task4' => fn () => new Theory(),
            'task5' => fn () => new Theory(),
            'task6' => fn () => new Theory(),
            'task7' => fn () => new Theory(),
            'task8' => fn () => new Theory(),
            'task9' => fn () => new Theory(),
            'task10' => fn() => new Theory(),
            'task11' => fn () => new Theory(),
            'task12' => fn () => new Theory(),
        ]);
    }
}
