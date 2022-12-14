<?php

namespace App\Enums\Vente;

enum AbonnementStatusEnum: string
{
    /**
     * - Incomplete si le paiement initial echoue
     * - Active si le paiement initial reussi
     * - Incomplete expired si le paiement initial dépasse les 23 heures
     * - Si un paiement echoue une première fois unpaid
     * - Si un paiement echoue de manière repeter canceled
     * - Active dans tous les autres cas
     */
    case Active = 'active';
    case Pastdue = 'past_due';
    case Unpaid = 'unpaid';
    case Canceled = 'canceled';
    case Incomplete = 'incomplete';
    case IncompleteExpired = 'incomplete_expired';
    case Trialing = 'trialing';
}
