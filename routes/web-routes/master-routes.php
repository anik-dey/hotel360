<?php

use App\Http\Controllers\Configaration\MasterController;
use App\Http\Controllers\Configuration\Master\PayMethodController;
use App\Http\Controllers\Configuration\Master\ExtraChargeController;
use App\Http\Controllers\Configuration\Master\IdentityController;
use App\Http\Controllers\Configuration\Master\ReservasionController;
use App\Http\Controllers\Configuration\Master\MealPlanController;
use Illuminate\Support\Facades\Route;

Route::prefix('configuration/general')->middleware(['auth'])->group(function () {
    //Pay Method Related Route
 Route::resource('pay-method', PayMethodController::class);
 Route::get('deleted-pay-method', [PayMethodController::class, 'deleted_item'])->name('deleted-pay-method');
 Route::get('restore-pay-method/{id}', [PayMethodController::class, 'restore_item'])->name('pay-method-restore');
 Route::delete('force-delete-pay-method/{id}', [PayMethodController::class, 'force_delete_item'])->name('pay-method-force-delete');

   //Extra Charge Related Route
 Route::resource('extra-charge', ExtraChargeController::class);
 Route::get('deleted-extra-charge', [ExtraChargeController::class, 'deleted_item'])->name('deleted-extra-charge');
 Route::get('restore-extra-charge/{id}', [ExtraChargeController::class, 'restore_item'])->name('extra-charge-restore');
 Route::delete('force-delete-extra-charge/{id}', [ExtraChargeController::class, 'force_delete_item'])->name('extra-charge-force-delete');

   //Indentity Related Route
  Route::resource('identity-type', IdentityController::class);
  Route::get('deleted-identity-type', [IdentityController::class, 'deleted_item'])->name('deleted-identity-type');
  Route::get('restore-identity-type/{id}', [IdentityController::class, 'restore_item'])->name('identity-type-restore');
  Route::delete('force-delete-identity-type/{id}', [IdentityController::class, 'force_delete_item'])->name('identity-type-force-delete');

    //Reservation Related Route
 Route::resource('reservation-type', ReservasionController::class);
 Route::get('deleted-reservation-type', [ReservasionController::class, 'deleted_item'])->name('deleted-reservation-type');
 Route::get('restore-reservation-type/{id}', [ReservasionController::class, 'restore_item'])->name('reservation-type-restore');
 Route::delete('force-delete-reservation-type/{id}', [ReservasionController::class, 'force_delete_item'])->name('reservation-type-force-delete');

   //Meal Plan Related Route
 Route::resource('meal-plan', MealPlanController::class);
 Route::get('deleted-meal-plan', [MealPlanController::class, 'deleted_item'])->name('deleted-meal-plan');
 Route::get('restore-meal-plan/{id}', [MealPlanController::class, 'restore_item'])->name('meal-plan-restore');
 Route::delete('force-delete-meal-plan/{id}', [MealPlanController::class, 'force_delete_item'])->name('meal-plan-force-delete');

});

// Others
    Route::get('feedback', [MasterController::class, 'feedback'])->name('settings.feedback');
    Route::get('loyalty', [MasterController::class, 'loyalty'])->name('settings.loyalty');
