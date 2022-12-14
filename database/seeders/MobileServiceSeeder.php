<?php

namespace Database\Seeders;

use App\Models\Core\Mobile\MobileService;
use Illuminate\Database\Seeder;

class MobileServiceSeeder extends Seeder
{
    public function run()
    {
        MobileService::create(["mobile_category_id" => 1, "name" => "Forfait Mobile 2€", "description" => "Le forfait à prix mini. Il a tout changé, mais pas son prix."]);
        MobileService::create(["mobile_category_id" => 1, "name" => "Forfait Mobile 100Go", "description" => "Le forfait mobile à prix malin avec un max de data."]);
        MobileService::create(["mobile_category_id" => 1, "name" => "Forfait Mobile 200Go", "description" => "Toujours plus, toujours au même prix."]);
        MobileService::create(["mobile_category_id" => 1, "name" => "Forfait Mobile Illimité", "description" => "Toujours plus, toujours au même prix."]);
    }
}
