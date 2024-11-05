<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PdfUploadController;


Route::post('/upload-pdf', [PdfUploadController::class, 'uploadAndSendPdf'])->name('pdf.upload');
