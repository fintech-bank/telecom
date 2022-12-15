<?php

namespace App\Enums;

enum CustomerStatusEnum: string
{
    case Pending = 'pending';
    case Active = 'active';
    case Blocked = 'blocked';
}
