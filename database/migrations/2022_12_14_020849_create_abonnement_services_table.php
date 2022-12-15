<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('abonnement_services', function (Blueprint $table) {
            $table->id();
            $table->string('provider')->comment('internet,voip, mobile, sip, sms');
            $table->integer('provider_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('abonnement_services');
    }
};
