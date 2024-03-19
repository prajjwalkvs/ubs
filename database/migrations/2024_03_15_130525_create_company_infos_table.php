<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id('com_id');
            $table->string('com_name');
            $table->string('com_email');
            $table->bigInteger('com_phone1');
            $table->bigInteger('com_phone2')->nullable();
            $table->time('com_open_time');
            $table->time('com_close_time');
            $table->string('com_week_start');
            $table->string('com_week_end');
            $table->string('com_reg_no')->nullable();
            $table->string('com_gst_no')->nullable();
            $table->string('com_address1')->nullable();
            $table->string('com_address2')->nullable();
            $table->string('com_country')->nullable();
            $table->string('com_state')->nullable();
            $table->string('com_city')->nullable();
            $table->string('com_web_address')->nullable();
            $table->integer('com_pincode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_infos');
    }
};
