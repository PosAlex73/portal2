<?php

namespace App\Courses\Php;

use App\Courses\Course;
use App\Enums\Tasks\TaskTypes;
use App\Tasks\Practice;
use App\Tasks\Test;
use App\Tasks\Theory;
use Illuminate\Support\Collection;

class ArraysCourse extends Course
{
    public static $course_id = 'array_basic';

    public static function assignTasks(): Collection
    {
        return collect([
            'task1' => fn () => new Theory(),
            'task2' => fn() => new Test(),
            'task3' => fn () => new Practice(),
            'task4' => fn () => new Theory(),
            'task5' => fn() => new Test(),
            'task6' => fn () => new Practice(),
            'task7' => fn () => new Theory(),
            'task8' => fn() => new Test(),
            'task9' => fn () => new Practice(),
            'task10' => fn () => new Theory(),
            'task11' => fn() => new Test(),
            'task12' => fn () => new Practice(),
        ]);
    }
}
