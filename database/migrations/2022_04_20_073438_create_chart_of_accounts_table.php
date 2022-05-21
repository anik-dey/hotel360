<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('chart_of_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_no')->nullable();
            $table->string('name');
            $table->foreignId('property_id')->references('id')->on('properties')->constraned()->onDelete('cascade');
            $table->string('opening_balance')->nullable();
            $table->string('parent_ac_id')->nullable();
            $table->string('deposit')->default('0');
            $table->string('withdraw')->default('0');
            $table->string('balance')->default('0');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('chart_of_accounts');
    }
};
