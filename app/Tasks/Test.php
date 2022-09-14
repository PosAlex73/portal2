<?php

namespace App\Tasks;

use App\Enums\Tasks\TaskTypes;
use Illuminate\Support\Collection;

class Test implements ATask
{
    public string $type = TaskTypes::TEST;

    public function __construct(
        public int $points = 2
    ){}
}
