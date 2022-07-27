<?php

namespace App\Courses\Php;

use App\Courses\Course;
use App\Enums\Tasks\TaskTypes;
use App\Tasks\Php\ArrayCourse\Practice12;
use App\Tasks\Php\ArrayCourse\Practice3;
use App\Tasks\Php\ArrayCourse\Practice6;
use App\Tasks\Php\ArrayCourse\Practice9;
use App\Tasks\Php\ArrayCourse\Test11;
use App\Tasks\Php\ArrayCourse\Test2;
use App\Tasks\Php\ArrayCourse\Test5;
use App\Tasks\Php\ArrayCourse\Test8;
use App\Tasks\Practice;
use App\Tasks\Test;
use Illuminate\Support\Collection;

class ArraysCourse extends Course
{
    public static function assignTasks(): Collection
    {
        return collect([
            'task1' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
                'task' => null,
            ],
            'task2' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
                'class' => Test2::class
            ],
            'task3' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
                'class' => Practice3::class
            ],
            'task4' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
            ],
            'task5' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
                'class' => Test5::class
            ],
            'task6' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
                'class' => Practice6::class
            ],
            'task7' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
            ],
            'task8' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
                'class' => Test8::class
            ],
            'task9' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
                'class' => Practice9::class
            ],
            'task10' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
            ],
            'task11' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
                'class' => Test11::class
            ],
            'task13' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
                'class' => Practice12::class
            ]
        ]);
    }
}
