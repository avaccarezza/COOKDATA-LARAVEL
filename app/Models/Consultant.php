<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $table = "consultants";
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'user_id',
        'customer_id',
     
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
public function customer()
{
    return $this->belongsTo(Customer::class);
}
}
