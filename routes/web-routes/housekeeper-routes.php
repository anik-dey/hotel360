<?php

use App\Http\Controllers\HouseKeeping\HouseKeeperController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('house-keeper', HouseKeeperController::class);
    Route::get('house-keeper-update/{id}', [HouseKeeperController::class, 'houseKeeperUpdate']);
});
