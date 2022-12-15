<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomVoipOffer;
use Illuminate\Database\Seeder;

class TelecomVoipOfferSeeder extends Seeder
{
    public function run()
    {
        TelecomVoipOffer::create([
            "name" => "Découverte",
            "provider_job_title" => "TELECOM_SIP_DECOUVERT",
            "page_description" => "null",
            "price" => 0.99
        ]);

        TelecomVoipOffer::create([
            "name" => "Entreprise",
            "provider_job_title" => "TELECOM_SIP_ENTREPRISE",
            "page_description" => "null",
            "price" => 4.99
        ]);

        TelecomVoipOffer::create([
            "name" => "Full",
            "provider_job_title" => "TELECOM_SIP_FULL",
            "page_description" => "null",
            "price" => 14.99
        ]);
    }
}
