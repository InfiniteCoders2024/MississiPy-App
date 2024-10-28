<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $table = 'Operator';
    protected $connection = 'mysql_mississipy';
    public $timestamps = false;
    protected $fillable = [
        'firstname',
        'surname',
        'email',
        'password'
    ];
}
