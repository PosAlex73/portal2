<?php

namespace App\Achievements\Achieves;

use App\Achievements\Achievement;
use Illuminate\Support\Collection;

class MakeProposal extends Achievement
{
    protected const VAR = 'make_proposal';

    public function checkCondition(Collection $data): bool
    {
        // TODO: Implement checkCondition() method.
    }
}
