<?php

namespace App\Tasks;

use App\Enums\Tasks\TaskTypes;

class Practice implements Atask
{
    public string $type = TaskTypes::PRACTICE;

    public function __construct(
        public int $points = 3
    ){}
}
