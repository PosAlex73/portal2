<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method get($setting)
 */
class Set extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \App\Settings\Set::class;
    }
}
