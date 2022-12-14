<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomServicePrice;
use Illuminate\Database\Seeder;

class TelecomServicePriceSeeder extends Seeder
{
    public function run()
    {
        TelecomServicePrice::create(["name" => "Frais de mise en service", "price" => 50]);
        TelecomServicePrice::create(["name" => "Conditions de résiliation à l’initiative du client", "price" => 45]);
        TelecomServicePrice::create(["name" => "Non restitution du modem", "price" => 99]);
        TelecomServicePrice::create(["name" => "Non restitution de l'ONT", "price" => 50]);
        TelecomServicePrice::create(["name" => "Frais d'installation SIP Trunk", "price" => 9.99]);
    }
}
