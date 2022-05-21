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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->references('id')->on('properties')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->date('joining_date')->nullable();
            $table->string('employee_name');
            $table->date('dob')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('nid')->nullable();
            $table->string('gender');
            $table->string('mobile_number');
            $table->mediumText('address')->nullable();
            $table->string('designation')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('signature')->nullable();
            $table->string('user_role')->nullable();
            $table->Boolean('employee_status');
            $table->date('interview_date')->nullable();
            $table->double('security_money')->nullable();
            $table->double('basic_salary')->nullable();
            $table->double('house_rent')->nullable();
            $table->double('medical_allowance')->nullable();
            $table->double('convenience')->nullable();
            $table->double('transport_allowance')->nullable();
            $table->double('mobile_allowance')->nullable();
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
        Schema::dropIfExists('employees');
    }
};