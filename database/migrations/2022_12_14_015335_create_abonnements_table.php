<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->boolean('cancel_at_period_end')->default(false)->comment('Booléen indiquant si cet abonnement doit être annulé à la fin de la période en cours.');
            $table->string('payment_method')->default('card');
            $table->timestamp('start_at')->default(now());
            $table->timestamp('end_at')->nullable();
            $table->string('recurrence')->default('mensuel');
            $table->string('status')->default('active');


            $table->foreignId('customer_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('abonnement_id')
                ->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abonnements');
    }
};
