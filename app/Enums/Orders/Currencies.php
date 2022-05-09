<?php

namespace App\Enums\Orders;

use App\Enums\Enumable;

class Currencies
{
    use Enumable;

    public const RUB = 'RUB';
    public const EURO = 'EUR';
    public const DOLLAR = 'USD';

    public static function getWithKeys()
    {
        return [
            self::RUB => __('vars.' . self::RUB),
            self::EURO => __('vars.' . self::EURO),
            self::DOLLAR => __('vars.' . self::DOLLAR),
        ];
    }

    public static function getDefault($with_key = false)
    {
        if (!$with_key) {
            return self::RUB;
        } else {
            return [self::RUB => __('vars.' . self::RUB)];
        }
    }
}
