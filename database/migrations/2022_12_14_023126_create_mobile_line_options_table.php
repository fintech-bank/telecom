<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_line_options', function (Blueprint $table) {
            $table->id();
            $table->boolean('annuaire')->default(false);
            $table->boolean('surtaxe_number')->default(false);
            $table->boolean('mail_invoice')->default(true);
            $table->boolean('mail_invoice_number')->default(false);
            $table->boolean('block_plan')->default(false);
            $table->boolean('gplay_invoice')->default(false);
            $table->boolean('four_lte')->default(true);
            $table->boolean('five_lte')->default(true);
            $table->boolean('ipvsix')->default(true);

            $table->foreignId('mobile_line_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_line_options');
    }
};
