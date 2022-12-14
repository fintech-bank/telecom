<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('calendar_events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamp('start_at');
            $table->timestamp('end_at');
            $table->boolean('daily')->default(false);
            $table->time('rappel')->default(15);
            $table->string('lieu')->nullable();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_events');
    }
};
