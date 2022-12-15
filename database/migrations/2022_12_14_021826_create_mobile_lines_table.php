<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_lines', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->time('communication_france')->default('00:00:00');
            $table->time('communication_ext')->default('00:00:00');
            $table->float('communication_hf_voix')->default(0);
            $table->string('status')->default('active');
            $table->string('puk_number', 8);

            $table->integer('nb_sms');
            $table->integer('nb_mms');
            $table->integer('nb_data');

            $table->foreignId('customer_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('abonnement_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_lines');
    }
};
