<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_filtereds', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['incoming', 'outgoing']);
            $table->string('number')->nullable();
            $table->boolean('all_number')->default(false);
            $table->json('hourly')->nullable();
            $table->boolean('all_hourly')->default(false);
            $table->json('daily')->nullable();
            $table->boolean('all_daily')->default(false);
            $table->enum('cible', ['call', 'sms_mms']);
            $table->enum('action', ['authorised', 'rejected', 'redirect']);


            $table->foreignId('mobile_service_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_filtereds');
    }
};
