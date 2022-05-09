<?php

namespace App\Alerts;

class Alert
{
    public function set($alert, $message)
    {
        session()->flash($alert, $message);
    }
}
