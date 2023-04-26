<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerSection extends Model
{
    use HasFactory;
    protected $table = "partners_section";
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'contacto',
        'empresa',
        'cargo',
        'provincia',
        'poblacion',
        'codigo_postal',
        'asunto',
        'mensaje',
        
    ];
}
