<?php

namespace App\Enums;

use App\Enums\BaseEnum;

enum TagStatusEnum: string
{
    use BaseEnum;
    
    case Draft = "draft";
    case Published = "published";
    case Archived = "archived";
}
