<?php

namespace App\Enums;

enum MobileLineStatusEnum: string
{
    case Active = "active";
    case Inactive = "inactive";

    case Resilied = "resillier";
    case Error = "erreur";
}
