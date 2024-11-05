<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PdfFile;

class ApiPdfController extends Controller
{
    public function store(Request $request)
    {   
          $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:5120', // Maksimum dosya boyutu 5MB
            'sertifikaNo' => 'required|string',
            'isim' => 'required|string',
            'soyisim' => 'required|string',
        ]);



        // Dosyanın var olup olmadığını kontrol et
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');

            // Dosya adı oluştur ve dosyayı storage'a kaydet
            $fileName = time() . '_' . $pdfFile->getClientOriginalName();
            $filePath = $pdfFile->storeAs('pdf_files', $fileName, 'public');

            // Veritabanına dosya yolunu kaydet
            $pdfRecord = new PdfFile();
            $pdfRecord->file_name = $fileName;
            $pdfRecord->file_path = '/storage/' . $filePath;
            $pdfRecord->sertifikaNo = $request->input('sertifikaNo');
            $pdfRecord->isim = $request->input('isim');
            $pdfRecord->soyisim = $request->input('soyisim');
            $pdfRecord->save();

            return response()->json(['message' => 'PDF başarıyla yüklendi ve kaydedildi!'], 200);
        }

        return response()->json(['message' => 'Dosya bulunamadı.'], 400);
    }
}