<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_service_specs', function (Blueprint $table) {
            $table->id();
            $table->integer('call_hours');
            $table->integer('sms_count');
            $table->integer('mms_count');
            $table->integer('data_count');

            $table->foreignId('mobile_service_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_service_specs');
    }
};
