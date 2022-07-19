<?php

namespace App\Courses;

use App\Enums\Courses\CourseCategories;
use App\Providers\PracticeCourseProvider;

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
        return $this->courses[$category] ?? [];
    }

    public function getCourseByName(string $name)
    {
        foreach ($this->courses as $category) {
            foreach ($category as $course) {
                if ($course::class === $name) {
                    return $course;
                }
            }
        }

        return null;
    }

    public function getAllCourses(iterable $exclude = [])
    {
        $courses = (array) $this->courses;

        return array_filter($courses, function ($item) use ($exclude) {
            return !in_array($item, $exclude);
        }, ARRAY_FILTER_USE_KEY);
    }
}
