<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFApiController extends Controller
{
    /**
     * Handle PDF upload request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function upload(Request $request)
    {
        // PDF dosyasını işleme
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:2048',
        ]);

        $file = $request->file('pdf');
        $path = $file->store('pdfs'); // PDF dosyasını depolama

        return response()->json(['path' => $path, 'message' => 'PDF uploaded successfully']);
    }
}