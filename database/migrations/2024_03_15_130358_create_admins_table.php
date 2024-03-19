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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('adm_id');
            $table->string('adm_username')->unique();
            $table->string('adm_name');
            $table->string('adm_email')->nullable();
            $table->bigInteger('adm_phone')->nullable();
            $table->string('adm_present_address')->nullable();
            $table->string('adm_permanent_address')->nullable();
            $table->string('adm_city')->nullable();
            $table->string('adm_state')->nullable();
            $table->integer('adm_pincode')->nullable();
            $table->tinyInteger('adm_role')->nullable();
            $table->longText('adm_password');
            $table->timestamp('adm_last_login');
            $table->tinyInteger('adm_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
