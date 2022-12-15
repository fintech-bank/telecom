<?php

namespace App\Enums\Vente;

enum DevisStatusEnum: string
{
    case Draft = "draft";
    case Pending = "pending";
    case Accepted = "accepted";
    case Refused = "refused";
    case Terminated = "terminated";
}
