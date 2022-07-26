<?php

namespace App\Courses\Php;

use App\Courses\Course;
use App\Enums\Tasks\TaskTypes;
use Illuminate\Support\Collection;

class ArraysCourse extends Course
{
    public static function assignTasks(): Collection
    {
        return collect([
            'task1' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
            ],
            'task2' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
            ],
            'task3' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
            ],
            'task4' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
            ],
            'task5' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
            ],
            'task6' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
            ],
            'task7' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
            ],
            'task8' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
            ],
            'task9' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
            ],
            'task10' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
            ],
            'task11' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
            ],
            'task13' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
            ]
        ]);
    }
}
