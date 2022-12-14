<?php

namespace App\Enums;

enum AddressTypeEnum: string
{
    case Facturation = "facturation";
    case Livraison = "livraison";
    case Personnel = "personnel";
    case Autre = "autre";
    case Relance = "relance";
}
