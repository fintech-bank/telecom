<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('telecom_voip_services', function (Blueprint $table) {
            $table->id();
            $table->boolean('reception_phone')->default(false);
            $table->boolean('sim_calls')->default(false);
            $table->boolean('redirect_call')->default(false);
            $table->boolean('filter_call')->default(false);
            $table->boolean('svi')->default(false);
            $table->boolean('show_number')->default(false);
            $table->boolean('share_contact')->default(false);
            $table->boolean('restricted_call')->default(false);
            $table->boolean('mask_number')->default(false);
            $table->boolean('messagerie')->default(false);
            $table->boolean('restricted_ip')->default(false);
            $table->boolean('security_deposit')->default(false);
            $table->boolean('diagnosis_line')->default(false);
            $table->boolean('portability_number')->default(false);

            $table->foreignId('telecom_voip_offer_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('telecom_voip_services');
    }
};
