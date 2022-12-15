<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('telecom_nros', function (Blueprint $table) {
            $table->id();
            $table->string('id_ref')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('operator')->nullable();
            $table->string('name')->nullable();
            $table->string('ref-FR-PTT')->nullable();
            $table->string('ref-FR-Orange')->nullable();
            $table->string('street_cabinet')->nullable();
            $table->string('description')->nullable();
            $table->string('osm_timestamp')->nullable();
            $table->enum('status', ['active', 'inactive', 'broken'])->default('active');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telecom_nros');
    }
};
