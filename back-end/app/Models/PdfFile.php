<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PdfFile extends Model
{
    protected $table="pdf_files";
    protected $fillable = [
        'file_name',
        'file_path',
        'sertifikaNo',
        'isim',
        'soyisim'
    ];
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
