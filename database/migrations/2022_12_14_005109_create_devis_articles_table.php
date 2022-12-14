<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('devis_articles', function (Blueprint $table) {
            $table->id();
            $table->string('article');
            $table->string('description')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('unity')->default('unite');
            $table->float('subtotal_price')->nullable();
            $table->float('subtotal_taxe')->default(0);
            $table->float('subtotal_remise')->default(0);
            $table->float('total_price')->nullable();

            $table->foreignId('devis_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('devis_articles');
    }
};
