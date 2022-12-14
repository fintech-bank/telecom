<?php

namespace Database\Seeders;

use App\Models\Core\Telecom\TelecomProductCategory;
use Illuminate\Database\Seeder;

class TelecomProductCategorySeeder extends Seeder
{
    public function run()
    {
        TelecomProductCategory::create(["name" => "Box"]);
        TelecomProductCategory::create(["name" => "Téléphonie"]);
        TelecomProductCategory::create(["name" => "Logiciel"]);
        TelecomProductCategory::create(["name" => "Accessoire"]);
    }
}
