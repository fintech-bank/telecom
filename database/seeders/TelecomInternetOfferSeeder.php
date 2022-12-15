<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomInternetOffer;
use Illuminate\Database\Seeder;

class TelecomInternetOfferSeeder extends Seeder
{
    public function run()
    {
        TelecomInternetOffer::create([
            'name' => "FINBOX Starter",
            "synopsis" => "La Fibre ultra-rapide et la dernière génération de Wi-Fi (Wi-Fi 6). Une nouvelle expérience TV.",
            "provider_job_title" => "FINBOX_START_LINE",
            "price" => 9.90,
            "engage" => true,
            "engage_duration" => 12
        ]);

        TelecomInternetOffer::create([
            'name' => "FINBOX GOLD",
            "synopsis" => "Le meilleur des Wi-Fi (Wi-Fi 6E) et la Fibre la plus rapide. Vos contenus favoris inclus et bien plus encore !",
            "provider_job_title" => "FINBOX_GOLD_LINE",
            "price" => 19.90,
            "engage" => true,
            "engage_duration" => 12
        ]);

        TelecomInternetOffer::create([
            'name' => "FINBOX PLATINE",
            "synopsis" => "La Fibre et un Wi-Fi rapides. De nombreuses chaînes TV et Replay inclus. Un disque dur intégré de 250Go.",
            "provider_job_title" => "FINBOX_PLATINE_LINE",
            "price" => 29.90,
            "engage" => true,
            "engage_duration" => 12
        ]);
    }
}
