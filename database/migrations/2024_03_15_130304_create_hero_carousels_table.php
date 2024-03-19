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
        Schema::create('hero_carousels', function (Blueprint $table) {
            $table->id('hc_id');
            $table->string('hc_front_img');
            $table->string('hc_back_img');
            $table->string('hc_discount');
            $table->string('hc_title_sm');
            $table->string('hc_title_lg');
            $table->string('hc_description');
            $table->tinyInteger('hc_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_carousels');
    }
};
