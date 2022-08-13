<?php

namespace App\Alerts;

class Alert
{
    public static function set($alert, $message)
    {
        session()->flash($alert, $message);
    }

    public static function flash($alert, $message)
    {
        session()->flash('flash.' . $alert, $message);
    }

    public static function error($error, $message)
    {
        session()->flash('error.' . $error, $message);
    }
}
