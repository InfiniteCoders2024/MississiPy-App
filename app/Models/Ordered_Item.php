<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordered_Item extends Model
{
    use HasFactory;

    protected $table = 'Ordered_Item';
    protected $connection = 'mysql_mississipy';
    public $timestamps = false;
    protected $fillable = ['quantity', 'price', 'vat_amount'];


    public function Order()
    {
        return $this->belongsTo(Order::class);
    }

    
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
