<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('synopsis');
            $table->longText('description');
            $table->boolean('active')->default(true);
            $table->timestamp('disponibility')->nullable();
            $table->string('marque');
            $table->timestamps();

            $table->foreignId('mobile_category_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_products');
    }
};
