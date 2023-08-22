<?php

namespace App\Enums;

enum BlogStatusEnum: string
{
    case Draft = "draft";
    case Published = "published";
    case Reviewd = "reviewd";
    case Archived = "archived";

    // public function color(): string
    // {
    //     return match ($this) {
    //         self::Draft => 'grey',
    //         self::Published => 'green',
    //         self::Reviewd => 'blue',
    //         self::Archived => 'red',
    //     };
    // }

    // public function icon(): string
    // {
    //     return match ($this) {
    //         self::Draft => 'grey',
    //         self::Published => 'green',
    //         self::Reviewd => 'blue',
    //         self::Archived => 'red',
    //     };
    // }
}
