<?php

namespace App\Utils;

class ImageHelper
{
    public static function getImagePath($path)
    {
        return env('IMAGE_PATH') . $path;
    }
}
