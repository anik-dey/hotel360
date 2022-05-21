<?php
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DownloadFileController;
use Illuminate\Support\Facades\Route;

Route::get('download/{file_name}', [DocumentController::class, 'downloadFile']);
Route::middleware(['auth'])->group(function(){
Route::any('app/document', [DocumentController::class, 'document_add'])->name('document-add');
Route::get('app/document-expiry', [DocumentController::class, 'document_expiry'])->name('document-expiry');
//Route::get('download/{file_name}', [DocumentController::class, 'downloadFile']);
Route::delete('document-delete/{id}/{filename}', [DocumentController::class, 'document_delete'])->name('document-delete');
});