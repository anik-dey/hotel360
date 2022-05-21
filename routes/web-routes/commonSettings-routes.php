<?php

use App\Http\Controllers\Configuration\CommonSettings\CommonSettingsController;
use Illuminate\Support\Facades\Route;

Route::prefix('configuration')->middleware(['auth'])->group(function(){
    Route::resource('common-settings', CommonSettingsController::class);
    Route::get('{property_id}',[CommonSettingsController::class, 'show_data']);
});
