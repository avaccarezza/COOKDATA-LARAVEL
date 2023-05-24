<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Scout\Searchable;

class App extends Model
{
    use HasFactory, Sortable, Searchable;
    protected $table = 'apps';
    
    public $sortable = ['app','type_of_app','path','customer.customer'];
   
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
//searchable
    public function toSearchableArray()
{
    return [
        'id' => (int) $this->id,
        'app' => $this->name,
        'type_of_app' => $this->email,
        'customer_id' => $this->customer_id,
     
    ];
}
//sort
    public $sortColumn;
    public $sortDirection;
    public $columns = [
        'id',
        'app',
        'type_of_app',
        'customer_id',
    ];
    public function sort($column)
    {
    $this->sortColumn = $column;
    $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
    }
}
