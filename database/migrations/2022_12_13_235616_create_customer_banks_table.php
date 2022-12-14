<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('customer_banks', function (Blueprint $table) {
            $table->id();
            $table->string('bankname');
            $table->string('iban');
            $table->string('bic');

            $table->foreignId('customer_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_banks');
    }
};
