<?php

// use App\Http\Controllers\GuestController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Guest\WakeUpController;
use App\Http\Controllers\Guest\GuestDetailController;
use App\Http\Controllers\Guest\SearchController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
//Guest
Route::resource('guest', GuestController::class);
Route::get('guest-view/{id}',[GuestController::class,'view'])->name('view');
Route::get('check-client', [GuestController::class, 'check_client'])->name('check-client');
Route::resource('wakeup-list', WakeUpController::class);
Route::resource('guest-detail', GuestDetailController::class);
Route::post('guest-search',[SearchController::class,'search_result'])->name('guest-search');
});
