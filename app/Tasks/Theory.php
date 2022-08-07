<?php

namespace App\Tasks;

use App\Enums\Tasks\TaskTypes;

class Theory implements ATask
{
    public string $type = TaskTypes::THEORY;

    public function __construct(
        public int $points = 1
    ){}
}
