<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('voip_lines', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('country');
            $table->string('country_indicatif');
            $table->timestamp('next_invoice_at')->nullable();

            $table->string('sip_login');
            $table->string('sip_auth');
            $table->string('sip_password');
            $table->string('sip_domain');
            $table->string('sip_infra');
            $table->string('sip_ip_local');
            $table->string('sip_ip_public');

            $table->string('language')->default('France');
            

            $table->foreignId('voip_group_id')
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
        Schema::dropIfExists('voip_lines');
    }
};
