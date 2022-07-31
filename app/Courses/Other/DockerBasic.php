<?php

namespace App\Courses\Other;

use App\Courses\Course;
use App\Enums\Tasks\TaskTypes;
use Illuminate\Support\Collection;

class DockerBasic extends Course
{

    public static string $course_id = 'docker_basic';

    public static function assignTasks(): Collection
    {
        return collect([
            'task1' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task2' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task3' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task4' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task5' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task6' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task7' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task8' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task9' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task10' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task11' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
            'task12' => [
                'type' => TaskTypes::THEORY,
                'points' => 1
            ],
        ]);
    }
}
