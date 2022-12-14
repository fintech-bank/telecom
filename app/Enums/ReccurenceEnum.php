<?php

namespace App\Enums;

enum ReccurenceEnum: string
{
    case Mensuel = "mensuel";
    case Trimestriel = "trimestriel";
    case Semestriel = "semestriel";
    case Annuel = "annuel";
}
