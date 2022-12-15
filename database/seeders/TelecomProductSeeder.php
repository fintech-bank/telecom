<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomProduct;
use Illuminate\Database\Seeder;

class TelecomProductSeeder extends Seeder
{
    public function run()
    {
        TelecomProduct::create([
            "telecom_product_category_id" => 1,
            "name" => "Modem SagemCom FINTECT V1",
            "price" => 0,
            "garantie" => false,
            "active" => true
        ]);

        TelecomProduct::create([
            "telecom_product_category_id" => 1,
            "name" => "Décodeur SagemCom FINTECT V1",
            "price" => 0,
            "garantie" => true,
            "amount_garantie" => 50,
            "active" => true
        ]);
    }
}
