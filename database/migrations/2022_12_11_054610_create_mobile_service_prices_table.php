<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_service_prices', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            $table->string('unit')->default('forfait')->comment("minute: tarif à la minute / heure: tarif à l'heure utilisé (post 1 minute) / Forfait: Tarif unique / mo: data consommé");
            $table->string('type_unit')->nullable()->comment('data,call,sms,mms');
            $table->boolean('restricted_by_package')->default(false);

            $table->foreignId('mobile_service_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_service_prices');
    }
};
