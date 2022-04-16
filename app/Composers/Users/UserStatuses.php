<?php

namespace App\Composers\Users;

use Illuminate\View\View;

class UserStatuses
{
    public function compose(View $view)
    {
        $view->with('user_statuses', \App\Enums\Users\UserStatuses::getAll());
    }
}
