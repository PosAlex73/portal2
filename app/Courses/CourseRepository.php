<?php

namespace App\Courses;

use App\Enums\Courses\CourseCategories;

class CourseRepository
{
    protected iterable $course_types = [];
    protected iterable $courses;

    public function __construct(iterable $courses)
    {
        $this->course_types = CourseCategories::getAll();
        $this->courses = $courses;
    }

    public function getCoursesByCategory(string $category)
    {

    }

    public function getCourseByName(string $name)
    {

    }

    public function getAllCourses(iterable $exclude = [])
    {

    }
}
