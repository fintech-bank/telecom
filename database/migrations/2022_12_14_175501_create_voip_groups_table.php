<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('voip_groups', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('status', ['enable', 'closed', 'deleted', 'expired'])->default('enable');

            $table->timestamps();

            $table->foreignId('customer_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voip_groups');
    }
};
