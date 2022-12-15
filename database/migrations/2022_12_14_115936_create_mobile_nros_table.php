<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_nros', function (Blueprint $table) {
            $table->id();
            $table->string('operator');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('commune')->nullable();
            $table->enum('status', ['active', 'inactive', 'broken'])->default('active');
            $table->timestamp('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_nros');
    }
};
