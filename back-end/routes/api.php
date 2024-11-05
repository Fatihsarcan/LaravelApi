<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProjesi;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ApiPdfController;
use App\Http\Controllers\PDFApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/data',[ApiProjesi::class,'creat']);
//Route::post('/upload-pdff', [PdfController::class, 'uploadPdf']);
Route::post('/upload', [ApiPdfController::class, 'store']);
//Route::post('/upload', [PDFApiController::class, 'upload'])->name('api.pdf.upload');