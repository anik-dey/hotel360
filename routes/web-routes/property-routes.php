<?php
use App\Http\Controllers\Configaration\SettingController;
use App\Http\Controllers\Configuration\PropertyController;
use Illuminate\Support\Facades\Route;

Route::prefix('configuration/settings')->middleware(['auth'])->group(function(){
    Route::resource('properties', PropertyController::class);
    // Route::controller(PropertyController::class)->group(function () {
    //     Route::resource('properties');
    // });
});
