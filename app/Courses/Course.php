<?php

namespace App\Courses;

use App\Models\PracticeCourse;
use Illuminate\Support\Collection;

/**
 *
 */
abstract class Course
{
    private Collection $tasks;

    public function __construct(public PracticeCourse $course)
    {

    }

    public abstract static function assignTasks(): Collection;
}
