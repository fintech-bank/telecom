<?php

namespace Database\Seeders;

use App\Enums\MobileProductPriceTypePriceEnum;
use App\Models\Core\Mobile\MobileProductPrice;
use Illuminate\Database\Seeder;

class MobileProductPriceSeeder extends Seeder
{
    public function run()
    {
        MobileProductPrice::create([
            'mobile_product_id' => 1,
            'color' => 'mobile-black',
            'capacity' => '256',
            'type_price' => 'comptant',
            'price' => 1799.00,
        ]);

        MobileProductPrice::create([
            'mobile_product_id' => 1,
            'color' => 'mobile-black',
            'capacity' => '256',
            'type_price' => MobileProductPriceTypePriceEnum::Fly,
            'price' => 24.99,
            'price_start' => 1099,
            'opt_achat_price' => 100
        ]);
    }
}
