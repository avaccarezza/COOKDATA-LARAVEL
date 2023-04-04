<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function customers()
    {
        return $this->morphToMany(Customer::class, 'productable')->withPivot('quantity');
    }

    public function getTotalAttribute()
    {
        return $this->customers->pluck('total')->sum();
    }

}
