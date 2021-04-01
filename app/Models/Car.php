<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = ['id', 'marca', 'modelo', 'valor_comercial', 'valor_alquiler_diario', 'disponible'];

    public static function validate(Request $request)
    {

        $request->validate([
            "id" => "required",
            "marca" => "required",
            "modelo" => "required",
            "valor_comercial" => "required|numeric|gt:0",
            "valor_alquiler_diario" => "required|numeric|gt:0",
            "disponible" => "required|bool",
        ]);

    }
    
}
