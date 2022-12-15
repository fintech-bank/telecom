<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('telecom_sms_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('provider_job_title');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telecom_sms_offers');
    }
};
