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
        Schema::table('room_lists', function (Blueprint $table) {
            $table->double('ex_person_charge')->nullable()->after('bed_ex_charge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_lists', function (Blueprint $table) {
            $table->dropColumn('ex_person_charge');
        });
    }
};
