<?php

use App\Http\Controllers\Configuration\HouseKeeper\RemarksController;
use App\Http\Controllers\Configuration\HouseKeeper\StatusController;
use App\Http\Controllers\Configuration\HouseKeeper\UnitController;
use Illuminate\Support\Facades\Route;

Route::prefix('configuration/house-keeping')->middleware(['auth'])->group(function(){

    //Unit Related Route
    Route::resource('unit', UnitController::class);
    Route::get('deleted-unit', [UnitController::class, 'deleted_item'])->name('deleted-unit');
    Route::get('restore-unit/{id}', [UnitController::class, 'restore_item'])->name('unit-restore');
    Route::delete('force-delete-unit/{id}', [UnitController::class, 'force_delete_item'])->name('unit-force-delete');

    //Status Related Route
    Route::resource('status', StatusController::class);
    Route::get('deleted-status', [StatusController::class, 'deleted_item'])->name('deleted-status');
    Route::get('restore-status/{id}', [StatusController::class, 'restore_item'])->name('status-restore');
    Route::delete('force-delete-status/{id}', [StatusController::class, 'force_delete_item'])->name('status-force-delete');

    //Remark Related Route
    Route::resource('remarks', RemarksController::class);
    Route::get('deleted-remarks', [RemarksController::class, 'deleted_item'])->name('deleted-remarks');
    Route::get('restore-remarks/{id}', [RemarksController::class, 'restore_item'])->name('remarks-restore');
    Route::delete('force-delete-remarks/{id}', [RemarksController::class, 'force_delete_item'])->name('remarks-force-delete');
});
