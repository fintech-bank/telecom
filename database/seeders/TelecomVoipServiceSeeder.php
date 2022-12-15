<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomVoipService;
use Illuminate\Database\Seeder;

class TelecomVoipServiceSeeder extends Seeder
{
    public function run()
    {
        TelecomVoipService::create([
            "telecom_voip_offer_id" => 1,
            "reception_phone" => false,
            "sim_calls" => false,
            "redirect_call" => true,
            "filter_call" => true,
            "svi" => false,
            "show_number" => true,
            "share_contact" => false,
            "restricted_call" => true,
            "mask_number" => true,
            "messagerie" => true,
            "restricted_ip" => true,
            "diagnosis_line" => true,
            "portability_number" => true,
            "security_deposit" => false
        ]);

        TelecomVoipService::create([
            "telecom_voip_offer_id" => 2,
            "reception_phone" => true,
            "sim_calls" => true,
            "redirect_call" => true,
            "filter_call" => true,
            "svi" => true,
            "show_number" => true,
            "share_contact" => true,
            "restricted_call" => true,
            "mask_number" => true,
            "messagerie" => true,
            "restricted_ip" => true,
            "diagnosis_line" => true,
            "portability_number" => true,
            "security_deposit" => true
        ]);

        TelecomVoipService::create([
            "telecom_voip_offer_id" => 3,
            "reception_phone" => true,
            "sim_calls" => true,
            "redirect_call" => true,
            "filter_call" => true,
            "svi" => true,
            "show_number" => true,
            "share_contact" => true,
            "restricted_call" => true,
            "mask_number" => true,
            "messagerie" => true,
            "restricted_ip" => true,
            "diagnosis_line" => true,
            "portability_number" => true,
            "security_deposit" => true
        ]);
    }
}
