<?php

namespace App\Enums;

enum CommentStatusEnum: string
{
    case Draft = "draft";
    case Published = "published";
    case Reviewd = "reviewd";
    case Archived = "archived";
}
