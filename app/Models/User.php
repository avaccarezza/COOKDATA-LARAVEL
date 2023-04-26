<?php

namespace App\Models;
use App\Models\App;
use App\Models\Customer;
use App\Models\Profile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Searchable, Sortable, SoftDeletes;
    
    protected $table = "users";
    public $sortable = ['id','name','email','customer_id','profile_id'];
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin_since',
        'consultant',
        'customer_id',
        'profile_id',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * The attributes that should be mutated to dates 
     */
    protected $dates = [
        'admin_since',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

    public function payments(){
        return $this->hasManyThrough(Payment::class, Order::class,'customer_id');
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //si el campo admin_since está seteado con valor menor a la fecha de hoy, el usuario es administrador
    //metodo de carbon
    public function isAdmin()
    {
        return $this->admin_since != null
            && $this->admin_since->lessThanOrEqualTo(now());
    }
    public function isConsultant()
    {
        return $this->consultant == 1;
    }
    public function isUser()
    {
        return $this->consultant == 0;
    }


    //hash de password
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
   //retorna ruta hacia la imagen
   public function getProfileImageAttribute(){
    return $this->image 
    ? "images/{$this->image->path}"
    : 'https://gravatar.com/avatar/404?d=mp';
   }
   public function toSearchableArray()
{
    return [
        'id' => (int) $this->id,
        'name' => $this->name,
        'email' => $this->email,
        'customer_id'=> $this->customer,
        'profile_id'=> $this->profile,
    ];
}
public function customer()
{
    return $this->belongsTo(Customer::class);
}
public function profile()
{
    return $this->belongsTo(Profile::class);
}
public function user(){
    return $this->hasOne(Consultant::class);
}

    public $sortColumn;
    public $sortDirection;
    public $columns = [
        'id',
        'name',
        'email',
    ];
    public function sort($column)
    {
    $this->sortColumn = $column;
    $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
    }

    public function apps()
    {
        return $this->belongsToMany(App::class, 'app_user');
    }
}

