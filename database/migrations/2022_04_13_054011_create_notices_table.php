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
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->references('id')->on('properties')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->longText('body')->nullable();
            $table->date('start_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->bigInteger('user_role')->nullable();
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
        Schema::dropIfExists('notices');
    }
};
