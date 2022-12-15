<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomSmsOffer;
use Illuminate\Database\Seeder;

class TelecomSmsOfferSeeder extends Seeder
{
    public function run()
    {
        TelecomSmsOffer::create(["name" => "100 sms", "price" => 6, "provider_job_title" => "TELECOM_SMS_100"]);
        TelecomSmsOffer::create(["name" => "1000 sms", "price" => 58, "provider_job_title" => "TELECOM_SMS_1000"]);
        TelecomSmsOffer::create(["name" => "10000 sms", "price" => 540, "provider_job_title" => "TELECOM_SMS_10000"]);
        TelecomSmsOffer::create(["name" => "50000 sms", "price" => 24500, "provider_job_title" => "TELECOM_SMS_50000"]);
        TelecomSmsOffer::create(["name" => "1 sms", "price" => 0.04, "provider_job_title" => "TELECOM_SMS_50000"]);
    }
}
