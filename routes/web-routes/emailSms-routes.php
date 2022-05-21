<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){

    //Email And Sms
    Route::get('app/send-bulk-sms', [NotificationController::class, 'send_bulk_sms'])->name('send-bulk-sms');
    Route::get('app/send-single-sms', [NotificationController::class, 'send_single_sms'])->name('send-single-sms');
    Route::get('app/sms-pannel', [NotificationController::class, 'sms_pannel'])->name('sms-pannel');
    Route::get('app/sms-template', [NotificationController::class, 'sms_template'])->name('sms-template');
    Route::get('email-template', [NotificationController::class, 'email_template'])->name('email-template');
    Route::get('app/sms-log', [NotificationController::class, 'sms_log'])->name('sms-log');
    Route::get('app/send-bulk-email', [NotificationController::class, 'send_bulk_email'])->name('send-bulk-email');
    Route::get('app/email-log', [NotificationController::class, 'email_log'])->name('email-log');
    Route::get('app/email-configaration', [NotificationController::class, 'email_configaration'])->name('email-configaration');

});
