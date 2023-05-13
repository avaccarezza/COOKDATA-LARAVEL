<?php

namespace App\Models;

use App\Models\Scopes\AvailableScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    //optimiza la cantidad de consultas de la base de datos de forma global
   
    protected $fillable = [
        
        'customer',
    ];

    
    public function apps(){
        return $this->hasMany(App::class);
    }
   
    public function users()
    {
        return $this->belongsToMany(User::class,'customer_user');
    }
}
