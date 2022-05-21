<?php

use App\Http\Controllers\Superadmin\GuidelinesController;
use App\Http\Controllers\Superadmin\TopicsController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('guidelines-topic', TopicsController::class);
});
Route::resource('guidelines', GuidelinesController::class);