<?php

namespace Database\Seeders;

use App\Enums\MobileOfferTypeRemiseEnum;
use App\Models\Core\Mobile\MobileProductOffer;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MobileProductOfferSeeder extends Seeder
{
    public function run()
    {
        MobileProductOffer::insert([
            'name' => '100€ de bonus reprise',
            'type_remise' => MobileOfferTypeRemiseEnum::Reprise,
            'unit' => 'euro',
            'unit_value' => 100,
            'start_at' => Carbon::create(2022,11,17),
            'end_at' => Carbon::create(2023,1,3),
            'mobile_product_id' => 1
        ]);
    }
}
