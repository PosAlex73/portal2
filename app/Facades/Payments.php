<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Payments extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \App\Settings\Set::class;
    }
}
