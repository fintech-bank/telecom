<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('internet_options', function (Blueprint $table) {
            $table->id();
            $table->boolean('multitv')->default(false);
            $table->boolean('amazonprime')->default(false);
            $table->boolean('netflix')->default(false);
            
            $table->foreignId('internet_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('internet_options');
    }
};
