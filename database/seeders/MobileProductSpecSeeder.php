<?php

namespace Database\Seeders;

use App\Models\Core\Mobile\MobileProductSpec;
use Illuminate\Database\Seeder;

class MobileProductSpecSeeder extends Seeder
{
    public function run()
    {
        MobileProductSpec::insert([
            'mobile_product_id' => 1,
            'nb_sim_port' => 3,
            'sim_port_support' => 'NanoSIM',
            'memoire' => 12000,
            'processor' => "Snapdragon8+ Gen1(SM8450) Processus de gravure 4nm",
            'os' => "Android 12",
            'weight' => '263g',
            'res_water' => true,
            'res_shock' => true,
            'res_dust' => true,
            'wifisix' => true,
            'nfc' => true,
            'screen_hdr' => true,
            'screen_res' => "2176 x 1812 pixels",
            'screen_tall' => '7.6"',
            'screen_type' => "Dynamic AMOLED",
            'photo_front' => "10Mpx",
            "photo_rear" => "50Mpx"
        ]);
    }
}
