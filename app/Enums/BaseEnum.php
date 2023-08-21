<?php

namespace App\Enums;

trait BaseEnum
{
    public static function allValue(): array
    {
        return array_map(fn ($val) => $val->value, self::cases());
    }

    public static function allName(): array
    {
        return array_map(fn ($val) => $val->name, self::cases());
    }
}
