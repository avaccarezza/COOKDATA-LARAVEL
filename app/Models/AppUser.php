<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $table = 'app_user';
    //optimiza la cantidad de consultas de la base de datos de forma global
   
    protected $fillable = [
        
        
    ];

   
}
