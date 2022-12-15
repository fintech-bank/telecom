<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('particulier');
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->string('societe')->nullable();
            $table->timestamp('date_naissance')->nullable();
            $table->string('dep_naissance');
            $table->string('ville_naissance')->nullable();
            $table->string('number_contact');

            $table->string('adresse');
            $table->string('comp_adresse')->nullable();
            $table->string('code_postal');
            $table->string('ville');

            $table->boolean('tos_communicate')->default(true);
            $table->boolean('tos_commercial')->default(false);
            $table->string('status')->default('pending');

            $table->integer('customer_fintech_id')->nullable();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
