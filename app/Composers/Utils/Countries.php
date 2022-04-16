<?php

namespace App\Composers\Utils;

use Illuminate\View\View;

class Countries
{
    public function compose(View $view)
    {
        $view->with('countries', \App\Utils\Countries::getCountiesList());
    }
}
