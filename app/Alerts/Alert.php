<?php

namespace App\Alerts;

class Alert
{
    public static function set($alert, $message)
    {
        session()->flash($alert, $message);
    }
}
