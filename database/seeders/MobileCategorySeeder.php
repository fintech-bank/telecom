<?php

namespace Database\Seeders;

use App\Models\Core\Mobile\MobileCategory;
use Illuminate\Database\Seeder;

class MobileCategorySeeder extends Seeder
{
    public function run()
    {
        MobileCategory::create(["name" => "Forfait"]);
        MobileCategory::create(["name" => "Service"]);
        MobileCategory::create(["name" => "Mobile"]);
        MobileCategory::create(["name" => "Accessoire"]);
    }
}
