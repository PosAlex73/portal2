<?php

namespace App\Enums;

trait Enumable
{
    public static function getAll()
    {
        $ref = new \ReflectionClass(__CLASS__);

        return $ref->getConstants();
    }
}
