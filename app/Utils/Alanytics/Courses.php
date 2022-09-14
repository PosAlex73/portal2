<?php

namespace App\Utils\Alanytics;

use App\Models\Course;
use App\Utils\AnalyticItem;

class Courses extends AnalyticItem
{
    public const CLASS_NAME = Course::class;

    public function __construct()
    {
        parent::__construct();
    }

    function getTitle(): string
    {
        return __('vars.courses');
    }

    function getListLink(): string
    {
        return route('courses.index');
    }
}
