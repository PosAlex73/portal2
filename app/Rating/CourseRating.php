<?php

namespace App\Rating;

use App\Models\UserProgress;

class CourseRating
{
    public const RATING_PAGE = 100;

    public function __construct(protected UserProgress $progress)
    {

    }
}
