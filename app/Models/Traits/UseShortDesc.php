<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait UseShortDesc
{
    public function getShortDescriptionAttribute()
    {
        return Str::substr($this->description, 0 , 30) . '...';
    }
}
