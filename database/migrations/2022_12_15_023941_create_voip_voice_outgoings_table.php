<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('voip_voice_outgoings', function (Blueprint $table) {
            $table->id();
            $table->timestamp('start_at');
            $table->timestamp('end_at');
            $table->string('number');
            $table->enum('type', ['issued', 'transfered']);
            $table->enum('destination', ['mobile', 'fixe', 'special']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('voip_voice_outgoings');
    }
};
