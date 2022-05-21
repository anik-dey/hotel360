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
        Schema::create('room_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->references('id')->on('properties')->constrained()->onDelete('cascade');
            $table->foreignId('floor_id')->references('id')->on('floors')->constrained()->onDelete('cascade');
            $table->string('room_type');
            $table->double('rate');
            $table->double('bed_ex_charge')->nullable();
            $table->integer('capacity')->nullable();
            $table->boolean('extra_capacity')->default(0);
            $table->string('aminities')->nullable();
            $table->longText('room_description')->nullable();
            $table->longText('reseeve_condition')->nullable();
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
        Schema::dropIfExists('room_lists');
    }
};
