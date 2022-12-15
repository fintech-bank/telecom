<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('telecom_service_prices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telecom_service_prices');
    }
};
