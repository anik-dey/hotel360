<?php

use App\Http\Controllers\Configuration\Notice\NoticeController;
use Illuminate\Support\Facades\Route;

Route::prefix('configuration/notice')->middleware(['auth'])->group(function(){
    Route::resource('notice', NoticeController::class);
});
