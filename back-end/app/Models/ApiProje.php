<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ApiProje extends Model
{
    use HasFactory;
    protected $table="bilgiler";
    protected $fillable = [
        'sertifikaNo',
        'ad',
        'soyAd',
        'pdf'
       
    ];
}
