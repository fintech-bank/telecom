<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('telecom_internet_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('synopsis')->nullable();
            $table->string('provider_job_title');
            $table->float('price')->default(0);
            $table->boolean('engage')->default(true);
            $table->integer('engage_duration')->default(12)->comment('en mois');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telecom_internet_offers');
    }
};
