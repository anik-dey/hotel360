<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->references('id')->on('properties')->constrained()->onDelete('cascade');
            $table->string('email_verification')->default('0')->nullable();
            $table->string('guest_image')->default('0')->nullable();
            $table->string('nid')->default('0')->nullable();
            $table->string('foreigner_client_passport')->default('0')->nullable();
            $table->string('foreigner_client_passport_attachment')->default('0')->nullable();
            $table->string('foreigner_client_visa')->default('0')->nullable();
            $table->string('foreigner_client_visa_attachment')->default('0')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_settings');
    }
};
