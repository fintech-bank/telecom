<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_line_services', function (Blueprint $table) {
            $table->id();
            $table->boolean('antispam_voice')->default(true);
            $table->boolean('antispam_voice_redirect')->default(true);
            $table->boolean('reject_anonymous_call')->default(true);
            $table->boolean('reject_anonymous_call_redirect')->default(true);
            $table->boolean('forwarding_abroad')->default(true);
            $table->boolean('protect_forwarding')->default(false);
            $table->boolean('absent_subscriber')->default(false);
            $table->boolean('abbreviated_numbers')->default(false)->comment('table');
            $table->boolean('filter_call_sms_mms')->default(false)->comment('table');


            $table->foreignId('mobile_line_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_line_services');
    }
};
