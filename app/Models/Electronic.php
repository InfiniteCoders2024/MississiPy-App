<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electronic extends Model
{
    use HasFactory;

    protected $table = 'Electronic';
    protected $connection = 'mysql_mississipy';

    protected $primaryKey = 'product_id';
    protected $keyType = 'string';
    public $incrementing = false;
    
    public $timestamps = false;
    protected $fillable = [
        'serial_num',
        'brand',
        'model',
        'spec_tec',
        'type'
    ];


    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
