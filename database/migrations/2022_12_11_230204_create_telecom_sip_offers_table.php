<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('telecom_sip_offers', function (Blueprint $table) {
            $table->id();
            $table->integer('nb_canal');
            $table->string('provider_job_title');
            $table->float('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telecom_sip_offers');
    }
};
