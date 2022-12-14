<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('telecom_voip_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('provider_job_title');
            $table->longText('page_description');
            $table->float('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telecom_voip_offers');
    }
};
