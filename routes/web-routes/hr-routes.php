<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\HumanResource\DepartmentController;
use App\Http\Controllers\HumanResource\DesignationController;
use App\Http\Controllers\HumanResource\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::prefix('hr')->middleware(['auth'])->group(function () {
//Human Resource

    // Route::resource('sabbers', );
    Route::resource('departments', DepartmentController::class);
    Route::resource('designations', DesignationController::class);

});

Route::middleware(['auth'])->group(function () {

    // Route::get('app/department', [DepartmentController::class, 'index'])->name('department');
    // Route::post('app/department/create', [DepartmentController::class, 'create'])->name('department.create');
    // Route::post('app/department/update', [DepartmentController::class, 'update'])->name('department.update');
    // Route::delete('app/department-delete/{id}', [DepartmentController::class, 'destroy'])->name('department.delete');
    // Route::get('app/designation', [BaseController::class, 'hr_designation'])->name('hr-designation');

    //Employee Route
    Route::get('app/employee-list', [EmployeeController::class, 'hr_employee_list'])->name('hr-employee-list');
    Route::any('app/new-employee', [EmployeeController::class, 'hr_new_employee'])->name('hr-new-employee');
    Route::delete('app/employee-delete/{id}', [EmployeeController::class, 'employee_delete'])->name('hr-employee-delete');
    Route::any('app/employee-update', [EmployeeController::class, 'employee_update'])->name('hr-employee-update');
    Route::post('app/employee-store', [EmployeeController::class, 'employee_update_store'])->name('employee.store');

//User Create Route
    Route::get('app/panel/user/{id}', [EmployeeController::class, 'create_user'])->name('panel-user');
    Route::post('app/panel/user/store', [EmployeeController::class, 'store_user'])->name('panel-user-store');

    Route::get('app/leave', [BaseController::class, 'hr_leave'])->name('hr-leave');
    Route::get('app/leave-type', [BaseController::class, 'hr_leave_type'])->name('hr-leave-type');
    Route::get('app/salary-process', [BaseController::class, 'hr_salary_process'])->name('hr-salary-process');
    Route::get('app/report', [BaseController::class, 'hr_report'])->name('hr-report');
});