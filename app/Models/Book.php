<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Table name not the default
    protected $table = 'Book';
    
    // Database connection not the default
    protected $connection = 'mysql_mississipy';

    // Primary Key not the default
    protected $primaryKey = null;
    public $incrementing = false;
    
    // No extra columns
    public $timestamps = false;
}
