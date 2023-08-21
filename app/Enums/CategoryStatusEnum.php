<?php

namespace App\Enums;

enum CategoryStatusEnum: string
{
    case Draft = "draft";
    case Published = "published";
    case Archived = "archived";
}
