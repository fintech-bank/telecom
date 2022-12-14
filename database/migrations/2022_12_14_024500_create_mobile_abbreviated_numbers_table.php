<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_abbreviated_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->string('abbreviate');


            $table->foreignId('mobile_line_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_abbreviated_numbers');
    }
};
