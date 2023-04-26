<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $table = 'apps';
    //optimiza la cantidad de consultas de la base de datos de forma global
   
    protected $fillable = [
        
        'app',
        'type_of_app',
        'path',
        'customer_id',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'app_user');
    }
}
