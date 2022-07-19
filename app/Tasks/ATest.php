<?php

namespace App\Tasks;

abstract class ATest
{
    protected iterable $questions;
    protected string $user_answer;
    protected string $right_answer;

    abstract public function checkAnswer($user_answer): bool;
}
