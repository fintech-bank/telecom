<?php

namespace App\Enums;

enum PaymentConditionEnum: string
{
    case Immediat = "immediat";
    case Quinzaine = "15 jours";
    case Trentaine = "30 jours";
    case Quarantaine = "45 jours";
    case Bimensuel = "2 mois";
    case Endmensuel = "Fin de mois suivante";
}
