<?php

namespace App\Tasks\Php\ArrayCourse;

use App\Tasks\Test;
use Illuminate\Support\Collection;

class Test2 extends Test
{

    function getQuestions(): Collection
    {
        return collect([
            __('q.php_array_1_q'),
            __('q.php_array_2_q'),
            __('q.php_array_3_q'),
            __('q.php_array_4_q'),
        ]);
    }

    function getAnswer(): int
    {
        return 3;
    }
}
