<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    /**
     * Class for alert facades
     *
     * @return string|void
     */
    public static function getFacadeAccessor()
    {
        return \App\Alerts\Alert::class;
    }
}
