<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Table name not the default
    protected $table = 'Client';
    
    // Database connection not the default
    protected $connection = 'mysql_mississipy';
    
    // No extra columns
    public $timestamps = false;
}
