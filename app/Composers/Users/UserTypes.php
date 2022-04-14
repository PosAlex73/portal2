<?php

namespace App\Composers\Users;

use Illuminate\View\View;

class UserTypes
{
    public function compose(View $view)
    {
        $view->with('user_types', \App\Enums\Users\UserTypes::getAll());
    }
}
