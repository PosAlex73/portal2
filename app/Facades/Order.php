<?php

namespace App\Facades;

use App\Orders\OrderHandler;
use Illuminate\Support\Facades\Facade;

class Order extends Facade
{
    /**
     * Class for alert facades
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return OrderHandler::class;
    }
}
