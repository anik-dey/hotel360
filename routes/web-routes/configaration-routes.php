<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Configaration\HouseKeepingController;
use App\Http\Controllers\Configaration\MasterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
// //Floor List
//     Route::resource('app/floor-list', [FloorController::class, 'index'])->name('floor-list');

//House Keeping

    Route::get('app/assign-room', [BaseController::class, 'assign_room'])->name('assign-room');
    // Route::get('app/checklist', [HouseKeepingController::class, 'checklist'])->name('checklist');
    // Route::get('app/unit', [HouseKeepingController::class, 'unit'])->name('unit');
    // Route::get('app/status', [HouseKeepingController::class, 'status'])->name('status');
    // Route::get('app/remarks', [HouseKeepingController::class, 'remarks'])->name('remarks');


// Master // Email Template
    Route::get('app/email-temp/temp-category', [MasterController::class, 'temp_category'])->name('email-temp.temp-category');
    Route::get('app/email-template', [MasterController::class, 'template'])->name('app.email-template');

// Master // Guest Preferences
    Route::get('app/guest-prefer/prefer-type', [MasterController::class, 'prefer_type'])->name('guest-prefer.prefer-type');
    Route::get('app/guest-prefer/prefererences', [MasterController::class, 'prefererences'])->name('guest-prefer.prefererences');

// Master // Reasons
    Route::get('app/reasons/reason', [MasterController::class, 'reason'])->name('reasons.reason');
    Route::get('app/reasons/blacklist-reason', [MasterController::class, 'blacklist_reason'])->name('reasons.blacklist-reason');

// Holidays
    Route::get('app/holidays', [MasterController::class, 'holidays'])->name('holidays');

// Settings

// Notice
    // Route::get('app/notice', [MasterController::class, 'notice'])->name('notice');
});
