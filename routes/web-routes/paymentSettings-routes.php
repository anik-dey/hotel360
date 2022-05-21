<?php

use App\Http\Controllers\Configuration\PaymentSettings\PaymentSettingsController;
use Illuminate\Support\Facades\Route;

Route::prefix('configuration/payment-gateway')->middleware(['auth'])->group(function(){
    Route::resource('payment-settings', PaymentSettingsController::class);
});
