<?php

namespace App\Utils\Alanytics;

use App\Models\PracticeCourse;
use App\Utils\AnalyticItem;

class Pcourses extends AnalyticItem
{
    public const CLASS_NAME = PracticeCourse::class;

    function getTitle(): string
    {
        return __('vars.pcourses');
    }

    function getListLink(): string
    {
        return route('pcourses.index');
    }
}
