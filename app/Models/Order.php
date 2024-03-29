<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'customer_id',
    ];
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function customers()
    {
        return $this->morphToMany(Customer::class, 'productable')->withPivot('quantity');
    }
    public function getTotalAttribute()
    {
        return $this->customers->pluck('total')->sum();
    }
}



