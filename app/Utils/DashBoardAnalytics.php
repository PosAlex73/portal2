<?php

namespace App\Utils;

use App\Utils\Alanytics\Courses;
use App\Utils\Alanytics\Orders;
use App\Utils\Alanytics\Pcourses;
use App\Utils\Alanytics\Users;
use Illuminate\Support\Collection;

class DashBoardAnalytics
{
    public static function getAnalytics(): Collection
    {
        return collect([
            'courses' => new Courses(),
            'pcourses' => new Users(),
            'orders' => new Orders(),
            'users' => new Pcourses()
        ]);
    }
}
