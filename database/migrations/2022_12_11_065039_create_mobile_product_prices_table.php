<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_product_prices', function (Blueprint $table) {
            $table->id();
            $table->string('color')->nullable();
            $table->string('capacity')->nullable();
            $table->string('type_price')->default('comptant');
            $table->float('price');
            $table->float('price_start')->nullable()->comment("Si Typeprice = FLY");
            $table->float('opt_achat_price')->nullable()->comment("Si Typeprice = FLY");
            $table->integer('qte')->default(0);
            $table->integer('qte_alert')->default(0);

            $table->foreignId('mobile_product_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_product_prices');
    }
};
