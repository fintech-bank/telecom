<?php

namespace Database\Seeders;

use App\Models\Core\Mobile\MobileServiceSpec;
use Illuminate\Database\Seeder;

class MobileServiceSpecSeeder extends Seeder
{
    public function run()
    {
        MobileServiceSpec::create(["mobile_service_id" => 1, "call_hours" => 2, "sms_count" => 0, "mms_count" => 0, "data_count" => 500]);
        MobileServiceSpec::create(["mobile_service_id" => 2, "call_hours" => 0, "sms_count" => 0, "mms_count" => 0, "data_count" => 100000]);
        MobileServiceSpec::create(["mobile_service_id" => 3, "call_hours" => 0, "sms_count" => 0, "mms_count" => 0, "data_count" => 200000]);
        MobileServiceSpec::create(["mobile_service_id" => 4, "call_hours" => 0, "sms_count" => 0, "mms_count" => 0, "data_count" => 999999]);
    }
}
