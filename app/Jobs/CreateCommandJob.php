<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateCommandJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function handle()
    {
        /**
         * On crée la commande si le devis est validé par le client et on envoie la commande par email
         * Concernant la commande
         * - Une fois éditer
         * - Création du lien de paiement: https://payment.fintech.ovh/payment/{order_reference}?token={order_reference+customer_identifiant}
         * - Notification au client
         */
    }
}
