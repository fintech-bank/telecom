<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('telecom_internet_services', function (Blueprint $table) {
            $table->id();
            $table->string('technology')->default('adsl')->comment("adsl,vdsl,fibre");
            $table->string('debit_desc');
            $table->string('debit_asc');
            $table->boolean('telephony')->default(false);
            $table->boolean('email')->default(false);
            $table->boolean('tv')->default(true);

            $table->foreignId('telecom_internet_offer_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('telecom_internet_services');
    }
};
