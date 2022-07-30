<?php

namespace App\Courses\Php;

use App\Courses\Course;
use App\Enums\Tasks\TaskTypes;
use Illuminate\Support\Collection;

class zArraysCourse extends Course
{
    public static $course_id = 'array_basic';

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
                'variants' => [
                    __('vars.q_' . static::$course_id . '_1') => false,
                    __('vars.q_' . static::$course_id . '_2') => false,
                    __('vars.q_' . static::$course_id . '_3') => true,
                    __('vars.q_' . static::$course_id . '_4') => false,
                ],
            ],
            'task3' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
            ],
            'task4' => [
                'type' => TaskTypes::THEORY,
                'points' => 1,
                'variants' => [
                    __('vars.q_' . static::$course_id . '_1') => false,
                    __('vars.q_' . static::$course_id . '_2') => false,
                    __('vars.q_' . static::$course_id . '_3') => true,
                    __('vars.q_' . static::$course_id . '_4') => false,
                ],
            ],
            'task5' => [
                'type' => TaskTypes::TEST,
                'points' => 2,
                'variants' => [
                    __('vars.q_' . static::$course_id . '_1') => false,
                    __('vars.q_' . static::$course_id . '_2') => false,
                    __('vars.q_' . static::$course_id . '_3') => true,
                    __('vars.q_' . static::$course_id . '_4') => false,
                ],
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
                'variants' => [
                    __('vars.q_' . static::$course_id . '_1') => false,
                    __('vars.q_' . static::$course_id . '_2') => false,
                    __('vars.q_' . static::$course_id . '_3') => true,
                    __('vars.q_' . static::$course_id . '_4') => false,
                ],
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
                'variants' => [
                    __('vars.q_' . static::$course_id . '_1') => false,
                    __('vars.q_' . static::$course_id . '_2') => false,
                    __('vars.q_' . static::$course_id . '_3') => true,
                    __('vars.q_' . static::$course_id . '_4') => false,
                ],
            ],
            'task12' => [
                'type' => TaskTypes::PRACTICE,
                'points' => 3,
            ]
        ]);
    }
}
