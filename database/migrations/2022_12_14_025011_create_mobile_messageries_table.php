<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_messageries', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->time('duration');
            $table->string('link_message');
            $table->timestamps();

            $table->foreignId('mobile_line_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_messageries');
    }
};
