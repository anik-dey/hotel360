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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->references('id')->on('properties');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->string('profession')->nullable();
            $table->string('nid')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('visa_no')->nullable();
            $table->string('desh')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('landmark')->nullable();
            $table->string('image')->nullable();
            $table->string('passport_attach')->nullable();
            $table->string('visa_attach')->nullable();
            $table->boolean('is_email_verify')->default(0);
            $table->boolean('is_phone_verify')->default(0);
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
        Schema::dropIfExists('guests');
    }
};
