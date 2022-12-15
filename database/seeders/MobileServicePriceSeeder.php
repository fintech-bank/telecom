<?php

namespace Database\Seeders;

use App\Models\Core\Mobile\MobileServicePrice;
use Illuminate\Database\Seeder;

class MobileServicePriceSeeder extends Seeder
{
    public function run()
    {
        MobileServicePrice::create(['mobile_service_id' => 1, 'price' => 2.00, 'unit' => 'forfait']);
        MobileServicePrice::create(['mobile_service_id' => 1, 'price' => 0.05, 'unit' => 'minute', 'type_unit' => 'call']);
        MobileServicePrice::create(['mobile_service_id' => 1, 'price' => 0.05, 'unit' => 'mo', 'type_unit' => 'data']);

        MobileServicePrice::create(['mobile_service_id' => 2, 'price' => 14.90, 'unit' => 'forfait']);

        MobileServicePrice::create(['mobile_service_id' => 3, 'price' => 19.90, 'unit' => 'forfait']);

        MobileServicePrice::create(['mobile_service_id' => 4, 'price' => 9.90, 'unit' => 'forfait', 'restricted_by_package' => true]);
    }
}
