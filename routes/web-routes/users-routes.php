<?php

use App\Http\Controllers\User\VerificationController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->middleware(['auth'])->group(function(){
    Route::get('verification',[VerificationController::class, 'userVerificationForm'])->name('user.verification');
    Route::post('send-verification-code',[VerificationController::class, 'userVerificationCodeSend'])->name('users.send.verification.code');
    Route::get('verify-your-account',[VerificationController::class, 'userVerifyYourAccount'])->name('users.verify.your.account');
    Route::post('send-verify-my-account',[VerificationController::class, 'verifiedMyAccount'])->name('users.verify.my.account');
});

Route::middleware(['auth','isVerified'])->group(function(){
    //Users
    Route::get('app/all-users', [UserController::class, 'all_users'])->name('all-users');
    Route::post('app/all-users-pass-change/{id}', [UserController::class, 'all_users_pass_change'])->name('all-users-pass-change');
    Route::get('app/users-status-update/{id}', [UserController::class, 'users_status_update'])->name('users-status-update');
    Route::get('app/role-list', [UserController::class, 'role_list'])->name('role-list');
    Route::get('app/permission-setup', [UserController::class, 'permission_setup'])->name('permission-setup');
});
