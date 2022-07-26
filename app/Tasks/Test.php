<?php

namespace App\Tasks;

use Illuminate\Support\Collection;

abstract class Test
{
    abstract function getQuestions(): Collection;
    abstract function getAnswer(): int;

    public function checkAnswer(int $user_answer): bool
    {
        $right_answer = $this->getAnswer();

        return $right_answer === $user_answer;
    }
}
