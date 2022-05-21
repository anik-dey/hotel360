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
        Schema::table('guests', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('amenities', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('beds', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('booking_sources', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('booking_types', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('chart_of_accounts', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('complementaries', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('currencies', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('designations', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('documents', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('extra_charges', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('floors', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('house_keepers', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('identities', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('meal_plans', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('notices', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('payment_settings', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('pay_methods', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('promocodes', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('remarks', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('reservasion_types', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('room_lists', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('statuses', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('units', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

        Schema::table('wakeups', function (Blueprint $table) {
            $table->string('created_by')->nullable()->after('created_at');
            $table->dateTime('updated_time')->nullable()->after('created_by');
            $table->string('updated_by')->nullable()->after('updated_time');
            $table->softDeletes()->after('updated_by');
            $table->string('deleted_by')->nullable()->after('deleted_at');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
            $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('amenities', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('beds', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('booking_sources', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
            $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('booking_types', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
            $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('chart_of_accounts', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('complementaries', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('currencies', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('designations', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('documents', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
            $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('extra_charges', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('floors', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('house_keepers', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('identities', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('meal_plans', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('notices', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('payment_settings', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('pay_methods', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('promocodes', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('remarks', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('reservasion_types', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('room_lists', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('statuses', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('units', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
             $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

        Schema::table('wakeups', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('updated_time');
            $table->dropColumn('updated_by');
            $table->dropSoftDeletes();
            $table->dropColumn('deleted_by');
        });

    }
};
