<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'Client';
    protected $connection = 'mysql_mississipy';
    public $timestamps = false;
    protected $fillable = ['firstname', 'surname', 'email', 'password', 'address', 'zip_code', 'city', 'country',
    'phone_number','last_login', 'birthdate'];


    public function Orders()
    {
        return $this->hasMany(Order::class);
    }

    
    public function Recommendation()
    {
        return $this->hasMany(Recommendation::class);
    }
}
