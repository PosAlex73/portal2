<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ImageHelper extends Facade
{
    public static function getFacadeAccessor()
    {
        return \App\Utils\ImageHelper::class;
    }
}
