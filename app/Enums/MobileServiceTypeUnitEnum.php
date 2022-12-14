<?php

namespace App\Enums;

enum MobileServiceTypeUnitEnum: string
{
    case Data = 'data';
    case Appel = 'call';
    case SMS = 'sms';
    case MMS = 'mms';
}
