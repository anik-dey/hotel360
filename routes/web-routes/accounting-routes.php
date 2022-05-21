<?php

use App\Http\Controllers\Accounting\ChartOfAccountController;
use Illuminate\Support\Facades\Route;

Route::prefix('accounting')->middleware(['auth'])->group(function () {
    Route::resource('chart-of-account', ChartOfAccountController::class);
});
