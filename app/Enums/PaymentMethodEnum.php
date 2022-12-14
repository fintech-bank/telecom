<?php

namespace App\Enums;

enum PaymentMethodEnum: string
{
    case Card = "card";
    case Virement = "virement";
    case Prelevement = "sepa";
}
