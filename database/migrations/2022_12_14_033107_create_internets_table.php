<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('internets', function (Blueprint $table) {
            $table->id();
            $table->string('step_install')->default('ordering')->comment('ordering,validation,check,construct,shipping,active');
            $table->string('status')->default('active')->comment('active,inactive,canceled,broked');
            $table->timestamps();

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
        Schema::dropIfExists('internets');
    }
};
