<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('internet_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('micrologiciel')->default('1.2.0');
            $table->string('materiel')->default('SagemCom FIN r1');
            $table->macAddress();
            $table->string('serial_number');
            $table->timestamp('start_at')->nullable();
            $table->boolean('internet')->default(true);
            $table->boolean('authentification')->default(true);
            $table->boolean('telephone')->default(true);

            $table->enum('stat_connect', ['connected', 'disconnected', 'error']);
            $table->enum('type_connect', ['FTTH', 'VDSL2', 'ADSL2']);
            $table->ipAddress('ip_four');
            $table->string('receipt');
            $table->string('issue');



            $table->foreignId('internet_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('internet_boxes');
    }
};
