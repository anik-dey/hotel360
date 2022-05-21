<?php
use App\Http\Controllers\Setting\AccountSettingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::post('account-setting-upload', [AccountSettingController::class, 'file_upload'])->name('account-setting-upload');
    Route::resource('account-setting', AccountSettingController::class);
    Route::post('api/fetch-username', [AccountSettingController::class, 'fetchUsername']);
    Route::post('api/fetch-email', [AccountSettingController::class, 'fetchEmail']);
    Route::post('account-setting-password', [AccountSettingController::class, 'password'])->name('account-setting-password');
    Route::post('account-setting-info', [AccountSettingController::class, 'info'])->name('account-setting-info');
});
