<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apiverialma extends Model
{
    use HasFactory;
    protected $table="apiverialmas";
    protected $fillable = [
        "sertifikaNo",
        "isim",
        "Soyisim",
        "crated_at",
        "updated_at"
        
       
    ];
}
