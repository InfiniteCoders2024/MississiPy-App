<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electronik extends Model
{
    use HasFactory;

    protected $table = 'Electronic';
    protected $connection = 'mysql_mississipy';

    protected $primaryKey = null;
    public $incrementing = false;
    
    public $timestamps = false;
    protected $fillable = ['serial_number', 'brand', 'model', 'spec_tec', 'type'];


    public function Product()
    {
        return $this->belongsTo(Product::class, 'id');
    }
}
