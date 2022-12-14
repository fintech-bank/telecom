<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomSipOffer;
use Illuminate\Database\Seeder;

class TelecomSipOfferSeeder extends Seeder
{
    public function run()
    {
        TelecomSipOffer::create([
            "nb_canal" => 5,
            "provider_job_title" => "TELECOM_SIP_TRUNK_5",
            "price" => 15
        ]);

        TelecomSipOffer::create([
            "nb_canal" => 10,
            "provider_job_title" => "TELECOM_SIP_TRUNK_10",
            "price" => 20
        ]);

        TelecomSipOffer::create([
            "nb_canal" => 20,
            "provider_job_title" => "TELECOM_SIP_TRUNK_20",
            "price" => 30
        ]);

        TelecomSipOffer::create([
            "nb_canal" => 50,
            "provider_job_title" => "TELECOM_SIP_TRUNK_50",
            "price" => 50
        ]);
    }
}
