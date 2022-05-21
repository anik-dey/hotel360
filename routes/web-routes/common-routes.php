<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\CommonController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::middleware(['auth'])->group(function(){
//Dependency Dropdown
Route::post('api/fetch-states', [CommonController::class, 'fetchState']);
Route::post('api/fetch-cities', [CommonController::class, 'fetchCity']);
Route::post('api/fetch-thanas', [CommonController::class, 'fetchThana']);

//Email OTP verification
Route::any('verify-otp', [CommonController::class, 'verifyCodeShow'])->name('verify-otp');
Route::get('verify-show/{email}',[CommonController::class, 'verifyBladeShow'])->name('verify-show');
Route::any('otp-check', [CommonController::class, 'otpCheck'])->name('otp-check');

});

//Password Reset
Route::get('/forgot-password',[ForgotPasswordController::class, 'showForm'])->name('password-request');
Route::post('/forgot-password',[ForgotPasswordController::class, 'submitForm'])->name('password-post');
Route::get('/reset-password/{token}',[ForgotPasswordController::class, 'resetForm'])->name('password-reset');
Route::post('/reset-password',[ForgotPasswordController::class, 'resetSubmit'])->name('reset-post');
