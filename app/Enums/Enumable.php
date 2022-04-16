<?php

namespace App\Enums;

trait Enumable
{
    public static function getAll()
    {
        $ref = new \ReflectionClass(__CLASS__);

        return $ref->getConstants();
    }

    public static function getKeysAsValues()
    {
        $ref = new \ReflectionClass(__CLASS__);

        return array_values($ref->getConstants());
    }
}
