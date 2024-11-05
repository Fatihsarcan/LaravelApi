<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\apiverialma;
use Illuminate\Contracts\Validation\Validator;
class ApiProjesi extends Controller
{
    function creat(Request $rq)
    {
       $rq->validate([
            'sertifikaNo'=>'required|min:5',
            'isim'=>'required|string|min:2',
            'Soyisim'=>'required|string|min:2',
          
        ]);
         function failedValidation(Validator $validator)
        {
            throw new HttpResponseException(response()->json([
                'success'   => false,
                'message'   => 'Validation errors',
                'data'      => $validator->errors()
            ]));
        }  
      
       $apiprojesi = Apiverialma::create([
            'sertifikaNo'=>$rq->sertifikaNo,
            'isim'=>$rq->isim,
            'Soyisim'=>$rq->Soyisim,
           
        ]);
        return "başarili";
       
    }
}
