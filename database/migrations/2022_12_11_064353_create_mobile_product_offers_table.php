<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_product_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type_remise');
            $table->string('unit')->default('percent');
            $table->string('unit_value');

            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();

            $table->foreignId('mobile_product_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_product_offers');
    }
};
