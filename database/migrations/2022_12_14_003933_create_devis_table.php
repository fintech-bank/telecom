<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->timestamp('expiration_at')->nullable();
            $table->timestamp('start_at')->nullable()->comment("Uniquement si abonnement");
            $table->string('recurrence')->nullable();
            $table->string('payment_condition')->default('immediat');
            $table->string('status')->default('draft');

            $table->timestamps();

            $table->foreignId('customer_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('devis');
    }
};
