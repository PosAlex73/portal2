<?php

namespace App\Tasks\Php\BasePhpCourse\Tests;

use App\Tasks\ATest;

class Test1 extends ATest
{
    public function checkAnswer($user_answer): bool
    {
        return true;
    }
}
