<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_product_specs', function (Blueprint $table) {
            $table->id();
            $table->integer('nb_sim_port');
            $table->string('sim_port_support');
            $table->string('memoire');
            $table->string('processor');
            $table->string('os');
            $table->string('weight');
            $table->boolean('res_water')->default(false);
            $table->boolean('res_shock')->default(false);
            $table->boolean('res_dust')->default(false);
            $table->boolean('wifisix')->default(false);
            $table->boolean('5GBand')->default(false);
            $table->boolean('4GBand')->default(false);
            $table->boolean('3GBand')->default(false);
            $table->boolean('nfc')->default(false);
            $table->boolean('screen_hdr')->default(false);
            $table->string('screen_res')->nullable();
            $table->string('screen_tall')->nullable();
            $table->string('screen_type')->nullable();
            $table->string('photo_front')->nullable();
            $table->string('photo_rear')->nullable();

            $table->foreignId('mobile_product_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_product_specs');
    }
};
