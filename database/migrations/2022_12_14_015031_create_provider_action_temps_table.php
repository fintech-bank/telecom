<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('provider_action_temps', function (Blueprint $table) {
            $table->id();
            $table->string('provider_job_title');
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreignId('devis_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provider_action_temps');
    }
};
