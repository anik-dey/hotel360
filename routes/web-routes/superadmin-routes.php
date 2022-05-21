<?php
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
//Controller
    Route::get('system/controller', [SuperadminController::class, 'controller'])->name('controller');
    Route::get('superadmin/business', [SuperadminController::class, 'super_business'])->name('superadmin.business');
    Route::get('superadmin/business/edit', [SuperadminController::class, 'super_business_edit'])->name('superadmin.business.edit');
    Route::get('superadmin/subscription', [SuperadminController::class, 'subscriptions'])->name('subscriptions');
    Route::get('superadmin/packages', [SuperadminController::class, 'packages'])->name('packages');
    Route::get('superadmin/settings', [SuperadminController::class, 'settings'])->name('settings');
    Route::get('superadmin/communicator', [SuperadminController::class, 'communicator'])->name('communicator');
});
