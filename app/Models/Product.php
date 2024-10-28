<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Product';
    protected $connection = 'mysql_mississipy';

    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    public $timestamps = false;
    protected $fillable = [
        'quantity',
        'price',
        'vat',
        'score',
        'product_image',
        'active',
        'reason'
    ];


    public function OrderedItem()
    {
        return $this->hasMany(Ordered_Item::class);
    }


    public function Book()
    {
        return $this->hasMany(Book::class, 'product_id');
    }


    public function Electronik()
    {
        return $this->hasMany(Electronic::class, 'product_id');
    }
}
