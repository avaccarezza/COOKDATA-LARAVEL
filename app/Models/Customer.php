<?php

namespace App\Models;

use App\Models\Scopes\AvailableScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'customers';
    //optimiza la cantidad de consultas de la base de datos de forma global
    protected $with = [
        'images',
    ];
    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status',
    ];

    public function carts()
    {
        return $this->morphedByMany(Cart::class, 'productable')->withPivot('quantity');
    }
    public function orders()
    {
        return $this->morphedByMany(Order::class, 'productable')->withPivot('quantity');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function scopeAvailable($query){
        $query->where('status', 'Activo');
    }
    public function getTotalAttribute()
    {
        return $this->pivot->quantity * $this->price;
    }

     //se encarga de obtener los productos disponibles
     protected static function booted(): void
     {
         static::addGlobalScope(new AvailableScope);
     }
}
