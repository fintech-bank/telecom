<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomInternetService;
use Illuminate\Database\Seeder;

class TelecomInternetServiceSeeder extends Seeder
{
    public function run()
    {
        TelecomInternetService::create([
            "telecom_internet_offer_id" => 1,
            "technology" => "adsl",
            "debit_desc" => "92Mb",
            "debit_asc" => "36Mb",
            "telephony" => true,
            "email" => true,
            "tv" => false,
        ]);

        TelecomInternetService::create([
            "telecom_internet_offer_id" => 2,
            "technology" => "adsl",
            "debit_desc" => "92Mb",
            "debit_asc" => "36Mb",
            "telephony" => true,
            "email" => true,
            "tv" => true,
        ]);

        TelecomInternetService::create([
            "telecom_internet_offer_id" => 3,
            "technology" => "fibre",
            "debit_desc" => "1Gb",
            "debit_asc" => "800Mb",
            "telephony" => true,
            "email" => true,
            "tv" => true,
        ]);
    }
}
